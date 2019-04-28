<script>
var site_url='';
jQuery( document ).ready(function( $ ) {	
    <?php if(CURRENT_PAGE=='login.php'){ ?>
		$('form.login-form').validate({    
			rules: { 
				'email':{
					required: true	
				},
				'password':{
					required: true
				}
			},  
			messages: {	
				'email':{
					required: "Email address is required."	
				},
				'password':{
					required: "Password is required."
				}			
			},
			highlight: function(field) {
				$(field).closest('.form-group').removeClass('has-success').addClass('has-error');
				if ($(field)[0] && $(field)[0].id) {
				  $("label[for=" + $(field)[0].id + "].validation-label").first().addClass('has-error');
				}
			},
			unhighlight: function(field) {
				$(field).closest('.form-group').removeClass('has-error');
				if ($(field)[0] && $(field)[0].id) {
				  $("label[for=" + $(field)[0].id + "].validation-label").first().addClass('has-error');
				}
			},
			errorPlacement: function (error, element) {
				var elem = $(element);			
			},
			onsubmit: true
		});
		//validation ends here
    <?php } ?>
	<?php if(CURRENT_PAGE=='results.php'){ ?>
		$(document).on('change','#polled_user_id',function(){
			var user_id = $(this).val();
			$('#result_table').DataTable().destroy();
			if(user_id!=''){
				load_result_data(user_id);
			} else {
				load_result_data(0)
			}
		});
		load_result_data(0); //dataTable trigger	
	<?php } ?>	
}); //Document ready ends----------------
<?php if(CURRENT_PAGE=='results.php'){ ?>
	function load_result_data(user_id){
			var result_table=$('#result_table').DataTable({		
			"bProcessing": true,
			"serverSide": true,
			"ajax":{
						 url: site_url + "get_results.php", 
						 type: "POST",
						 data:{'user_id':user_id},
						 dataType:"json",
						 async:true,
						 error: function(){ 
							$("#result_table_processing").css("display","none");
						}
					},			
			"start":0,
			dom: 'lBfrtip',
			buttons:["export"],
			"paging": true,
			"lengthChange": false, 	  
			"searching": false,
			"ordering": true,
			"info": true, //
			"scrollX": false,
			"pageLength": 10,		
			"order": [],
			"autoWidth": false,		
			"columnDefs": [
							{ "orderable": false, "targets": []},
							{ className: "pull-left-text", "targets": [1] },
						   ]
		});	
	}
<?php } ?>
</script>