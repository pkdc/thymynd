<!DOCTYPE html>
<html>
	<head>
		<title> Thymynd - Making quality decisions, for one and all</title>
		<meta name="keywords" content="young offenders, youth offenders, custody,
		 support, decision, decision making, quality decision, quality decision making,
		 prison, psychiatry, mental, mental health, prepare, thought, data, for one and all">
		<meta name="author" content="David Choy and Monique Ho">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/stylesheet.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>

<?php
	//include_once 'includes/start_session.php';
	include_once 'includes/header.php';
?>
		<main id="landing-page">
			<article id="first" class="clearfix">
				<section id="summary">
					<h1 class="summary-title">Making quality decisions, for one and all</h1>
					<h2><br>Everyone makes decisions on a daily basis. <br><br></h2>
						<h2>At Thymynd, we believe quality decisions are important for everyone as they can
						 bring us to very different outcomes in lives. A way to enhance decision making is to make
						  space for individuals to reflect on scenarios that
							 are <em>relevant</em> to them prior to real instances.<br> <br></h2>
	<h2>Thymynd explores personalised experience for everyone to sharpen their decision making in the future.</h2>
					</p>
				</section>
				<section>
				<figure id="pic">
					<img src="images/mental.jpg" alt="image representing a mentally diordered person">
					<figcaption> An image representing a mentally diordered person </figcaption>
					<br>
				</figure>
			</section>
			</article>

				<section id="contact_form" class="clearfix">
					<form action="includes/sub-inc.php" method="POST" class="form"><br>
						<label class="form_label" for="text"> <strong> First Name </strong> </label><br><br>

						<?php
						//problem with GET?
							if(isset($_GET['first'])) {
								echo '<input class="form_input" type="text" name="first" accesskey="f" value="'.$_GET['first'].'"><br><br>';
							}
								else {
									echo '<input class="form_input" type="text" name="first" accesskey="f" placeholder="My First name"><br><br>';
								}
						 ?>

						<label class="form_label" for="text"> <strong> Last Name </strong> </label><br><br>
						<?php
							if(isset($_GET['last'])) {
								echo '<input class="form_input" type="text" name="last" accesskey="l"  value="'.$_GET['last'].'"><br><br>';
							}
							else {
								echo '<input class="form_input" type="text" name="last" accesskey="l" placeholder="My Last name"><br><br>';
							}
						 ?>

						<label class="form_label" for="email"> <strong> Email </strong> </label><br><br>
						<?php
							if(isset($_GET['email'])) {
								echo '<input class="form_input" type="email" accesskey="e" placeholder="Enter my email address" value="'.$_GET['email'].'"><br>';
							}
							else {
								echo '<input class="form_input" type="email" name="email" accesskey="e" placeholder="Enter my email address"><br>';
							}
						 ?>

						<button class="form_button" type=submit name="submit" accesskey="s">I want to receive the latest updates</button>

					</form>

					<?php
					//check the subscribe status
					if(!isset($_GET['subscribe'])) {
						echo " ";
					}

					else {
						switch ($_GET['subscribe']) {
								case "error":
									echo "<div class='alert-danger' role='alert'>
									 I did not reach this page through subscribing
									 </div>";
									break;

								case "empty":
								  // echo '$email "<br>" $fname <br> $lname';
									echo "<div class='alert-danger' role='alert'>
									 I have to fill in all my details</div>";
									break;

								case "invalidemail":
									echo "<div class='alert-danger' role='alert'>
									 I have filled in my email wrongly
									 </div>";
									break;

								case "char":
									echo "<div class='alert-danger' role='alert'>
									 I have filled in my name wrongly
									 </div>";
									break;

								case "success":
									echo "<div class='alert-success' role='alert'>
									Thank you, you'll hear from us soon
									</div>";
									break;

								default:
									echo " ";
							}

						}
		 			?>

					<?php

						//check the contact status
						if(!isset($_GET['contact'])) {
							echo " ";
						}
						else if($_GET['contact'] == "sent"){
							echo "<p class='success'> I have sent an email to Thymynd successfully!!</p>";
						}
						else {
							echo " ";
						}
					?>
					<br>
				</section>

				<section id="icon-and-text" class="clearfix">
					<h2>Applications</h2>
					<article><p>We pilot in the education sector, social services and justice services.
						The next stage will be for health researchers and clinicians.<br>
						We aim to make Thymynd available to professionals in other industries
						 for better decision making.</p><br></article>
						 <div class="row">
							<figure class="ictext" class="col-lg-3 col-sm-12">
								<img src="images/icon_learn.png" alt="Enhance the support of mental health and well-being to school children">
								<p> Enhance the support of <br>mental health and well-<br>being to school children</p>
							</figure>
							<section class="ictext" class="col-lg-3 col-sm-12">
								<img src="images/icon_jail.svg" alt="Strengthen personal resilience to minimise repeat offending">
								<p> Strengthen personal<br> resilience to minimise<br> repeat offending</p>
							</section>
							<section class="ictext" class="col-lg-3 col-sm-12">
								<img src="images/icon_doc.png" alt="Provide more granular and consistent statistics for diagnosis">
								<p> Provide more granular <br>and consistent statistics<br> for diagnosis</p>
							</section>
							<section class="ictext" class="col-lg-3 col-sm-12">
								<img src="images/icon_prof.svg" alt="Facilitate better decision making at work and in life">
								<p> Facilitate better<br> decision making at <br>work and in life</p>
							</section>
						</div>
				</section>
<?php
	include_once 'includes/footer.php';
?>
		</main>
	</body>
</html>
