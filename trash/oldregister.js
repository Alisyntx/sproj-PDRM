$(document).ready(function(){
    $('#form1').submit(function(e){
        e.preventDefault();
        var url ="php/register.php";
        var data = $(this).serialize();
        $.post(url, data, function(response){
            console.log(response);
            $('.status-js').html(response.message);
            $('#form1')[0].reset();   
        },"json");
        
        
    });

});