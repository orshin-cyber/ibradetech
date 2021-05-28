<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}

?>
<?php include('navbar.php'); ?>
<style type="text/css">
	.div{
		border: thin solid teal;
		border-radius: 20px;
		padding: 10px;
		margin: 10px;
	}
</style>
<main>
	<section class="container">
		<br><br><br>
		
		<div class="">
			<form method="POST" action="script/password.php">
			<div class="col-md-8 col-sm-12  div">
				<div class=" div">
					<div class="col s12">
						<?php 
							include('connect.php');
							$select = "SELECT * FROM tbl_admin WHERE email = '$_SESSION[email]' ";
							$query = mysqli_query($conn, $select);
							while($row =mysqli_fetch_array($query)){
								$password = $row['password'];
							}
						?>
						<input type="hidden" value="<?php echo "$password" ; ?>" name="id" id="cpass">
					</div>
					<h4 class="text-info text-center">
						Change Password
					</h4>
					<small style="display: none" id="error-message1" class="bg-danger p-2 text-white">Incorrect Initial Password</small>
					<small style="display: none" id="error-message2" class="alert-danger p-2 text-white">Both password fields must match.</small>
				<div class="form-group col-sm-12">
					<input type="password" class="form-control" id="ipass"  name="ipass">
					<label for="ipass">Initial Password</label>
    			</div>
    				
				<div class="form-group col-sm-12">
					<input type="password" class="form-control"  id="npass"  name="npass">
					<label for="npass">New Password</label>
    			</div>

    			<div class="form-group col-sm-12">
					<input type="password" class="form-control"  id="conpass"  name="conpass">
					<label for="conpass">Confirm Password</label>
    			</div>
    				

					<div class="col-sm-12">
        			<input id="submit" type="submit" name="submit" value="Submit" style="width: 100%" class="teal darken-1 white-text btn">
        		</div>

				</div>
			</div>
		</div>
		</form>
	</section>
</main>
<script type="text/javascript">
	const initialPassword = document.getElementById('ipass');
	const currentPassword = document.getElementById('cpass');
	const newPassword = document.getElementById('npass');
	const confirmPassword = document.getElementById('conpass');
	const errorMessage1 = document.getElementById('error-message1');
	const errorMessage2 = document.getElementById('error-message2');
	const submitButton = document.getElementById('submit');

	initialPassword.addEventListener('blur', ()=>{
		if (initialPassword.value === currentPassword.value) {
			initialPassword.style.border = 'thin solid green';
			errorMessage1.style.display = 'none';
			submitButton.removeAttribute('disabled');
		}
		else{
			initialPassword.style.border = 'thin solid red';
			errorMessage1.style.display = 'inline';
			submitButton.setAttribute('disabled', 'true');
		}
	});

	submitButton.addEventListener('click', ($event)=>{
		if (newPassword.value === confirmPassword.value) {
			newPassword.style.border = 'thin solid green';
			confirmPassword.style.border = 'thin solid green';
			errorMessage2.style.display = 'none';
		}
		else{
			newPassword.style.border = 'thin solid red';
			confirmPassword.style.border = 'thin solid red';
			errorMessage2.style.display = 'inline';
			$event.preventDefault();
		}
	});
</script>
<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>