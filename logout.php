<?php
// logout.php
session_start();
session_destroy();
 //header("Location: https://tini-cafe.herokuapp.com/feedback.php");
header("Location:login.php");
?>