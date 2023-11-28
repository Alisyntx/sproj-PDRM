$(document).ready(function(){
    $('#form2').submit(function(e){
        e.preventDefault();
        var url ="php/newvalidate.php";
        var data = $(this).serialize();
        
        $.post(url, data, function(response){
            console.log(response);
            if (response.success) {
                // Redirect to the dashboard page
                window.location.href = response.redirect;
            } else {             
                $('#error-msg').text(response.message).fadeIn();
                setTimeout(() =>{
                    $('#error-msg').fadeOut();
                },5000);
            }
            $('#form2')[0].reset();
        },"json");
    });
});