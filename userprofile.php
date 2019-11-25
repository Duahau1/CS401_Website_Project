<?php
session_start();
$username=$_SESSION['user'];
require_once "Dao.php";
$dao = new Dao();
$like= $dao->getObj($dao->getId($username));
$note=$dao->isIDExistNote($dao->getId($username)) ;
$exist=$dao->isIDExist($dao->getId($username)) ;

?>
<html> 
 <head> 
    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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
 
 <div class="infopanel">
      <?php
    if(isset($_SESSION['user'])){
           echo "<div class='message' id='userin'>{$_SESSION['user']}</div>";
     
    }
    ?>  
        <img class="ava"src="img/avatar.png">
       
     
     <button type="button" class="btn btn-outline-primary"><a href="logout.php"> Logout</a></button> 
       
        </div>          
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
        </nav>
    </body>
    
</html>