<!-- Imports head tags and bootstrap/css styles -->
<?php 
  $title = "Success";
  require_once "./includes/head.php" 
?>
<header>
  <h2 class="text-center text-success m-4">
    Congrats! You have been registered.
  </h2>
  <p class="text-center text-success">Have fun!</p>
</header>
<main> 
  <article class="card" style="width: 18rem;">
    <div class="card-body">
      <h3 class="card-title">
        <?php echo $_POST["firstname"] . " " . $_POST["lastname"] ?>
      </h3>
      <h4 class="card-subtitle mb-2 text-muted"><?php echo $_POST["specialty"]?></h4>
      <p class="card-text">Date of birth: <?php echo $_POST["dateofbirth"]?></p>
      <p class="card-text">Email adress: <?php echo $_POST["email"]?></p>
      <p class="card-text">Contact number: <?php echo $_POST["phone"]?></p>
    </div>
  </article>
</main>
<!-- footer -->
<?php 
  require_once "./includes/footer.php" 
?>
