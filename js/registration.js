function go(callback){	
	$('form').submit(function(event) {
		if(emailCheck() && passCheck() && pass2Check() && innCheck() && contCheck() && telCheck() && capchaCheck()){
			callback();
			return true;

		}
		if(!emailCheck()){
			callback($('#id_email'));
		}
		else 	if(!passCheck()) {	callback($('#id_pass'));}
				else 	if(!pass2Check()){callback($('#id_pass_confirm'));}
						else	if(!innCheck()){callback($('#id_inn'));}
								else	if(!contCheck()) {callback($('#id_contact'));}
										else	if(!telCheck()) {callback($('#id_telephone'));}
												else {callback($('#code'));}	
		event.preventDefault();
		return false;
		});

};
$('#go_next').click(function(){
	go(function(e){
		e.focus()});
});
function emailCheck() {
	if ($('#id_email').val()==''){
		$('#emailError').html('Поле не заполнено');
		$('#id_email').css('border-color','red');
		return false;
	}
	else{
		var re = /^[\w-\.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/i;
		var myMail = document.getElementById('id_email').value;
		var valid = re.test(myMail);
		if (valid) {
			$('#emailError').html('');
			$('#id_email').css('border-color','#d2d2d2');
			return true;			
		}
		else {
			$('#emailError').html('Введен не допустимый адрес!');
			$('#id_email').css('border-color','red');
			return false;
		}
	}	
}
function passCheck() {
	if	(($('#id_pass_confirm').val()!='') && ($('#id_pass').val().length >= 6) && ($('#id_pass_confirm').val()==$('#id_pass').val())){	
		$('#id_pass_confirm, #id_pass').css('border-color','#d2d2d2');
		$('#passError, #pass2Error').html('');
		return true; 			
	}
	if ($('#id_pass').val()==''){
		$('#id_pass').css('border-color','red');
        $('#passError').html('Придумайте пароль!');
		return false;		
	}
	else{
		if($('#id_pass').val().length >= 6) {
			$('#passError').html('');
			$('#id_pass').css('border-color','#d2d2d2');
			return true;     
		} 
		else {
			$('#id_pass').css('border-color','red');
			$('#passError').html('Минимум 6 символов!');
			return false;	
		}
	}	
	/*проверка на совпадение(если первый пароль изменили)*/
	
}
function pass2Check() {
	if ($('#id_pass').val().length < 6){
		$('#id_pass_confirm').css('border-color','red');
		return false;
	}
	if(($('#id_pass_confirm').val()=='') && ($('#id_pass').val().length >= 6)){
		$('#pass2Error').html('Повторите пароль!');
		$('#id_pass_confirm').css('border-color','red');
		return false;
	}
	if(($('#id_pass_confirm').val()==$('#id_pass').val()) && ($('#id_pass').val().length >= 6)){
		$('#id_pass_confirm, #id_pass').css('border-color','#d2d2d2');
		$('#pass2Error').html('');	
		return true;	
	}
	else {
		$('#id_pass_confirm, #id_pass').css('border-color','red');
		$('#pass2Error').html('Пароли не совпадают!');
		return false;	
	}	 	
}
function innCheck() {
	if ($('#id_inn').val()==''){
		$('#innError').html('');
		return true;
	}
	else{
		var inputNumber = $('#id_inn').val();  // или value
		inputNumber = "" + inputNumber;
		inputNumber = inputNumber.split('');
		// 10 знаков
		if((inputNumber.length == 10) &&
			(inputNumber[9] ==
				((2 * inputNumber[  0] + 4 * inputNumber[1] + 10 *
				inputNumber[2] + 3 * inputNumber[3] + 5 *
				inputNumber[4] + 9 * inputNumber[5] + 4 *
				inputNumber[6] + 6 * inputNumber[7] + 8 *
				inputNumber[8]) % 11) % 10))
		{
		$('#innError').html('');
		return true;
		}
	// 12 знаков
		else if((inputNumber.length == 12) &&
			((inputNumber[10] == ((7 * inputNumber[ 0] + 2 *
			inputNumber[1] + 4 * inputNumber[2] + 10 *
			inputNumber[3] + 3 * inputNumber[4] + 5 *
			inputNumber[5] + 9 * inputNumber[6] + 4 *
			inputNumber[7] + 6 * inputNumber[8] + 8 *
			inputNumber[9]) % 11) % 10) &&
			(inputNumber[11] == ((3 * inputNumber[ 0] + 7 *
			inputNumber[1] + 2 * inputNumber[2] + 4 *
			inputNumber[3] + 10 * inputNumber[4] + 3 *
			inputNumber[5] + 5 * inputNumber[6] + 9 *
			inputNumber[7] + 4 * inputNumber[8] + 6 *
			inputNumber[9] + 8 * inputNumber[10]) % 11) % 10)))
		{
			$('#innError').html('');
			return true;
		}
			else{
				$('#innError').html('Некорректный ИНН');
				return false;
			}
	}		
}
function contCheck() {

	if ($('#id_contact').val()==''){
		$('#id_contact').css('border-color','red');
        $('#contError').html('Поле не заполнено');
		return false;		
	}
	else{
		if($('#id_contact').val().length >= 2) {
			 $('#contError').html('');
			 $('#id_contact').css('border-color','#d2d2d2');
			return true;     
		} 
		else {
			$('#contError').html('Поле не заполнено');
			return false;	
		}
	}		
}
function telCheck(){
	if ($('#id_telephone').val()==''){
		$('#id_telephone').css('border-color','red');
		$('#telError').html('Поле не заполнено');
		return false;		
	}
	else{
		if($('#id_telephone').val().length >= 2) {
			 $('#telError').html('');
			 $('#id_telephone').css('border-color','#d2d2d2');
			return true;     
		} 
		else {
			$('#telError').html('Поле не заполнено');
			return false;	
		}
	}	
}
function capchaCheck(){
	$.post("post.php?"+$("#form_reg").serialize(), {
	}, function(response){	
		if(response==1){
			$('#capError').html('');
			change_captcha();
			return true;
		}
		else{
			$('#capError').html('Не верно');
			change_captcha();
			return false;
		}	
	});
}
$('#id_email').blur(function() {emailCheck();});
$('#id_pass').blur(function(){passCheck();});		
$('#id_pass_confirm').blur(function(){pass2Check();});
$('#id_inn').blur(function(){innCheck();});	
$('#id_contact').blur(function(){contCheck();});	
$('#id_telephone').blur(function(){telCheck();});
/*поле "контактное лицо" запрет цифр*/
$(document).ready(function() {
    $("#id_contact").keydown(function(event) {
        // Разрешаем: backspace, delete, tab и escape
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || 
             // Разрешаем: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Разрешаем: home, end, влево, вправо
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // Ничего не делаем
                 return;
        }
        else {
            // Обеждаемся, что это цифра, и останавливаем событие keypress
            if ((event.keyCode >= 48 && event.keyCode <= 57 ) ||
				(event.keyCode >= 96 && event.keyCode <= 111) || 
				 event.keyCode==187 || event.keyCode==189 ||
				 event.keyCode==192 || event.keyCode==220 || event.keyCode==226 ) {
					event.preventDefault(); 
				 }   
        }
    });
});  
/*поле "телефон" запрет букв и прочих симв+ сюда же ИНН запрет букв*/
$(document).ready(function() {
    $("#id_telephone, #id_inn").keydown(function(event) {
        // Разрешаем: backspace, delete, tab и escape
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || 
             // Разрешаем: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // Разрешаем: home, end, влево, вправо
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // Ничего не делаем
                 return;
        }
        else {
            // Обеждаемся, что это цифра, и останавливаем событие keypress
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 ) && event.keyCode!==187 && event.keyCode!==189) {
                event.preventDefault(); 
            }   
        }
    });
});  
	
$(document).ready(function() { 
	
 $('#go_next').click(function() {  
	emailCheck();
	passCheck();
	pass2Check();
 	innCheck();
	contCheck();
	telCheck();	
	capchaCheck();
// refresh captcha
	$('img#refresh').click(function() {  change_captcha();  });
	function change_captcha(){
		$('#captchaImg').src="get_captcha.php?rnd=" + Math.random();
	}
 });
});
