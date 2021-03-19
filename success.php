<!-- Imports head tags and bootstrap/css styles -->
<?php 
  $title = "Success";
  require_once "includes/head.php";
  require_once "db/db-config.php";

  //checks if the submit variable exists (button name attribute): prevents the user from casually accessing the success page from an url
  if(isset($_POST["submit"])) {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $dob = $_POST["dateofbirth"];
    $email = $_POST["email"];
    $contact = $_POST["phone"];
    $specialty = $_POST["specialty"];
    // calls function to insert and track if success or not
    $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $specialty);

    if($isSuccess) {
      echo '
      <header>
        <h2 class="text-center text-success m-4">
          Congrats! You have been registered.
        </h2>
        <p class="text-center text-success">Have fun!</p>
      </header>';
    } else {
      echo '
      <header>
        <h2 class="text-center text-danger m-4">
          Sorry, there was an error in processing.
        </h2>
      </header';
    }
  }
?>

<main> 
  <article class="card" style="width: 18rem;">
    <div class="card-body">
      <h3 class="card-title">
        <?php echo $_POST["firstname"] . " " . $_POST["lastname"] ?>
      </h3>
      <h4 class="card-subtitle mb-2 text-muted"><?php echo $_POST["specialty"]?></h4>
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
