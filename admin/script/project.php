<?php 
session_start();
include('connect.php');

if(isset($_POST['submit'])){
	$pname = mysqli_real_escape_string($conn, $_POST['pname']);
	$cname = mysqli_real_escape_string($conn, $_POST['cli_name']);
	$budget = mysqli_real_escape_string($conn, $_POST['budget']);
	$desc = mysqli_real_escape_string($conn, $_POST['desc']);

	  $name1=$_FILES['image1']['name'];
	  $size1=$_FILES['image1']['size'];
	  $type1=$_FILES['image1']['type'];
	  $temp1=$_FILES['image1']['tmp_name'];

	  $name2=$_FILES['image2']['name'];
	  $size2=$_FILES['image2']['size'];
	  $type2=$_FILES['image2']['type'];
	  $temp2=$_FILES['image2']['tmp_name'];

	  $name3=$_FILES['image3']['name'];
	  $size3=$_FILES['image3']['size'];
	  $type3=$_FILES['image3']['type'];
	  $temp3=$_FILES['image3']['tmp_name'];

	  $name4=$_FILES['image4']['name'];
	  $size4=$_FILES['image4']['size'];
	  $type4=$_FILES['image4']['type'];
	  $temp4=$_FILES['image4']['tmp_name'];

		 $caption1=$_POST['caption'];
	  	 $link=$_POST['link'];

  move_uploaded_file($temp1,"..\project/".$name1);
  move_uploaded_file($temp2,"..\project/".$name2);
  move_uploaded_file($temp3,"..\project/".$name3);
  move_uploaded_file($temp4,"..\project/".$name4);


	$insertProject = "INSERT INTO project (project_name, client_name, budget, description, image1, image2, image3, image4) 
	VALUES ('$pname', '$cname', '$budget', '$desc', '$name1', '$name2', '$name3', '$name4') ";
	$queryInsert = mysqli_query($conn, $insertProject);
	if($queryInsert){
		$_SESSION['error']="Project Successfully Inserted";
		header("location:..\project.php");
	}else{
		$_SESSION['error']="Error in Adding Project";
		header("location:..\project.php");
	}

}