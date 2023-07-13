<?php
// session_start();
// if(isset($_POST['signin']))
// {
// $email=$_POST['email'];
// $password=md5($_POST['password']);
// $sql ="SELECT EmailId,Password FROM tblusers WHERE EmailId=:email and Password=:password";
// $query= $dbh -> prepare($sql);
// $query-> bindParam(':email', $email, PDO::PARAM_STR);
// $query-> bindParam(':password', $password, PDO::PARAM_STR);
// $query-> execute();
// $results=$query->fetchAll(PDO::FETCH_OBJ);
// if($query->rowCount() > 0)
// {
// $_SESSION['login']=$_POST['email'];
// echo "<script type='text/javascript'> document.location = 'package-list.php'; </script>";
// } else{
	
// 	echo "<script>alert('You have enter wrong Credential details.');</script>";

// }

// }

?>

<!-- <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-right">
										<form method="post">
											<h3>Signin with your account </h3>
	<input type="text" name="email" id="email" placeholder="Enter your Email"  required="">	
	<input type="password" name="password" id="password" placeholder="Password" value="" required="">	
											<h4><a href="forgot-password.php">Forgot password</a></h4>
											
											<input type="submit" name="signin" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="page.php?type=terms">Terms and Conditions</a> and <a href="page.php?type=privacy">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div> -->


			<!-- <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
		<form method="post">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">E-mail</label>
					<input class="input" type="text" name="email" id="email" placeholder="Enter your Email"  required="">
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



			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div> -->