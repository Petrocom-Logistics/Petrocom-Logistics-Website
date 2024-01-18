<?php

    $toEmail = "info@petrocomlogistics.co.uk";
    $fromEmail = "info@petrocomlogistics.co.uk";
    $fromName = "Petrocom Logistics";
    $uid = md5(uniqid(time()));

    $name = $_REQUEST['name'];
    $cemail = $_REQUEST['email'];
    $number = $_REQUEST['contact_number'];
    $freight_type = $_REQUEST['freight_type'];
    $source = $_REQUEST['source'];
    $destination = $_REQUEST['destination'];
    $weight = $_REQUEST['weight'];
    $height = $_REQUEST['height'];
    $width = $_REQUEST['width'];
    $length = $_REQUEST['length'];
    $radio = $_REQUEST['radio'];

	$headers  = "From: ".$fromName." <".$fromEmail.">\r\n";
	$headers .= "Reply-To: ".$fromEmail."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

    $subject = "You have a new quote request!!";

    $logo = 'img/logo.png';
    $link = '#';

	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
	$body .= "<table style='width: 100%;'>";
	$body .= "<tr><td><strong>Name:</strong></td><td> {$name}</td></tr>";
	$body .= "<tr><td><strong>Email:</strong></td><td> {$cemail}</td></tr>";
	$body .= "<tr><td><strong>Contact Number:</strong></td><td> {$number}</td></tr>";
	$body .= "<tr><td><strong>Freight Type:</strong></td><td> {$freight_type}</td></tr>";
	$body .= "<tr><td><strong>Source:</strong></td><td> {$source}</td></tr>";
	$body .= "<tr><td><strong>Destination:</strong></td><td> {$destination}</td></tr>";
	$body .= "<tr><td><strong>Weight:</strong></td><td> {$weight}</td></tr>";
	$body .= "<tr><td><strong>Height:</strong></td><td> {$height}</td></tr>";
	$body .= "<tr><td><strong>Width:</strong></td><td> {$width}</td></tr>";
	$body .= "<tr><td><strong>Length:</strong></td><td> {$length}</td></tr>";
	$body .= "<tr><td><strong>Extra services:</strong></td><td> {$radio}</td></tr>";
	$body .= "</table>";
	$body .= "</body></html>";

    if(mail($toEmail, $subject, $body, $headers)) {
    	return true;
    }

?>

