<div class="ucl_table">
    <?php
        $servername     = "localhost";
        $username       = "root";
        $password       = "";
        $dbname         = "SoccerGamble";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT thuisploeg, uitploeg, stand FROM wedstrijden_ucl";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             echo "<table align='left'>
                    <tr>
                    <th>Thuisploeg</th>
                    <th>Uitploeg</th>
                    <th>Stand</th>
                    </tr>";
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 echo "<tr><td align='left'>" . $row["thuisploeg"]. "</td><td>" . $row["uitploeg"]. "</td><td>" . $row["stand"]."</td></tr>";
             }
             echo "</table>";
        } else {
             echo "0 results";
        }

        $conn->close();
    ?>
</div>