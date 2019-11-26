<!DOCTYPE html>
<?php
session_start();
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
<body>

<div id="page">

<a href="recipes/espresso.php" class="hotspotLink" ><img class="hotspot" src="img/cappuccino.svg"></a>
<a href="recipes/coldbrew.php" class="hotspotLink" ><img class="hotspot1" src="img/coffee%20pot.svg"></a>
<a href="recipes/pourover.php" class="hotspotLink" ><img class="hotspot2" src="img/iced%20tea.svg"></a>
<a href="recipes/croissant.php" class="hotspotLink" ><img class="hotspot3" src="img/croissant.svg"></a>
   <a href="recipes/machiatto.php" class="hotspotLink" ><img class="hotspot4" src="img/drinks.svg"></a> 
<?php
    if(isset($_SESSION['user'])){
           echo "<div class='message' id='loggedin'>Welcome {$_SESSION['user']}</div>";
          // echo"<script>document.getElementById(\"logged\").href=\"userprofile.php\"</script>";
    }
    ?>

<nav class="navCats">
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
<li class="active"><a href="mainpage.php">MAIN</a></li>
<li class=""><a href="feedback.php">FEEDBACK</a></li>
</ul>
  </nav>    
</div>  		

    </body>
</html>