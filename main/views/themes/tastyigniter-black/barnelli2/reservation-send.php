<?php

/////////////////////////////////////
// Change this email address ////////
$email = "CHANGE_THIS_ADDRESS@gmail.com";
/////////////////////////////////////

if (isset($_POST['name'])) {
	$validation = array();

	if (!isset($_POST['name']) || $_POST['name'] == '') {
		$validation[] = array('message'=>'Please enter Your Name', 'id'=>'email');
	}

	if (!isset($_POST['email']) || $_POST['email'] == '') {
		$validation[] = array('message'=>'Please enter email', 'id'=>'email');
	}

	require_once 'inc/securimage/securimage.php';

	$securimage = new Securimage();

	if ($securimage->check($_POST['captcha']) == false) {
		$validation[] = array('message' => 'Wrong captcha code', 'id' => 'form-captcha');
	}

	$phone = $_POST['phone'];
	$amount = $_POST['amount'];
	$message = $_POST['message'];

	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$hour = $_POST['hour'];
	$minute = $_POST['minute'];

	$ampm = $_POST['ampm'];

	$headers = "";

	$message .= " Phone: " . $phone;
	$message .= " Amount: " . $amount;
	$message .= " Email: " . $_POST['email'];

	$message .= "\n\n";
	$message .= " Day: " . $day;
	$message .= " Month: " . $month;
	$message .= " Year: " . $year;
	$message .= " Time: " . $hour . " " . $minute . " " . $ampm;

	$subject = 'Restaurant Revesrvation details';
	$headers = 'From: '. $_POST['email']. "\r\n" .'Reply-To: '. $_POST['email']. "\r\n" .'X-Mailer: PHP/' . phpversion();

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
