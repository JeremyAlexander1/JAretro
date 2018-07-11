<?php

/**
 * This example shows making an SMTP connection with authentication.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('America/Los_Angeles');

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.jeremyalexander.webhostingforstudents.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Set the SMTPSecure ssl
$mail->SMTPSecure = 'ssl';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "phpmailer@jeremyalexander.webhostingforstudents.com";
//Password to use for SMTP authentication
$mail->Password = "Beyondclouds29!";
//Set who the message is to be sent from
$mail->setFrom('phpmailer@jeremyalexander.webhostingforstudents.com', 'Jeremy Alexander');
//Set an alternative reply-to address
$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('phpmailer@jeremyalexander.webhostingforstudents.com', 'Jeremy Alexander');
//Set the subject line
$mail->Subject = 'PHPMailer';
//Set the attributes that will include the values submitted from the form as variables
$mail->Body = 'Name:' . $_POST['name'] . '<br>';
$mail->Body .= 'E-mail:' . $_POST['email'] . '<br>';
$mail->Body .= 'Message:' . $_POST['comment'] . '<br>';

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    include "connection.php";
    
/*function Connect()
{*/
$dbhost = "localhost";
$dbuser = "jeremyal_portfolio_user";
$dbpass = "Beyondclouds29!";
$dbname = "jeremyal_jeremy_alexander-admin-pnw";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_comment = $_POST['comment'];

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die($conn->connect_error);
 
/*return $conn;
}
*/

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `jeremys_phpmailer_form` (`name`, `email`,
        `comment`) VALUES ('$users_name',
        '$users_email', '$users_comment'
        );";


if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
    
}

?>
