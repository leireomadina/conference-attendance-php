<!-- imports head tags and bootstrap/css styles -->
<?php 
  $title = "Success";
  require_once "includes/head.php";
  require_once "db/db-config.php";

  // checks if the submit variable exists (button name attribute): prevents the user from casually accessing the success page from an url
  if(isset($_POST["submit"])) {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $dob = $_POST["dateofbirth"];
    $email = $_POST["email"];
    $contact = $_POST["phone"];
    $specialty = $_POST["specialty"];
    // calls function to insert and track if success or not
    $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email, $contact, $specialty);
    $specialtyName = $crud->getSpecialtyById($specialty);

    if($isSuccess) {
      include "includes/successmessage.php";
    } else {
      include "includes/errormessage.php";
    }
  }
?>

<main> 
  <article class="card mb-4 mt-4" style="width: 18rem;">
    <div class="card-body">
      <h3 class="card-title">
        <?php echo $_POST["firstname"] . " " . $_POST["lastname"] ?>
      </h3>
      <h4 class="card-subtitle mb-2 text-muted">
        <?php echo $specialtyName['name']; ?>
      </h4>
      <p class="card-text">Date of birth: <?php echo $_POST["dateofbirth"]?></p>
      <p class="card-text">Email address: <?php echo $_POST["email"]?></p>
      <p class="card-text">Contact number: <?php echo $_POST["phone"]?></p>
    </div>
  </article>
</main>

<!-- footer -->
<?php 
  require_once "./includes/footer.php" 
?>
