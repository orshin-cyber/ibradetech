<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<style>
			label{
		font-size: 16px;
		font-family: cambria;
		color: teal;
		font-weight: bold;
		text-transform: capitalize;
	}
	h3{
		font-family: cambria;
		text-transform: capitalize;
		word-spacing: 10px;
		letter-spacing: 10px
	}
	input{
		font-family: cambria;
		font-size: 16px;
		font-weight: bold;
	}


	
	</style>
	<?php include('navbar.php'); ?>
			<section>
					<div class="row">
							<div class="col-lg-12 col-sm-12 ">
								<a href="#add-modal" data-toggle="modal" data-target="" style="background-color:  #26a69a;" class="btn btn-large text-white ">  
									<i class="fas fa-users"></i> Add Admin
				            	</a>
							</div>
				   </div>
				   <div class="table-responsive-sm">
				   <table class="table table-sm  table-striped bg-light mt-5">
			<thead>
				<th>Full Name</th>
				<th>Username</th>
				<th>E-mail</th>
				<th>Telephone</th>
				<th>Status</th>
				<th>Piority</th>
				<th>Action</th>
			</thead>

			<tbody style="text-transform: capitalize;">	
				<?php 
					include('script/connect.php');
					$select = "SELECT * FROM tbl_admin WHERE username != 'admin' ";
					$query = mysqli_query($conn, $select);
					while ($row = mysqli_fetch_array($query)) {
						echo "
						<tr>
						<td>$row[fullname]</td> <td>$row[username]</td> <td>$row[email]</td><td>$row[phonenumber]</td>
						<td>$row[status]</td><td>$row[piority]</td> 
						<td>
						<span>
						<a href=editadmin.php?details=$row[id] class=\" text-success\"> Edit 
						</a></span> 
						|
						<span> 
						<a href=deleteadmin.php?details=$row[id] onclick=\"return confirm('YOU MEAN TO DELETE')\"; class=\" text-danger\"> Del 
						</a></span>
						</td></tr>
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
			</tbody>
		</table>
		</div>
				<div class="modal col-sm-12" id="add-modal" style="border-radius: 20px;">
			    	<div class="modal-dialog mw-75 w-100 justify-content-center">
			      		<div class="modal-content">
			      			<!-- Modal Header -->
					        <div class="modal-header">
					         <button type="button" class="close" data-dismiss="modal">&times;</button>
					        </div>
			        		 <!-- Modal body -->
					        <div class="modal-body">
					            <form method="POST" action="script/admin.php">
							          	 <h3 class="modal-title text-info text-center">Add administrator</h3>
							          	<div class="row">
							          		<div class="col-md-6 col-sm-12 form-group">
							          			<label for="fname"> Full Name</label>
							        			<input id="fname" type="text" name="fname"  class="form-control" required="required">
							          		</div>
							          		 <div class="col-md-6 col-sm-12 form-group">
							          			<label for="uname">  Username</label>
							        			<input id="uname" type="text" name="uname"  class="form-control" required="required">
							          		</div>

							        		<div class="col-md-6 col-sm-12 form-group">
							        			<label for="pnum"> Phone Number</label>
							        			<input id="pnum" type="text" name="pnum" class="form-control" required="required">
							        		</div>

							        		<div class="col-md-6 col-sm-12 form-group">
							        			<label for="email"> E-mail</label>
							        			<input id="email" type="email" class="form-control" name="email" required="required">
							        		</div>
							        		 <div class="col-sm-12">
							        			<input id="submit" type="submit"  name="submit" value="Submit" style="width: 100%; background:  #26a69a;" class="btn btn-info text-white">
							        		</div>
							          	</div>
					          	 </form>
					        </div>
			    		</div>
					</div>
				</div>
			</section>
		</main>
	</div>	

</div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>


<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>

</body>
</html>

