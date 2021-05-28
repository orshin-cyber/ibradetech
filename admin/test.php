<!DOCTYPE html>
<html>
<head>
	<title>student-dashboard</title>
	<script src="jquery-3.5.1.min.js"></script> 
	<link rel="stylesheet"  href="font-awesome/css/font-awesome.min.css">
	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
    <!-- <link rel="stylesheet"  href="bstrp/css/bootstrap.min.css"> -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet"  href="dashboard.css">
    
</head>
<body>
	<style>
		body {
	font-family: "Work Sans", Arial, sans-serif;
	color: #fff;
	font-size: 16px;

}

a,
a:hover,
a:focus{
	color: inherit;
	text-decoration: none;
	transition: all 0.9s;
}
.remove{
	position: absolute;
	top: 20;
	font-size: 50;
	margin-left: 40px;
	right: 20px;
	border: 2px solid #39b74c;
}

#sidebar{
	height:100%;
	width: 250px;
	background: #212121;
	display: none;
	left: 0;
	position: absolute;
	z-index: 1;
	transition: 0.9s;

	
}
#sidebar  li {
	list-style: none;
	padding-top: 10px;
	padding-bottom: 15px;
	padding-right: 30px;
	padding-left: 10px;

}
 #sidebar ul {
	padding-top: 10px ;
	padding-left: 0px;
	padding: 0 40px 40px 40px
	padding-bottom: 5px;
	border-bottom: 1px solid #39b74c;
	 border-top: 1px solid #39b74c ;
}

.component li{
	
}
.component  i{
	padding-right: 15px;
}
#sidebar .component {
	padding-top: 20px;
	text-align: left;
	padding: 0px;

}
.component li:hover {
	background-color: #90EE90;
}
 .component  ul  :hover{
 	background-color: green;
 }



.sidebar-header{
	padding: 30px;
}
.active{
	background-color:#39b74c;

}

.component{

}

.navhead{
	box-shadow: 10px 10px 10px 10px grey;
}

.main{
	width: 100%;
	height:  100%;
	padding: 20px;
	position: absolute;
	background-color:;
}

.toggle-btn{
	color:#39b74c;
	font-size: 40px;
	cursor: pointer;
	margin-left: 20px; 
}





 








	</style>

		<div class="wrapper">

							<nav class="navbar navhead bg-light p-2">
                				<div class="logo">
                					<i class="toggle-btn fa fa-bars" onclick="openside()" aria-hidden="true" style=""></i>
                					<img id="nacoss"  src="images/nacosslogo.png">
               	 				</div>
               	 				<a type="submit" href="inc/logout.php" class=" btn btn-danger text-center" style="float:  right;" >Logout</a>
            				</nav>
			<div id="sidebar">
							<i class="fa fa-remove remove" onclick="closeslide()"></i>
					<div class="sidebar-header">
						<h3 class="text-center">Dashboard</h3>
						<?php 


						 ?>
						
						<p class="text-center"></p>
					</div>

					<ul class="component">
						
						<li>
							<a href="student-dashboard.php"  ><i class="fa fa-home" aria-hidden="true"></i>Welcome</a>
						</li>
						
						<li>
							<a href="announcement.php"><i class="fa fa-bullhorn" aria-hidden="true"></i>Announcement</a>
						</li>
						<li>
							<a href="assignment.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Assignment</a>
						</li>
						<li >
							<a href="student-course.php"><i class="fa fa-book" aria-hidden="true"></i>Courses</a>
						</li>
						<li>
							<a href="virtual-classroom.php"><i class="fa fa-pencil-square-o"></i>Classroom</a>
						</li>
<!-- 						<li>
							<a href="submit.php"><i class="fa fa-pencil-square-o"></i>Submit</a>
						</li> -->
						<li>
							<a href="chat-room.php"><i class="fa fa-pencil-square-o"></i>Chat room</a>
						</li>
						<li>
							<a href="courselist.php"><i class="fa fa-list" aria-hidden="true"></i>Course list</a>
						</li>
						<li>
							<a href="faq.php"><i class="fa fa-question-circle-o" aria-hidden="true"></i>FAQ</a>
						</li>
						<li>

							<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cog" aria-hidden="true"></i>Settings</a>
							<ul class="collapse list-unstyled" id="pageSubmenu">
								<li>
									<a href="edit-profile.php">Edit profile</a>
								</li>
								<li>
									<a href="#">Update </a>
								</li>
							</ul>
						</li>
					</ul>
			</div>

			<div class="main-page-wrapper" class="main">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12" id="view">
							<div class="container">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						</div>
					</div>
				</div>
			</div>
	

		<script>

			function openside(){
				// body...
				document.getElementById('sidebar').style.display = 'block';
				document.querySelector('.content').style.marginLeft = '250px';
				document.querySelector('.container-footer').style.marginLeft = 'auto';

			}

			function closeslide(){
				document.getElementById('sidebar').style.display = 'none';
				document.querySelector('.content').style.marginLeft = '0';
				document.querySelector('.container-footer').style.marginLeft = '0';
			}
		</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 	
          </body>
          </html> 