    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
    function inc(){
        var i=$('#counter').val();
        i=++i;
        $('#counter').val(i);
        $('#summaSlot').val($('#counter').val()*34)
    }
    function dec() {
        var i = $('#counter').val();
        if (i >= 1)
            i = --i;
        $('#counter').val(i);
        $('#summaSlot').val($('#counter').val()*34)
    }
      $(document).ready(function() {
    $("#minCost, #maxCost, #counter").keydown(function(event) {
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
