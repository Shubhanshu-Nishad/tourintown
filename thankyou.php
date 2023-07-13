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
<?php include('includes/header.php');?>
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Please Verifiy <em>Your Account</em></h2>
                        <p>We've just sent a verification link to <strong>your resigster email id</strong>. Please check your inbox and click on the link to get started. If you can't find this email (which could be due to spam filters), just request a new one here.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ***** Cars Starts ***** -->
<section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Packages</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>



			<div class="row">
            <?php $sql = "SELECT * from tbltourpackages";
            $query = $dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            $cnt=1;
            if($query->rowCount() > 0)
            {
            foreach($results as $result)
            {	?>
            
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                <?php echo htmlentities($result->PackageLocation);?>
                            </span>

                            <h4><?php echo htmlentities($result->PackageName);?></h4>
                            <h6><?php echo htmlentities($result->PackageType);?></h6>
                            <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p>
                            <!-- <h5> ₹<?php echo htmlentities($result->PackagePrice);?></h5> -->

                            <ul class="social-icons">
								<li><button type="button" class="btn btn-secondary">₹ <?php echo htmlentities($result->PackagePrice);?></button></li>
                                <li><a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>">+ View Package</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php }} ?>
                </div>
            </div>
            <br>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->
<!--- /banner-1 ---->
<!--- contact ---->
<!-- <div class="contact">
	<div class="container">
	<h3> Confirmation</h3>
		<div class="col-md-10 contact-left">
			<div class="con-top animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
	

              <h4></h4>
            
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





<!--- /contact ---->
<?php include('includes/footer.php');?>
<!-- sign -->
<?php include('includes/signup.php');?>	
<!-- signin -->
<?php include('includes/signin.php');?>	
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>	
<!-- //write us -->
</body>
</html>