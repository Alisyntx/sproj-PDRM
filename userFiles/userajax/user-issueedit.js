$(document).ready(function() {
    $('#report-contuser').on('click','.edit',function(){
		var url = 'userphp/user-issueedit.php';
		var getID = $(this).attr("id");
		$.post(url,{ akoSiID: getID },function(response) {	
			$('.issueni').html(response);

		});
	});
});