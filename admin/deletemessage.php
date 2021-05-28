<?PHP
session_start();
//connecting to database
include('script/connect.php');
	$sql1="DELETE FROM mail WHERE id='$_GET[details]' ";
	$result1=mysqli_query($conn, $sql1);
	if($result1){$_SESSION['error']="DELETED";header("location:message.php");}
	
	?>