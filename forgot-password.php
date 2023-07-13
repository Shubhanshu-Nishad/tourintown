<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['sendotp'])) {
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $sql = "SELECT EmailId FROM tblusers WHERE EmailId=:email and MobileNumber=:mobile";
    $query = $dbh->prepare($sql);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->execute();

    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $verification_id = rand(111111111, 999999999);
        // $chngpwd1 = $dbh->prepare($con);
        // $chngpwd1->bindParam(':verification_id', $verification_id, PDO::PARAM_STR);
        // $chngpwd1->execute();
        include('includes/connection.php');
        $mailHtml = "$verification_id is your otp to change your password.";
        $res = mysqli_query($con, "update  tblusers SET verification_id = $verification_id where EmailId='$email'");
        echo "<script>alert('We have just sent a verification link to your resigster email id. Please check your inbox and click on the link to get started. If you can not find this email (which could be due to spam filters), just request a new one here.');</script>";
        echo "<script type='text/javascript'> document.location = 'enterotp.php'; </script>";
        $mailHtml = "$verification_id is your otp to change your password.";

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
                // echo '"We have just sent a verification link to your resigster email id. Please check your inbox and click on the link to get started. If you can not find this email (which could be due to spam filters), just request a new one here."';
                return 0;
            } else {
                return 1;
            }
        }
        smtp_mailer($email, 'Change your password.', $mailHtml);
    } else {
        $error = "Email id or Mobile no is invalid";
    }
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Tourintown</title>
    <?php include('includes/css_files.php'); ?>

</head>

<body>
    <?php include('includes/header.php'); ?>
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Recover <em> Password</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- /banner-1 ---->
    <!--- privacy ---->
    <div class="privacy">
        <div class="container">


            <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
            <form name="sendotp" method="post">
                <p style="width: 350px;">
                    <br>
                    <b>Email id</b> <input type="email" name="email" class="form-control" id="email" placeholder="Reg Email id" required="">
                </p>

                <p style="width: 350px;">
                    <br>
                    <b>Mobile No</b> <br><input type="text" name="mobile" class="form-control" id="mobile" placeholder="Reg Mobile no" required="">
                </p><br>
                <button type="sendotp" name="sendotp" class="btn-primary btn">Send OTP</button>
            </form>
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



    <!--- /privacy ---->
    <!--- footer-top ---->
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