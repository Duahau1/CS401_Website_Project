<?php

session_start();
 require_once 'Dao.php';
$messages =array();
$sentiment='';
$user = $_POST['username'];
$pass = $_POST['pswd'];
if(( $_POST['pswd']!= $_POST['confirmed_passwd'] )&&!(strlen($_POST['pswd'])<8)) {
    $messages[]=" * Your retyped password does not match";
}

if( strlen($_POST['pswd'])<8){
    $messages[]=" * Minimum of 8 characters";
}

if(empty($_POST['confirmed_passwd'])&&!(strlen($_POST['pswd'])<8)){
    $messages[]="* Your confirmed password field is empty";
}
if((preg_match('/^[a-zA-Z0-9]{6,64}$/', $_POST['username'])===0)||empty($_POST['username'])) { // for english chars + numbers only
    // valid username, alphanumeric & longer than or equals 5 chars
    $messages[]="* Username:  must be between 6-64 characters, no special character";

}
   if(count($messages) <1){
    $dao =new Dao();
    $dao->saveUser($user,$pass);
   }
  if (count($messages) > 0) {
     $_SESSION['messages'] = $messages;
     $_SESSION['sentiment'] = 'bad';
     header("Location: http://cs401/Signup.php");
     exit;
   }
unset($_SESSION['messages']);
$info="Click"."<a href=\"login.php\"> here </a>". " to Log In ";
$_SESSION['userinfo'] = array("{$user}");
$_SESSION['messages'] = array(" * Your account has been created {$info}");
 $_SESSION['sentiment'] = 'good';
   header("Location: http://cs401/Signup.php");
?>

