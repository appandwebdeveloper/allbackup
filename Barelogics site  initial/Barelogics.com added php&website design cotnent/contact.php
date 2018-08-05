<?php
if(isset($_POST['name'], $_POST['email'],$_POST['phone'], $_POST['message'])){
     $message_body = '';
    
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }
   
      $to = 'sahana.b@barelogics.com,shranth@barelogics.com';
      $subject = 'Contact Form Submit';
      //$subjec= 'This is the Copy of your submisson.We will get you shortly';
      if (mail($to, $subject,$message_body)){
          $success = "Message sent, thank you for contacting us!";
unset($_POST['name'], $_POST['email'],$_POST['phone'], $_POST['message']);
      }
}