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
        <?php echo $_GET["firstname"] . " " . $_GET["lastname"] ?>
      </h3>
      <h4 class="card-subtitle mb-2 text-muted"><?php echo $_GET["specialty"]?></h4>
      <p class="card-text">Date of birth: <?php echo $_GET["dateofbirth"]?></p>
      <p class="card-text">Email adress: <?php echo $_GET["email"]?></p>
      <p class="card-text">Contact number: <?php echo $_GET["phone"]?></p>
    </div>
  </article>
  <?php 
    echo $_GET["firstname"]; // prints user's first name
    echo $_GET["lastname"];
    echo $_GET["dateofbirth"];
    echo $_GET["specialty"];
    echo $_GET["email"];
    echo $_GET["phone"];
    echo $_GET["password"];
    echo $_GET["formcheck"];
  ?>
</main>
<!-- footer -->
<?php 
  require_once "./includes/footer.php" 
?>
