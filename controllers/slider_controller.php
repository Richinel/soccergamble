<?php
	include('dbconnect.php');

	$sql = "SELECT title, subtitle, backgroundimg FROM slider";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "<div class='slider' style='background-image: url(".$row['backgroundimg']."); background-repeat: no-repeat; background-size: cover;'>
					<div class='s_content'>
						<h3>".$row['title']."</h3>
						<hr>
						<p>".$row['subtitle']."</p>
					</div>
				</div>";
		}
		echo '</div>';
	} 
	else {
		echo "0 results";
	}
?>