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






    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="assets/images/video.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2><em>Explore</em> the world with us!</h2>
                <div class="main-button">
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!--- rupes ---->
    <!-- <div class="container">
	<div class="rupes">
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-usd"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO USD. 50 OFF</h3>
				<h4><a href="offers.html">TRAVEL SMART</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-h-square"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>UP TO 70% OFF</h3>
				<h4><a href="offers.html">ON HOTELS ACROSS WORLD</a></h4>
				
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="col-md-4 rupes-left wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<div class="rup-left">
				<a href="offers.html"><i class="fa fa-mobile"></i></a>
			</div>
			<div class="rup-rgt">
				<h3>FLAT USD. 50 OFF</h3>
				<h4><a href="offers.html">US APP OFFER</a></h4>
			
			</div>
				<div class="clearfix"></div>
		</div>
	
	</div>
</div> -->
    <!--- /rupes ---->
    <!-- 21:9 aspect ratio -->
    <!-- <div class="container">
        
<div class="embed-responsive embed-responsive-21by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6NZzPB5FSCE"></iframe>
</div>
    </div> -->




    <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Featured <em>Packages</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Travel can be one of the most rewarding forms of introspection.</p>
                    </div>
                </div>
            </div>



            <div class="row">
                <?php $sql = "SELECT * from tbltourpackages order by rand() limit 3";
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
        <div class="main-button text-center">
            <a href="package-list.php">View Packages</a>
        </div>
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
                            <img src="gallery/18.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                shimla
                            </span>
                            <h4>shimla water park</h4>
                            <p><b><em>Facts : </em></b>The capital city of Himachal Pradesh, Shimla is one of the most popular hill stations in India and is frequented by millions of tourists every year. It is named after Goddess Shyamala and is also known as Queen of Hills. ... It is one of the few hill stations in India which are home to UNESCO World Heritage Sites</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <iframe width="325" height="210" src="https://www.youtube.com/embed/35npVaFGHMY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="down-content">
                            <span>
                                India
                            </span>
                            <h4>Lets looks beauty of India</h4>
                            <p><b><em>Facts : </em></b>India is known for many, many different aspects – its food, culture, its massive population, its natural landscapes, its languages, classical dances, Bollywood or the Hindi film industry (famous Indian figures such as Amitabh Bachchan, Shahrukh Khan, Aishwarya Rai), the birthplace of yoga, spirituality, natural beauty, its warm, welcoming citizens… the list can go on. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb bg hover-zoom">
                            <img  src="gallery/3.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                Rajesthan
                            </span>
                            <h4>Thar Desert</h4>
                            <p><b><em>Facts : </em></b>The Thar Desert, also known as the Great Indian Desert, is a large, arid region in the northwestern part of the Indian subcontinent that covers an area of 200,000 km² and forms a natural boundary between India and Pakistan. It is the world's 20th-largest desert, and the world's 9th-largest hot subtropical desert.</p>
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

    <section class="section section-bg" id="schedule" style="background-image: url(assets/images/about-fullscreen-1-1920x700.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Read <em>About Us</em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>we assist you to make your travelling experience adventurous and joyous. We bring you great packages at reasonable prices. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>We furthermore plan out customised trip packages according to your requirements and budgets. We perform our best to make your travelling occasion extraordinary and memorable. We understand that journey to a completely new destination and not knowing much can be a great stress buster. Here, We support you in every possible way to make your trip very comfortable and enjoyable. </p>
                        <br>
                        <br>
                        <p>Apart from basic services we also take care of the safety of your important ones and your. Apart from sightseeing and travel we also organize adventurous entertainment activities just to make your trip more memorable. Here we also plan out various adventurous outings for school and college-going students. We believe that travelling as compared to academics is equally important. We believe that travelling is such a tension buster for students and the kind of good disclosure it gives them is necessary for every single student these days. At last, we would conclude by saying that whether it's a domestic trip or an international one we are at your assistance to provide you with great trip experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Blog Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our Small <em>Description </em></h2>
                        <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <li><a href='#tabs-1'>Our motive</a></li>
                        <li><a href='#tabs-2'>our services</a></li>
                        <li><a href='#tabs-3'>our vision</a></li>
                        <div class="main-rounded-button"><a href="about.php">Read More</a></div>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <img src="gallery/18.jpeg" alt="">
                            <h4>“All our dreams can come true, if we have the courage to pursue them.” </h4>

                            <p><i class="fa fa-user"></i>Mr. Neetesh Panday </p>

                            <p>Everyone adores travel. Journey to new locations can be your therapy for relieving pressure and creates evergreen remembrances with your liked ones. Our mission is to provide adventurous and comforting holidays at affordable tariffs.</p>
                            <div class="main-button">
                                <a href="about.php">Continue Reading</a>
                            </div>
                        </article>
                        <article id='tabs-2'>
                            <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                            <h4>“Happiness is not something ready made. It comes from your own actions.” </h4>
                            <p><i class="fa fa-user"></i> Mr. Neetesh Panday </p>
                            <p>we deliver you all the crucial services that you might consider putting up with on a journey with your family and friends. We acknowledge that everyone's preferences and desires are different. So here we are offering customised and packaged trips for your satisfaction. We do include Rental cars, self-driven cars and crews. We organize activities such as DJ nights, show parties, Thar safari, camel safari, camping, haunted trips and much more just to make your tour extra adventurous and outstanding. Apart from having fun, we ensure proper safety measures, especially for women. The hotels chosen are properly surveyed and clean. Apart from a male crew member we always have a female crew for the convenience of our female customers. </p>
                            <div class="main-button">
                                <a href="about.php">Continue Reading</a>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <img src="gallery/7.jpeg" alt="">
                            <h4>“Impossible is just an opinion.” </h4>
                            <p><i class="fa fa-user"></i> Mr. Neetesh Panday</p>
                            <p>We believe that This modern generation of students adores exploring and travelling. Our mission is to collaborate with every educational institute in India and allow every student to experience wonderful adventures. We acknowledge that trips are necessary to build a good relationship between faulty and students. Researchers conclude that students learn a lot while travelling. We organise educational trips to numerous locations all across the globe. Our mission is to make travels necessary for students and make them experience fun and fascinating adventures out there in a world full of beautiful places to explore.</p>
                            <div class="main-button">
                                <a href="about.php">Continue Reading</a>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Blog End ***** -->
    <!-- ***** Images Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="gallery/17.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                Rajesthan
                            </span>
                            <h4>Durg</h4>
                            <p><b><em>Facts : </em></b>
                                Rajasthan which is also known as the “Land of Maharajas” is the largest state of India, covering an area of about 342,239 sq. km. It comprises of 33 districts and its largest city is Jaipur, which is also its capital.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <iframe width="325" height="210" src="https://www.youtube.com/embed/35npVaFGHMY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="down-content">
                            <span>
                                India
                            </span>
                            <h4>Lets look beauty of India</h4>
                            <p><b><em>Facts : </em></b>India is known for many, many different aspects – its food, culture, its massive population, its natural landscapes, its languages, classical dances, Bollywood or the Hindi film industry (famous Indian figures such as Amitabh Bachchan, Shahrukh Khan, Aishwarya Rai), the birthplace of yoga, spirituality, natural beauty, its warm, welcoming citizens… the list can go on. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="gallery/8.jpeg" alt="">
                        </div>
                        <div class="down-content">
                            <span>
                                Manali
                            </span>
                            <h4>Sport Ground</h4>
                            <p><b><em>Facts : </em></b>Besides natural charm and unparalleled beauty, Manali is known for its unlimited adventure opportunities, the famous Hadimba Temple, the scenic Rohtang Pass, the snow-laden Solang Valley and its delightful culinary scene.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        <div class="main-button text-center">
            <a href="gallery.php">Explore Gallery</a>
        </div>
        </div>
    </section>
    <!-- ***** images Ends ***** -->
    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>To my mind, the greatest reward and luxury of travel is to be able to experience everyday things as if for the first time, to be in a position in which almost nothing is so familiar it is taken for granted.</p>
                        <div class="main-button">
                            <a href="contact.php">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Call to Action End ***** -->

    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Read our <em>Testimonials</em></h2>
                        <img src="assets/images/line-dec.png" alt="waves">
                        <p>The biggest addiction a person can have is discovering the unknown. Once it takes hold, there is no getting out and the only way to get your fix is by pushing yourself out of your comfort zone and exploring new horizons, cultural, and places. </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets\images\4.jpg" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Khushi Agrawal</h4>
                                <p><em>" As always, Mercury Travel has delivered a truly wonderful travel experience for us. Norway was a great travel destination. The parts of the country we visited were beautiful, people were friendly, everything we ate was delicious, and there were many fun things to see and do."</em></p>
                            </div>
                        </li>

                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets\images\2.jpg" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>shreyansh Agarwal</h4>
                                <p><em>"I was extremely satisfied with indeman travel solutions. Mr.Akhilesh Srivastava , has proven to be very courteous and helpful from the very beginning, trying to organize the best trip for me. Th
                                        ough everything was closed because of covid19,still he managed to give us the best trip in reasonable price,he was very helpful & responsible.i got an awesome driver(brother) during the trip.his behavior was very charming. & the accomodations were simply superb. I highly recommend this agency , My Assam tour was an unforgettable experience during the lockdown period! thank you sir...for providing me your best service..hope we will come soon again.
                                        "</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets\images\3.jpg" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Palak</h4>
                                <p><em>"We would like to say thank you for a marvellous time in Rajasthan! We are deeply impressed by the excellent organisation of all the guides, hotels and the drives to 11 unique places in your beautiful country. We did not have to wait for one single minute; everyone took outstanding care of us. And we would like to emphasize the fantastic job of your driver! We will definitely recommend your company to our friends"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets\images\1.jpg" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Puneet Agrawal</h4>
                                <p><em>"I was part of the group that went to Turkey last month. I would like to personally thank you for arranging this trip for us…The hotels and guides…We appreciate your help in organizing the tour per our request to include Pamukkale ,which was a place worth visiting. I am sure all the other members of the group echo my sentiments and express their thanks for arranging a memorable holiday"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <br>

            <div class="main-button text-center">
                <a href="terms.php">Read More</a>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->

    <!-- team -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="our-team">
                    <div class="pic">
                        <img src="assets\images\neetesh.jpeg">
                        <ul class="social">
                            <!-- <li><a href="#" class="fab fa-google-plus"></a></li> -->
                            <li><a href="mailto:neeteshpandey.7895@gmail.com" class="fas fa-envelope "></a></li>
                            <li><a href="#" target="blank" class="fab fa-instagram"></a></li>
                            <li><a href="#" target="blank" class="fab fa-linkedin"></a></li>
                            <li><a href="#" target="blank" class="fab fa-facebook"></a></li>
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
                            <!-- <li><a href="#" class="fab fa-google-plus"></a></li> -->
                            <li><a href="mailto:neeteshpandey.7895@gmail.com" class="fas fa-envelope "></a></li>
                            <li><a href="#" target="blank" class="fab fa-instagram"></a></li>
                            <li><a href="#" target="blank" class="fab fa-linkedin"></a></li>
                            <li><a href="#" target="blank" class="fab fa-facebook"></a></li>
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
                            <!-- <li><a href="#" class="fab fa-google-plus"></a></li> -->
                            <li><a href="mailto:metaeducator@gmail.com" class="fas fa-envelope "></a></li>
                            <li><a href="https://www.instagram.com/metaeducator/" target="blank" class="fab fa-instagram"></a></li>
                            <li><a href="https://www.linkedin.com/in/shubhanshu-nishad-a5511b1b2/" target="blank" class="fab fa-linkedin"></a></li>
                            <li><a href="https://www.facebook.com/shubhanshunishad2221" target="blank" class="fab fa-facebook"></a></li>
                        </ul>
                    </div>
                    <div class="team-content">
                        <h3 class="title">Shubhanshu Nishad</h3>
                        <span class="post">Chief Techinical Officer</span>
                    </div>
                </div>
            </div>
        </div>
    </div>




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