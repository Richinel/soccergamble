<div class="profile">
	<div class="profile_box">		
		<h3>
			Profiel aanpassen
		</h3>
			<hr>

		<div class="row centered">
			<div class="col">
			<i class="fa fa-user profile_pic" aria-hidden="true"></i>
			</div>

			<div class="col user_info">
				<img class="close" src="assets/images/close.png">
				<p>
					<h3 class="user_fullname">
						<?php echo $profile->getFirstname(), " ", $profile->getLastname(); ?>
					</h3>
				</p>

				<p>
					Gebruikersnaam:<br>
					<span class="lighter"><?php echo $profile->getUsername(); ?></span>
				</p>

				<p>
					E-mailadres:<br>
					<span class="lighter"><?php echo $profile->getMail(); ?></span>
				</p>

				<p>
					Credits:<br>
					<span class="lighter"><?php echo $profile->getCredits(); ?></span>
				</p>

				<div class="button primary outline">
					Credits toevoegen
				</div>
			</div>
		</div>
	</div>
</div>