<?php
include('includes/config.php');
// Variables
	$name		=		$_POST['name']; 
	$mail		=		$_POST['email'];
	$web		=		$_POST['website'];
	$message	=		$_POST['comment'];
	$dest 		= 		$destin;
	
// CAPTCHA DEVILCANTBURN
	if($_POST['1'] + $_POST['2'] != $_POST['check']) {
		header("location:contact.php?doh=error");
	}
	elseif($_POST['1'] + $_POST['2'] == $_POST['check']) {

// Exit page after submit
	$exit_page = 	"thanks.php?mail=$mail";

$headers = 		"MIME-Version: 1.0\r\n"; 
 
$headers .= 	"Content-type: text/html; charset=iso-8859-1\r\n"; 
 
$headers .= 	"From: $name <$mail>\r\nReply-to : $name <$mail>\nX-Mailer:PHP"; 
 
$subject=		"Contact from your website $website_name";

$destinataire=	"$dest";

$body=			"$name says :<br>$message";

mail($destinataire,$subject,$body,$headers);
// Mine Version 
$headers2 = "MIME-Version: 1.0\r\n"; 
 
// Mail format 
$headers2 .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
 
// Expeditor and Email reply
$headers2 .= "From: $website_name <$dest>\r\nReply-to : $website_name <$dest>\nX-Mailer:PHP"; 
 
$subject2="Automatic $website_name mail reply";

$destinataire2="$mail";

$body2="Thank you for your message, see you soon !"; 

mail($destinataire2,$subject2,$body2,$headers2);

Header("Location: ".$exit_page);
}
?>