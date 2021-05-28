<?php
//session_start();


	//FUNCTION FOR UPDATING WITHOUT IMAGE
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
				header("location:projects.php");
				$_SESSION['error'] = "project Successfully Updated";
				
			}
			else{
				header("location:projects.php");
				$_SESSION['error'] = "Error in Updating";
			}
		
		}

		function updateWithImage($image, $temp, $imageTable){

	  		$file1=$_FILES['image1']['name'];
	  		$size1=$_FILES['image1']['size'];
	  		$type1=$_FILES['image1']['type'];
	  		$temp1=$_FILES['image1']['tmp_name'];

	  		$file2=$_FILES['image2']['name'];
	  		$size2=$_FILES['image2']['size'];
	  		$type2=$_FILES['image2']['type'];
	  		$temp2=$_FILES['image2']['tmp_name'];

	  		$file3=$_FILES['image3']['name'];
	  		$size3=$_FILES['image3']['size'];
	  		$type3=$_FILES['image3']['type'];
	  		$temp3=$_FILES['image3']['tmp_name'];

	  		$file4=$_FILES['image4']['name'];
	  		$size4=$_FILES['image4']['size'];
	  		$type4=$_FILES['image4']['type'];
	  		$temp4=$_FILES['image4']['tmp_name'];


			$pname = mysqli_real_escape_string($conn, $_POST['pname']);
			$cname = mysqli_real_escape_string($conn, $_POST['cli_name']);
			$budget = mysqli_real_escape_string($conn, $_POST['budget']);
			$desc = mysqli_real_escape_string($conn, $_POST['desc']);

  			move_uploaded_file($temp,"project/".$image);

  			$update = "UPDATE project SET 
  			project_name = '$pname', 
  			client_name = '$cname', 
  			budget = '$budget', 
  			description = '$desc', 
  			$imageTable = '$image' WHERE id='$_POST[id]'";

  			$queryUpdate = mysqli_query($conn, $update);
			if ($queryUpdate) {
				header("location:projects.php");
				$_SESSION['error'] = "Details and Image Successfully Updated";
			}
			else{
			header("location:projects.php");
			$_SESSION['error'] = "Error in Updating details or First Image";
			}
		}
	
		
	

?>