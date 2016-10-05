<?php
    require("resources/common.php");

    unset($_SESSION['user']);
    unset($_SESSION['rank']);
    unset($_SESSION['message']);

    if(!empty($_POST)){
        $id = $_POST['id'];
        $entered=true;
        if(empty($_POST['id'])) 
        { 
        	echo "please enter your user id"; 
        	$entered=false;
        }
        if(empty($_POST['password'])) 
        { 
        	echo "please enter a password"; 
        	$entered=false;
        }

        if($entered == true)
        {
            require("resources/user-management/convertid.php");
        	$sql = "SELECT id, password, rank FROM login WHERE id = $id";
        	$result = mysqli_query($conn, $sql);

        	$loginInfo = mysqli_fetch_assoc($result);

        	if($loginInfo['password'] == $_POST['password'])
        	{
        		//Print login success (This is not needed)
        		echo "login success";
        		//Set session user variable to user id
        		$_SESSION['user'] = $loginInfo['id'];
                $_SESSION['rank'] = $loginInfo['rank'];
                $_SESSION['message'] = "welcome to the ISP system";
        		//Redirect user to index page
        		header("Location: index.php");
        		die("Redirecting to index.php"); 
        	}
        	else
        	{
        		//Inform user that their password is incorrect
        		echo "incorrect password";
        	}
        }

    }
//Always close connection at end of script?
?>
<body>
<div style="text-align:center; margin-top:20%;">
<h1>LOG IN</h1>
<form action="login.php" method="post"> 
    User ID:<br /> 
    <input type="text" name="id" value="" /> 
    <br /><br />
    Password:<br /> 
    <input type="password" name="password" value="" /> 
    <br /><br /> 
    <input type="submit" value="Login" /> 
</form>
</div>
</body>