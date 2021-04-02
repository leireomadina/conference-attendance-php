<!-- head -->
<?php 
  $title = "View Record";
  
  require_once "includes/head.php";
  require_once "db/db-config.php";

  // get attendee by id
  if(!isset($_GET["id"])) {
    include "includes/errormessage.php";
  } else {
    $id = $_GET["id"];
    $result = $crud->getAttendeeDetails($id); // returns an array
?>

<article class="card mt-4 mb-4" style="width: 18rem;">
  <img src="<?php echo empty($result["avatar_path"]) ? "uploads/blank.jpg" :  $result["avatar_path"] ?>" class="card-img-top"/>
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
<div class="mb-4">
  <a href="viewrecords.php" class="btn btn-info">Back to list</a>
  <a href="edit.php?id=<?php echo $result["attendee_id"] ?>" class="btn btn-warning">Edit</a>
  <a href="delete.php?id=<?php echo $result["attendee_id"] ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
</div>

  <?php   }?>
  
<!-- footer -->
<?php 
  require_once "includes/footer.php"; 
?>