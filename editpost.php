<?php 
    require_once "db/db-config.php"; 

  // get values from POST operation
   if(isset($_POST["submit"])) {
    // extract values from the $_POST array
      $id = $_POST["id"];
      $fname = $_POST["firstname"];
      $lname = $_POST["lastname"];
      $dob = $_POST["dateofbirth"];
      $email = $_POST["email"];
      $contact = $_POST["phone"];
      $specialty = $_POST["specialty"];
      // calls function to insert and track if success or not
      $result = $crud->editAttendee($id, $fname, $lname, $dob, $email, $contact, $specialty);

      if($result) {
        // redirects to main page
        header("Location: viewrecords.php"); 
      } else {
        echo "Error";
      }
   } else {
     echo "Error";
   }
?>