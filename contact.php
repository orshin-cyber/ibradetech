        <?php include 'header.php'; ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Contact Us</h2>
						<div class="page_link">
							<a href="index.php">Home</a>
							<a href="contact.php">Contact</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
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
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Balogun Quaters, Imuta Via</h6>
                                <p> Igbesa, Igbesa,
                                    Ogun State, Nigeria</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">08056404772 &nbsp  08038513172  
                                    08165637177</a></h6>
                                <p>Mon to Fri 9am to 6 pm</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6>bbioguy@gmail.com    
                                    info@Ibradetech.com</h6>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" id="customerMail" >
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Message Subject" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="body" id="textarea1" rows="1" placeholder="Enter Message" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" id="send" name="submit" class="btn submit_btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================Footer Area =================-->
     <?php include 'footer.php'; ?>

     <script>
    document.getElementById('customerMail').addEventListener('submit', getMail);

function getMail(e){
    e.preventDefault();
    var name = document.getElementById('name').value;
    var title = document.getElementById('title').value;
    var mail = document.getElementById('email').value;
    var body = document.getElementById('textarea1').value;
    // var sendButton = document.getElementById('send');

    var params = "name="+name + "&title="+title + "&email="+mail + "&body="+body;

    var xhr = new XMLHttpRequest();
            xhr.open('POST', 'message.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function (){
                if(this.readyState == 3){
                    document.getElementById('send').setAttribute('disabled', 'true');
                    document.getElementById('send').value = 'Sending...';
                    document.getElementById('send').color = 'teal';
                    document.getElementById('send').style.background = 'White';
                }
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('customerMail').reset();
                    document.getElementById('send').value = 'Sent';
                    document.getElementById('send').style.color = 'teal';
                    document.getElementById('send').style.background = 'white';
                    document.getElementById('send').removeAttribute('disabled');
                    alert(this.responseText);
                }
            }

            xhr.send(params); 
        }
</script>
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