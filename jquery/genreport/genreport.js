$(document).ready(function(){

    $("#genshowbtn").click(() =>{
		$("#genreportForms").hide(500);
	});
    $("#genshowbtn1").click(() =>{
		$("#genreportForms").show(500);
	});
	$('#example').on('click','.del', function() {
		var url = 'php/genreport/genreportdel.php';
		var getID = $(this).attr("id");
		var me = $(this);
		$.post(url,{ akoSiID: getID },function(response) {
			me.parent().parent().fadeOut();
		});
	});
    $("#genreportForms").submit( function(e) {
		e.preventDefault();	
        alert();
		var url = "php/genreport/genreportsrvr.php";
		var data = $(this).serialize();
		$.post(url, data, function(response) {
			
			console.log(response);
			$(".genstatus").html(response.message);
			setTimeout(function () {
				$(".genstatus").fadeOut();
			 }, 1000);
			$("#example tbody").prepend('<tr class="animated rubberBand"><td class="sorting_1"> '+response.lastID+' </td><td> '+response.a+' </td><td> '+response.b+' </td><td> '+response.c+' </td><td> '+response.d+' </td><td> '+response.e+' </td><td> '+response.f+' </td><td> '+response.g+' </td><td> '+response.h+' </td><td><button class="btn btn-danger del" id="'+response.lastID+'"><i class="bx bxs-message-square-minus"></i></button></td></tr>');
		},"json");	
	});
});