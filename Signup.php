<!DOCTYPE html>

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

            <img src="logo.svg" class="logo" id="signuplogo">
            <h1>Sign up here</h1>  
            <form>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter your username" required>
            <p>Password</p>
            <input type="password" name="pswd" placeholder="Enter your password" required>    
            <p>Repeat Password</p>
             <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
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
</body>