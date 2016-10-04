<div class="login" id="id01">
	<div class="login_box">
		<img class="close" src="assets/images/close.png">
		<h3>Inloggen</h3>
		
		<div class="row centered">
			<div class="col">
				<form action="../soccergamble_git/controllers/loginprocess.php" method="POST">	
					<p>
						<input type="text" class="capitalize" name="username" placeholder="Gebruikersnaam" required>
					<br>
					<br>
						<input type="password" name="password" placeholder="Wachtwoord" required>
					</p>

					<input type='submit' value='Inloggen' class="btn_blue"><br>
					<small class="subtext">
						<a href="./forgot_pass.php">
							Wachtwoord vergeten?
						</a>
					</small>
				</form>
			</div>
		</div>
	</div>
</div>