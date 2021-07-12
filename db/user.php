<?php
  class user{
    private $db;

    function __construct($conn){
      $this->db = $conn;
    }

    public function addUser($user, $pass){
      try {
        $result = $this->getUserByUsername($user);
        if ($result['num'] > 0) {
          return false;
        } else {
          $new_pass = md5($pass.$user);
          // define SQL statement to be executed
          $sql = "INSERT INTO users (username,password) VALUES (:user, :pass)";
          // prepare the SQL statement for execution
          $stmt = $this->db->prepare($sql);
          // bind all placeholders to the actual values
          $stmt->bindparam(':user',$user);
          $stmt->bindparam(':pass',$new_pass);
          $stmt->execute();
          return true;
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function getUser($user, $pass){
      try {
        $sql = "SELECT * FROM users WHERE username = :user AND password = :pass";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':user',$user);
        $stmt->bindparam(':pass',$pass);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }      
    }

    public function getUserByUsername($user){
      try {
        $sql = "SELECT COUNT(*) AS num FROM users WHERE username = :user";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':user',$user);        
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }            
    }
  }
?>