<?php
/**
 * Created by PhpStorm.
 * User: dwliv
 * Date: 19.01.2016
 * Time: 14:38
 */
$mysqli = new mysqli("localhost", "u0131334_default", "h0j5GN_t", "u0131334_default");
$mysqli->set_charset("utf8");
function get_count($arr){
    $i=0;
    while($row=$arr->fetch_assoc()){
        $i++;
    }
    return $i;
}
function add($mas){
    global $mysqli;
    $query=$mysqli->query("Select id_group from tb_group WHERE name_doup='".$mas[2]."';");
    $id='';
    while($row=$query->fetch_assoc())
    {
        $id=$row["id_group"];
    }
    if ($id=='')
    {
        $mysqli->query("insert into tb_group set name_doup='".$mas[2]."';");
        $id=$mysqli->insert_id;
    }
    echo get_count($query).' '.$id.'<br>';
    $query=$mysqli->query("INSERT into tb_items set id_items='".$mas[0]."', id_cat='".$id."', price='".$mas[8]."', name='".$mas[4]."', disrc='".$mas[9]."',full_disr='".$mas[9]."';");
}

function update($mas){
    global $mysqli;
    $query=$mysqli->query("Update tb_items set price='".$mas[8]."', name='".$mas[4]."',disrc='".$mas[9]."',full_disr='".$mas[9]."' where id_items='".$mas[0]."'");
}

$fp = fopen('stock.csv', 'r');
if ($fp)
{
    while (!feof($fp))
    {
        $str = iconv("Windows-1251","UTF-8",fgets($fp));
        $mas=explode(';',$str);
        $number=$mas[0];
        $catname=$mas[1];
        $group=$mas[2];
        $size=$mas[3];
        $name=$mas[4];
        $naim=$mas[5];
        $razmer=$mas[6];
        $ves=$mas[7];
        $price=$mas[8];
        $discr=$mas[9];
        $quer=$mysqli->query("Select * from tb_items where id_items='".$number."'");
        if (get_count($quer)==0){
            add($mas);
        }else{
            update($mas);
        }

    }
    $mysqli->close();
}

else echo "Ошибка при открытии файла";
fclose($fp);
