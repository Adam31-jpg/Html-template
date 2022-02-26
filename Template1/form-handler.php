<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@swebystudio.com';

$email_subject = 'Email from Your website';

$email_body = "User Name : $name.\n".
                "User Email : $visitor_email.\n".
                    "Subject : $subject.\n".
                        "Message : $message.\n";

$to = 'swebystudio@gmail.com';

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>
