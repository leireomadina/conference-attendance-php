<?php 
  $title = "User login";

  require_once "includes/head.php";
  require_once "db/db-config.php"; 

  // if data is submited via post request then try to login...
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // prevents typing errors: transforms to lower case and removes white spaces
    $username = strtolower(trim($_POST["username"]));
    $password = $_POST["password"];
    $new_password =md5($password.$username);

    $result = $user->getUser($username, $new_password);
    if(!$result) {
      echo "<div class'alert alert-danger'>Username or Password is incorrect. Please try again!</div>";
    } else {
      // sets up the session
      $_SESSION["username"] = $username;
      $_SESSION["userid"] = $result["id"];
      header("Location: viewrecords.php");
    }
  }
?>

<header>
  <h1 class="text-center m-4">
    <?php echo $title ?>
  <h1/>
</header>

<main>
  <!-- redirects to the same page and grants protection against potencial attacks -->
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="mb-3">
      <label for="username" class="col-form-label">Username: * </label>
      <input type="text" name="username" class="form-control" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
    </div>
    <div class="mb-4">
      <label for="password" class="col-form-label">Password: * </label>
      <input type="password" name="password" class="form-control" id="password">
    </div>
    <input type="submit" value="Login" class="btn btn-primary btn-block mb-4">
    <a href="#" class="d-block mb-4">Forgot Password</a>  
  </form>
</main>

<?php include_once 'includes/footer.php'?>