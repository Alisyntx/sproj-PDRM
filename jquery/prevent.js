
$(document).ready(function(){
    var confirmPass = false;
    var confirmMatch = false;
    $('#submit-js').css('visibility','hidden');
    
    $('#passwordinp').on('input', function() {
        if ($(this).val().trim().length === 0) {
          $('#error-msg').hide(); // Clear the warning message
        } else if ($(this).val().length < 8) {
          $('#error-msg').fadeIn(700).text('Password is too short');
          $('#submit-js').css('visibility','hidden');
        }else{
          $('#error-msg').fadeIn(500).text('Strong Password');
          setTimeout(()=>{
            $('#error-msg').fadeOut(500);
          },1000);
          confirmPass = true;
          if(confirmPass === true && confirmMatch === true){
            $('#submit-js').css('visibility','visible');
          }
        }
        
      });
      $('#numfeedback').on('input', function() {
        if ($(this).val().trim().length === 0) {
          $('#error-msg').hide(); // Clear the warning message
        } else if ($(this).val().length < 10) {
          $('#error-msg').fadeIn(700).text('please follow ex: 9156510184');
          $('#submit-js').css('visibility','hidden');
        }else{
          $('#error-msg').fadeIn(500).text('you got it!');
          setTimeout(()=>{
            $('#error-msg').fadeOut(500);
          },1000);
        }
        
      });

      $('#confirmPassword').on('input', function(){
        var Password = $('#passwordinp').val();
        var PasswordCnfrm = $('#confirmPassword').val();
        if (Password !== PasswordCnfrm) {
            $('#error-msg').fadeIn(700).text('Password NOT match');
            $('#submit-js').css('visibility','hidden');
        } else {
            $('#error-msg').text('Password match');
            setTimeout(()=>{
                $('#error-msg').fadeOut(500);
              },1000);
            confirmMatch = true;
            if(confirmPass === true && confirmMatch === true){
                $('#submit-js').css('visibility','visible');
            }
        }
    });
    
});