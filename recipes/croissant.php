<!DOCTYPE html>
<?php
session_start();
<<<<<<< HEAD
if(isset($_SESSION['user'])){
$username=$_SESSION['user'];
}
$obj="croissant";
=======
>>>>>>> f8460eafdd1c16e744f6ae15e307109ee16cb522
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
    <h1>Croissants</h1>    
    <img src="../img/recipescroissant.jpg" class="figure">
    <h2>What you will need...</h2>
    <ul class="recipes">
    <li>2 large eggs + enough warm water to make 2 cups (454g) of liquid</li>
    <li>1/4 cup (50g) sugar, divided</li>
    <li>5 1/2 to 6 cups (659g to 723g) All-Purpose Flour</li>
    <li>2 1/4 teaspoons instant yeast</li>
    <li>2 tablespoons (28g) butter, melted</li>   
    <li>1 scant tablespoon salt</li>
    </ul>
    <h2>Steps to follow</h2>
    <ul class="recipes" id="steps">
    <li>Step one:Put the eggs and water in a large mixing bowl. Add 1 tablespoon of the sugar, 3 cups (362g) of the flour, and the yeast. Mix until well blended; set aside to let the sponge work.</li>
    <li>Step two: Cut the butter into 1˝ chunks and combine with the salt and flour at low speed in a stand mixer just until smooth, with no lumps. Be careful not to beat too much; you don’t want to incorporate any air.</li>
    <li>Step three:Spread the butter on a piece of plastic wrap and shape into an 8˝ square. Wrap and refrigerate for 30 minutes.</li>
    <li>Step four:Add the melted butter to the sponge. Whisk together the remaining sugar, 2 1/2 cups (298g) of the flour, the dry milk, and salt and add to the sponge. Mix until the dough forms. Knead for 5 minutes; touch the dough lightly with your finger. If it’s still sticky, add the remaining flour 2 tablespoons at a time until the dough is the desired consistency. Once the dough is smooth and elastic, pat it into a 9˝ square, then wrap and refrigerate for 30 minutes.</li>     
    <li>Step five:Enjoy!</li>
    </ul>
    </div>
    <a href="../mainpage.php"> <img src="../img/x.svg" alt="X" id="closeButton"></a>
    <div class="tooltip">
    <a href=<?php if(isset($_SESSION['user'])){echo " add_handler.php?username={$username}&obj={$obj}";}?>> <img src="../img/add.png" alt="X" id="addButton"></a>
        <span class="tooltiptext">Add to your repository</span> </div>

    </body>
</html>
