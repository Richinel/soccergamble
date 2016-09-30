<div class="nav">
		<div class="wrapper">
			<a href="index.php">
				<img class="nav_logo" src="assets/images/sg_logo_white.png">
			</a>
			
			<div class="nav_btns">
				<button class="button primary upper profile_btn"><?php echo "Welkom, <span class='capitalize'>", $_SESSION['username']; ?></button>
				<button class="button primary outline upper logout_btn">Uitloggen</button>
			</div>
		</div>
		<i class="fa fa-bars mnu_btn" aria-hidden="true"></i>
	</div>

	<div class="sub_nav">
		<div class="wrapper">
			<ul>
				<li>
					<a href="index.php">
						<i class="fa fa-home" aria-hidden="true"></i>
					</a>
				</li>
				<li>
					<a href="competitions.php">
						Competities
					</a>
				</li>
				<li>Hoe werkt het?</li>
				<li>FAQ</li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
	</div>

	<?php include('includes/mobile_menu_logged.php'); ?>
