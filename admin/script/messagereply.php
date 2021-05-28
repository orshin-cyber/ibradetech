<?php
include('connect.php');
if(isset($_POST['submit'])){
	$reciever = mysqli_real_escape_string($conn, $_POST['email']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$sender = "info@ibradetech.com";
	$message = mysqli_real_escape_string($conn, $_POST['body']);
	$header = "From: $sender";
	$mail = mail($reciever, $subject, $message);
	if ($mail) {
		echo "sent";
	}
	else{
		echo "Not sent";
	}
}

?>