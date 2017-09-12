<div class="nav-container">
	<ul class="navbar">
		<div class='nav-name'>
			<!-- <a href="politicaldoorhangers.com">PoliticalDoorhangers.com</a> -->
			<a href="/index.php">PoliticalDoorhangers.com</a>
		</div>

		<li class="hamburger-button hidden">
			<button class="hamburger hamburger--spin" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button> 
		</li>
		<li class="nav-link hidden">
			<a class="<?php if($fileName == "testimonials") echo 'active'; ?>" href="\testimonials.php">Testimonials</a>
		</li>
		<li class="nav-link hidden">
			<a class="<?php if($fileName == "contact") echo 'active'; ?>" href="\contact.php">Contact</a>
		</li>
		<li class="nav-link hidden">
			<a class="<?php if($fileName == "about") echo 'active'; ?>" href="\about.php">About Us</a>
		</li>
		<li class="nav-link hidden">
			<a class="<?php if($fileName == "index") echo 'active'; ?>" href="\index.php">Home</a>
		</li>
	</ul>
</div>

<div class="slider-menu">
	<ul class='slider-links'>
		<li class="slider-link <?php if($fileName == "index") echo 'active'; ?>">
			<a href="index.php">Home</a>
		</li>
		<li class="slider-link <?php if($fileName == "about") echo 'active'; ?>">
			<a href="about.php">About Us</a>
		</li>
		<li class="slider-link <?php if($fileName == "contact") echo 'active'; ?>">
			<a href="contact.php">Contact</a>
		</li>
		<li class="slider-link <?php if($fileName == "testimonials") echo 'active'; ?>">
			<a href="testimonials.php">Testimonials</a>
		</li>
	</ul>
</div>