$(document).ready(function(){

    $('#uploadForm').submit(function(e){
        e.preventDefault();
        var url ="php/upload.php"; // Replace with the correct path to your PHP file
        var formData = new FormData(this);
        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function(response){
                console.log(response);

                if (response.status === 'success') {
                    // Redirect or perform actions on success
                    console.log("File uploaded successfully!");
                    $('#error-upload').addClass("err-up").text(response.message).fadeIn();
                    setTimeout(() => {
                        $('#error-upload').fadeOut();
                    }, 5000);
                } else {             
                    $('#error-msg').text(response.message).fadeIn();
                    setTimeout(() => {
                        $('#error-msg').fadeOut();
                    }, 5000);
                }
                
                // Optionally reset the form
                $('#uploadForm')[0].reset();
            },
            error: function(xhr, status, error){
                console.error(error);
            }
        });
    });
});