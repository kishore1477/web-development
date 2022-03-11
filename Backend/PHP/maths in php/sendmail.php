<?php
$to_email = "kishoorjaipal477@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: kishorejaipal477@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo " don't worry Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}
// ini_set()
?>