<!-- head -->
<?php 
  $title = "Index";
  
  require_once "includes/head.php";
  require_once "db/db-config.php";
  
  $results = $crud->getSpecialties();
?>
<!-- header -->
<?php 
  require_once "includes/header.php"; 
?>
<!-- main > form -->
<?php 
  require_once "includes/form.php"; 
?>
<!-- footer -->
<?php 
  require_once "includes/footer.php"; 
?>