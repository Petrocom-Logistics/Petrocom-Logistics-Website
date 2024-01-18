<?php

    $toEmail = "info@petrocomlogistics.co.uk";
    $fromEmail = "info@petrocomlogistics.co.uk";
    
    $fromName = "Petrocom Logistics";
    $uid = md5(uniqid(time()));

    $name = $_REQUEST['name'];
    $csubject = $_REQUEST['subject'];
    $number = $_REQUEST['number'];
    $cmessage = $_REQUEST['message'];
    $cemail = $_REQUEST['email'];

	$headers  = "From: ".$fromName." <".$fromEmail.">\r\n";
	$headers .= "Reply-To: ".$fromEmail."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

    $subject = "You have a message from Contact Us!!.";

    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tr><td ><strong>Name:</strong></td><td> {$name}</td></tr>";
	$body .= "<tr><td ><strong>Email:</strong></td><td> {$cemail}</td></tr>";
	$body .= "<tr><td ><strong>Subject:</strong></td><td> {$csubject}</td></tr>";
	$body .= "<tr><td ><strong>Message:</strong></td><td>{$cmessage}</td></tr>";
	$body .= "</table>";
	$body .= "</body></html>";

    if(mail($toEmail, $subject, $body, $headers)) {
    	return true;
    }else {
        return false;
    }

?>

