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
