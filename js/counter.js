//подсчет суммы для каждого элемента
function summa() {
	sum=0;
	$('.boxElement').each(function(){
		k=$(this).find('.counter').val();
		m=$(this).find('.priceSlot').html().replace(",", ".");
		m=parseFloat(m).toFixed(2);
		$(this).find('#sumElement').html((k*m).toFixed(2).replace(".00", "").replace(".", ","));
		sum+=k*m;
		$('.itogNum').html(sum.toFixed(2).replace(".", ","));
	});
};
$(document).ready(function() {
    $(".fancybox").fancybox();
	summa();
});


//кнопка '+'
 $('.plus').click( function() { 
        var i=$(this).parents().eq(1).find('.counter').val();
        i=++i;
        $(this).parents().eq(1).find('.counter').val(i);	
		summa();
});

//ктопка '-'
 $('.minus').click(function() {
    var i = $(this).parents().eq(1).find('.counter').val();
    if (i >= 1)
        i = --i;
    $(this).parents().eq(1).find('.counter').val(i);
	summa();
    });
	
//ввод с клавиатуры числа
 $('.counter').keyup(function(){
	summa();
 });
 
 //проверка на удаление кол-ва либо копирование при помощи мыши
 $('.counter').mouseleave(function(){
	if ($(this).val()==''){
		$(this).val(0);summa();}
	else {summa()}
 });
 

//Запрет ввод лишнего 
      $(document).ready(function() {
    $("#minCost, #maxCost, .counter").keydown(function(event) {
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
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
});  
