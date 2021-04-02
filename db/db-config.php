<?php 
  // DEVELOPMENT connection config
  // $host = "localhost"; // same as:
  // $host = "127.0.0.1";
  // $db = "attendance_db";
  // $user = "root"; //mySQL default username 
  // $pass = ""; // no default pass
  // $charset = "utf8mb4"; //character encoding

  // REMOTE Database connection
  $host = "sql11.freesqldatabase.com";
  $db = "sql11400409";
  $user = "sql11400409"; 
  $pass = "xJ15wYY8yl";
  $charset = "utf8mb4";

 // data source name (dsn) setup: driver > host > db name > charset encoding
  $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

  try{
    // connects with the DB using PDO plus the dsn setup with the default mySQL user + password
    $pdo = new PDO($dsn, $user, $pass);
    // tells us when an error happens
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Successful connection"; // tests db connection

    // catches a PDO error, stores its details in an object, prints it and stops app execution
  } catch(PDOException $Exception) {
    // echo "<h1 class='text-danger'>No Dabatase Found</h1>"; //shows a msg
    throw new PDOException($Exception -> getMessage());
  }

  // references the Crud object and its methods
  require_once "crud.php";
  require_once "user.php";
  $crud = new Crud($pdo);
  $user = new User($pdo);

  $user->insertUser("admin","password");
?>