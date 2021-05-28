<?php
include('connect.php');
$update = "UPDATE mail SET status = 'Read' WHERE id='$_GET[details]' ";
$query = mysqli_query($conn, $update);
if ($query) : ?>
	<?php
		session_start();
		if (!isset($_SESSION['email'])) {
    	header('location:index.php');
		}
	?>

  <?php include 'navbar.php' ?>
				<section>
					<div class="container">

				<?php
					require('script/connect.php');
					$getDetails = "SELECT * FROM mail WHERE id='$_GET[details]' ";
					$queryDetails = mysqli_query($conn, $getDetails);
					$infos = mysqli_fetch_assoc($queryDetails);
				?>
				
					<div class="col m6 s12">
						<h6><b>Sender:</b> <?php echo $infos['fullname'];?> </h6>
						<h6><b>Sender's Email:</b> <?php echo $infos['email'];?> </h6>
						<h6><b>Subject:</b> <?php echo $infos['title'];?> </h6><br>
						<h6><b>Date & Time:</b> <?php echo $infos['date'];?> </h6><br>
						<div>
					
							<em><?php echo $infos['body'];?></em>
						</div>
					</div>
</div>
<?php else:
	echo "Unable to read message".mysqli_error($conn);

?>
<?php endif ?>
				</section>
			</main>
	</div>	

</div>


