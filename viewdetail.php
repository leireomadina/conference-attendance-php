<!-- head -->
<?php 
  $title = "View Record";
  
  require_once "includes/head.php";
  require_once "db/db-config.php";

  // get attendee by id
  if(!isset($_GET["id"])) {
    echo "<h1 class='text-danger mt-4 mb-4'>Please check details and try again</h1>";
  } else {
    $id = $_GET["id"];
    $result = $crud->getAttendeeDetails($id); // returns an array
?>

<article class="card mt-4 mb-4" style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title">
      <?php echo $result["firstname"] . " " . $result["lastname"] ?>
    </h3>
    <h4 class="card-subtitle mb-2 text-muted"><?php echo $result["name"]?></h4>
    <p class="card-text">Date of birth: <?php echo $result["dateofbirth"]?></p>
    <p class="card-text">Email address: <?php echo $result["emailaddress"]?></p>
    <p class="card-text">Contact number: <?php echo $result["contactnumber"]?></p>
  </div>
</article>

  <?php   }?>
<!-- footer -->
<?php 
  require_once "includes/footer.php"; 
?>