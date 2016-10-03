<?php
    require("resources/common.php"); 

    if(!empty($_POST))
    {
    	if (empty($_POST['id'])) 
    	{ 
    		echo "please enter a user id number"; 
    		$attempt = bad;
    	}
    	if (empty($_POST['password'])) 
    	{ 
    		echo "please enter a password"; 
    		$attempt = bad;
    	}
    	if (empty($_POST['nameFirst']))
    	{ 
    		echo "please enter a first name"; 
    		$attempt = bad;
    	}
    	if (empty($_POST['nameLast']))
    	{ 
    		echo "please enter a last name"; 
    		$attempt = bad;
    	}

    	$sql = "SELECT id, nameFirst FROM login WHERE id = $POST[id]";
    	$result = mysqli_query($conn, $sql);

    	if (!empty($result['name'])) 
    	{
    		echo "This UID is currently in use by" $result[name];
    		$attempt = bad;
    	}

    	if ($attempt != bad)
    	{

	    	$sql = "INSERT INTO login (id, password, nameFirst, nameLast) VALUES ($_POST['id'], $_POST['password'], $_POST['nameFirst'], $_POST['nameLast'])";

	    	if (mysqli_query($conn, $sql)) 
	    	{
	    		echo "User created successfully";
	    	} else {
	    		echo "Fatal Error";
	    	}

   		}


    }

	mysqli_close($conn);