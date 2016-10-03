<?php
    require("resources/common.php"); 

    if(!empty($_POST)
    {
    	if empty($_POST['id']) { echo "please enter your user id";}
    	if empty($_POST['password']) { echo "please enter a password";}

    	$sql = "SELECT id, password FROM login WHERE id = $POST['id']";
    	$result = mysqli_query($conn, $sql);

    	if (mysqli_num_rows($result) > 0) {
    		while ($row = mysqli_fetch_assoc($result)) {
    			echo "id: " . $row["id"]. " - Name: " . $row ["password"]. "<br>";
    		}
    	}
    	else {echo "incorrect uid"}

    	mysqli_close($conn);

    }