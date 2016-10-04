<?php 

require("resources/common.php");

$id = $_POST['id'];
$nameFirst = $_POST['nameFirst'];
$nameLast = $_POST['nameLast'];

//Script to determine which input boxes have been filled and what $sql is equal to

$sql = "SELECT id, nameFirst, nameLast FROM employees";

if (!empty($_POST['id'])) 
{ 
	$sql = "SELECT id, nameFirst, nameLast FROM employees WHERE id=$id";
}
/*if (!empty($nameFirst))
{
	$sql = "SELECT id, nameFirst, nameLast FROM employees WHERE nameFirst=$nameFirst";
}*/


//End script, Note: I need to develop a more efficient way to do this.

$result = mysqli_query($conn, $sql)

?>

<div id="top"><div id="time">Time Not Synced</div></div>
<div id=head><?php require("resources/head.php"); ?></div>
<div id=user><?php require("resources/user-management/user.php"); ?></div>

<a class="button" href="index.php">Home</a>
<a class="button" href="users.php">Back</a>

<div>Add / Update an employee</div>

<div>Search for an employee</div>
<form action="users-manage.php" method="post">
	ID: <input type="text" name="id" value="<?php echo $id; ?>"/><br>
	First Name <input type="text" name="nameFirst" value="<?php echo $nameFirst; ?>"/><br>
	Last Name <input type="text" name="nameLast" value="<?php echo $nameLast; ?>"/><br>
	<input type="submit" value="search"/>
</form>

<?php 
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "id:" . $row["id"]. " - Name: " . $row["nameFirst"]. " " . $row["nameLast"]. "<br>";
		}
	} else {
		echo "No results found";
	}

	
	?>