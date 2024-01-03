$(document).ready(function(){
    $('#rprt').on('click','.view',function(){
		var url = 'php/report/reportphp.php';
		var getID = $(this).attr("id")
		$.post(url,{ akoSiID: getID },function(response) {
			
			$('.report-dialog').html(response);
		});

	});
    $('#reportModal').on('click','.delete',function(){
		var url = 'php/report/deleteReportPhp.php';
		var getID = $(this).attr("id");
		$.post(url, { akoSiID: getID }, function(response) {
			// Trigger a custom event after successful deletion
			$(document).trigger('reportDeleted', { reportID: getID });
		});
	});
	
	$(document).on('reportDeleted', function(event, data) {
		// Get the report ID from the event data
		var deletedReportID = data.reportID;
	
		// Find and remove the corresponding div
		$('#rprt').find('.report-usr[id="' + deletedReportID + '"]').fadeOut();
	});
	
});