<?php
// identifies the session that needs to be destroyed
  include_once "includes/session.php";
?>

<?php
// finishes the in progress session after the user logouts
  session_destroy();
  header("Location: index.php");
?>