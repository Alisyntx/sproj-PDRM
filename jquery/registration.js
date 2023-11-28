$(document).ready(function(){
    $('#form1').submit(function(e){
        e.preventDefault();
        var url ="php/register.php";
        var data = $(this).serialize();
        $.post(url, data, function(response){
            console.log(response);
            $('#error-msg').text(response.message).fadeIn();
                setTimeout(() =>{
                    $('#error-msg').fadeOut();
                },5000);
                if(response.success){
                    $('#form1')[0].reset();
                    $('#error-msg').text(response.message).fadeIn();
                    setTimeout(() =>{
                        $('#error-msg').fadeOut();
                    },5000);
                }
              
        },"json");
    });
    
});