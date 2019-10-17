<?php 
class Dao {
private $host = 'localhost';
private $dbname = 'test';
private $username = 'root';
private $password = '';

 public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      echo print_r($e,1);
    }
    echo print_r("Connection Success",1);
     return $connection;
  } 
    
}
 $dao = new Dao();
 $pro= $dao-> getConnection();