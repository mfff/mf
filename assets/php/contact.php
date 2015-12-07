<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'mathieu.feroul@bbox.fr';
	$subject = 'Formulaire de contact site web';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Le message a bien été envoyé !';
    }
	else{
		$res['message'] = "L'envoi du mail a échoué !";
	}
	
	
	echo json_encode($res);
}

?>