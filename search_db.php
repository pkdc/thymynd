<?php
  //include_once 'includes/dbh-inc.php';
  include_once 'includes/dbh-inc-local.php';
  include_once 'includes/start_session.php';
  include_once 'includes/header.php';
 ?>
  <body>
    <?php
      $data = "hoho@ho";
      //create a template
      $sql = "SELECT * FROM subscribe WHERE email=?;";
      //create a prepared statement
      $stmt = mysqli_stmt_init($conn);
      //prepare the prepared statment
      if(!mysqli_stmt_prepare($stmt, $sql))
      {
        echo "sql stmt failed";
      }
      else
      {
          //binding
          mysqli_stmt_bind_param($stmt, "s", $data);
          //execute
          mysqli_stmt_execute($stmt);
          //while loop print
          $result = mysqli_stmt_get_result($stmt);
          //print out the result of the search
          while ($row = mysqli_fetch_assoc($result))
          {
            echo $row['email']."<br>".$row['id']."<br>";
          }
          //drop it from the db

      }
    ?>
  </body>
</html>
