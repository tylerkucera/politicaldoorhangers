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
				</div>

				<div class='card-bottom'>
					
				</div>
			</div>

			<hr class="stars no-top">

		</div>


    </body>
</html> 