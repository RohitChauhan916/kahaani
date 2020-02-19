<?php
if(isset($_POST['submitpost']))
{
 
$succ = '<h2>Thanks for your feedback!</h2>';
 
$to = 'rohitc.aiplbrandbuzz@gmail.com,sheetal.aiplbrandbuzz@gmail.com';
$subject = 'Email With Attachment in PHP';
 
$message = "Details" . "\r\n\r\n";  
$message .= "Name:".$_POST['fullName']. "\r\n\r\n";#2b4494
$message .= "Email:".$_POST['email']. "\r\n\r\n";
$message .= "Phone:".$_POST['phn']. "\r\n\r\n";
$message .= "Message:".$_POST['city']. "\r\n\r\n";
$message .= "Message:".$_POST['state']. "\r\n\r\n";
$message .= "Message:".$_POST['pincode']. "\r\n\r\n";
 
 
$attachment = chunk_split(base64_encode(file_get_contents($_FILES['file']['tmp_name'])));
$filename = $_FILES['file']['name'];
 
$boundary =md5(date('r', time())); 
 
$headers = "From: rohit.aiplbrandbuzz@gmail\r\nReply-To: rohit.aiplbrandbuzz@gmail";
 
$headers .= "MIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";
 
$message="This is a multi-part message in MIME format.
 
--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"
 
--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit
 
$message
 
--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment
 
$attachment
--_1_$boundary--";
 
mail($to, $subject, $message, $headers);
}
?>