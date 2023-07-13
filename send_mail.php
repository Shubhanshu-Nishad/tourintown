<?php
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
				$mail->Password = "iambossji";
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
