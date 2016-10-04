<?php
    include('dbconnect.php');

    $sql = "SELECT thuisploeg, thuis_score,uitploeg, uit_score, division_logo FROM wedstrijden";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         // output data of each row
         while($row = $result->fetch_assoc()) {
              echo "    
            <div class='col col-4 fpc'>
                <img class='fpcimg noselect' src='assets/images/".$row['division_logo']."'>
                <p>
                    <strong>" .$row['thuisploeg']. "</strong>
                    <span class='score'>".$row['thuis_score']."</span>
                </p>
                <p>
                    <strong>" .$row['uitploeg']. "</strong>
                    <span class='score'>".$row['uit_score']."</span>
                </p>
            </div>
        ";
         }
    } else {
         echo "0 results";
    }

    $conn->close();
?>
