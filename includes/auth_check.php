<?php
// redirects the user to the login page if authentication is not done yet
   if(!isset($_SESSION["userid"])) {
     header("Location: login.php");
   }
?>