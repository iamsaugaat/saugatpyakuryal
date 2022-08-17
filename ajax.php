<?php
if(isset($_POST) && !empty($_POST)){
	
	$first_name = (isset($_POST['first_name']))?$_POST['first_name']:'';
	$email = (isset($_POST['email']))?$_POST['email']:'';
	$subject = (isset($_POST['subject']))?$_POST['subject']:'';
	$message = (isset($_POST['message']))?$_POST['message']:'';
	$to = "saugatpyakuryal77@gmail.com";

	
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: saugatpyakuryal@outlook.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
echo '<script type="text/javascript">alert("Feedback Given Succesfully");window.location=\'index.php\';</script>';
?>