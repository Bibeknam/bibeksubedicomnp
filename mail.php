<?php
if(isset($_POST['submit'])){
	//****************************************
	$senderEmail = $_POST['email'];
	$targetEmail = 'mail@bibeksubedi.com.np';
	$messageSubject = 'Message from BibekSubedi.Com.np';
	$redirectToReferer = true;
	//****************************************

	// mail content
	$uname = $_POST['name'];
	$uemail = $_POST['email'];
	$utele = $_POST['tele'];
	$umessage = $_POST['message'];

	$messageText =	'Name: '.$uname."\n".
					'Email: '.$uemail."\n".
					'Telephone: '.$utele."\n".
					'Message: '.$umessage."\n";

	$messageHeaders =	'From: '.$senderEmail."\r\n".
						'Reply-To: '.$senderEmail."\r\n".
						'X-Mailer: PHP/'.phpversion();

	mail($targetEmail, $messageSubject, $messageText, $messageHeaders);

	// redirect
	if($redirectToReferer) {
		header("Location: ".@$_SERVER['HTTP_REFERER']);
	} else {
		header("Location: ".$redirectURL);
	}
}
?>