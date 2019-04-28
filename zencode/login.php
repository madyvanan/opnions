<?php
require('config/config.php');
require_once (DAO_PATH .'UserManagement.php');
$usenotExist=NULL; 
if(isset($_POST['email']) && $_POST['email']!='' && isset($_POST['password']) && $_POST['password']!=''){
  $userManagement = new UserManagement();
  $userData = $userManagement->userLogin($_POST['email'],$_POST['password']);
	if(!empty($userData)){
		foreach($userData as $k=>$v){
			$_SESSION[$k] = $v; 
		}
		header('location:index.php');	
	}else{
		$usenotExist='Please enter the right Email Address OR Password.';
	}  
}
require('header.php');
?>
    <!-- Services Section Start -->
    <section id="services" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="section-title wow fadeInDown animated" data-wow-delay="0.3s">Login</h2>
			<?php if( isset($_GET['redirect']) && (base64_decode($_GET['redirect'])=='opinion' OR base64_decode($_GET['redirect'])=='results')){ ?>
			<div><a href="login.php" style='curser:none'>You must login here...</a></div>
			<?php } ?>
			<?php if($usenotExist!=NULL){ ?>
			<div><a href="login.php" style='curser:none'><?php echo $usenotExist;?></a></div>
			<?php } ?>
          </div>
        </div>
        <div class="row">
			
			
			<div class="container">

			    <div class="row"> 
					
					<div class="col-md-6">

					  <h1 class="form-signin-heading">Sign in</h1>
					  <!--p class="lead">Not a member? Please <a href="index.php">register</a> instead.</p-->
					  
					  <form action="login.php" method="post" class="login-form">
						<div class="form-group">
						  <label for="email">Email address</label>
						  <input type="email" class="form-control" name="email" placeholder="Enter Email address" >
						</div>
						<div class="form-group">
						  <label for="password">Password</label>
						  <input type="password" class="form-control" name="password" placeholder="Password">
						</div>
						<button type="submit" class="btn btn-default">Sign in!</button>
					  </form>

					</div>
				  </div>

			</div>
			
			
        </div>
      </div>
    </section>
    <!-- Services Section End -->
<?php require('footer.php') ?>
