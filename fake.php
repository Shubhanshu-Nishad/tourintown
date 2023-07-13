<?php if($_SESSION['login'])
	{?>
	<div class="top-header ">
		<div class="container">
			<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
				<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
				<li class="prnt"><a href="profile.php">My Profile</a></li>
					<li class="prnt"><a href="change-password.php">Change Password</a></li>
				<li class="prnt"><a href="tour-history.php">My Tour History</a></li>
				<li class="prnt"><a href="issuetickets.php">Issue Tickets</a></li>
			</ul>
			<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
				<li class="tol">Welcome :</li>				
				<li class="sig"><?php echo htmlentities($_SESSION['login']);?></li> 
				<li class="sigi"><a href="logout.php" >/ Logout</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div><?php } else {?>
	<div class="top-header">
		<div class="container">
			<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
				<li class="hm"><a href="index.php"><i class="fa fa-home"></i></a></li>
					<li class="hm"><a href="admin/index.php">Admin Login</a></li>
			</ul>
			<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
				<li class="tol"> Mobile Number : 7895739754</li>				
				<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
				<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
	<?php }?>
	https://source.unsplash.com/1600x900/?nature,water

	<?php } ?>


	<?php
error_reporting(0);
include('send_email.php');
if (isset($_POST['send_otp'])) {
	include('smtp/PHPMailerAutoload.php');
	// session_start();
	// $con=mysqli_connect('localhost','root','','user');
	$email = $_POST['email'];
	// $res=mysqli_query($con,"select * from user where email='$email'");
	// $count=mysqli_num_rows($res);
	$sql = "SELECT EmailId FROM tblusers WHERE EmailId=:email";
	$query = $dbh->prepare($sql);
	$query->bindParam(':email', $email, PDO::PARAM_STR);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	$cnt = 1;
	if ($query->rowCount() > 0) {
		echo '
		<script>
		alert("This Email Id is already in use. Please ! Choose Another Email Id :(");
		</script>
		';
		header('location:index.php');
	} else {
		$otp = rand(11111, 99999);
		mysqli_query($con, "update user set otp='$otp' where email='$email'");
		$html = "Your otp verification code is " . $otp;
		$_SESSION['EMAIL'] = $email;
		smtp_mailer($email, 'OTP Verification', $html);
	}
}
?>


<?php
$con=mysqli_connect("localhost","root","","tms");
$id=mysqli_real_escape_string($con,trim($_GET['id']));
mysqli_query($con,"update tblusers set verification_status='1' where verification_id='$id'");
echo "Your account verified";
?>

$verification_id=rand(111111111,999999999);
        $con=mysqli_connect("localhost","root","","tms");
        $mailHtml="$verification_id is your otp to change your password.";
        $res=mysqli_query($con,"update  tblusers SET verification_id = $verification_id where EmailId='$email'");


		<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','u331252296_shubhanshuji');
define('DB_PASS','3qFbOTY/P');
define('DB_NAME','u331252296_tms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>