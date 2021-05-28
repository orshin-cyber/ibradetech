<?php
session_start();
include('connect.php');
if (isset($_POST['submit'])) {
	$status = mysqli_real_escape_string($conn, $_POST['status']);
	$priority = mysqli_real_escape_string($conn, $_POST['piority']);
	$id = $_POST['id'];

	$testAdmin = "SELECT * FROM tbl_admin WHERE username = '$_SESSION[username]' AND piority = 2";
	$queryTestAdmin = mysqli_query($conn, $testAdmin);
	$count = mysqli_num_rows($queryTestAdmin);

	if ($count > 0) {
		$_SESSION['error']="You are not an authorized adminstrator";
		header("location:..\admin.php");
	}
	
	else{
		$update = "UPDATE tbl_admin SET status = '$status', piority = '$priority' WHERE id = '$id' ";

	 	$query = mysqli_query($conn, $update);
	 	if ($query) {
	 		$_SESSION['error'] = "User Successfully Updated";
	 		header("location:..\admin.php");
	 	}
	 	else{
	 		$_SESSION['error'] = "User Not Successfully Updated";
	 		header("location:..\admin.php");
	 	}
	}

}