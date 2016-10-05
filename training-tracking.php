<?php 
$accessLevel = 1;
$page="Training Tracking";
require("resources/core.php");
?>

<?php

	$id = $_POST['id'];

	if (!empty($_POST['id'])) 
	{ 
		$sql = "SELECT id, nameFirst, nameLast FROM employees WHERE id=$id";
		$result = mysqli_query($conn, $sql);
	$employeeInfo=mysqli_fetch_assoc($result);
	}
?>

<form action="training-tracking.php" method="post"> 
    Employee ID to track:<br /> 
    <input type="text" name="id" value="" /> 
    <br /><br />
</form>

<div class="row" class="userDisplay"> Employee ID number: <?php echo $employeeInfo['id'] ?> </div>
<div class="row" class="userDisplay"> Employee Name: <?php echo $employeeInfo['nameFirst'] . $employeeInfo['nameLast']; ?></div>
<div class="training_row">
	<div class="row" class="training_subject">Safety and Security</div>
	<div class="row" class="training_status"></div>
	<div class="row" class="training_skill"></div>
	<div class="row" class="training_action"></div>
</div>
