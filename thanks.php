<?php

  $name  = $_POST['name'];
  $email = $_POST['email'];
  $text  = $_POST['textArea'];
  $ip    = $_SERVER['REMOTE_ADDR'];
  
  $name  = filter_var($name, FILTER_SANITIZE_STRING );
  $text  = filter_var($text, FILTER_SANITIZE_STRING );
  
  $msg = $name . "\n"  . $email . "\n\n\n" . $text  ;





// send email



/*if ($email == "") {
  
  
  
  echo "You didn't enter an email address.";
  header( "refresh:3;url=https://www.fbi.gov" )*/;
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      
      echo "If you don't use a proper email address, we cannot speak.";
      echo " <br> Your IP or the IP of your proxy is $ip " ;
      
} else {


  mail("ryan@ryanleissner.com","Web Form Message", $msg, $ip);

  $newURL = 'http://www.ryanleissner.com';
  header( "refresh:3;url=https://www.ryanleissner.com" );

  echo "Thanks $name! Redirecting";
}


?>