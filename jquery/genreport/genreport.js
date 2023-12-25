$(document).ready(function(){

    $("#genshowbtn").click(() =>{
		$("#genreportForms").hide(500);
	});
    $("#genreportForms").submit( function(e) {
		e.preventDefault();	
        alert();
		var url = "php/genreport/genreportsrvr.php";
		var data = $(this).serialize();
		$.post(url, data, function(response) {
			
			console.log(response);
			$(".status").html(response.message);
            alert(response.message);
			$("#nup").prepend('<tr class="animated rubberBand"><td class="sorting_1"> '+response.lastID+' </td><td> '+response.username+' </td><td> '+response.admin+' </td><td><button class="btn btn-warning edit" id="'+response.lastID+'" data-bs-toggle="modal"data-bs-target="#exampleModal5"><i class="bx bxs-message-square-edit"></i></button> <button class="btn btn-danger del" id="'+response.lastID+'"><i class="bx bxs-message-square-minus"></i></button></td></tr>');
		},"json");	
	});
});