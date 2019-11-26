<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['user'])){
$username=$_SESSION['user'];
}
$obj="machiatto";
?>
<html>
 <head>
     <link href="https://fonts.googleapis.com/css?family=Turret+Road&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Inconsolata&display=swap" rel="stylesheet">
     <meta charset="utf-8" />
          <link rel='icon' href='../img/favicon.png' type='image/x-icon'/>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
    <title>TiniCafe</title>
    <link rel="stylesheet" type="text/css" href="../mainstyle.css"> 
 </head> 
<body>
<div>
    <h1>Machiatto</h1>    
    <img src="../img/recipesmachiatto.jpg" class="figure">
    <h2>What you will need...</h2>
    <ul class="recipes">
    <li>Ground Coffee</li>
    <li>Cold milk</li>
        <li>Cups</li></ul>
    <h2>Steps to follow</h2>
    <ul class="recipes" id="steps">
    <li>Step one:Grind about 20-22 grams of coffee, about as finely as you would for a shot of espresso.</li>
    <li>Step two:Brew one shot of fresh espresso with espresso machine.</li>
    <li>Step three:Steam milk to 160°, and hold the steam wand just below the surface to create foam.</li>
    <li>Step four:Pour milk into espresso to taste and spoon foam on top. It might take a few tries to get your personal ratio right!</li>  
    <li>Step five:Enjoy!</li>
    </ul>
    </div>
    <a href="../mainpage.php"> <img src="../img/x.svg" alt="X" id="closeButton"></a>
    <div class="tooltip">
     <a href=<?php if(isset($_SESSION['user'])){echo " add_handler.php?username={$username}&obj={$obj}";}?>><img src="../img/add.png" alt="X" id="addButton"></a>
        <span class="tooltiptext">Add to your repository</span> </div>

    </body>
</html>