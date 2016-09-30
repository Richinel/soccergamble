<?php $title = "Contact"; ?>
<?php include('includes/header.php'); ?>

	<div class="content">
		<div class="wrapper">
			<h3>Contact</h3>
			<hr>
			<p>
				Heeft u vragen en/of opmerkingen? Dan kunt u via dit formulier contact met ons opnemen. Uiteraard kunt u ons ook altijd bellen op 010 - 495 87 32. <br>
				Let op: Dit nummer is voor algemene vragen. Is uw account geblokkeerd, verwijderd of heeft u andere vragen omtrent uw account? Stuur dan een mail naar <a href="#">accountbeheer@soccergamble.nl</a> of bel ons op <a href="#">010 - 493 52 67</a>
			</p>

			<div class="row centered">
				<div class="col-6">
					<fieldset class="fs1">
						<legend>Contactformulier</legend>
						<form class="contact_form">
							Naam:<br>
							<input type="text" name="username"><br><br>

							E-mailadres:<br>
							<input type="text" name="email"><br><br>

							Onderwerp:<br>
							<input type="text" name="email"><br><br>

							Uw bericht:<br>
							<textarea placeholder="Uw bericht/opmerking"></textarea>
							<br>

							<button class="button primary outline upper">Verzenden</button>
						</form>
					</fieldset>
				</div>
			</div>
		</div>
	</div>

<?php include('includes/footer.php'); ?>