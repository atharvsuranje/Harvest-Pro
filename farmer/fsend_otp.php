<?php
session_start();
require('../sql.php'); // Includes Login Script

$email=$_SESSION['farmer_login_user'];
$res=mysqli_query($conn,"select * from farmerlogin where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
    $otp=rand(11111,99999);
    mysqli_query($conn,"update farmerlogin set otp='$otp' where email ='$email'");
	$html="Your otp verification code for HarvestPro is ".$otp;
	$_SESSION['farmer_login_user'];
    smtp_mailer($email,'OTP Verification',$html); 
    echo "yes";
}
else{
    echo "not exist";
}
 
function smtp_mailer($to,$subject, $msg){
	require_once("../smtp/class.phpmailer.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 2;
	$mail->Debugoutput = 'html'; 
	$mail->SMTPAuth = TRUE; 
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "atharvsuranje2604@gmail.com";   
    $mail->Password = "vtbkxtqldyrmbiqu"; 	
    $mail->SetFrom("atharvsuranje2604@gmail.com");  
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}
?>

