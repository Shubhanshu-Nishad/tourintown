<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit1'])) {
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobileno'];
  $subject = $_POST['subject'];
  $description = $_POST['description'];
  $sql = "INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':fname', $fname, PDO::PARAM_STR);
  $query->bindParam(':email', $email, PDO::PARAM_STR);
  $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
  $query->bindParam(':subject', $subject, PDO::PARAM_STR);
  $query->bindParam(':description', $description, PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
    $msg = "Enquiry  Successfully submited";
    echo '
		<script>
		alert("Thanks for contacting us.Shortly we will contact you :)");
		</script>
		';
    $emailid1 = "metaeducatorshubu@gmail.com";
    $emailid2 = "";
    $emailid3 = "";
    $mailHtml = "Full Name   : $fname \n
                 Email id    : $email \n
                 Mobile NO   :  $mobile \n
                 subject     :  $subject \n
                 Description : $description \n
    ";
    function smtp_mailer($to, $subject, $msg)
    {
      require_once("smtp/class.phpmailer.php");
      $mail = new PHPMailer();
      $mail->SMTPDebug  = 3;
      $mail->IsSMTP();
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = 'tls';
      $mail->Host = "smtp.gmail.com";
      $mail->Port = 587;
      $mail->IsHTML(true);
      $mail->CharSet = 'UTF-8';
      $mail->Username = "metacrestors@gmail.com";
      $mail->Password = "iambossji";
      $mail->SetFrom("metacrestors@gmail.com");
      $mail->Subject = $subject;
      $mail->Body = $msg;
      $mail->AddAddress($to);
      if (!$mail->Send()) {
        return 0;
      } else {
        return 1;
      }
    }
    smtp_mailer($emailid1, 'Contact form', $mailHtml);
    smtp_mailer($emailid2, 'Contact form', $mailHtml);
    smtp_mailer($emailid3, 'Contact form', $mailHtml);
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
  } else {
    echo '
		<script>
		alert("Something went wrong. Please try again");
		</script>
		';
  }
}

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
  <!-- ***** Preloader End *****-->
  <?php include('includes/header.php'); ?>




  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/contact.jpeg); height: 500px;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br>
            <br>
            <h2>Feel free to <em>Contact Us</em></h2>
            <p>A mind that is stretched by a new experience can never go back to its old dimensions.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ***** Features Item Start ***** -->
  <section class="section" id="features">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>contact <em> info</em></h2>
            <img src="assets/images/line-dec.png" alt="waves">

          </div>
        </div>

        <div class="col-md-4">
          <div class="icon">
            <i class="fa fa-phone"></i>
          </div>

          <h5><a href="callto:7895739754">+91 7895739754</a></h5>

          <br>
        </div>
        <div class="col-md-4">
          <div class="icon">
            <i class="fa fa-map-marker"></i>
          </div>

          <h5>Omaxe Eternity Vrindavan & New Gen Iedc,Start Up Launchpad GLA U Mathura</h5>

          <br>
        </div>


        <div class="col-md-4">
          <div class="icon">
            <i class="fa fa-envelope"></i>
          </div>

          <h5><a href="mailto:tourtown47@gmail.com">tourtown47@gmail.com </a></h5>

          <br>
        </div>


      </div>
    </div>
  </section>
  <!-- ***** Features Item End ***** -->

  <!-- ***** Contact Us Area Starts ***** -->
  <section class="section" id="contact-us" style="margin-top: 0">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14147.677987463383!2d77.65058456977538!3d27.565008800000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39736f6f31bde6d1%3A0x5e9d978d9749fff7!2sOmaxe%20Eternity%20Vrindavan!5e0!3m2!1sen!2sin!4v1628338512875!5m2!1sen!2sin" width="100%" height="595px" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-xs-12">
          <div class="contact-form section-bg" style="background-image: url(assets/images/contact-1-720x480.jpg)">
            <form name="enquiry" method="post">
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input name="fname" type="text" id="name" placeholder="Your Name*" required="">
                  </fieldset>
                </div>
                <div class="col-md-6 col-sm-12">
                  <fieldset>
                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                  </fieldset>
                </div>
                <div class="col-md-12 col-sm-12">
                  <fieldset>
                    <input name="mobileno" type="text" id="mobilenumber" minlength="10" placeholder="Mobile Number*" required="">
                  </fieldset>
                </div>
                <div class="col-md-12 col-sm-12">
                  <fieldset>
                    <input name="subject" type="text" id="subject" placeholder="Subject*" required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="description" rows="6" id="description" minlength="20" title="Please enter more than 20 characters." placeholder="Message*" required=""></textarea>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button name="submit1" type="submit" id="submit1" class="main-button">Send Message</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Contact Us Area Ends ***** -->

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