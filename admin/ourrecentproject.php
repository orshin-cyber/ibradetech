<?php
include 'connect.php';
 include 'header.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];
}else{
	echo "wrong to fetch";
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<style type="text/css">
	.pdesc{
  word-spacing: 10px;
  font-size: 20px
  font-weight: bolder;
  text-transform: capitalize;
  text-decoration: underline;
  letter-spacing: 10px;
  font-family: sans-serif;


}

	img.resize {
		width: 300px;
		height: 200px;
	}

</style>
	<section class="container " style="margin-top: 200px;">
		<h2 class="mb-4">ONE OF OUR COMPLETED PROJECT</h2>
		<div class="row container mt-5">

				<?php
					//require('script/connect.php');
					$getDetails = "SELECT * FROM project WHERE id=$id ";
					$queryDetails = mysqli_query($conn, $getDetails);
					$infos = mysqli_fetch_assoc($queryDetails);
				?>
				
					<div class="col-md-6 col-sm-12">
						<h6><b>Project Name:</b> <?php echo $infos['project_name'];?> </h6>
						<h6><b>Client Name:</b> <?php echo $infos['client_name'];?> </h6>
						<h6><b>Project Budget:</b> <?php echo $infos['budget'];?> </h6><br>
						<div>
					
							<em><?php echo $infos['description'];?></em>
						</div>
					</div>

					<div class="col-md-6  col-sm-12">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-thumbnail" src=" project/<?php echo $infos['image1']; ?>" style="height: 100%" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-thumbnail" src="project/<?php echo $infos['image2']; ?>" style="height: 100%" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-thumbnail" src="project/<?php echo $infos['image3']; ?>" style="height: 100%" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-thumbnail" src="project/<?php echo $infos['image4']; ?>" style="height: 100%" alt="fourth slide">
    </div>
  </div>

</div>
					</div>

				</section>
				<hr>
					<section class="mb-5"><br><br><br>
					<div class="row mx-4 mt-sm-5">
						<div class="col-lg-3 col-sm-12 ">
							<div class="card">
								<img src="project/<?php echo $infos['image1'];?>" height="190px;">
							</div>
						</div>
						<div class="col-lg-3 col-sm-12">
							<div class="card">
								<img src="project/<?php echo $infos['image2'];?>" height="190px;">
							</div>
						</div>
						<div class="col-lg-3 col-sm-12">
							<div class="card">
								<img src="project/<?php echo $infos['image3'];?>" height="190px;">
							</div>
						</div>
						<div class="col-lg-3 col-sm-12">
							<div class="card">
								<img src="project/<?php echo $infos['image4'];?>" height="190px;">
							</div>
						</div>
					</div>
					</section>
					<?php include 'footer.php' ?>
		</div>
</main>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$('.carousel').carousel({
  interval: 2000
})
	});
</script>