<?php


      $userName = $_POST['name'];
      $userEmail = $_POST['email'];
      $messageSubject = $_POST['subject'];
      $message = $_POST['message'];

      $header = "Enviado desde la página 24WEB";
      $mensaje = $message."\nAtentamente: " .$userName "\nCorreo: ".$userEmail;
    
      $to = 'najeramartin0@gmail.com';
     
      mail($to, $messageSubject, $mensaje, $header);

      echo "<script>alert ('Correo enviado exitosamente' )</script>";
      echo "<script>setTImeout(\"location.href='index.html'\",1000)</script>";
    


    


  /*$receiving_email_address = 'najeramartin0@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
  */
?>
