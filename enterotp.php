<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit50'])) {
    $otp = $_POST['otp'];
    $newpassword = md5($_POST['newpassword']);
    include('includes/connection.php');
    $res = mysqli_query($con, "SELECT * FROM tblusers where verification_id = $otp");
    $fetch_data = mysqli_fetch_assoc($res);
    $email = $fetch_data['EmailId'];
    // $sql = "SELECT EmailId FROM tblusers WHERE EmailId=:email and MobileNumber=:mobile";
    // $query = $dbh->prepare($sql);
    // $query->bindParam(':email', $email, PDO::PARAM_STR);
    // $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    // $query->execute();
    // $results = $query->fetchAll(PDO::FETCH_OBJ);
    if (mysqli_num_rows($res) > 0) {
        $pass = mysqli_query($con, "UPDATE  tblusers SET  Password = '$newpassword' where EmailId='$email'");
        // $pass = mysqli_query($con, "UPDATE  tblusers SET  verification_status = 1231 WHERE where EmailId='$email'");
        // $con = "update tblusers set Password=:newpassword where verification_id=:otp";
        // $chngpwd1 = $dbh->prepare($con);
        // $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
        // $chngpwd1->bindParam(':mobile', $mobile, PDO::PARAM_STR);
        // $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
        // $chngpwd1->execute();
        $msg = "Your Password succesfully changed .";
        
    } else {
        $error = "Invalid Otp .";
    }
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Tourintown</title>
    <?php include('includes/css_files.php'); ?>
    <script type="text/javascript">
        function valid() {
            if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
                alert("New Password and Confirm Password Field do not match  !!");
                document.chngpwd.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>
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
                        <h2>Check your <em> Email-Inbox</em></h2>
                        <p> <a href="https://mail.google.com/mail/u/0/?ogbl#spam" target="blank">Click here to check your spam folder.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- /banner-1 ---->
    <!--- privacy ---->
    <div class="privacy">
        <div class="container">

            <br>
            <br>
            <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
            <form name="chngpwd" method="post" onSubmit="return valid();">
                <p style="width: 350px;"><br>
                    <b>Enter OTP</b>
                    <input type="text" class="form-control" name="otp" id="otp" placeholder="Enter Otp" required="">
                </p>
                <p style="width: 350px;"><br>
                    <b>New Password</b>
                    <input type="password" class="form-control" name="newpassword" minlength="8" id="newpassword" placeholder="New Password" required="">
                </p>

                <p style="width: 350px;"><br>
                    <b>Confirm Password</b>
                    <input type="password" class="form-control" name="confirmpassword" minlength="8" id="confirmpassword" placeholder="Confrim Password" required="">
                </p>

                <p style="width: 350px;"><br>
                    <button type="submit" name="submit50" class="btn-primary btn">Change</button>
                </p>
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