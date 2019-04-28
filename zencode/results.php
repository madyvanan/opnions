<?php
require('config/config.php');
if(!isset($_SESSION['user_id'])){
    header('location:login.php?redirect=' . base64_encode('results'));	
}
require_once (DAO_PATH .'PollManagement.php');
require_once (DAO_PATH .'UserManagement.php');
$userManagement = new UserManagement();
$polledUsers = $userManagement->getUsersOnlyPolled(0);
$pollManagement = new PollManagement();
$pollResults = $pollManagement->getPollQnas();
require('header.php');
?>   
 <section id="services" class="section-padding">
	 <div class="row">
          <div class="col-md-12">
            <h5 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Result for the Poll</h5>
          </div>
		  <div class="col-md-4"></div>
    </div>
	<div class="row">
	    <div class="col-md-4"></div>
		<div class="col-md-8">
			<div class="box box-default box-solid">				
				<div class="box-body">
					<div class="row" style="padding-bottom:10px;">
						<div class="col-md-2"> 
							<label>Select User:</label>
						</div>
						<div class="col-md-2">
							<select name='polled_user_id' id='polled_user_id'>
									<option value=''>--Select User--</option>
								<?php foreach($polledUsers as $user){?>
									<option value='<?php echo $user['UserID'];?>'><?php echo $user['FirstName'].' '.$user['LastName'];?></option>
								<?php } ?>
							</select>
						</div>
					</div>     
				</div>
			</div>
		</div>
	</div>
	<div class="box box-default">
		<div class="box-body">
			<div class="row">						
				<div class="col-md-12">
					<table id="result_table" class="table table-bordered table-striped">
						<thead>			   			
							<tr>				
								<th>S.No</th>
								<th>Questions</th>
								<th>Option 1</th>
								<th>Option 2</th>
								<th>Option 3</th>
								<th>Option 4</th>
							</tr>
						</thead>					
						<tbody>	</tbody>
					</table>
				</div>
				
			</div>
		</div>
	</div>
 </section>	
<?php require('footer.php') ?>