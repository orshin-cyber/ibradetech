<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <?php include 'navbar.php' ?>

				<section>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="card">
									<div class="card-body d-flex justify-content-between bg-light ">
										<h4>Number of Admin:</h4>
										<h3 class="">4</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
	</div>	

</div>




    <script>
	//$(document).ready(function() {

    //$('#sidebarCollapse').click(function(){
    	// $('#sidebar').fadeToggle(1000);
   
    	

	//});

//});
</script>

</body>
</html>