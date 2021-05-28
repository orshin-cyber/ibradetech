<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}

?>
<style type="text/css">
	.div{
		border: thin solid teal;
		border-radius: 20px;
		padding: 10px;
		margin: 10px;
	}
</style>



  <?php include 'navbar.php' ?>
				<section>
					<section class="container">
		<br><br><br>
		<?php 
			include('connect.php');
			$select = "SELECT * FROM tbl_admin WHERE id = '$_GET[details]' ";
			$query=mysqli_query($conn, $select);
			while ($row = mysqli_fetch_array($query)){
				$id = $row['id'];
			}
		?>
		<div class="col-md-7 mx-auto">
			<form method="POST" action="script/editadmin.php">
			<div class=" col-sm-12  div">
				<div class="row div">
					<div class="col-sm-12">
						<input type="hidden" value="<?php echo"$id"; ?>" name="id">
					</div>
					<h3 class="teal-text center">
						Edit Admin
					</h3>
				<div class="form-group col-sm-12">
					<label>Change Status</label>
					<select class="form-control" name="status">
      					<option class="form-control" value="Disabled">Disable</option>
      					<option class="form-control" value="Enabled">Enable</option>
    				</select>
    				
    			</div>
    				

    			<div class="form-group col-sm-12">
    				<label>Select Admin Piority</label>
    				<select class="form-control" name="piority">
      					<option value="1">Top Piority</option>
      					<option value="2">Low Piority</option>
    				</select>
    				
    			</div>
    				

					<div class="col-sm-12">
        			<input id="submit" type="submit" name="submit" value="Submit" style="width: 100%" class=" btn btn-info text-white">
        		</div>

				</div>
			</div>
		</div>
		</form>
	</section>
.</section>
			</main>
	</div>	

</div>



