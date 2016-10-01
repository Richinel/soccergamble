<?php $title = "FAQ"; ?>
<?php include('includes/header.php'); ?>

	<div class="content">
		<div class="wrapper">
			<h3>Frequently Asked Questions</h3>
			<hr>
			<div class="row blocks">
				<?php include('./controllers/faq_controller.php'); ?>

				<?php
					error_reporting(0);
					if($_SESSION['rights'] == 3) {
						include('includes/add_faq.php');
					}
					include('includes/add_faq_form.php');
				?>
			</div>
			
		</div>
	</div>

<?php include('includes/footer.php'); ?>