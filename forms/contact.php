<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
    include($php_email_form);
} else {
    die('Unable to load the "PHP Email Form" Library!');
}

function clean_input($data) {
    // Remove extra spaces, slashes
    $data = trim($data);
    $data = stripslashes($data);
    // Prevent HTML / JS injection
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

// VALIDATE & SANITIZE ALL POST INPUTS
$name    = isset($_POST['name']) ? clean_input($_POST['name']) : '';
$email   = isset($_POST['email']) ? clean_input($_POST['email']) : '';
$subject = isset($_POST['subject']) ? clean_input($_POST['subject']) : '';
$phone   = isset($_POST['phone']) ? clean_input($_POST['phone']) : '';
$message = isset($_POST['message']) ? clean_input($_POST['message']) : '';

// BASIC VALIDATIONS
if (empty($name) || empty($email) || empty($message)) {
    die('Required fields missing.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die('Invalid email format.');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to = $receiving_email_address;
$contact->from_name = $name;
$contact->from_email = $email;
$contact->subject = $subject;

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

$contact->add_message($name, 'From');
$contact->add_message($email, 'Email');
if (!empty($phone)) {
    $contact->add_message($phone, 'Phone');
}
$contact->add_message($message, 'Message', 10);

echo $contact->send();
?>
