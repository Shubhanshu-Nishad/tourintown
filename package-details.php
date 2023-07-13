<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit2'])) {
  $pid = intval($_GET['pkgid']);
  $useremail = $_SESSION['login'];
  $fromdate = $_POST['fromdate'];
  $todate = $_POST['todate'];
  $comment = $_POST['comment'];
  $status = 0;
  // $q1 = "SELECT MobileNumber FROM tblusers WHERE EmailId=$useremail ";
  // $q2 = "SELECT FullName FROM tblusers WHERE EmailId=$useremail ";
  // $q3 = "SELECT PackageName FROM  tbltourpackages WHERE PackageId=$pid ";
  // $mobileno = $pdo->query($q1);
  // $fname = $pdo->query($q2);
  // $packagename = $pdo->query($q3);
  $sql = "INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
  $query = $dbh->prepare($sql);
  $query->bindParam(':pid', $pid, PDO::PARAM_STR);
  $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
  $query->bindParam(':fromdate', $fromdate, PDO::PARAM_STR);
  $query->bindParam(':todate', $todate, PDO::PARAM_STR);
  $query->bindParam(':comment', $comment, PDO::PARAM_STR);
  $query->bindParam(':status', $status, PDO::PARAM_STR);
  // $query->bindParam(':mobileno',$mobileno,PDO::PARAM_STR);
  // $query->bindParam(':fname',$fname,PDO::PARAM_STR);
  // $query->bindParam(':packagename ',$packagename ,PDO::PARAM_STR);
  $query->execute();
  $lastInsertId = $dbh->lastInsertId();
  if ($lastInsertId) {
    $msg = "Booked Successfully";
    $emailid1 = "metaeducatorshubu@gmail.com";
    $emailid2 = "tourtown47@gmail.com";
    $emailid3 = "neeteshpandey.7895@gmail.com";
    // $mailHtml = "
    // 			Full Name     : $fname \n
    //              Phone No      : $mobileno \n
    //              Email id      : $useremail \n
    //              Package Id    : $pid \n
    //              package Name  : $packagename \n
    //              fromdate      :  $fromdate \n
    //              todate        :  $todate \n
    //              Query         : $comment \n
    // ";
    $mailHtml = "
				Email id      : $useremail \n
				Package Id    : $pid \n
				fromdate      :  $fromdate \n
				todate        :  $todate \n
				Query         : $comment \n
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
      $mail->Password = "nehajishreya";
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
    smtp_mailer($emailid1, 'Booking Form ', $mailHtml);
    smtp_mailer($emailid2, 'Booking Form ', $mailHtml);
    smtp_mailer($emailid3, 'Booking Form ', $mailHtml);
    echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
  } else {
    $error = "Something went wrong. Please try again";
  }
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Tour In Town | Tourism Management System</title>

  <!-- <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script> -->
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
  <link href="css/style.css" rel='stylesheet' type='text/css' />
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <!-- <link href="css/font-awesome.css" rel="stylesheet"> -->
  <?php
  include('includes/css_files.php');
  ?>

  <!-- <link rel="stylesheet" href="css/jquery-ui.css" /> -->


</head>

<body>

  <!-- <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div> -->

  <!-- top-header -->
  <?php include('includes/header.php'); ?>




  <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="cta-content">
            <br>
            <br>
            <h2>Learn more <em>About Us</em></h2>
            <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--- /banner ---->



  <!--- selectroom ---->
  <div class="selectroom">
    <div class="container">
      <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
      <?php
      $pid = intval($_GET['pkgid']);
      $sql = "SELECT * from tbltourpackages where PackageId=:pid";
      $query = $dbh->prepare($sql);
      $query->bindParam(':pid', $pid, PDO::PARAM_STR);
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_OBJ);
      $cnt = 1;
      if ($query->rowCount() > 0) {
        foreach ($results as $result) {  ?>

          <form name="book" method="post">
            <div class="selectroom_top">
              <div class="col-md-4 selectroom_left wow fadeInLeft animated" data-wow-delay=".5s">
                <img src="admin/pacakgeimages/<?php echo htmlentities($result->PackageImage); ?>" class="img-responsive" alt="">
              </div>
              <div class="col-md-8 selectroom_right wow fadeInRight animated" data-wow-delay=".5s">
                <h2><?php echo htmlentities($result->PackageName); ?></h2>
                <p class="dow">#PKG-<?php echo htmlentities($result->PackageId); ?></p>
                <p><b>Package Type :</b> <?php echo htmlentities($result->PackageType); ?></p>
                <p><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation); ?></p>
                <p><b>Features</b> <?php echo htmlentities($result->PackageFetures); ?></p>
                <div class="ban-bottom">
                  <h6>Select tentative date when you are free to Enjoy trip .</h6>
                  <br>
                  <div class="row">
                    <div class="bnr-right col-md-6">
                      <label class="inputLabel col-md-6">From</label>
                      <input class="date " id="datepicker" type="date" min="<?php echo htmlentities(date("Y-m-d")); ?>" placeholder="dd-mm-yyyy" name="fromdate" required="">
                    </div>
                    <div class="bnr-right col-md-6">
                      <label class="inputLabel col-md-6">To</label>
                      <input class="date " id="datepicker1" type="date" min="<?php echo htmlentities(date("Y-m-d")); ?>" placeholder="dd-mm-yyyy" name="todate" required="">
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="grand">
                  <p>Avg. Cost pr person</p>
                  <h3>₹ <?php echo htmlentities($result->PackagePrice); ?></h3>
                </div>
              </div>
              <h3>Package Details</h3>
              <p style="padding-top: 1%"><?php echo htmlentities($result->PackageDetails); ?> </p>
              <div class="clearfix"></div>
            </div>
            <div class="selectroom_top" style="height: 360px;">
              <h3>Specify No. of person in your group to reavel latest discount offers. </h3>
              <br>
              <div class="selectroom-info animated wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -60px">
                <ul>

                  <li class="spe">
                    <label class="inputLabel">Book it to reveal offer of group/solo trip. </label>
                    <input class="special" type="text" name="comment" required="">
                  </li>
                  <?php if ($_SESSION['login']) { ?>
                    <li class="spe">
                      <button type="submit" name="submit2" class="btn-primary btn">Book</button>
                    </li>
                  <?php } else { ?>
                    <li class="sigi" style="margin-top: 1%">
                      <a href="#" data-toggle="modal" data-target="#myModal" class="btn-primary btn"> Book it. </a>
                    </li>
                  <?php } ?>
                  <div class="clearfix"></div>
                </ul>
              </div>

            </div>
          </form>
      <?php }
      } ?>


    </div>
  </div>



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

  <!--- /selectroom ---->
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
</body>

</html>