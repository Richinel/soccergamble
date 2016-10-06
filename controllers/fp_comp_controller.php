<?php
	include('dbconnect.php');

	$sql = "SELECT division_logo FROM fp_competitions";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			echo "	
				<div class='col cc_unit'>
					<img src='assets/images/".$row['division_logo']."'>
				</div>
			";
		}
	} 
	else {
		echo "0 results";
	}
?>