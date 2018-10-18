<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    $name = @trim(stripslashes($_POST['contact-name'])); 
	$email = @trim(stripslashes($_POST['contact-email'])); 
    $phone = @trim(stripslashes($_POST['contact-phone'])); 
    $subject = 'Contact Form Enquiry';
    $message = @trim(stripslashes($_POST['contact-message'])); 

    $email_from = $email;
	$email_to = 'akarin@mixed.co.th';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Phone No: ' . $phone. "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die; 
?>	