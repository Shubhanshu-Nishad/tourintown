<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Tourintown</title>
    <?php
    include('includes/css_files.php');
    ?>

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <?php include('includes/header.php'); ?>

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/nature.jpeg); height :500px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Our <em>Packages</em></h2>
                        <p>We live in a wonderful world that is full of beauty, charm and adventure. There is no end to the adventures we can have if only we seek them with our eyes open.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->
    <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Packages</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>The more borders you cross, the more your mind opens .</p>
                    </div>
                </div>
            </div>



            <div class="row">
                <?php $sql = "SELECT * from tbltourpackages";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                $cnt = 1;
                if ($query->rowCount() > 0) {
                    foreach ($results as $result) {    ?>

                        <div class="col-lg-4">
                            <div class="trainer-item">
                                <div class="image-thumb">
                                    <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" alt="">
                                </div>
                                <div class="down-content">
                                    <span>
                                        <?php echo htmlentities($result->PackageLocation); ?>
                                    </span>

                                    <h4><?php echo htmlentities($result->PackageName); ?></h4>
                                    <h6><?php echo htmlentities($result->PackageType); ?></h6>
                                    <p><b>Features</b> <?php echo htmlentities($result->PackageFetures); ?></p>
                                    <!-- <h5> ₹<?php echo htmlentities($result->PackagePrice); ?></h5> -->

                                    <ul class="social-icons">
                                        <li><button type="button" class="btn btn-secondary">₹ <?php echo htmlentities($result->PackagePrice); ?></button></li>
                                        <li><a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId); ?>">+ View Package</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>
        </div>
        <br>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <!-- ***** Images Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="gallery/1.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <br>
                            <h4 style="text-align:center">Mashup with friends</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="gallery/2.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <br>
                            <h4 style="text-align:center">Thar Desert</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="gallery/3.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <br>
                            <h4 style="text-align:center">The Camel Ride</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        </div>
    </section>
    <!-- ***** images Ends ***** -->
    <!-- ***** Images Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="gallery/4.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <br>
                            <h4 style="text-align:center">Group Photo with friends</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="gallery/5.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <br>
                            <h4 style="text-align:center">Residence House</h4>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="gallery/6.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <br>
                            <h4 style="text-align:center">Nature Photography</h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        </div>
    </section>
    <!-- ***** images Ends ***** -->

    <!-- team -->
    <!-- <div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="assets\images\neetesh.jpeg">
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">Mr. Neetesh Panday</h3>
                    <span class="post">Director & CEO</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                <img src="assets\images\shubhanshu.png">
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">Kristiana</h3>
                    <span class="post">Web Designer</span>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                <img src="assets\images\shubhanshu.png">
                    <ul class="social">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-google-plus"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="#" class="fab fa-linkedin"></a></li>
                    </ul>
                </div>
                <div class="team-content">
                    <h3 class="title">Shubhanshu Nishad</h3>
                    <span class="post">Chief Techinical Officer</span>
                </div>
            </div>
        </div>
    </div>
</div> -->

    <!--- routes ---->
    <!-- <div class="routes">
	<div class="container">
	<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt wow fadeInDown animated" data-wow-delay=".5s">
				<h3>80000</h3>
				<p>Enquiries</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left">
			<div class="rou-left">
				<a href="#"><i class="fa fa-user"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>1900</h3>
				<p>Regestered users</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".5s">
			<div class="rou-left">
				<a href="#"><i class="fa fa-ticket"></i></a>
			</div>
			<div class="rou-rgt">
				<h3>7,00,00,000+</h3>
				<p>Booking</p>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div> -->



    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/mixitup.js"></script>
    <script src="assets/js/accordions.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <!--- /footer-top ---->
    <?php include('includes/footer.php'); ?>
    <!-- signup -->
    <?php include('includes/signup.php'); ?>
    <!-- //signu -->
    <!-- signin -->
    <?php include('includes/signin.php'); ?>
    <!-- //signin -->
    <!-- write us -->
    <?php include('includes/write-us.php'); ?>
    <!-- //write us -->
</body>

</html>