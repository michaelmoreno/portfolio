<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $mailTo = "michaelmoreno.dev@gmail.com";
  $headers = "Site Mail:".$email
  $txt = "You have received an email from ".$name.".\n\n".$message;
  
  mail($mailTo, $subject, $txt, $headers);
}