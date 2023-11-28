
$(document).ready( function() {

	 
	
	$('#centertbl').on('click','.edit',function(){
		var url = 'php/center/editUserForm.php';
		var getID = $(this).attr("id");
		var me = $(this);
		$.post(url,{ akoSiID: getID },function(response) {
			$('.center-body').html(response);
		});

	});

	

	$("#exampleModal6").on("submit","#updateUser", function(e) {
		
		e.preventDefault();	
		var url = "php/center/updateUser.php";
		var data = $(this).serialize();
		$.post(url, data, function(response) {
			
			console.log(response);
			$("#updateUser .status").html(response.message);
			$('#tr_'+response.ID).html('<td class="sorting_1"> '+response.name+'</td><td> '+response.stats+'</td><td> '+response.amnt+'</td><td><button class="btn btn-warning edit" id="'+response.ID+'" data-bs-toggle="modal"data-bs-target="#exampleModal6"><i class="bx bx-edit-alt" style="font-size: 1.5rem;" ></i></button></td></tr>');
		},"json");
		
	});
	
});