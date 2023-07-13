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



  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/priyacy.jpeg); height:500px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br>
            <br>
            <h2>PRIVACY <em>POLICY</em></h2>
            <p>Though we travel the world over to find the beautiful, we must carry it with us or we find it not.</p>
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

      <section class='tabs-content'>
        <article>
          <p>Tourintown is committed to respecting and protecting the privacy of others. We pledge to protect your personal information in accordance with our privacy policy and respect the confidentiality of all visitor or subscriber data submitted to Tourintown.com</p>
          <p> Our privacy policy covers that how Tourintown deals with the information provided by the sub-merchants for registration. Tourintown.com is one of the foremost secured platforms available anywhere. We adopt stringent security measures to make sure that each sensitive information must be protected. We are committed to supplying high security while handling the private information of clients, which is provided by the clients for the record of Tourintown. If there's any change regarding the privacy policy issues, it'll be updated on the site.</p>
          <br>

          <h4>Sharing of Information</h4>
          <p>
            Tourintown won't disclose or share any information concerning sub-merchants to the other organization at any time unless the sub-merchant authorizes it. We share the private information of consumers or our sub-merchant like name, name, address, telephone no, E-mail address just for our records purpose which is employed later in the processing of the order, communicating with customers & sub-merchants about the transaction placed at Tourintown.com</p>

          <br>

          <h4>Procurement of Information</h4>
          <p> We are committed to procuring only the specific information from our customers & Sub-merchants. The Sub-Merchants may collect private information from their customers through the purchases that are made online through its site. The information we acquire from the customers & Sub-Merchant is necessary to maintain the quality of services more efficiently.
          </p>

          <br>
          <h4>Security Measures </h4>
          <p>Tourintown.com is highly concerned with the security measures to maintain data privacy & confidentiality. All the private information of a user is shipped to our web server by using Secure Socket Layers (SSL) protocol, which encrypts all the knowledge including your Mastercard information, before sending it to the Payment Gateway. This prevents the misuse of data from unauthorized hands.</p>
          <br>

          <h4>
            Third Party Exposure</h4>
          <p> In online transactions, some important information also will be shared with third parties as MasterCard processors, concerning banks, etc. Tourintown isn't responsible in any circumstances for any third party, which receives information of any customer in any unauthorized way.
          </p>
          <br>

          <h4>Recommendations & Updations</h4>
          <p>Any suggestions & updations regarding the privacy policy or any other questions & views to update the policy will be appreciated, in this case, you may contact us.
          </p>

          <br>

          <h4>We respect the intention and purpose that our clients submit any personal data.</h4>
          <p>   In accordance with our policy, we'll not use any information for any means aside from stated or implied (i.e., customer care, technical support, account management, etc.)</p>
        </article>
      </section>
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
              <a href="contact.html">Contact us</a>
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