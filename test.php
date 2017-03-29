<?php
// phpinfo();

$name = 'foo';
$email_address = 'goo@foo.com';
$phone = '1212';
$message = 'msg';

// Create the email and send the message
$to = '815909392@qq.com, mengsuming@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@xiaogu-tech.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
var_dump(mail($to,$email_subject,$email_body,$headers));


// $subject = 'subject';
// $message = 'message';
// $to = 'mengsuming@gmail.com';
// $type = 'plain'; // or HTML
// $charset = 'utf-8';

// $svr = 'www.xiaogu-tech.com';

// $mail     = 'no-reply@'.str_replace('www.', '', $svr);
// $uniqid   = md5(uniqid(time()));
// $headers  = 'From: '.$mail."\n";
// $headers .= 'Reply-to: '.$mail."\n";
// $headers .= 'Return-Path: '.$mail."\n";
// $headers .= 'Message-ID: <'.$uniqid.'@'.$svr.">\n";
// $headers .= 'MIME-Version: 1.0'."\n";
// $headers .= 'Date: '.gmdate('D, d M Y H:i:s', time())."\n";
// $headers .= 'X-Priority: 3'."\n";
// $headers .= 'X-MSMail-Priority: Normal'."\n";
// $headers .= 'Content-Type: multipart/mixed;boundary="----------'.$uniqid.'"'."\n";
// $headers .= '------------'.$uniqid."\n";
// $headers .= 'Content-type: text/'.$type.';charset='.$charset.''."\n";
// $headers .= 'Content-transfer-encoding: 7bit';

// mail($to, $subject, $message, $headers);

// echo $svr;