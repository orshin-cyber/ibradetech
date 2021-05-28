<?php
session_start();

if(isset($_POST['submit'])){

	$file1 = $_FILES['image1']['name'];
	$file2 = $_FILES['image2']['name'];
	$file3 = $_FILES['image3']['name'];
	$file4 = $_FILES['image4']['name'];

		function updateDetails(){
			require ('connect.php');
			$pname = mysqli_real_escape_string($conn, $_POST['pname']);
			$cname = mysqli_real_escape_string($conn, $_POST['cli_name']);
			$budget = mysqli_real_escape_string($conn, $_POST['budget']);
			$desc = mysqli_real_escape_string($conn, $_POST['desc']);
			$update = "UPDATE project SET 
			project_name = '$pname', 
			client_name = '$cname', 
			budget = '$budget', 
			description = '$desc' WHERE id='$_POST[id]' ";
			$queryUpdate = mysqli_query($conn, $update);
			if ($queryUpdate) {
				header("location:\editproject.php");
				$_SESSION['error'] = "project Successfully Updated";
				
			}
			else{
				header("location:\editproject.php");
				$_SESSION['error'] = "Error in Updating";
			}
		
		}

	updateDetails();

}

?>