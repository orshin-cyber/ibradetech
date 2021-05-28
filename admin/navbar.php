<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
 <!--  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  -->
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />

 <link rel="stylesheet" type="text/css" href="bstrp/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/all.min.css"> -->
   <script src="js/jquery-3.5.1.min.js" ></script> 
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="css/font-awesome.min.css">
  


</head>
<body>
	<style>
	body{

	}
	img{
		
		
	}

	#sidebar{
	background-color: #26a69a;
	width: 250px;
	color: #fff;
	font-weight: bold;
	font-size: 18px;
	height: 140vh;
	transition: all 0.5s;

	}

	#sidebar li:hover{
		background-color:  #2F4F4F	/*#D3D3D3*/;
		color: black;
		text-decoration: none;
	}
	a:hover{
		text-decoration: none;
		color: black;
		background-color: #2F4F4F;
	}
	.wrapper{
display: flex;
align-items: stretch;
width: 100%;
	}

	a{
		
		color: #fff;
		margin-left: 15px;
	}
	#sidebar li{
		line-height: 60px;
		list-style: none;
		padding: 0;
		margin-left: 0;

	}
	.main{
		margin-bottom: 20px;
	}

	@media (max-width: 768px) {
    #sidebar {
        display: none;
    }
    #components.navbar{
    	width: 100%;
    }
   
}
main{
	padding: 20px;
}
#k{
	position: absolute;
	font-size: 30px;
	height: 70px;
	top: 20px;
	left: 20px;
}
#ses{
	position: absolute;
	top: 100px;
	padding: 10px;
}
   			.new{
   				border-radius: 15px;
   				background: black;
   				color: #fff;
   				font-weight: 300;
   				min-width: 3rem;
   				padding: 0 6px;
   			}

</style>
<div class="wrapper">

	<nav id="sidebar">
		<div class="sidebar-header">
			<img src="img/log2.jpg" width="250px" height="180px"  style="background-size: cover;">
				<a href="#"><img id="k" class="rounded-circle" style="" src="img/img.png"/></a>
				<div id="ses">
				 <span class="name white-text"><?php echo $_SESSION['fname']; ?></span>
				 <br>
          		<span class="email white-text"><?php echo $_SESSION['email']; ?></span> 
          		</div>
		</div>
 		<?php
		        require('connect.php');
        $select = "SELECT * FROM mail WHERE status != 'Read' ";
        $query = mysqli_query($conn, $select);
        $list =mysqli_num_rows($query);
       ?> 
       <?php if ($_SESSION['role'] == 1) :?> 
      

		<ul class="list-unstyled">
		    <li>
			<a href="dashboard.php"> <i class="fas f fa-chart-line"></i> Dashboard</a>
			</li>
			<li><a href="admin.php"><i class="fas fa-user-alt"></i> Manage Administratior</a></li>
			<li><a href="message.php"><i class="fas fa-envelope"></i> &nbsp Message<span class="new ml-4"><?php  echo $list ?></span></a></li>
			<li><div class="divider\" style="border:1px grey solid"></div></li>
			<li><a href="project.php"><i class="fas fa-tasks"></i> Add Project</a></li>      
			<li><a href="projects.php"><i class="fas fa-toggle-on"></i> View Projects</a></li>
			<li><div class="divider\" style="border:1px grey solid"></div></li>
			<li><a href="password.php"><i class="fas fa-key"></i> Change Password </a></li>
			<li><a  href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign-Out </a></li>
		</ul>


     <?php else : ?>


   		<style>

   		</style>

        <li>
        <a href="dashboard.php"> <i class="fas f fa-chart-line"></i> Dashboard</a>
      </li>
      <li><a href="message.php"><i class="fas fa-envelope"></i></i> Message<span class="new ml-4"><?php echo $list ?></span></a></li>
     <li class=""></li>
      <li><div class="divider" style="border:1px grey solid"></div></li>
      <li><a href="project.php"><i class="fas fa-tasks"></i> Add Project</a></li>
      <li><a href="projects.php"><i class="fas fa-toggle-on"></i> View Projects</a></li>
      <li><div class="divider" style="border:1px grey solid"></div></li>
      <li><a href="password.php"><i class="fas fa-key"></i> Change Password </a></li>
      <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign-Out </a></li>
      
    

        

     <?php  endif ?>
	</nav>
	  	<div id="component" style="width: 100% ;">
			<nav class="navbar navbar-expand-lg p-4 " style="background: #fff; box-shadow: 2px 3px 2px 5px grey;  ">
				<div class="container-fluid">
					 <!-- <a class="navbar-brand" href="#"><img src="img/logo.png"  height="90px" width="140px"></a> -->
					 <span id="sidebarCollapse"><i  class="fas fa-bars float-right"  style="font-size: 30px; color:#26a69a; cursor: pointer; " aria-hidden="true"></i></span>
					 </div>
			</nav> 
			<main class="mt-5">

    <script>
	$(document).ready(function() {

    $('#sidebarCollapse').click(function(){
    	 $('#sidebar').fadeToggle(1000);
   
    	

	});

});
</script>



