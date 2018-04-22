<!DOCTYPE html>
<?php $fileName = "contact"; ?>

<html lang="en-US">
	<head>
		<title>Political Doorhangers - Contact</title>
		<?php include_once("header.php");?>
	</head>

	<body>
		<?php include_once("navbar.php");?>

		<div class="main-body">

			<hr class="stars">

			<div class="card m-top-30">

				<div class="card-top">
					<h2>Contact</h3>
				</div>

				<div class="card-body">

					<p class="center">
						If you would like to contact us, please fill out the contact form below.
					</p>

					<div id="contact-container">
						<form id="contact" action="" method="post" name="contact">

							<fieldset>
								<input id="form-name" placeholder="Your name" type="text" tabindex="1" required autofocus>
							</fieldset>

							<fieldset>
								<input id="form-email" placeholder="Your Email Address" type="email" tabindex="2" required>
							</fieldset>

							<fieldset>
								<input id="form-phone" placeholder="Your Phone Number (optional)" type="tel" tabindex="3">
							</fieldset>

							<fieldset>
								<textarea id="form-message" placeholder="Type your message here...." tabindex="4" required></textarea>
							</fieldset>

							<fieldset>
								<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
							</fieldset>

						</form>
					</div>

					<div class="hidden" id="contact-success">
						<p>
							Thank you for your interest in PoliticalDoorhangers. Your contact form has been submitted and we will be in touch shortly. 
						</p>
					</div>

					<p class="center">
						Or, contact us directly:
					</p>

					<p class="center">
						John Smith<br>
						555-555-5555<br>
						<a class="content-link" href="mailto:tyler@tylerkucera.com ?Subject=Political%20Doorhangers%20Inquiry" target="_top">
							email@email.com 
						</a>
					</p>

					<p class="center">
						Jim Smith<br>
						555-555-5556<br>
						<a class="content-link" href="mailto:tyler@tylerkucera.com?Subject=Political%20Doorhangers%20Inquiry" target="_top">
							email2@email.com
						</a>
					</p>
					
				</div>

				<div class='card-bottom'></div>
			</div>
		  <hr class="stars no-top">

		</div>
		<?php include_once("footer.php");?>
	</body>
</html> 