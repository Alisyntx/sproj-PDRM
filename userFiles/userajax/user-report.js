
tinymce.init({
	selector: "textarea",
      menubar: false,
      resize: false,
      height: 300,	
});
$(document).ready( function() {

    $("#report_issue").submit( function(e) {
		tinymce.triggerSave();
		e.preventDefault();
		var url = "userphp/user-issue.php";
		var data = $(this).serialize();
		
		$.post(url, data, function(response) {
			
			console.log(response);
			
            $("#textarea").val('');
            $("#rprt-status").html(response.message).stop(true, true).html(response.message).fadeIn().delay(5000).fadeOut()
		},"json");	
	});
	
	
	
});