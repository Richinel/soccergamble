<div class="register" id="id01">
	<div class="register_box">
		<img class="close" src="assets/images/close.png">
		<h3>Registreren</h3>

		<p>
			Om te kunnen wedden moet u een account hebben. Maak nu snel en gratis een account aan en ontvang 25 credits cadeau!
		</p>

		<form action='../soccergamble_git/controllers/registerprocess.php' method='POST'>
			<p>
				<input type="text" name="username" placeholder="Kies een gebruikersnaam" required>
			<br>
			<br>
				<input type="text" name="firstname" placeholder="Uw voornaam" required>
			<br>
			<br>
				<input type="text" name="lastname" placeholder="Uw achternaam" required>
			<br>
			<br>
				<input type="text" name="email" placeholder="Uw e-mailadres" required>
			<br>
			<br>
				<input type="password" name="password" placeholder="Uw wachtwoord" required>
			<br>
			</p>

			<input type='submit' value='Registreren voltooien' class="btn_blue">
		</form>


	</div>
</div>