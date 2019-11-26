<!DOCTYPE html>
<?php
session_start();

 if(isset($_SESSION['user'])){
$username=$_SESSION['user'];
 }

$obj="coldbrew";

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
    <h1>ColdBrew</h1>    
    <img src="../img/recipescoldbrew.jpg" class="figure">
    <h2>What you will need...</h2>
    <ul class="recipes">
    <li>Ground Coffee</li>
    <li>1 1/2 quart (or larger) glass, ceramic, or plastic container</li>
    <li>Small strainer</li>
    <li>Bottle or jar, for storing your cold-brew</li>
    </ul>
    <h2>Steps to follow</h2>
    <ul class="recipes" id="steps">
    <li>Step one:Grind about 20-22 grams of coffee, about as finely as you would for a shot of espresso.</li>
    <li>Step two:Transfer the coffee grounds to the container you're using to make the cold brew. Pour the water over top. Stir gently with a long-handled spoon to make sure the grounds are thoroughly saturated with water.</li>
    <li>Step three:Cover the jar with a lid or a small plate to protect it from dust and bugs. Let the coffee steep for about 12 hours. The coffee can be left on the counter or refrigerated; steeping time is the same.</li>
    <li>Step four:Line a small strainer with cheesecloth or flour sack cloth and place over a large measuring cup or bowl. Pour the coffee through the strainer.</li>  
    <li>Step five:Transfer the coffee to a small bottle or jar and store in the fridge for up to a week.</li>
    <li>Step six:Enjoy!</li>
    </ul>
    </div>
    <a href="../mainpage.php"> <img src="../img/x.svg" alt="X" id="closeButton"></a>
    <div class="tooltip">
    <a href=<?php if(isset($username)){echo " add_handler.php?username={$username}&obj={$obj}";}?>> <img src="../img/add.png" alt="X" id="addButton"></a>
        <span class="tooltiptext">Add to your repository</span> </div>

    </body>
</html>
