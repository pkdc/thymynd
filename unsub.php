<?php
  include_once "includes/header.php";
?>
      <p class="para">We are sorry to see you go</p>
      <div class="contact_form">
        <form action="includes/unsub-inc.php" method="POST" class="form"><br>
          <label class="form_label" for="email"> <strong> Email </strong> </label><br><br>
          <input class="form_input" type="email" name="email" placeholder="Enter my email address"><br>
          <button class="form_button" type=submit name="submit">Unsubscribe</button>
        </form><br><br>
      </div>
      <p class="para"> Miss us already? Follow <a href="index.php">this link</a> to rejoin.<p>
  </body>
</html>
