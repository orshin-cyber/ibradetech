<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}

//connecting to database
include('script/connect.php');
  $sql1="SELECT * FROM project WHERE id='$_GET[details]' ";
  $result1=mysqli_query($conn, $sql1);
  while ($row = mysqli_fetch_array($result1)){
    $id = $row['id'];
    $pname = $row['project_name'];
    $cname = $row['client_name'];
    $budget = $row['budget'];
    $desc = $row['description'];
    
  }

?>
<?php include('navbar.php'); ?>
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>
        <section>
          <div class=" container">
      <div class="col l10">
        

        <form method="POST" action="projectedit.php" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6 col-sm-12 form-group">
              <label for="pname"> Project Name</label>
              <input id="pname" class="form-control border border-top-0 border-info" type="text" value="<?php echo $pname; ?>"  name="pname" class="" required="required">
            </div>

            <div class="col-md-6 col-sm-12 form-group">
              <label for="cli_name"> Client Name</label>
              <input id="cli_name" value="<?php echo $cname; ?>" class="form-control border border-top-0 border-info" type="text" name="cli_name">
            </div>

            <div class="col-sm-12 form-group">
              <label for="budget"> Project Budget</label>
              <input class="form-control border border-top-0 border-info" id="budget" type="text" name="budget" value="<?php echo $budget; ?>">
            </div>

            <div class="form-group col-sm-12">
                <textarea id="desc" name="desc" cols="80" rows="10" class="materialize-textarea border border-top-0 border-info"><?php echo $desc; ?></textarea>
            </div>

<script type="text/javascript">
        CKEDITOR.replace( 'desc' );
      </script>
                
              <div class="form-group col-md-6 col-sm-12">      
                <input type="file" name="image1" required="required">
              </div>

              <div class="input-field col m6 s12">      
                <input type="file" class="" name="image2" required="required">
              </div>

              <div class="form-group col-md-6 col-sm-12">      
                <input type="file" class="" name="image3" id="gallery-photo-add">
              </div>

              <div class="form-group col m6 s12">      
                <input type="file" name="image4" required="required">
              </div>


            <div class="col s12">
              <br>
              <center> <button id="form_submit" class="btn   white-text" name="submit" style="width: 100%; background: #26a69a;">
              <i class="fas fa-sign-in-alt" aria-hidden="true"></i> Update </button> </center>
    
            </div>

      </div>
        </form>


      </div>
    </div>
        </section>
      </main>
  </div>  

</div>





<script language="javascript">
var new_msg ="<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>";
if(new_msg !="")
alert(new_msg);
</script>
