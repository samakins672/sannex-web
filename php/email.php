<?php
if($_POST){
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  
  $from = $_POST['email'];
  $to = "info@sannex.ng";
  $subject = "Launch Notification";
  $message = "Please notify " . $from;
  $headers = "From:" . $from;
  if (mail($to, $subject, $message, $headers)) {
    echo "Success! \n You'll be notified soon.";
  } else {
    echo "Error, please try again later.";
  }
}
?>