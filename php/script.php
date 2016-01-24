<?php
if(isset($_POST["submit"])) {
$recipient = "contact@amok-corp.com"; //my email
echo $subject = 'Email contact form';
echo $email = $_POST["yourEmail"];

 $mailBody="Name: $name\n"; 

 mail($recipient, $subject, $mailBody, "From: $name <$email>");

echo $thankYou="<p>Thank you! We will be in contact with you shortly.</p>";

}
?>