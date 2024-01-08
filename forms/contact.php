<?php
  error_reporting ( E_ALL); ini_set ( "display_errors", "on");

  //
  $receiving_email_address = 'contact@otomodataservices.com';
  //
  $name = $_POST['name'];
  $from = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $headers = "From: " . $name . " <" . $from . ">";
  $result = mail($receiving_email_address, $subject, $message, $headers);

  if ($result) {
      die( 'OK');
  } else {
      die( 'Oops! Your message wasn’t sent. Try again later.');
  }

?>
