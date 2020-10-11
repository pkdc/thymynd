<?php
  // include_once 'dbh-inc.php';
  include_once 'dbh-inc-local.php';

  $email = $_POST['email'];

  //create a template
  $sql = "DELETE FROM subscribe WHERE email=?";
  //create a stmt
  $stmt = mysqli_stmt_init($conn);
  //prepare the stmt
  if(!mysqli_stmt_prepare($stmt, $sql))
  {
    echo "Sql prepare failed";
  }
  else
  {
    mysqli_stmt_bind_param($stmt, 's', $email);
    //execute
    mysqli_stmt_execute($stmt);
  }

  //send a raw HTTP header
  header("Location: ../index.php?unsubscribe=success");
?>
