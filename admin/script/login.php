<?php
session_start();
include_once('connect.php');

if (isset($_POST['login'])) {
	$user = mysqli_real_escape_string($conn, $_POST['user']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);

	if($user == "" || $pass ==""){
		$_SESSION['error'] = "Error in logging in";
		header("location:..\index.php");
	}

	$select = "SELECT * FROM tbl_admin WHERE email = '$user' AND password = '$pass' AND status = 'Enabled' ";
	$query = mysqli_query($conn, $select);
	$num = mysqli_num_rows($query);
	if($num > 0){
		$fetch = mysqli_fetch_array($query);
		$_SESSION['username'] = $fetch['username'];
		$_SESSION['email'] = $fetch['email'];
		$_SESSION['fname'] = $fetch['fullname'];
		$_SESSION['status'] = $fetch['status'];
		$_SESSION['role'] = $fetch['piority'];
		header('location:..\dashboard.php');
	}
	else{
		$select2 = "SELECT * FROM tbl_admin WHERE username = '$user' AND password = '$pass' AND status = 'Enabled' ";
		$query2 = mysqli_query($conn, $select2);
		$num2 = mysqli_num_rows($query2);
	if($num2 > 0){
		$fetch2 = mysqli_fetch_array($query2);
		$_SESSION['username'] = $fetch2['username'];
		$_SESSION['email'] = $fetch2['email'];
		$_SESSION['fname'] = $fetch2['fullname'];
		$_SESSION['status'] = $fetch2['status'];
		$_SESSION['role'] = $fetch2['piority'];
		header('location:..\dashboard.php');
	}
	else{
		$_SESSION['error'] = "Error in logging in Or Disabled By Top Administrator";
		header("location:..\index.php");
	}
	}

	}
	// if ($query) {
		
