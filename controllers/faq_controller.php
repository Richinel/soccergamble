<?php
	include('dbconnect.php');

	$sql = "SELECT question, answer FROM faq";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "	
				<div class='col col-4 faq_item'>
					<h4>".$row['question']."</h4>
					<p>".$row['answer']."</p>
				</div>
			";
		}
		echo '</div>';
	} 
	else {
		echo "0 results";
	}
?>