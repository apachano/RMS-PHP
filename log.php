<?php 
$accesslevel=5; 
$page="log";
require("resources/core.php")
?>



<?php
$sql = "SELECT date, message FROM errorlog";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "date: " . $row["date"]. " - Message: " . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
?>