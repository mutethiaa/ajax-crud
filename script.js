$(document).ready(function() {
	

	$(document).on('click','#submit_btn',function(){
		var name=$('#name').val();
		var comment=$('#comment').val();

		$.ajax({
			url:'server.php';,
			type:'POST',
			data:{
				'save':1,
			    'name':name,
			    'comment':comment

			},
			success:function(response){
				$('#name').val('');

				$('#comment').val('');
			}

		});



	});
	// body...
});