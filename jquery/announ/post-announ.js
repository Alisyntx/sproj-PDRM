
$(document).ready( function() {

	$("#awts").submit( function(e) {
		e.preventDefault();	
		var url = "php/announ/insertUser.php";
		var data = $(this).serialize();
		$.post(url, data, function(response) {
			
			console.log(response);
			$(".status").html(response.message);
			$("#annountbl tbody").prepend('<tr class="animated rubberBand"><td class="sorting_1"> '+response.lastID+' </td><td> '+response.username+' </td><td> '+response.admin+' </td><td><button class="btn btn-warning edit" id="'+response.lastID+'" data-bs-toggle="modal"data-bs-target="#exampleModal5"><i class="bx bxs-message-square-edit"></i></button> <button class="btn btn-danger del" id="'+response.lastID+'"><i class="bx bxs-message-square-minus"></i></button></td></tr>');
		},"json");	
	});
	
	$('#annountbl').on('click','.edit',function(){
		var url = 'php/announ/editUserForm.php';
		var getID = $(this).attr("id");
		$.post(url,{ akoSiID: getID },function(response) {
			
			$('.ann-body').html(response);
			
		});

	});

	$('#annountbl').on('click','.del', function() {
		alert("Please Confirm");
		var url = 'php/announ/deleteUser.php';
		var getID = $(this).attr("id");
		var me = $(this);
		$.post(url,{ akoSiID: getID },function(response) {
			me.parent().parent().fadeOut();
		});
	});
	

	$("#exampleModal5").on("submit","#updateUser", function(e) {
		
		e.preventDefault();	
		var url = "php/announ/updateUser.php";
		var data = $(this).serialize();
		$.post(url, data, function(response) {
			
			console.log(response);
			$("#updateUser .status").html(response.message);
			$('#tr_'+response.ID).html('<td class="sorting_1"> '+response.ID+' </td><td> '+response.username+'</td><td> '+response.admin+'</td><td><button class="btn btn-warning edit" id="'+response.ID+'" data-bs-toggle="modal"data-bs-target="#exampleModal5"><i class="bx bxs-message-square-edit"></i></button> <button class="btn btn-danger del" id="'+response.ID+'"><i class="bx bxs-message-square-minus"></i></button></td></tr>');
		},"json");	
		
	});
	
});