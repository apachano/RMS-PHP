<?php 
$accesslevel=5; 
$page="Employee New";
require("resources/core.php");
?>
<?php

    if(!empty($_POST)){
        $id= "";
        $id = $_POST['id'];
        $address = $_POST['address'];
        $nameFirst = $_POST['nameFirst'];
        $nameLast = $_POST['nameLast'];
        $email = $_POST['email'];
        $email = $_POST['phone'];
        $entered=true;
        if(empty($_POST['id']))
        { 
        	echo "please enter your user id"; 
        	$entered=false;
        }
        if(empty($_POST['nameFirst'])) 
        { 
        	echo "please enter a first name"; 
        	$entered=false;
        }
        if(empty($_POST['nameLast'])) 
        { 
        	echo "please enter a last name"; 
        	$entered=false;
        }

        if($entered == true)
        {
        	echo "success";
        }
    }
?>

<form action="users-new.php" method="post">
    User ID:<br />
    <input type="text" name="id" value="" />
    <br /><br />
    First name:<br />
    <input type="password" name="nameFirst" value="" />
    <br /><br /> 
    Last name:<br />
    <input type="text" name="nameLast" value="" />
    <br /><br />
    Email:<br /> 
    <input type="text" name="email" value="" />
    <br /><br /> 
    Address:<br /> 
    <input type="text" name="address" value="" />
    <br /><br /> 
    Phone Number:<br /> 
    <input type="text" name="phone" value="" />
    <br /><br /> 
    <input type="submit" value="Register" />
</form>

