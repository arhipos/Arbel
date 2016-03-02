//������� ����� ��� ������� ��������
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


//������ '+'
 $('.plus').click( function() { 
        var i=$(this).parents().eq(1).find('.counter').val();
        i=++i;
        $(this).parents().eq(1).find('.counter').val(i);	
		summa();
});

//������ '-'
 $('.minus').click(function() {
    var i = $(this).parents().eq(1).find('.counter').val();
    if (i >= 1)
        i = --i;
    $(this).parents().eq(1).find('.counter').val(i);
	summa();
    });
	
//���� � ���������� �����
 $('.counter').keyup(function(){
	summa();
 });
 
 //�������� �� �������� ���-�� ���� ����������� ��� ������ ����
 $('.counter').mouseleave(function(){
	if ($(this).val()==''){
		$(this).val(0);summa();}
	else {summa()}
 });
 

//������ ���� ������� 
      $(document).ready(function() {
    $("#minCost, #maxCost, .counter").keydown(function(event) {
        // ���������: backspace, delete, tab � escape
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || 
             // ���������: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
             // ���������: home, end, �����, ������
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 // ������ �� ������
                 return;
        }
        else {
            // ����������, ��� ��� �����, � ������������� ������� keypress
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
});  
