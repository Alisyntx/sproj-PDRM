$(document).ready(function(){
    $('.form-submit-btn').click(function(){
        $('#form-sms').submit(function(e){
            e.preventDefault();
            var url = 'smsPhp.php';
            var data = $(this).serialize();

            $.post(url, data, function(response){
                    alert(response)
            });
        });
    })
});