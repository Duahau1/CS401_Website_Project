<!DOCTYPE html>
<?php
session_start();
echo print_r($_SESSION,1);
?>
<html> 
 <head> 
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
     <meta charset="utf-8" />
          <link rel='icon' href='img/favicon.png' type='image/x-icon'/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
    <title>TiniCafe</title>
    <link rel="stylesheet" type="text/css" href="mainstyle.css"> 
 </head> 
<body class="login">
   <div class="loginbox">
            <img src="iconpasswd.png" class="info" title=" minimum of eight (8) character in length.">  
            <img src="logo.svg" class="logo" id="signuplogo">
            <h1>Sign up here</h1>  
            <form method="POST" action="signup_handlers.php">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter your username">
            <p>Password</p>
            <input type="password"  name="pswd" placeholder="Enter your password">    
            <p>Repeat Password</p>
             <input type="password" name="confirmed_passwd" placeholder="Repeat Password" name="psw-repeat">
                <input name="" type="submit" value="Login">
                
                <div id="log"><a href="login.php">Back to log in page</a></div>
            </form>
        </div> 
    <nav class="navCats" id="logNav">
<ul>
<li class="active"><a href="login.php">USER</a></li>
<li class=""><a href="mainpage.php">MAIN</a></li>
<li class=""><a href="feedback.php">FEEDBACK</a></li>
</ul>
    </nav>
 <?php
    if (isset($_SESSION['messages'])) {
       foreach ($_SESSION['messages'] as $message) {
         echo "<div class='message {$_SESSION['sentiment']}'>{$message}</div>";
           unset($_SESSION['messages']);
       }
    }
    ?>

</body>