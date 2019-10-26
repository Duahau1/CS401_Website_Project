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
    <link rel="stylesheet" type="text/css" href="/mainstyle.css"> 
 </head> 
<body class="login">
   <div class="loginbox">

            <img src="logo.svg" class="logo">
            <h1>Feedback Form</h1>  
            <form  method="POST" action="feedback_handlers.php">
            <p>Enter name</p>
            <input type="text" name="guest" required placeholder="Enter your name" value="<?php if(isset($_SESSION['user'])){echo $_SESSION['user'];} else if (isset($_SESSION['form_data']['guest'])){echo $_SESSION['form_data']['guest'];} ?>" >
            <p>Enter valid email</p>
            <input type="text" name="email" placeholder="Enter your valid email" required value="<?php if (isset($_SESSION['form_data']['email'])){echo $_SESSION['form_data']['email']; }?>" >    
            <p>Your feedback</p>
            <textarea placeholder="Leave a message" rows="4" cols="100%" name="feed" ><?php  if (isset($_SESSION['form_data']['feed'] )) {echo  htmlspecialchars($_SESSION['form_data']['feed']);}else{echo null;} ?></textarea>
            <input name="" type="submit" value="Send">
            </form>
        </div> 
    <nav class="navCats" id="feedback">
<ul>
<li class=""><a id="logged" href="login.php">USER</a></li>
<?php
    if(isset($_SESSION['user'])){
           echo"<script>document.getElementById(\"logged\").href=\"userprofile.php\"</script>";
    }
    else {
          echo"<script>document.getElementById(\"logged\").href=\"login.php\"</script>";
    }
    ?>
<li class=""><a href="mainpage.php">MAIN</a></li>
<li class="active"><a href="feedback.php">FEEDBACK</a></li>
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
</html> 