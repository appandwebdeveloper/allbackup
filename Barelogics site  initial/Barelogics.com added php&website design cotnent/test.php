<?php
$error = '';
$name = '';
$email = '';
$phone = '';
$message = '';

if(isset($_POST['name'], $_POST['email'],$_POST['phone'], $_POST['message'])){
   
    $name = clean_text($_POST['name']);
    $email = clean_text($_POST['email']);
    $phone = clean_text($_POST['phone']);
    $message = clean_text($_POST["message"]);
	 $message_body = '';
    
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
    
    require 'php/PHPMailerAutoload.php';
		$mail = new PHPMailer;
		//$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		//$mail->Host = 'smtpout.secureserver.net';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
        $mail->Host = 'smtp-relay.gmail.com';
		$mail->Port =25;								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'kartik@barelogics.com';					//Sets SMTP username
		$mail->Password = 'reset123';					//Sets SMTP password
		$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->setFrom('kartik@barelogics.com','kartik');					//Sets the From email address for the message
		//$mail->FromName = $_POST["name"];				//Sets the From name of the message
		$mail->addAddress('sahana.b@barelogics.com', 'sahana');		//Adds a "To" address
	     $mail->addReplyTo('info@barelogics.com', 'Information');
		//$mail->WordWrap = 200;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->isHTML(true);							//Sets message type to HTML				
		$mail->Subject = 'Contact Form submitted';				//Sets the Subject of the message
		$mail->Body = $message_body;				//An HTML or plain text message body
        if($mail->send())								//Send an Email. Return true on success or false on error
		{
			$error = '<label class="text-success">Thank you for contacting us</label>';
              echo $error;
		}   
    
		/*if($mail->Send())								//Send an Email. Return true on success or false on error
		{
			$error = '<label class="text-success">Thank you for contacting us</label>';
echo $error;
		}*/
		else
		{
			$error = '<label class="text-danger">Sorry for inconvenience .There is an Error.send mail to contact@barelogics.com</label>';
echo $error;
		}
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
}
function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}
?>