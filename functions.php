<?php
$mysqli = new mysqli("localhost", "u0131334_default", "h0j5GN_t", "u0131334_default");
$mysqli->set_charset("utf8");
$currentUser=-1;
function isLogin(){//для главного меню проверка
    global $currentUser;
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT id FROM tb_users WHERE session_id = ? and hash_session= ?");
    $stmt->bind_param("ss",$_COOKIE['sessionid'],$_COOKIE['arcid']);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id);
    if($stmt->num_rows >0){
        $stmt->fetch();
        $currentUser=$id;
        $stmt->close();
        return true;
    }
    else{
        $stmt->close();
        return false;
    }
}
/**
 * @param $login
 * @param $password
 * @return bool
 */
function Login($login, $password){//для кнопки sing in
    global $mysqli;
    $usrlogin=htmlspecialchars($login);
    $usrpass=htmlspecialchars($password);
    $stmt = $mysqli->prepare("SELECT pswhash FROM tb_users WHERE login = ?");
    $stmt->bind_param("s",$usrlogin);
    $stmt->execute();
    $stmt->store_result();
    $countRows=$stmt->num_rows;
    $stmt->bind_result($pswhash);
    if($countRows > 0){
         while($stmt->fetch()){
            if(password_verify($usrpass,$pswhash)){
                $new_ses_id=gensesid();
                $new_hash_session=gensesid();
                $stmt->close();
                $stmt = $mysqli->prepare("UPDATE tb_users SET session_id=?, hash_session=? WHERE login=?");
                $stmt->bind_param("sss",$new_ses_id,$new_hash_session,$usrlogin);
                $stmt->execute();
                $stmt->close();
                setcookie("sessionid", $new_ses_id, time()+60*60*24*30,"/","arcanone.com",0);
                setcookie("arcid", $new_hash_session, time()+60*60*24*30,"/","arcanone.com",0);
                return true;
            }
            else
            {
                $stmt->close();
                return false;
            }
        }

    }
    else{
        $stmt->close();
        return false;
    }

    return false;
}
function isRegistred($login,$email,$password,$name){// проверка при регистрации
    global $mysqli;
    $login=htmlspecialchars($login);
    $email=htmlspecialchars($email);
    $name=htmlspecialchars($name);

    $password=password_hash(trim(htmlspecialchars($password)),PASSWORD_DEFAULT);
    $stmt=$mysqli->prepare("SELECT id FROM tb_users WHERE login=? or email=?");
    $stmt->bind_param("ss",$login,$email);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows>0){
        $stmt->close();
        return false;
    }
    else
    {
        $stmt->close();
        $stmt=$mysqli->prepare("INSERT INTO tb_users SET login=?,email=?,pswhash=?,usrname=?");
        $stmt->bind_param("ssss",$login,$email,$password,$name);
        $stmt->execute();
        $stmt->store_result();
        $stmt->close();
        return true;

    }
}

function getApiList(){
    global $currentUser;
    global $mysqli;
    if(isLogin()){
        $stmt = $mysqli->prepare("SELECT api_key,domen FROM tb_api_key WHERE usr = ?");
        $stmt->bind_param("i",$currentUser);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($apikey,$domen);
        $data=array();
        $i=0;
        while($stmt->fetch()){
            $data[$i]=array("key"=>$apikey,"domen"=>$domen);
            $i+=1;
        }
        return json_encode($data);
    }else{
        return false;
    }
}
function getItems($catid)
{
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT price,count,name,disrc,full_disr FROM tb_items WHERE id_cat = ?");
    $stmt->bind_param("i", $catid);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($price, $count,$name,$discr,$fulldiscr);
    $data = array();
    $i = 0;
    while ($stmt->fetch()) {
        $data[$i] = array("name" => $name, "count" => $count,"price" => $price,"discription" => $discr, "fulldiscr" => $fulldiscr);
        $i += 1;
    }
    return json_encode($data);
}
function addapikey($domen){
    global $currentUser;
    global $mysqli;
    if(isLogin()){
        if(!filter_var($domen,FILTER_VALIDATE_URL)){
            return "4";
        }
        $count=1;
        while($count!=0) {
            $apikey = genapikey();
            $stmt = $mysqli->prepare("SELECT api_key FROM tb_api_key WHERE api_key=? ");
            $stmt->bind_param("s", $apikey);
            $stmt->execute();
            $stmt->store_result();
            $count=$stmt->num_rows;
            $stmt->close();
        }
        $stmt = $mysqli->prepare("SELECT id FROM tb_api_key WHERE usr=?");
        $stmt->bind_param("s", $currentUser);
        $stmt->execute();
        $stmt->store_result();
        $count=$stmt->num_rows;
        $stmt->close();
        if($count>=3){
            return "2";
        }
        $stmt=$mysqli->prepare("INSERT INTO tb_api_key SET api_key=?,domen=?,usr=?");
        $stmt->bind_param("sss",$apikey,$domen,$currentUser);
        $stmt->execute();
        $stmt->close();
        return "1";
    }else{
        return false;
    }
}
function delkeyapi($key){
    global $currentUser;
    global $mysqli;
    if(isLogin()) {
        $stmt = $mysqli->prepare("DELETE  FROM tb_api_key WHERE api_key=? and usr=? ");
        $stmt->bind_param("ss", $key,$currentUser);
        $stmt->execute();
        $stmt->store_result();
        $stmt->close();
        return "1";
    }else{
        return false;
    }

}
//доп функции
function get_count($arr){
    $i=0;
    while($row=$arr->fetch_assoc()){
        $i++;
    }
    return $i;
}
function gensesid($length=18) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789/%^&()";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
function passLen($str){
    return (strlen($str)>6)?true:false;
}
function logLen($str){
    return (strlen($str)>3)?true:false;
}
function genapikey($length=24){
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789/%^&()";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}