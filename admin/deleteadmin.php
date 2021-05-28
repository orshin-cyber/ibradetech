<?PHP
session_start();
//connecting to database
include('script/connect.php');

	$testAdmin = "SELECT * FROM tbl_admin WHERE username = '$_SESSION[username]' AND piority = 2";
	$queryTestAdmin = mysqli_query($conn, $testAdmin);
	$count = mysqli_num_rows($queryTestAdmin);

	if ($count > 0) {
		$_SESSION['error']="You are not an authorized adminstrator";
		header("location:admin.php");
	}
	else{
		$sql1="DELETE FROM tbl_admin WHERE id='$_GET[details]' ";
		$result1=mysqli_query($conn, $sql1);
		if($result1){$_SESSION['error']="DELETED";header("location:admin.php");}
	}

	?>