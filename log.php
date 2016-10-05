<?php 
$accesslevel=5; 
$page="log";
require("resources/core.php")
?>


<h3>Recent system error message</h3>
<?php

$errlog = $_SESSION['errmessage'];
echo $errlog;
?>

<h3>Server error log</h3>
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