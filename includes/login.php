<div class="login" id="id01">
	<div class="login_box">
		<img class="close" src="assets/images/close.png">
		<h3>Inloggen</h3>
		
		<div class="row centered">
			<div class="col">
				<form action="../SoccerGamble/controllers/loginprocess.php" method="POST">	
					<p>
						<input type="text" name="username" placeholder="Gebruikersnaam" required>
					<br>
					<br>
						<input type="password" name="password" placeholder="Wachtwoord" required>
					</p>

					<input type='submit' value='Inloggen' class="btn_blue">
				</form>
			</div>
		</div>
	</div>
</div>