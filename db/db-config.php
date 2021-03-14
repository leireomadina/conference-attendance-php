<?php 
  // $host = "localhost" // same as:
  $host = "127.0.0.1";
  $db = "attendance_db";
  $user = "root"; //mySQL default username 
  $password = ""; // root user has no default password
  $charset = "utf8mb4"; //character encoding

 // data source name (dsn) setup: 
 // driver > host > db name > charset encoding
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try{
    // Connects with the DB using PDO plus the dsn setup with the default mySQL user + password
    $pdo = new PDO($dsn, $user, $password);
    echo "Successful connection";
    // catches a PDO error, stores its details in an object, prints it and stops app execution
  } catch(PDOException $Exception) {
    // echo "<h1 class='text-danger'>No Dabatase Found</h1>"; //shows a msg
    throw new PDOException($Exception -> getMessage());
  }
?>