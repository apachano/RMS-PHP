<?php ?>

<div id="top"><div id="time">Time Not Synced</div></div>
<div id=head><?php require("resources/head.php"); ?></div>
<div id=user><?php require("resources/user-management/user.php"); ?></div>
<?php require("resources/user-management/register.php"); ?>

<a class="button" href="index.php">Home</a>
<a class="button" href="index.php">Back</a>

<form action="users-new.php" method="post"> 
    User ID:<br /> 
    <input type="text" name="id" value="" /> 
    <br /><br />
    Password:<br /> 
    <input type="password" name="password" value="" /> 
    <br /><br /> 
    <input type="submit" value="Register" /> 
</form>

