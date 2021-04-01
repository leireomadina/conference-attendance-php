<?php

  class User{
    // private DB object
    private $db;

    // constructor to initialiaze private variable to the DB connection
    function __construct($db_config){
      $this -> db = $db_config;
    }

    public function insertUser($username, $password) {
      try {
        // first checks if the username is already used
        $result = $this->getUserByUsername($username);
        if($result["num"] > 0) {
          return false;
        } else {
          // proceeds with the user creation process (the username is available)
          // encripts passwords with hash MD5
          $new_password = md5($password.$username); 
          
          // phase 1: defines sql statement and prepares it for execution
          $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
          $stmt = $this->db->prepare($sql);
          //phase 2: binds all placeholders to the actual form values
          $stmt->bindparam(":username", $username);
          $stmt->bindparam(":password", $new_password);
          //phase 3: execution statement
          $stmt->execute();
          return true; // success indicator
        }
      } catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; // PDO error indicator
      }
    }

    public function getUser($username, $password) {
      try {
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":username", $username);
        $stmt->bindparam(":password", $password);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
      } catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; 
      }
    }

    // prevents users to share the same username
    public function getUserByUsername($username) {
      try {
        $sql = "SELECT count(*) AS num FROM users WHERE username = :username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":username", $username);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
      } catch (PDOException $Exception) {
        echo $Exception->getMessage();
        return false; 
      }
    }

  }
?>