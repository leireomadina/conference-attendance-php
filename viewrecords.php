<!-- head -->
<?php 
  $title = "Index";
  require_once "includes/head.php";
  require_once "db/db-config.php"; 
  
  $results = $crud->getAttendees(); // returns an array
?>

  <table class="table">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Date of Birth</th>
      <th>Email Address</th>
      <th>Contact Number</th>
      <th>Specialty</th>
    </tr>
    <?php while($result = $results->fetch(PDO::FETCH_ASSOC)) { ?>
      <tr>
        <td><?php echo $result["attendee_id"] ?></td>
        <td><?php echo $result["firstname"] ?></td>
        <td><?php echo $result["lastname"] ?></td>
        <td><?php echo $result["dateofbirth"] ?></td>
        <td><?php echo $result["emailaddress"] ?></td>
        <td><?php echo $result["contactnumber"] ?></td>
        <td><?php echo $result["name"] ?></td>
      </tr>
    <?php } ?> 
    </tr>
  </table>

<!-- footer -->
<?php 
  require_once "includes/footer.php"; 
?>