<?php
    require("resources/common.php"); 

    $id = $_POST['id'];
    $enter=true;
    if (empty($_POST['id']) { echo "please enter your user id"; $enter=false;}
    if (empty($_POST['password']) { echo "please enter a password"; $enter=false;}

    if($enter == true)
    {

    	$sql = "SELECT id, password FROM login WHERE id = $id";
    	$result = mysqli_query($conn, $sql);

        echo $result['id'];
        echo $result['password']

    	mysqli_close($conn);

    }