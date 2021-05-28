
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/logo.png" type="image/png">
        <title>Ibradetech | Your Perfect Building Construction Company</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <link rel="stylesheet" type="text/css" href="css/afont.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    </head>
    <body data-spy="scroll" data-target="#mainNav" data-offset="70">
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt="" height="90px;" width="220px"></a>
						<button class="navbar-toggler" style="color: red;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span  class="icon-bar bg-success"></span>
							<span class="icon-bar bg-success"></span>
							<span class="icon-bar bg-success"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="index.php">Home<i class="fas fa-home" aria-hidden="true"></i></a></li> 
								<li class="nav-item"><a class="nav-link" href="about-us.php">About Us<i class="fab fa-free-code-camp"></i> </a></li> 
								<li class="nav-item"><a class="nav-link" href="services.php">Services<i class="fab fa-free-code-camp"></i></a>
								<!-- <li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="project-details.html">Project Details</a></li>
										<li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
									</ul>
								</li>  
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
										<li class="nav-item"><a class="nav-link" href="single-blog.html">Blog Details</a></li>
									</ul>
								</li> -->
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact Us<i class="fas fa-angle-double-down"></i></a></li>
								<li class="nav-item"><a href="#login-modal" class="  nav-link" data-toggle="modal" data-target="">Login<i class="fas fa-sign-in-alt"></i></a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <style>
        	.modal{
        		position: fixed;
        		left: 0;
        		right: 0;
        		top: 20%;
        		max-height: 70%;
        		width: 100%;
        		margin: auto;
        	}
        </style>
        <div class="modal  " id="login-modal">
    <div class="modal-dialog col-sm-12 modal-lg ">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
         
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body ">
          <form method="POST" action="script/login.php">
          	 <h3 class="modal-title text-info text-center">Login</h3>
          	<div class="form-group col-sm-12" style="margin-top: 15px">
          		<label>Username:</label>
          		<input type="text" id="username" class="form-control"  name="user">
          	</div>
          	<small style="display: none;padding: 10px;" id="error" class="text-danger">All fields are required</small>
          	<div class="form-group  col-sm-12">
          		<label>Password:</label>
          		<input type="password" id="pass" class="form-control"  name="pass">
          	</div >
            <div class="col-sm-12">
          	 <button type="submit" class="btn btn-info my-3 col-sm-12" id="login" name="login">Login</button>
             </div>
          </form>
        </div>
        
        <!-- Modal footer -->
        
         
        
        
      </div>
    </div>
  </div>
  
</div>
<script src="js/header.js"></script>
          <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
