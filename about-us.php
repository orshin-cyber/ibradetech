<?php
include 'connect.php';
 include 'header.php' ?>

        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>About Us</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="about-us.html">About Us</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Design Area =================-->
        <section class="design_area p_120">
        	<div class="container">
        		<div class="design_inner row nt-5">
        			<div class="col-lg-5">
        				<img class="img-fluid" width="100%" src="img/slide1.jpeg" alt="">
        				<br>
        				<img class="img-fluid mt-5" width="100%" src="img/slide2.jpeg" alt="">
        			</div>
        			<div class="col-lg-7">
        				<div class="design_left_text">
        					<h6>Welcome to Ibradetech </h6>
        				<span>Ibradetech is a building construction company located at Balogun Quarters, Imuta Via Igbesa, Ado-Odo/Ota, L. G. A, Ogun State. 	<br> <br> <strong>Objective:</strong><br><hr style="border: 2px solid #00695c;">
        		To carry on business of installation and maintenance of buildings, sales and suppliers of building materials, 
                building material’s agents, importers and exporters, general contractors, manufacturer’s agents and dealers in all 
                allied products that may seem conducive with the afore-mentioned businesses in so far as such allied products may 
                seem conducive to the company’s interests. <br><br>
                To acquire by purchase or otherwise any contract, or contracts and to carry out or execute and complete same. <BR> <br>
                To manufacture, supply and deal in piping, insulation materials, ceiling materials, roofing materials, flooring materials, cement, chippings, rods, sand, wall coverings, windows,
                 doors, paints and scaffolding equipment.</span>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Design Area =================-->
        
        <!--================Post Slider Area =================-->
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
            echo '<a href="index.php?page='.$page.' " style="cursor:pointer;border:1px solid #ccc; padding:7px; padding-bottom:px;  margin: 0 auto 0 auto;position:relative; left:700px; bottom:10px;" class = "p-3 mb-3">' .$page. "</a>";
         } ?>
                 <!--================End Post Slider Area =================-->
        
        <!--================Testimonials Area =================-->
  <section class="feature_area mt-5">
        	<div class="container">
        		<div class="main_title">
        			<h2  style="color: #00695c;">Meet Our Team</h2>
        		</div>
        		<div class="feature_inner row ">
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<img src="img/okolo2.jpeg" class="card-img-top rounded-circle">
        					<h4 style="color: #00695c;" class="text-center">Balogun Ibraheem Adeyemi</h4>
        					<p class="text-center">08056404772</p>
        					<p class="text-center">bbioguy@gmail.com</p>
        					<p class="text-center">Director</p>
        				
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<img src="img/aina.jpeg" class="card-img-top rounded-circle">
        					<h4 style="color: #00695c;" class="text-center">Aina Lukmon Olawalei</h4>
        					<p class="text-center">08165637177</p>
        					<p class="text-center">lukmaina2013@gmail.com</p>
        					<p class="text-center">Director</p>
        					
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<div class="feature_item">
        					<img src="img/ade.jpeg" class="card-img-top rounded-circle">
        					<h4 style="color: #00695c;" class="text-center">Wahab Abibat Adebola</h4>
        					<p class="text-center">08066081152</p>
        					<p class="text-center">abibatwahab@gmail.com</p>
        					<p class="text-center">Director</p>
        					
        				</div>
        			</div>
        		</div>
        	</div>
        </section>


        <!--================End Testimonials Area =================-->
        <div class="container-fluid p-4  mt-4 bg-light">
		        <section class="feature_area">
		        	<div class="container">
		        		<div class="main_title">
		        			<h2  style="color: #00695c;">What We  Offer Our Client</h2>
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
		        					<i class="fas fa-building fa-5x teal-text" style="color: #00695c;" aria-hidden="true"></i>
		        					<h4 style="color: #00695c;" class="text-center">Building & Maintainance</h4>
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
		</div>        
        
        <!--================Clients Logo Area =================-->

        <!--================End Clients Logo Area =================-->
        
        <!--================Footer Area =================-->
      <?php include 'footer.php'; ?>
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