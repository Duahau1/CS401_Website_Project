<?php 
class Dao {
private $host = "us-cdbr-iron-east-05.cleardb.net";
private $dbname = "heroku_53c97d8b4cb9a9c";
private $username = "bc4ffc071cc75d";
private $password = "8239e824";

 public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
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

    public function isExist($userName){
         $conn = $this-> getConnection();
         $sql="select username from Users where username=:userName";
         $q = $conn-> prepare($sql);
         $q->bindParam(':userName', $userName);
         $q->execute();
         $count=$q->rowCount();
         echo $count;
         if($count>0){
             return true;
         }
        else{
            return false;
        }
        
    }
         public function getId($userName){
         $conn = $this-> getConnection();
         $sql="select userID from Users where username=:userName";
         $q = $conn-> prepare($sql);
         $q->bindParam(':userName', $userName);
         $q->execute();
         $res=$q->fetchColumn();   
         return $res;
    }
    
public function getLogIn($userName,$passWord){
    $conn = $this-> getConnection(); 
    $sql="select passwd from Users where username=:userName" ;
    $q = $conn-> prepare($sql);
    $q->bindParam(':userName', $userName);
     $q->execute();
    $passverify=password_verify($passWord, $q->fetchColumn());
    if($passverify==True){
        return true;
    }
    else{
        return false;
    }
   
}
public function saveFeedback($guest,$email,$feedback){
    $conn = $this-> getConnection();
    $saveQuery = "insert into Feedback (guest,email,feedback) values (:guest,:email,:feedback)";
    $q = $conn-> prepare($saveQuery);
    $q->bindParam(':guest', $guest);
    $q->bindParam(':email', $email);
    $q->bindParam(':feedback',$feedback);
    $q->execute();
 }
public function isIDExist($id){
         $conn = $this-> getConnection();
         $sql="select userID from product where userID=:id";
         $q = $conn-> prepare($sql);
         $q->bindParam(':id', $id);
         $q->execute();
         $count=$q->rowCount();
         echo $count;
         if($count>0){
             return true;
         }
        else{
            return false;
        }
        
}
public function isIDExistNote($id){
         $conn = $this-> getConnection();
         $sql="select userID from addedProduct where userID=:id";
         $q = $conn-> prepare($sql);
         $q->bindParam(':id', $id);
         $q->execute();
         $count=$q->rowCount();
         if($count>0){
             return true;
         }
        else{
            return false;
        }
        
}
 public function saveObj ($id, $obj, $imagePath) {
    $conn = $this->getConnection();
    $saveQuery = "INSERT INTO addedProduct (userID, obj, image_path) VALUES (:id, :obj, :imagePath)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":id", $id);
    $q->bindParam(":obj", $obj);
    $q->bindParam(":imagePath", $imagePath);
    $q->execute();
  }
  public function getObj ($id) {
    $conn = $this->getConnection();
    $getQuery = "SELECT image_path FROM addedProduct WHERE userID =:id";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":id", $id);
    $q->execute();
    $obj=$q->fetchAll(PDO::FETCH_COLUMN);
    return $obj;

  }
public function checkObject($id,$obj){
     $conn = $this->getConnection();
    $getQuery = "SELECT obj FROM addedProduct WHERE  userID=:id and obj=:obj ";
    $q = $conn->prepare($getQuery);
    $q->bindParam(":id", $id);
    $q->bindParam(":obj", $obj);
    $q->execute();
      $count=$q->rowCount();
    if($count>0){
             return true;
         }
        else{
            return false;
        }
}
      
}
