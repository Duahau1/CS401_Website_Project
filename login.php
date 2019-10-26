<!DOCTYPE html>
<?php
session_start();
//echo print_r($_SESSION,1);
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

            <img src="logo.svg" class="logo">
            <h1>Login here</h1>  
            <form method="POST" action="login_handlers.php">
            <p>Username</p>
            <input type="text" name="logusername" placeholder="Enter your username" required>
            <p>Password</p>
            <input type="password" name="logpswd" placeholder="Enter your password" required>    
            <input name="" type="submit" value="Login">
                <div id="log"><a href="Signup.php">Don't have an account?</a></div>
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
    if (isset($_SESSION['notifications'])) {
       foreach ($_SESSION['notifications'] as $message) {
         echo "<div class='message {$_SESSION['sentiment']}'>{$message}</div>";
           unset($_SESSION['notifications']);
       }
    }
   
    ?>
</body>