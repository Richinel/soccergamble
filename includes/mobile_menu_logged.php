<div class="mobile_menu">
	<p>
		<ul>
			<li class="mobile_profile">
				<i class="fa fa-user" aria-hidden="true"></i>
				<?php echo "Welkom, ", $_SESSION['username']; ?>
			</li>
		</ul>
	</p>
	<hr>
	<p>
		<ul>
			<a href="index">
				<li>
					<i class="fa fa-home" aria-hidden="true"></i>
					Home
				</li>
			</a>
			<a href="competitions">
				<li>
					<i class="fa fa-trophy" aria-hidden="true"></i>
					Wedstrijden
				</li>
			</a>
			<li>
				<i class="fa fa-info-circle" aria-hidden="true"></i>
				Hoe werkt het?
			</li>
			<a href="faqpage">
				<li>
					<i class="fa fa-question-circle" aria-hidden="true"></i>
					FAQ
				</li>
			</a>
			<a href="contact">
				<li>
					<i class="fa fa-phone-square" aria-hidden="true"></i>
					Contact
				</li>
			</a>
			<?php if($_SESSION['rights'] == 3) { ?>
				<a href="#">
					<li class="success">
						<i class="fa fa-lock" aria-hidden="true"></i>
						Admin Tools
					</li>
				</a>
			<?php } ?>
		</ul>
	</p>
	<p>
		<ul>
			<li>
				<i class="fa fa-check-square-o" aria-hidden="true"></i>
				<span class="uitloggen_m">Uitloggen</span>
			</li>
		</ul>
	</p>
</div>