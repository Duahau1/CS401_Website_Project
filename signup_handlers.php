<?php

session_start();
$messages =array();
$sentiment='';

if( $_POST['pswd']!= $_POST['confirmed_passwd'] ) {
    $messages[]=" * Your retyped password does not match";
}
if(empty($_POST['username'])){
    $messages[]=" * Your username field is empty";
}

if( empty($_POST['pswd'])){
    $messages[]=" * Your password field is empty";
}

if(empty($_POST['confirmed_passwd'])){
    $messages[]="* Your confirmed password field is empty";
}

  if (count($messages) > 0) {
     $_SESSION['messages'] = $messages;
     $_SESSION['sentiment'] = 'bad';
     header("Location: http://cs401/Signup.php");
     exit;
   }
unset($_SESSION['messages']);
$_SESSION['messages'] = array("Your account has been created");
 $_SESSION['sentiment'] = 'good';
   header("Location: http://cs401/Signup.php");

?>

