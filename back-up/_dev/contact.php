<?php
// Send To
$to  = "moirasushi@gmail.com";

// Subject Line
$subject = "Please add me to your Moira Sushi mailing list!";

$fullName = $_REQUEST["fullName"];
$emailAddress = $_REQUEST["emailAddress"];

// Headers
$headers = "From: $emailAddress";

// Prepare Body Text
$body = "";
$body .= "Full Name: ";
$body .= $fullName;
$body .= "\n";
$body .= "Email Address: ";
$body .= $emailAddress;
$body .= "\n";

// Mail it
$sent = mail($to, $subject, $body, $headers) ;
	if($sent) {echo "
		<p style='margin:50px auto; padding:25px 25px 0; font-family:Arial, serif; font-size:.8em; text-align:center; font-weight:bold;'>We've successfully added you to our mailing list!</p>
		<p style='margin:10px auto; padding:10px; font-family:Arial, serif; font-size:.8em; text-align:center;'><a href='index.html' title='Back to Moira Sushi'><img src='images/home.png' alt='Back to Moira Sushi'></a></p>
		"; }
		
	else {echo "
		<p style='margin:50px auto; padding:25px 25px 0; font-family:Arial, serif; font-size:.8em; text-align:center; font-weight:bold;'>Oops! We seem to have a problem with the system. Please e-mail us at <a href='mailto:info@moirasushi.com' title='E-mail us instead!'>info@moirasushi.com</a> and we'll do our best to help you.</p>
		<p style='margin:10px auto; padding:10px; font-family:Arial, serif; font-size:.8em; text-align:center;'><a href='index.html' title='Back to Moira Sushi'><img src='images/home.png' alt='Back to Moira Sushi'></a></p>
		"; }
?>
