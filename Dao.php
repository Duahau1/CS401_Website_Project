<?php 
class Dao {
private $host = 'localhost';
private $dbname = 'CS401';
private $username = 'vannguyen';
private $password = 'Denny';

 public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};port=3308;dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    echo print_r("Connection Success",1);
     
    // $saveQuery = "insert into Users (userID,username,passwd) values (0,'hello','wprld')";
   //   $q = $connection-> prepare($saveQuery);
    //  $q->execute();

     return $connection;
  } 
 
public function getUser(){
     $conn=$this-> getConnection();
     $user=$_POST['username'];
     try{
      return $conn->query("SELECT userID,username from Users",PDO:: FETCH_ASSOC);
     }
  catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
 }   
public function saveUser($userName,$passWord){
    $conn = $this-> getConnection();
    $saveQuery = "insert into Users (userID,username,passwd) values (0,:userName,:passWord)";
    $q = $conn-> prepare($saveQuery);
    $q->bindParam(':userName', $userName);
    $q->bindParam(':passWord', $passWord);
    $q->execute();
 }

}
 $dao = new Dao();
 $pro= $dao-> getConnection();