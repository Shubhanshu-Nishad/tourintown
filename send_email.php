<?php
include('smtp/PHPMailerAutoload.php');
$html = 'Msg';
// echo smtp_mailer('shubhanshunishad2221@gmail.com','subject',$html);
function smtp_mailer($to, $subject, $msg)
{
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
	$mail->SMTPOptions = array('ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => false
	));
	// if(!$mail->Send()){
	// 	echo $mail->ErrorInfo;
	// }else{
	// 	return 'Sent';
	// }
}
?>
<?php
// include('smtp/PHPMailerAutoload.php');
// session_start();
// $con=mysqli_connect('localhost','root','','user');
// //$email=$_POST['email'];
// $email="shubhanshunishadji@gmail.com";
// $res=mysqli_query($con,"select * from user where email='$email'");
// $count=mysqli_num_rows($res);
// if($count>0){
// 	echo "not_exist";
// }else{

// 	$otp=rand(11111,99999);
// 	mysqli_query($con,"update user set otp='$otp' where email='$email'");
// 	$html="Your otp verification code is ".$otp;
// 	$_SESSION['EMAIL']=$email;
// 	smtp_mailer($email,'OTP Verification',$html);
// 	echo "yes";
// }


?>
