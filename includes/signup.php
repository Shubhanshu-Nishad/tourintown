
<!--Javascript for check email availabilty-->
<script>
	function checkAvailability() {

		$("#loaderIcon").show();
		jQuery.ajax({
			url: "check_availability.php",
			data: 'emailid=' + $("#email").val(),
			type: "POST",
			success: function(data) {
				$("#user-availability-status").html(data);
				$("#loaderIcon").hide();
			},
			error: function() {}
		});
	}
</script>
<?php
error_reporting(0);
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$mnumber = $_POST['mobilenumber'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$repassword = md5($_POST['repassword']);
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
	echo "<script type='text/javascript'> document.location = 'package-list.php'; </script>";
	} else {
		$verification_id=rand(111111111,999999999);
		$verification_status = 0;
		
		
		$msg="We've just sent a verification link to <strong>$email</strong>. Please check your inbox and click on the link to get started. If you can't find this email (which could be due to spam filters), just request a new one here.";
		
		$mailHtml="Please confirm your account registration by clicking the button or link below: <a href='http://localhost/tourtown/check.php?id=$verification_id'>http://127.0.0.1/php/email_verification/check.php?id=$verification_id</a>";
		
		


		$sql = "INSERT INTO  tblusers(FullName,MobileNumber,EmailId,Password,verification_status,verification_id) VALUES(:fname,:mnumber,:email,:password,:verification_status,:verification_id)";
		$verification_status = 0;
		$query = $dbh->prepare($sql);
		$query->bindParam(':fname', $fname, PDO::PARAM_STR);
		$query->bindParam(':mnumber', $mnumber, PDO::PARAM_STR);
		$query->bindParam(':email', $email, PDO::PARAM_STR);
		$query->bindParam(':password', $password, PDO::PARAM_STR);
		$query->bindParam(':verification_status',$verification_status, PDO::PARAM_STR);
		$query->bindParam(':verification_id', $verification_id, PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $dbh->lastInsertId();
		if ($lastInsertId) {
			echo "<script>alert('You have not confirmed your account yet. Please check your inbox and verify your email id.');</script>";
			// include('includes/send_mail.php');
			function smtp_mailer($to,$subject, $msg){
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
				$mail->Body =$msg;
				$mail->AddAddress($to);
				if(!$mail->Send()){
					echo '"A verification link is send to in your account. Please click it to verify your account."';
					// header('Location: http://localhost/tourtown/package-list.php');
					return 0;
				}else{
					return 1;
				}
			}
			smtp_mailer($email,'Account Verification',$mailHtml);
		

		} else {
		}
	}
}
?>



<?php
session_start();
if (isset($_POST['signin'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sql = "SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";
	$query = $dbh->prepare($sql);
	$query->bindParam(':email', $email, PDO::PARAM_STR);
	$query->bindParam(':password', $password, PDO::PARAM_STR);
	$query->execute();
	include('includes/connection.php');
	$res=mysqli_query($con,"select * from tblusers where EmailId='$email' and Password='$password'");
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	if ($query->rowCount() > 0) {
		$row=mysqli_fetch_assoc($res);
		$verification_status=$row['verification_status'];
		if($verification_status==1){
			$_SESSION['login'] = $_POST['email'];
			echo "<script type='text/javascript'> document.location = 'package-list.php'; </script>";
		}else{
			echo "<script>alert('You have not confirmed your account yet. Please check your inbox and verify your email id.');</script>";
			$verification_id=$row['verification_id'];
			$mailHtml="Please confirm your account registration by clicking the button or link below: <a href='http://localhost/tourtown/check.php?id=$verification_id'>http://127.0.0.1/php/email_verification/check.php?id=$verification_id</a>";
				function smtp_mailer($to,$subject, $msg){
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
				$mail->Body =$msg;
				$mail->AddAddress($to);
				if(!$mail->Send()){
					return 0;
				}else{
					return 1;
				}
			}
			smtp_mailer($email,'Account Verification',$mailHtml);
		}
		
		// echo "<script type='text/javascript'> document.location = 'package-list.php'; </script>";
	} else {

		echo "<script>alert('You have enter wrong Credential details.');</script>";
	}
}
?>






<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
												<ul>
													<li><a class="fb" href="#"><i></i>Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Google</a></li>
													
												</ul>
											</div>
											<div class="login-right">
												<form name="signup" method="post">
													<h3>Create your account </h3>
					

				<input type="text" value="" placeholder="Full Name" name="fname" autocomplete="off" required="">
				<input type="text" value="" placeholder="Mobile number" maxlength="10" name="mobilenumber" autocomplete="off" required="">
		<input type="text" value="" placeholder="Email id" name="email" id="email" onBlur="checkAvailability()" autocomplete="off"  required="">	
		 <span id="user-availability-status" style="font-size:12px;"></span> 
	<input type="password" value="" placeholder="Password" name="password" required="">	
													<input type="submit" name="submit" id="submit" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
									</div>
								</div>
							</section>
					</div>
					</div>
				</div>
			</div> -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="login-wrap" style="min-height:818px;">
		<div class="login-html">
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
			<div class="login-form">
				<form method="post">
					<div class="sign-in-htm">
						<div class="group">
							<label for="user" class="label">E-mail</label>
							<input class="input" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Invalid email address" onBlur="checkAvailability()"  autocomplete="off" type="text" placeholder="Enter your Email" required="">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input class="input" type="password" name="password" id="password" placeholder="Password" value="" required="">
						</div>
						<div class="group">
							<input class="button" type="submit" name="signin" value="SIGNIN">
						</div>
				</form>




				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="forgot-password.php">Forgot password?</a>
				</div>
			</div>



			<form name="signup" method="post">
			<div class="sign-up-htm">
				<br>

					<div class="group">
					<label  for="pass" class="label" style="text-align:center;">Full Name</label>
						<input placeholder="Enter your Name" name="fname" autocomplete="off" id="user" type="text" class="input" required="">
					</div>
					<div class="group">
					<label for="pass" class="label" style="text-align:center;">Email-Id</label>
						<input type="text" value="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  title="Invalid email address" placeholder="Enter your Email id" name="email" id="email" onBlur="checkAvailability()" autocomplete="off" required="" class="input" id="pass">
					</div>
					<div class="group">
					<label  for="pass" class="label" style="text-align:center;">Mobile Number </label>
						<input placeholder="Enter Mobile Number" name="mobilenumber" autocomplete="off" id="pass" type="number" class="input" data-type="number" required="">
					</div>
					<div class="group">
					<label  for="pass" class="label" style="text-align:center;">Password</label>
						<input placeholder="Enter your Password" id="account_password" minlength="8" title="Password must be greater than 8 characters" name="password" type="password" class="input" data-type="password" required="" onkeyup='check();'>
					</div>
					<div class="group">
					<label  for="pass" class="label" style="text-align:center;">Re-type Password</label>
						<input placeholder="Re-type Password" id="repassword" minlength="8" title="Password must be greater than 8 characters" name="repassword" type="password" class="input" data-type="password" required="" onkeyup='check();'>
					</div>
					<dv class="group">
						<label id='message' for="pass" class="label" style="text-align:center;"></label>
					</dv>

					<div class="group">
						<input type="submit" name="submit" id="submit" value="CREATE ACCOUNT" class="button" require=''>
					</div>
				</form>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>