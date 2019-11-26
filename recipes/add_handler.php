<?php
   require_once '../Dao.php';
   $dao = new Dao();

   $id=$dao->getId($_GET['username']);
$imagePath= "/img/recipes".$_GET['obj'].".jpg";
$existed=$dao->checkObject($id,$_GET['obj']);
if($existed==false){
$dao->saveObj($id,$_GET['obj'],$imagePath);}
   header("Location:https://tini-cafe.herokuapp.com/userprofile.php");
?>