<?php

  if(!isset($_POST['submit'])) {
    header("Location: ../contact.php?submit-message=error");
  }
  else {
    //
    // include_once 'dbh-inc.php';
    // // include_once 'dbh-inc-local.php';

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    echo "$name <br> $mailFrom <br> $subject <br> $message <br>";
    //check for empty fields
    if(empty($mailFrom) ||empty($name) ||empty($subject) || empty($message)) {
      header("Location: ../contact.php?submit-message=empty");
    }
    else {
        //check for valid email
        if(!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
          header("Location: ../contact.php?submit-message=invalidemail&name=$name");
        }
        else {
          //check for valid first and last name
          if (!preg_match("/^[a-zA-Z]*$/", $name)) {
            header("Location: ../contact.php?submit-message=char&email=$mailFrom");
          }
          else {
            $mailTo = "david@thymynd.website";
            $headers = "From: ".$mailFrom;
            $txt = "You have received an email from ".$name.".\n\n".$message;

            mail($mailTo, $subject, $txt, $headers);

            header("Location: ../index.php?contact=sent");

              // //Inserting subscription using prepared statement
              // //create a template
              // $sql = "INSERT INTO subscribe (name, email, subject, message) VALUES (?, ?, ?, ?);";
              // //create prepared stmt
              // $stmt = mysqli_stmt_init($conn);
              // //prepare the prepared $stmt
              // if(!mysqli_stmt_prepare($stmt, $sql)) {
              //   echo "Sql prepare failed";
              // }
              // else {
              //   //bind parameters
              //   mysqli_stmt_bind_param($stmt, ssss, $name, $mailFrom, $subject, $message);
              //   //execute
              //   $result = mysqli_stmt_execute($stmt);
              // }
              // //send a raw HTTP header
              // header("Location: ../index.php?subscribe=success");
            // }
          }
        }
    }
  }

?>
