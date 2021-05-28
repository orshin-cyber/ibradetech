<?PHP
session_start();
//connecting to database
include('script/connect.php');
	$sql1="DELETE FROM project WHERE id='$_GET[details]' ";
	$result1=mysqli_query($conn, $sql1);
	if($result1){$_SESSION['error']="DELETED";header("location:projects.php");}
	
	?>