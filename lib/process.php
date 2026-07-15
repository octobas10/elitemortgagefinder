<?php
if($_POST['formtype'] =='contactus'){
	$to = "support@elitemortgagefinder.com";
	$headers = "From:".$_POST['email']."\r\n";
	$headers .= "CC: octobas@gmail.com \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$message = '<html><body>';
	$message .= '<center><h1>www.elitemortgagefinder.com</h1></center>';
	$message .= '<div style=\"float:left\">Hi elitemortgagefinder,<br></div>';
	$message .= '<div style=\"float:left\">There is an Inquiry, Details are listed below<br></div>';
	$message .= '<div>Name :<b>'.$_POST['firstname'].' '.$_POST['lastname'].'</b></div>';
	$message .= '<div>E-mail :<b>'.$_POST['email'].'</b></div>';
	$message .= '<div>Phone Number :<b>'.$_POST['phone'].'</b></div>';
	$message .= '<div>Message :<b>'.$_POST['message'].'</b></div>';
	$message .= '<div style=\"float:left\">Thanks & Regards,<br>'.$_POST['firstname'].'</div>';
	$message .= '</body></html>';
	$subject = "Contact Inquiry elitemortgagefinder";
	if(@mail($to, $subject, $message, $headers)){
		$json['message'] = "<p style='font-size:14px;color:brown;font-weight:bold;'>
		Thanks for submitting your message to Elite Mortgage Finder!  One of our representatives will reply via email back to you soon!  Please white list the emails support@elitemortgagefinder.com and info@elitemortgagefinder.com to receive our emails to your inbox.  All the best!  Sincerely, Elite Mortgage Finder Support Team</p>";
	}else{
		$json['message'] = "Failed to send message";
	}
	echo json_encode($json);
}