<!DOCTYPE html>
<?php
session_start();
$username=$_SESSION['user'];
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
    <body class="logback">
        <?php
    if (isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"] ||
   !isset($_SESSION["access_granted"])) {
  $_SESSION["status"] = "You need to log in first";
  header("Location:login.php");
  }
        ?>
    <a href="logout.php">Logout</a>
           
<nav class="navCats" id="profile">
<ul>
<li class="active"><a id="logged" href="login.php">USER</a></li>
<?php
    if(isset($_SESSION['user'])){
           echo"<script>document.getElementById(\"logged\").href=\"userprofile.php\"</script>";
    }
    else {
          echo"<script>document.getElementById(\"logged\").href=\"login.php\"</script>";
    }
    ?>
<li class=""><a href="mainpage.php">MAIN</a></li>
<li class=""><a href="feedback.php">FEEDBACK</a></li>
</ul>
    </body>
    
</html>