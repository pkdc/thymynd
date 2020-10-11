<?php

  //check if it's through submit button
  if (!isset($_POST['submit'])) {
    header("Location: ../index.php?subscribe=error");
  }
  else {
      //include_once 'dbh-inc.php';
      include_once 'dbh-inc-local.php';

      $fname = $_POST['first'];
      $lname = $_POST['last'];
      $email = $_POST['email'];
      $today = date('Y:m:d H:i:s');

      //check for empty fields
      if(empty($email) ||empty($fname) ||empty($lname)) {
        header("Location: ../index.php?subscribe=empty");
      }
      else {
          //check for valid email
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //header("Location: ../index.php?subscribe=invalidemail&first=$fname&last=$lname");
            header("Location: ../index.php?subscribe=invalidemail");
          }
          else {
            //check for valid first and last name
            if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/",$lname)) {
              // header("Location: ../index.php?subscribe=char&email=$email");
              header("Location: ../index.php?subscribe=char");
            }
            else {
                //Inserting subscription using prepared statement
                //create a template
                $sql = "INSERT INTO subscribe (firstname, lastname, email, date) VALUES (?, ?, ?, ?);";
                //create prepared stmt
                $stmt = mysqli_stmt_init($conn);
                //prepare the prepared $stmt
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                  echo "Sql prepare failed";
                }
                else {
                  //bind parameters
                  mysqli_stmt_bind_param($stmt, ssss, $fname, $lname, $email, $today);
                  //execute
                  $result = mysqli_stmt_execute($stmt);
                }
                //send a raw HTTP header
                header("Location: ../index.php?subscribe=success");
              }
            }
          }
      }


?>
