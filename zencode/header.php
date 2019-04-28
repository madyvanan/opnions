<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Online Poll</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assest/css/bootstrap.min.css" >
    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="assest/css/font-awesome.min.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assest/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="assest/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assest/css/owl.theme.css">
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assest/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assest/css/main.css">
    <!-- Extras Style -->
    <link rel="stylesheet" type="text/css" href="assest/css/extras.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assest/css/responsive.css">
	<?php if(CURRENT_PAGE=='results.php'){ ?>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
    <?php } ?>
  </head>
  <body>    
    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.php" class="navbar-brand">Online Poll</a>
			<?php if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=''){ ?>
			<?php echo 'Welcome ' .$_SESSION['FirstName'] .' '. $_SESSION['LastName'];?> 
			<?php } ?>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item <?php echo (CURRENT_PAGE=='index.php')?'active':'';?>">
                <a class="nav-link" href="index.php">
                  Home
                </a>
              </li>
              <li class="nav-item <?php echo (CURRENT_PAGE=='opinion.php')?'active':'';?>">
                <a class="nav-link" href="opinion.php">
                  Say your opinion here
                </a>
              </li>
			  <?php if(isset($_SESSION['Role']) && $_SESSION['Role']=='admin'){ ?>			  
              <li class="nav-item <?php echo (CURRENT_PAGE=='results.php')?'active':'';?>">
                <a class="nav-link" href="results.php">
                  Results
                </a>
              </li>
			  <?php } ?>
			  <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id']!=''){ ?>
			  <li class="nav-item">
                <a class="nav-link" href="logout.php">
                  logout
                </a>
              </li>              
			  <?php } else { ?>
			  <li class="nav-item <?php echo (CURRENT_PAGE=='login.php')?'active':'';?>">
                <a class="nav-link" href="login.php">
                  login
                </a>
              </li>
			  <?php } ?>			  
            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- sliders -->
      <div id="sliders">
        <div class="full-width" style='height:50px;'>
            
        </div>
      </div>
      <!-- End sliders -->

    </header>
    <!-- Header Area wrapper End -->