<div class="messagebox af" id="id02">
	<div class="messagebox_body">
		<img class="close" src="assets/images/close.png">
		<h3>FAQ-item toevoegen</h3>

		<form action='../soccergamble_git/controllers/add_faq_controller.php' method='POST'>
			<p>
				<input type="text" name="question" placeholder="Vraag hier.." required>
			<br>
			<br>
				<textarea name="answer" placeholder="Antwoord hier.." rows='10'></textarea>
			</p>

			<input type='submit' value='Toevoegen' class="btn_blue">
		</form>


	</div>
</div>