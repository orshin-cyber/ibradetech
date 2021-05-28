<?php
session_start();
include('connect.php');
$initPassword = mysqli_real_escape_string($conn, $_POST['ipass']);
$newPassword = mysqli_real_escape_string($conn, $_POST['npass']);
$conPassword = mysqli_real_escape_string($conn, $_POST['conpass']);

$select = "SELECT * FROM tbl_admin WHERE email = '$_SESSION[email]' ";
$query = mysqli_query($conn, $select);
while($row =mysqli_fetch_array($query)){
	$password = $row['password'];
}
if ($initPassword != $password) {
	$_SESSION['error'] = "Invalid Initial Password";
	header("location:..\password.php");
}
elseif ($newPassword != $conPassword) {
	$_SESSION['error'] = "Password Must Match Eachother";
	header("location:..\password.php");	
}
else{
	$update = "UPDATE tbl_admin SET password = '$newPassword' WHERE email = '$_SESSION[email]' ";
	$queryUpdate = mysqli_query($conn, $update);
	if ($queryUpdate) {
		$_SESSION['error'] = "Password Successfully Updated";
		header("location:..\password.php");
	 } 
	 else{
		$_SESSION['error'] = "Password Not Updated";
		header("location:..\password.php");
	 }
}
?>