<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else {
  if (isset($_POST['submit6'])) {
    $name = $_POST['name'];
    $mobileno = $_POST['mobileno'];
    $email = $_SESSION['login'];

    $sql = "update tblusers set FullName=:name,MobileNumber=:mobileno where EmailId=:email";
    $query = $dbh->prepare($sql);
    $query->bindParam(':name', $name, PDO::PARAM_STR);
    $query->bindParam(':mobileno', $mobileno, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $msg = "Profile Updated Successfully";
  }
?>

  <?php
  $useremail = $_SESSION['login'];
  $sql = "SELECT * from tblusers where EmailId=:useremail";
  $query = $dbh->prepare($sql);
  $query->bindParam(':useremail', $useremail, PDO::PARAM_STR);
  $query->execute();
  $results = $query->fetchAll(PDO::FETCH_OBJ);
  $cnt = 1;
  if ($query->rowCount() > 0) {
    foreach ($results as $result) {  ?>
  <?php }
  } ?>

  <?php
  session_start();
  error_reporting(0);
  include('includes/config.php');
  if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
  } else {
    if (isset($_POST['submit5'])) {
      $password = md5($_POST['password']);
      $newpassword = md5($_POST['newpassword']);
      $email = $_SESSION['login'];
      $sql = "SELECT Password FROM tblusers WHERE EmailId=:email and Password=:password";
      $query = $dbh->prepare($sql);
      $query->bindParam(':email', $email, PDO::PARAM_STR);
      $query->bindParam(':password', $password, PDO::PARAM_STR);
      $query->execute();
      $results = $query->fetchAll(PDO::FETCH_OBJ);
      if ($query->rowCount() > 0) {
        $con = "update tblusers set Password=:newpassword where EmailId=:email";
        $chngpwd1 = $dbh->prepare($con);
        $chngpwd1->bindParam(':email', $email, PDO::PARAM_STR);
        $chngpwd1->bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
        $chngpwd1->execute();
        echo '
            <script>
            alert("Your Password succesfully changed");
            </script>
            ';
      } else {
        echo '
            <script>
            alert("Your current password is wrong");
            </script>
            ';
      }
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
              <h2>Book<em> Your Trip</em> Now</h2>
              <p>We would fell very good when you enjoy our Trip with your friends & Family Members.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ***** Call to Action End ***** -->



    <br>
    <br>
    <br>
    <div class="container">
      <div class="main-body">
        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                  <img src="assets\images\avatar7.png" alt="Admin" class="rounded-circle" width="150">
                  <div class="mt-3">
                    <h4><?php echo htmlentities($result->FullName); ?></h4>
                    <p class="text-secondary mb-1"><?php echo htmlentities($result->EmailId); ?></p>
                    <p class="text-muted font-size-sm"><?php echo htmlentities($result->MobileNumber); ?></p>
                    <!-- <button class="btn btn-primary">Follow</button> -->
                    <button class="btn btn-outline-primary" onclick="location.href='package-list.php'" href="package-list.php">Let's See Tour Packages</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="card mt-3">
              <form name="chngpwd" method="post" onSubmit="return valid();">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <span class="text-secondary">Entery the Details to change Password</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Current Password" required="">
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <input type="password" class="form-control" name="newpassword" id="account_password" placeholder="New Password" required="" onkeyup='check();'>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <input type="password" class="form-control" name="confirmpassword" id="repassword" placeholder="Confrim Password" required="" onkeyup='check();'>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <button id="submit" type="submit" name="submit5" class="btn-primary btn">Change Password</button>
                    <label id='message' for="pass" class="label" style="text-align:center;"></label>
                  </li>
                </ul>
            </div>
            </form>

          </div>
          <div class="col-md-8">
            <div class="card mb-3">
              <form name="chngpwd" method="post">
                <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div> echo "<script>
                    alert('Please ! Try Again');
                  </script>";<?php } else if ($msg) { ?><script>
                    alert('You detail successfully Update.');
                  </script><?php } ?>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                      <br>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="name" value="<?php echo htmlentities($result->FullName); ?>" class="form-control" id="name" required="">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                      <br>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="mobileno" maxlength="10" value="<?php echo htmlentities($result->MobileNumber); ?>" id="mobileno" required="">
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                      <br>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="email" class="form-control" name="email" value="<?php echo htmlentities($result->EmailId); ?>" id="email" readonly>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Last Updation Date </h6>
                      <br>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo htmlentities($result->UpdationDate); ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Reg Date </h6>
                      <br>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo htmlentities($result->RegDate); ?>
                    </div>
                  </div>
                  <hr>
                <?php } ?>
                <div class="row">
                  <div class="col-sm-12">
                    <button type="submit" name="submit6" class="btn-primary btn">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>


          <?php
          session_start();
          error_reporting(0);
          include('includes/config.php');
          if (strlen($_SESSION['login']) == 0) {
            header('location:index.php');
          } else {
            if (isset($_REQUEST['bkid'])) {
              $bid = intval($_GET['bkid']);
              $email = $_SESSION['login'];
              $sql = "SELECT FromDate FROM tblbooking WHERE UserEmail=:email and BookingId=:bid";
              $query = $dbh->prepare($sql);
              $query->bindParam(':email', $email, PDO::PARAM_STR);
              $query->bindParam(':bid', $bid, PDO::PARAM_STR);
              $query->execute();
              $results = $query->fetchAll(PDO::FETCH_OBJ);
              if ($query->rowCount() > 0) {
                foreach ($results as $result) {
                  $fdate = $result->FromDate;

                  $a = explode("/", $fdate);
                  $val = array_reverse($a);
                  $mydate = implode("/", $val);
                  $cdate = date('Y/m/d');
                  $date1 = date_create("$cdate");
                  $date2 = date_create("$fdate");
                  $diff = date_diff($date1, $date2);
                  echo $df = $diff->format("%a");
                  if ($df > 1) {
                    $status = 2;
                    $cancelby = 'u';
                    $sql = "UPDATE tblbooking SET status=:status,CancelledBy=:cancelby WHERE UserEmail=:email and BookingId=:bid";
                    $query = $dbh->prepare($sql);
                    $query->bindParam(':status', $status, PDO::PARAM_STR);
                    $query->bindParam(':cancelby', $cancelby, PDO::PARAM_STR);
                    $query->bindParam(':email', $email, PDO::PARAM_STR);
                    $query->bindParam(':bid', $bid, PDO::PARAM_STR);
                    $query->execute();

                    $msg = "Booking Cancelled successfully";
                  } else {
                    $error = "You can't cancel booking before 24 hours";
                  }
                }
              }
            }

          ?>

            <?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>

            <?php

            $uemail = $_SESSION['login'];;
            $sql = "SELECT tblbooking.BookingId as bookid,tblbooking.PackageId as pkgid,tbltourpackages.PackageName as packagename,tblbooking.FromDate as fromdate,tblbooking.ToDate as todate,tblbooking.Comment as comment,tblbooking.status as status,tblbooking.RegDate as regdate,tblbooking.CancelledBy as cancelby,tblbooking.UpdationDate as upddate from tblbooking join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId where UserEmail=:uemail";
            $query = $dbh->prepare($sql);
            $query->bindParam(':uemail', $uemail, PDO::PARAM_STR);
            $query->execute();
            $results = $query->fetchAll(PDO::FETCH_OBJ);
            $cnt = 1;
            if ($query->rowCount() > 0) {
              foreach (array_reverse($results)  as $result ) {  ?>
                <form name="chngpwd" method="post" onSubmit="return valid();">
                  <!-- tours History -->
                  <div class="col-md-14">
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Package Name :</h6>
                            <br>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <a href="package-details.php?pkgid=<?php echo htmlentities($result->pkgid); ?>"><?php echo htmlentities($result->packagename); ?></a>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">From :</h6>
                            <br>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <?php echo htmlentities($result->fromdate); ?>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">To :</h6>
                            <br>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <?php echo htmlentities($result->todate); ?>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Query : </h6>
                            <br>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <?php echo htmlentities($result->comment); ?>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Status :</h6>
                            <br>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <?php if ($result->status == 0) {
                              echo "Pending";
                            }
                            if ($result->status == 1) {
                              echo "Confirmed";
                            }
                            if ($result->status == 2 and  $result->cancelby == 'u') {
                              echo "Canceled by you at " . $result->upddate;
                            }
                            if ($result->status == 2 and $result->cancelby == 'a') {
                              echo "Canceled by admin at " . $result->upddate;
                            }
                            ?>


                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <h6 class="mb-0">Booking Date : </h6>
                            <br>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <?php echo htmlentities($result->regdate); ?>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                          <button  class="btn-success btn"> <a disabled="true" href="#">Pay Now</a></button>
                          </div>
                          <div class="col-sm-9 text-secondary">
                            <br>
                            Confirm your registration for trip by paying only ₹2000/- pr person.
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-sm-3">
                            <?php if ($result->status == 2) {
                            ?><td>Cancelled</td>
                            <?php } else { ?>
                              <td><a href="profile.php" onclick="return confirm('Do you really want to cancel booking')">Cancel</a></td>
                            <?php } ?>
                      <br>
                          </div>
                          <div class="col-sm-9 text-secondary">
                          <button  class="btn-primary btn"> <a href="contact.php">Contact Us</a></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php $cnt = $cnt + 1;
              }
            } ?>
                </form>

        </div>
      </div>
    </div>
    </div>
  <?php } ?>







  <!-- ***** Cars Starts ***** -->
  <section class="section" id="trainers">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>Enjoy Our <em>Packages</em></h2>
            <!-- <img src="assets/images/line-dec.png" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p> -->
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
          foreach ($results as $result) {  ?>

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
      <a href="package-list.php">View All Packages</a>
    </div>
    </div>
  </section>
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