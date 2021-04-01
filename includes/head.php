<?php
  // This file contains code that starts/resumes a session. 
  // By having it here, it will be included on every page, allowing session capability to be used on every page across the website.
  include_once "includes/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap styles-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <!-- CSS styles -->
  <link rel="stylesheet" href="css/main.css">
  <title>Attendance - <?php $title ?></title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3">
    <a class="navbar-brand" href="index.php">IT Conference</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only"></span></a>
        <a class="nav-item nav-link active" href="viewrecords.php">View Attendees</a>
      </div>
      <div class="navbar-nav ms-auto">
        <?php 
          if(!isset($_SESSION["userid"])) {
        ?>
        <a class="nav-item nav-link active" href="login.php">Login <span class="sr-only"></span></a>
        <?php } else { ?>
          <a class="nav-item nav-link" href="#"><span>Hello <?php echo $_SESSION['username'] ?>! </span> <span class="sr-only"></span></a>
          <a class="nav-item nav-link active" href="logout.php">Logout <span class="sr-only"></span></a>
        <?php 
          }
        ?>
      </div>
    </div>
  </nav>
  <div class="container">
