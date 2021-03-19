<!-- head -->
<?php 
  $title = "View Records";
  
  require_once "includes/head.php";
  require_once "db/db-config.php"; 
  
  $results = $crud->getAttendees(); // returns an array
?>

  <table class="table mt-4 mb-4">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Specialty</th>
      <th>Actions</th>
    </tr>
    <?php while($result = $results->fetch(PDO::FETCH_ASSOC)) { ?>
      <tr>
        <td><?php echo $result["attendee_id"] ?></td>
        <td><?php echo $result["firstname"] ?></td>
        <td><?php echo $result["lastname"] ?></td>
        <td><?php echo $result["name"] ?></td>
        <td><a href="viewdetail.php?id=<?php echo $result["attendee_id"] ?>" class="btn btn-primary">View</a></td>
      </tr>
    <?php } ?> 
    </tr>
  </table>

<!-- footer -->
<?php 
  require_once "includes/footer.php"; 
?>