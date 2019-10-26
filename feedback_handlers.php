<?php

session_start();
 require_once 'Dao.php';
$messages =array();
$sentiment='';
$presets = $_POST;


if( empty($_POST['guest'])){
    $messages[]=" *Please give us your name";
     unset($presets['guest']);
}

if( empty($_POST['feed'])){
    $messages[]=" *Please add some feedbacks";
     unset($presets['feed']);
}

if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)||empty($_POST['email'])) { 
    
    $messages[]="* Please enter valid email";
    unset($presets['email']);
}
     if(count($messages) ==0){
    $dao =new Dao();
    $dao->saveFeedback($_POST['guest'],$_POST['email'],$_POST['feed']);
   }
  
     if (count($messages) > 0) {
     $_SESSION['messages'] = $messages;
     $_SESSION['sentiment'] = 'bad';
     $_SESSION['form_data'] = $presets;
     header("Location: http://cs401/feedback.php");
     exit;
   }
unset($_SESSION['messages']);
 unset($_SESSION['form_data']);

$_SESSION['messages'] = array(" * You have sucessfully submitted your feedback");
 $_SESSION['sentiment'] = 'good';
   header("Location: http://cs401/feedback.php");
?>

