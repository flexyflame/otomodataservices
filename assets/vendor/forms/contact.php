<?php
  error_reporting ( E_ALL); ini_set ( "display_errors", "on");

  //
  $receiving_email_address = 'contact@otomodataservices.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library! Contact Derrick!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();


  // Multiple recipients separated by comma
  // echo "EMAIL Request";

  // $to = 'info@otomodataservices.com, derrick.basoah@pakajo.world';

  // // Subject

  // $subject = 'Office supplies - Reminder'; //$_POST['subject']

  // // Message
  // $message = '
  //   <html>
  //     <head>
  //       <title>Office supplies for March</title>
  //     </head>
  //     <body>
  //       <p>We need the following office supplies</p>
  //       <table>
  //         <tr>
  //           <th>Item</th><th>Quantity</th><th>Month</th><th>Department</th>
  //         </tr>
  //         <tr>
  //           <td>Notebook</td><td>10</td><td>March</td><td>Operations</td>
  //         </tr>
  //         <tr>
  //           <td>Chair</td><td>5</td><td>March</td><td>Marketing</td>
  //         </tr>
  //       </table>
  //     </body>
  //   </html>';

  // // To send HTML emails, remember to set the Content-type header

  // $headers[] = "MIME-Version: 1.0" . "\r\n";
  // $headers[] .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // // Other additional headers

  // $headers[] .= 'To: John <basoah007@gmail.com>, Mary <flexyflame2006@yahoo.com>';
  // $headers[] .= 'From: Supply Reminders <contact@otomodataservices.com>';
  // $headers[] = 'Cc: name@example.com';
  // $headers[] = 'Bcc: name@example.com';
  

  // Mail it
  //mail($to, $subject, $message, implode("\r\n", $headers));


  
  $name = $_POST['name'];
  $from = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $headers = "From: " . $name . " <" . $from . ">";
  $result = mail($receiving_email_address, $subject, $message, $headers);

  if ($result) {
      // echo '<script type="text/javascript">alert("Your message was sent!");</script>';
      // echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
      die( 'Your message was sent!');

  } else {
      // echo '<script type="text/javascript">alert("Oops! Your message wasn’t sent. Try again later.");</script>';
      // echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
      die( 'Oops! Your message wasn’t sent. Try again later.');
  }

?>
