<?php

session_start();
 require_once 'Dao.php';
$notifications =array();
$sentiment='';
$user = $_POST['logusername'];
$pass = $_POST['logpswd'];

$dao= new Dao();
$validation= $dao->getLogIn($user,$pass);
if($validation==False){
    $notifications[]="* Wrong username or password.";
    $_SESSION['notifications'] = $notifications;
    $_SESSION['sentiment'] = 'bad';
    $_SESSION["access_granted"] = false;
     header("Location: https://tini-cafe.herokuapp.com/login.php"); 
    //header("Location: http://cs401/login.php");
     exit;
}
else{
    $_SESSION["access_granted"] = true;
}
unset($_SESSION['notifications']);
$_SESSION['user']=$user;
 header("Location: https://tini-cafe.herokuapp.com/mainpage.php");
//header("Location: http://cs401/mainpage.php");


?>