<?php 
    require_once "db/db-config.php"; 

   if(!$_GET["id"]) {
     echo "Error";
   } else {
     // gets attendee id value
     $id = $_GET["id"];
     // calls delete function
     $result = $crud->deleteAttendee($id);
     
     // redirects to attendees record page
     if($result) {
       header("location: viewrecords.php");
     } else {
       echo "Error";
     }
   }
?>