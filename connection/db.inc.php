<?php
  /**
   *
   */
  class dbh
  {
    private $servername;
    private $username;
    private $password;
    private $name;
    private $charset;

    public function connect(){
      $this->servername="localhost";
      $this->username="root";
      $this->password="";
      $this->name="project1gallery";
      $this->charset="utf8mb4";

      try{
        $dsn="mysql:host=".$this->servername.";dbname=".$this->name.";charset=".$this->charset;
        $pdo=new PDO($dsn,$this->username,$this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        echo "Connection failed: ".$e->getMessage();
        }
    }


  }


 ?>
