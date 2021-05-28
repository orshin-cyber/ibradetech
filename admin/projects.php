<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}

?>
<?php include('navbar.php'); ?>
<style type="text/css">
	img.resize {
		width: 300px;
		height: 200px;
	}
</style>
<main>
	<div class="row">
	<br>
	<?php 
		include('script/connect.php');
		$select = "SELECT * FROM project ORDER BY id DESC";
		$query = mysqli_query($conn, $select);
		while ($row = mysqli_fetch_array($query)) {
			echo "
			<div class=\"col-lg-3 col-md-4 col-sm-2 \">
			<div class=\"card\">
					<img src=\"project/$row[image1]\" class=\"card-img-top p-0 img-fluid\" height=0px style=\"height:180px; width:rem;\">
					<div class=\"card-body text-center\">
						<span>
							<a href=\"projectdetails.php?details=$row[id]\" class=\"text-info \" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Details\">
							<i class=\"fas fa-info-circle\"></i></a>
						</span>


						<span>
						<a href=\"editproject.php?details=$row[id]\" class=\"text-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Edit\">
						<i class=\"fas fa-edit\"></i></a>
						</span>


						<span>
							<a href=deleteproject.php?details=$row[id] onclick=\"return confirm('YOU MEAN TO DELETE')\"; class=\"text-info\"  data-toggle=\"tooltip\" data-placement=\"top\" title=\"Delete project\">
							<i class=\"fas fa-trash\"></i></a>
						</span>
					</div>
				
			</div>
			</div>
			";
		}
	?>

	<script>
				function ConfirmDelete(){
				var i = confirm("YOU MEAN TO DELETE???");
					if (i) 
						return true;
							else
								return false;
						}
				</script>
	</div>
	
</div>
</main>

<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>