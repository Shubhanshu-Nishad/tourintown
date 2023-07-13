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




  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br>
            <br>
            <h2>Learn more <em>About Us</em></h2>
            <p>Our happiest moments as tourists always seem to come when we stumble upon one thing while in pursuit of something else.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Our Classes Start ***** -->
  <section class="section" id="our-classes">
    <div class="container">
      <br>
      <br>
      <br>
      <div class="row" id="tabs">
        <div class="col-lg-4">
          <ul>
            <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i> Our Goals</a></li>
            <li><a href='#tabs-2'><i class="fa fa-briefcase"></i> Our Work</a></a></li>
            <li><a href='#tabs-3'><i class="fa fa-heart"></i> Our Passion</a></a></li>
          </ul>
        </div>
        <div class="col-lg-8">
          <section class='tabs-content'>
            <article id='tabs-1'>
              <img src="gallery/1.jpeg" alt="">
              <h4>Our Goals</h4>

              <p>To tie up with each and every school , college and universities of the country as well as abroad so that we can make tourism as the compulsory objective .
                To provide a best in class experience so that students can enjoy ,make memories & they can also live their life freely so that they can reduce the level of their stress.</p>

              <p>Our New launches is Destination Lectures in Schools , Colleges & University .
                Like lectures in Manali, Lectures in Shimla.
                And on other Destinations as well.
                By doing this we can create a strong friendly bond between students and faculty so that they can reduce their stress. And students can gain lots of practical knowledge followed by lots of fun and adventure.
                And they will also see the beauty of this nature , beauty of this country and Beauty of this world.</p>

            </article>
            <article id='tabs-2'>
              <img src="gallery/14.jpeg" alt="">
              <h4>Our Work</h4>
              <p>We provide best in class experienced trips , events Our motive is to provide luxury and Adventurous trips ,so that students can relax freely and make sweet memories with their loved ones . As tourism is one of the great stress buster . SO we organises the best trips and events during the trips so that students can live their life freely to reduce the level of their stress.
                We New Launch is Destination Lectures </p>
              <p>By doing this we can create a strong bond between students and faculty so that they can reduce their stress.And student can gain lots of practical knowledge in inclusion with lots of fun , sightseeing of the beauty of nature and places with lots of music , dance and events.</p>

              <p>Our vision is to tie up with each and every school ,College,University of India as well as abroad and to make tourism as a compulsory object .Because in today's time a student deals with lots of stress and pressure . And Tourism is the great stress buster.</p>
            </article>
            <article id='tabs-3'>
              <img src="gallery/15.jpeg" alt="">
              <h4>Our Passion</h4>
              <p>To exceed our clients’ expectations by providing a personalized travel experiences, promoting innovative, quality, and cost effective travel solutions for international visitors.</p>

              <p>The passion of our people and their dedication to work within the inbound travel industry is critical to our success.</p>

              <p>Commit to create a more sustainable and responsible business. By setting up a solid system of Team work, Clients & Suppliers involved, by establishing relationships built on trust, integrity and expertise with both our internal and external customers.</p>
            </article>
          </section>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Our Classes End ***** -->

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

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>






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