<?php
session_start();
if (!isset($_SESSION['email'])) {
	header('location:index.php');
}

?>
<?php include('navbar.php'); ?>

                <section>
                        <div class=" container w-75">

                <?php
                    require('script/connect.php');
                    $getDetails = "SELECT * FROM mail WHERE id='$_GET[details]' ";
                    $queryDetails = mysqli_query($conn, $getDetails);
                    $infos = mysqli_fetch_assoc($queryDetails);
                ?>
                
                    <form method="POST" action="script/messagereply.php" enctype="multipart/form-data">
            <div class="row">

              <input type="hidden" name="id" value="<?php echo $infos['id']; ?>" class="">
            


                <div class="col-md-6 col-sm-12 form-group">
                    <label for="pname">Subject</label>
                    <input id="pname" class="form-control" type="text" name="subject" readonly=""
                    required="" value="re: <?php echo $infos['title']; ?>">
                </div>

                <div class="col-md-6  col-sm-12 form-group">
                    <label for="pname">Reciever's E-mail</label>
                    <input id="pname" class="form-control" type="text" name="email" readonly="" 
                    required="" value="<?php echo $infos['email']; ?>">
                </div>

                
                <div class="form-group col-sm-12" style="border-bottom: 2px green">
                    <label for="textarea1">Message Body</label>
                    <textarea class="form-control" id="textarea1" name="body" class=""></textarea>
                </div>


                <div class="col-sm-12">
                    
                    <center> <button id="form_submit" class="btn btn-block text-white" name="submit" style="background: #26a69a">
                    <i class="fas fa-paper-plane"></i> Sign In </button> </center>
    
                </div>

            </div>
        </form>

                    
                </section>
                    
        </div>
                </section>
            </main>
    </div>  




	