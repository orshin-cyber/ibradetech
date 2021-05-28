<?php
include 'connect.php';
 include 'header.php'; ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area" id="home">
            <div class="banner_inner">
				<div class="container">
					<div class="banner_content text-center">
						<h2>WELCOME TO<br /> IBRADETECH NIG. LTD</h2>
						
						<!-- <a class="banner_btn" href="#">Get Started</a> -->
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Design Area =================-->
    <div class="container">
        <section class="design_area p_120">
        	<div class="container">
  				<div class="main_title">
        			<h2 style="color: #00695c;">Our vision and Mission</h2>
        		</div>
        		<div class="design_inner row">
        			<div class="col-lg-6">
        				<div class="feature_item">
        					<div class="text-center">
        					 <i class="fas fa-home fa-5x teal-text" style="color: #00695c;" aria-hidden="true"></i>
        					</div>
        					<h4 class="text-center" style="color: #00695c;">Our Vision</h4>
        					<p>To be the preeminent provider of superior construction services by consistently improving the quality 
              of our product. <br>
              To add value for clients through innovation, foresight, integrity, and aggressive performance. <br>
              To serve with character and purpose that brings honor to God.</p>
        				</div>
        			</div>
        			<div class="col-lg-6">
        				<div class="feature_item">
        					<div class="text-center">
        					<i class="fas fa-building fa-5x teal-text" style="color: #00695c;" aria-hidden="true"></i>
        					</div>
        					<h4 class="text-center" style="color: #00695c;">Our Mission</h4>
        					<p>To be the preeminent provider of superior construction services by consistently improving the quality 
              of our product. <br>
              To add value for clients through innovation, foresight, integrity, and aggressive performance. <br>
              To serve with character and purpose that brings honor to God.</p>
        					
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
    </div>
        <!--================End Design Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area">
        	<div class="container">
        		<div class="main_title">
        			<h2  style="color: #00695c;">What We Can Offer You</h2>
        		</div>
        		<div class="feature_inner row">
        			<div class="col-lg-3 col-md-6">
        				<div class="feature_item">
        					<i class="fas fa-school fa-5x teal-text" style="color: #00695c;" aria-hidden="true"></i>
        					<h4 style="color: #00695c;">General Contractor</h4>
        					<p>We supply our customer the best, as this as been what God Almighty has bless us with</p>
        				
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6">
        				<div class="feature_item">
        					<i class="fas fa-building fa-5x teal-text" style="color: #00695c;"style="color: #00695c;" aria-hidden="true"></i>
        					<h4 style="color: #00695c;" class="text-center">Building&nbsp;&&nbsp;Maintainance</h4>
        					<p>We give our customer the best building from scratch and also maintain and existing one.</p>
        					
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6">
        				<div class="feature_item">
        					<i class="fas fa-file-import fa-5x teal-text " style="color: #00695c;" aria-hidden="true"></i>
        					<h4 style="color: #00695c;">Importing & Exporting</h4>
        					<p>We help our customers in importing and exporting of Goods.</p>
        					
        				</div>
        			</div>
        			<div class="col-lg-3 col-md-6">
        				<div class="feature_item">
        					 <i class="fab fa-product-hunt  fa-5x teal-text" style="color: #00695c;"></i>
        					<h4 style="color: #00695c;"> Sales and Suppilier</h4>
        					<p>We sale and supply all kind of building Materials, which include: Land, Blocks, Sand etc.</p>
        					
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Post Slider Area =================-->
        <?php 
        $query = 'SELECT * FROM project ORDER BY id ASC';
        $query = mysqli_query($conn, $query);
        $result = mysqli_num_rows($query);
        //echo $result;
        $total_result_db = $result;
        $result_per_page = 4;

        $total_pages = ceil($total_result_db/$result_per_page);

        if(!isset($_GET['page'])){
            $page =1;
        }else{
            $page = $_GET['page'];
        }
        $project_result = ($page-1)*$result_per_page;
        $pagination_query = 'SELECT * FROM project LIMIT '.$project_result. ',' .$result_per_page;
         $query = mysqli_query($conn, $pagination_query);
            if (!$query) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}


         ?>
        <style>
            .card-img-top {
    width: 100%;
    height: 15vw;
    object-fit: cover;
}
.col-sm-12{
    margin-top: 50px;
}
@media (max-width:767px){
                .card-img-top {
    width: 100%;
    height: 50vw;
    object-fit: cover;
}
}

        </style>
        <section class="feature_area">

            <div class="container p-2 ">
            <div class="main_title">
                <h2  style="color: #00695c;">Our Recent Completed Projects</h2>
            </div>
                <div class="row">
                    <?php while ($row = mysqli_fetch_assoc($query)): ?>
                    <div class="  col-sm-12 col-lg-3">
                        
                         <div class="card h-100" height="700px">
                            <img src="project/<?php echo $row['image1'] ?>" height="600px" class="img-fluid card-img-top">
                            <div class="card-body text-center">
                               <a href=""><h4>Location:<?php echo  $row['project_name'] ?></h4></a>
                               <p style="color: white;"><h5>Budget:<?php echo $row['budget'] ;?><h5></p> 
                                <a class="btn text-white  btn-block" style="background-color: #00695c;" href="ourrecentproject.php?id='<?php echo $row['id']; ?>' ">View Details</a>
                            </div>
                        
                        </div>
                       
                    </div> 
                      <?php endwhile; ?> 
                </div>
             </div>
          </section>
           

        <!--================Post Slider Area =================-->
        <!-- <?php 
         $sql = "SELECT * FROM project ORDER BY id DESC";
        $query = mysqli_query($conn, $sql);
        

         ?> -->

         <?php for($page = 1; $page<=$total_pages; $page++){
            echo '<a href="index.php?page='.$page.' " style="cursor:pointer;border:1px solid #ccc; padding:7px; margin: 0 auto 0 auto;position:relative; left:700px; bottom:20px;" class="my-5">' .$page. "</a>";
         } ?>

       <?php include 'footer.php' ?>
               <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>