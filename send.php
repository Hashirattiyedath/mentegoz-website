<?php

$emailAddress = 'info@mentegoz.com'; //To address



require "phpmailer/class.phpmailer.php";


$msg='Name:	'.$_POST['name'].'<br />
Email:	'.$_POST['email'].'<br />
Contact Number :	'.$_POST['phone'].'<br />


Message:<br /><br />

'.nl2br($_POST['message']).'

';


$mail = new PHPMailer();
//$mail->IsMail();

    $mail->IsSMTP();                // Sets up a SMTP connection 
	$mail->SMTPAuth = true;         // Connection with the SMTP does require authorization  
    $mail->SMTPSecure = "ssl";      
    $mail->Host = "smtp.zoho.com";  //Host Address
    $mail->Port = 465;  
    $mail->Encoding = '7bit';    
          
    // Authentication  
    $mail->Username   = "info@mentegoz.com"; // Login  
    $mail->Password   = "Mentegoz@9544#"; // Password  
      
$mail->Subject="Message From Mentegoz Website";
$mail->AddReplyTo($_POST['email'], $_POST['name']);
$mail->AddAddress($emailAddress);
$mail->SetFrom("info@mentegoz.com");
$mail->MsgHTML($msg);

$mail->Send();
unset($mail);
?>
<script>
alert("Thanks For Contacting");
window.location="http://www.mentegoz.com/contact";
</script>