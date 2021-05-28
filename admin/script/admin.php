<?php
session_start();
include('connect.php');

$email = mysqli_real_escape_string($conn, $_POST['email']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$pnum = mysqli_real_escape_string($conn, $_POST['pnum']);

//testing for current adminstrator to avoid unauthorized to add an admin

$testAdmin = "SELECT * FROM tbl_admin WHERE username = '$_SESSION[username]' AND piority = 2";
$queryTestAdmin = mysqli_query($conn, $testAdmin);
$count = mysqli_num_rows($queryTestAdmin);

if ($count > 0) {
	$_SESSION['error']="You are not an authorized adminstrator";
	header("location:..\admin.php");
}
else{
	$checkAdmin = "SELECT * FROM tbl_admin WHERE email = '$email' ";
	$queryCheckAdmin = mysqli_query($conn, $checkAdmin);
	$ifAvailable = mysqli_num_rows($queryCheckAdmin);
	if ($ifAvailable > 0) {
		$_SESSION['error'] = "User Already Available as an adminstrator";
		header("location:..\admin.php");
	}
	else{
		$addAdmin = "INSERT INTO tbl_admin (username, fullname, email, phonenumber) VALUES ('$uname', '$fname', '$email', '$pnum') ";
		$queryAddAdmin = mysqli_query($conn, $addAdmin);
		if($queryAddAdmin){
			$_SESSION['error'] = "Successfully Added an Admin";
			header("location:..\admin.php");
		}
		else{
			$_SESSION['error'] = "An Error occor";
			header("location:..\admin.php");
		}
	}
}