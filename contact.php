<!DOCTYPE html>
<html>
	<head>
		<title> Thymynd - Contact Us Through Email </title>
		<meta name="keywords" content="Contact Us, ThyMynd">
		<meta name="author" content="David Choy and Monique Ho">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/7291736940.js" crossorigin="anonymous"></script>
	</head>

<?php
  include_once "includes/header.php";
?>

<h1 class="para"> Send email to us</h1>
<form action="includes/contact-inc.php" method="POST" class="contact_form">
  <label class="form_label" for="text"> Name </label><br>
  <input name="name" type="text" class="form_input" placeholder="My name"> </input><br><br>

  <label class="form_label" for="text"> Email </label><br>
  <input name="email" type="email" class="form_input" placeholder="My email"> </input><br><br>

  <label class="form_label" for="text"> Subject </label><br>
  <input name="subject" type="text" class="form_input" placeholder="Subject"> </input><br><br>

  <label class="form_label" for="text"> Message </label><br>
  <textarea name="message" class="form_input" placehoder="My message"> </textarea><br><br>

  <button class="form_button" name="submit" type="submit"> Send My Message </button>
</form>

<?php
  include_once "includes/footer.php";
?>
