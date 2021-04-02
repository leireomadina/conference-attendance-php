<!-- head -->
<?php 
  $title = "Edit Record";

  require_once "includes/head.php";
  require_once "db/db-config.php"; 
  
  $results = $crud->getSpecialties();

  if(!isset($_GET["id"])) {
    include "includes/errormessage.php";
    header("Location: viewrecords.php");
  } else {
    $id = $_GET["id"];
    $attendee = $crud->getAttendeeDetails($id);
?>

<header>
  <h1 class="text-center m-4">Edit Record<h1/>
</header>
<main>
  <form method="post" action="editpost.php">
    <input type="hidden" name="id" value="<?php echo $attendee["attendee_id"] ?>">
    <div class="mb-3">
      <label for="firstname" class="form-label">Name</label>
      <input required type="text" class="form-control" id="firstname" aria-describedby="firstName" name="firstname" value="<?php echo $attendee["firstname"]?>">
    </div>
    <div class="mb-3">
      <label for="lastname" class="form-label">Last name</label>
      <input required type="text" class="form-control" id="lastname" aria-describedby="lastName" name="lastname" value="<?php echo $attendee["lastname"]?>">
    </div>
    <div class="mb-3">
      <label for="dateofbirth" class="form-label">Date of birth</label>
      <input type="date" class="form-control" id="dateofbirth" aria-describedby="dateOfBirth" name="dateofbirth" value="<?php echo $attendee["dateofbirth"]?>">
    </div>
    <div class="mb-3">
      <label for="specialty" class="form-label">Area of expertise</label>
      <select class="form-select" aria-label="Default select example" id="specialty" name="specialty">
        <?php 
          while($result = $results->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?php echo $result["specialty_id"]?>" <?php if($result["specialty_id"] == $attendee["specialty_id"]) echo "selected" ?>>
              <?php echo $result["name"]?>
            </option>
        <?php } ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo $attendee["emailaddress"]?>">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="phone" class="form-label">Contact number</label>
      <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp" name="phone" value="<?php echo $attendee["contactnumber"]?>">
      <div id="phoneHelp" class="form-text">We'll never share your number with anyone else.</div>
    </div>
    <div class="mb-4">
      <label for="avatar" class="form-label">Upload image (optional)</label>
      <input type="file" accept="image/*" class="form-control" id="avatar" aria-describedby="avatarHelp" name="avatar" value="<?php echo $attendee["avatar_path"]?>">
    </div>
    <!-- <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password">
    </div> -->
    <!-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="formcheck" name="formcheck">
      <label class="form-check-label" for="formcheck" >Check me out</label>
    </div> -->
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" class="btn btn-success mb-2" name="submit">Save changes</button>
      <a href="viewrecords.php" class="btn btn-info">Back to list</a>
    </div>
  </form>
</main>

<?php  } ?>

<!-- footer -->
<?php 
  require_once "includes/footer.php"; 
?>