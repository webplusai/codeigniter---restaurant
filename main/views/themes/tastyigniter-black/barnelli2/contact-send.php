<?php
/////////////////////////////////////
// Change this email address ////////
$email = "CHANGE_THIS_ADDRESS@gmail.com";
/////////////////////////////////////

// Change this to true if you want to use your smtp server
$useSMTP = false;

$validation = array();

if (!isset($_POST['name']) || $_POST['name'] == '') {
	$validation[] = array('message'=>'Please enter Your Name', 'id'=>'email');
}

if (!isset($_POST['email']) || $_POST['email'] == '') {
	$validation[] = array('message'=>'Please enter email', 'id'=>'email');
}

$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Restaurant Contact Form Message';
$name = $_POST['name'];
$email_contact = $_POST['email'];

$message = 'Message: '. $_POST['message']. "\r\n";
$message .= 'E-mail: '. $email_contact. "\r\n".'Name: '. $name;
$headers = 'From: '. $email_contact. "\r\n" .'Reply-To: '. $email_contact. "\r\n" .'X-Mailer: PHP/' . phpversion();

if ($useSMTP) {
	//SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that

	require 'inc/PHPMailer/PHPMailerAutoload.php';

	//Create a new PHPMailer instance
	$mail = new PHPMailer();
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
	$mail->Host = "mail.example.com";
	//Set the SMTP port number - likely to be 25, 465 or 587
	$mail->Port = 25;
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;
	//Username to use for SMTP authentication
	$mail->Username = "yourname@example.com";
	//Password to use for SMTP authentication
	$mail->Password = "yourpassword";
	//Set who the message is to be sent from
	$mail->setFrom($_POST['email']);
	//Set an alternative reply-to address
	$mail->addReplyTo($_POST['email']);
	//Set who the message is to be sent to
	$mail->addAddress($email);
	//Set the subject line
	$mail->Subject = isset($_POST['subject']) ? $_POST['subject'] : 'Restaurant Contact Form Message';
	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
	//Replace the plain text body with one created manually
	//$mail->AltBody = 'This is a plain-text message body';
	//Attach an image file
	//$mail->addAttachment('images/phpmailer_mini.png');

	if (isset($_POST['name'])) {
		require_once 'inc/securimage/securimage.php';

		$securimage = new Securimage();

		if ($securimage->check($_POST['captcha']) == false) {
			$validation[] = array('message' => 'Wrong captcha code', 'id' => 'form-captcha');
		}

		$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Restaurant Contact Form Message';
		$name = $_POST['name'];
		$email_contact = $_POST['email'];

		$message = 'Message: '. $_POST['message']. "\r\n";
		$message .= 'E-mail: '. $email_contact. "\r\n".'Name: '. $name;

		$mail->Body = $message;

		header('Content-Type: application/json');

		if (empty($validation)) {
			if($mail->send()) {
				echo json_encode(array('success'=>(bool)true, 'message'=>''));
			} else {
				echo json_encode(array('success'=>(bool)false, 'type'=>'system', 'data'=>array('message'=>'Sending error, please try again later')));
			}
		} else {
			echo json_encode(array('success'=>(bool)false, 'type'=>'validation', 'data'=>$validation));
		}
	}
} else {
	if (isset($_POST['name'])) {

		require_once 'inc/securimage/securimage.php';

		$securimage = new Securimage();

		if ($securimage->check($_POST['captcha']) == false) {
			$validation[] = array('message' => 'Wrong captcha code', 'id' => 'form-captcha');
		}

		$subject = isset($_POST['subject']) ? $_POST['subject'] : 'Restaurant Contact Form Message';
		$name = $_POST['name'];
		$email_contact = $_POST['email'];

		$message = 'Message: '. $_POST['message']. "\r\n";
		$message .= 'E-mail: '. $email_contact. "\r\n".'Name: '. $name;
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";	
		$headers .= 'From: '. $email_contact. "\r\n" .'Reply-To: '. $email_contact. "\r\n" .'X-Mailer: PHP/' . phpversion();

		header('Content-Type: application/json');

		if (empty($validation)) {
			if (mail($email, $subject, $message, $headers)) {
				echo json_encode(array('success'=>(bool)true, 'message'=>''));
			} else {
				echo json_encode(array('success'=>(bool)false, 'type'=>'system', 'data'=>array('message'=>'Sending error, please try again later')));
			}
		} else {
			echo json_encode(array('success'=>(bool)false, 'type'=>'validation', 'data'=>$validation));
		}

		die();
	}
}