$(document).ready( function() {
		
	$("#awts").submit( function(e) {
		
		e.preventDefault();	
		var url = "ajax_files/insertUser.php";
		var data = $(this).serialize();
		$.post(url, data, function(response) {
			
			console.log(response);
			$(".status").html(response.message);
			$("#sabaw tbody").prepend('<tr class="animated rubberBand"><td class="sorting_1"> '+response.lastID+' </td><td> '+response.username+' </td><td> '+response.password+' </td><td><button class="btn btn-warning edit" id="'+response.lastID+'"><i class="glyphicon glyphicon-pencil"> </i></button> <button class="btn btn-danger del" id="'+response.lastID+'"><i class="glyphicon glyphicon-trash"> </i></button></td></tr>');
		},"json");	
		
	});
	
	$("#sabaw").dataTable();
	
	$('#sabaw').on('click','.del', function() {
		var url = 'ajax_files/deleteUser.php';
		var getID = $(this).attr("id");
		var me = $(this);
		$.post(url,{ akoSiID: getID },function(response) {
			me.parent().parent().fadeOut();
		});
	});
	
	$('#sabaw').on('click','.edit', function() {
		$('#editUserModal').modal();
		var url = 'ajax_files/editUserForm.php';
		var getID = $(this).attr("id");
		
		$.post(url,{ akoSiID: getID },function(response) {
			
			$('#editUserModal .modal-body').html(response);
			
		});
	});
	
	$("#editUserModal").on("submit","#updateUser", function(e) {
		
		e.preventDefault();	
		var url = "ajax_files/updateUser.php";
		var data = $(this).serialize();
		$.post(url, data, function(response) {
			
			console.log(response);
			$("#updateUser .status").html(response.message);
			$('#tr_'+response.ID).html('<td class="sorting_1"> '+response.ID+' </td><td> '+response.firstname+'</td><td> '+response.lastname+'</td><td> '+response.age+'</td><td> '+response.gender+'</td><td> '+response.contact+'</td><td> '+response.email+'</td><td> '+response.address+'</td><td>'+response.username+'</td><td> '+response.password+' </td><td><button class="btn btn-warning edit" id="'+response.ID+'"><i class="glyphicon glyphicon-pencil"> </i></button>	<button class="btn btn-danger del" id="'+response.ID+'"> <i class="glyphicon glyphicon-trash"> </i>	</button></td>');
		},"json");	
		
	});
	
	// animation
	$('#tbl').css('left','100%');
	$('#tbl').animate({
		left : '0'
	},1000)
	$('#cont-btn').click(function(){
		window.location.href = "dashboard.php";
	});
});