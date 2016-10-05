<?php 
$accesslevel=3; 
$page="Employee Management";
require("resources/core.php");
?>

<?php 
if (empty($_POST)){
	$_POST['id'] = "";
	$_POST['nameFirst'] = "";
	$_POST['nameLast'] = "";
}
$id = $_POST['id'];
$nameFirst = $_POST['nameFirst'];
$nameLast = $_POST['nameLast'];

require("resources/user-management/convertid.php");

//Script to determine which input boxes have been filled and what $sql is equal to

$sql = "SELECT id, nameFirst, nameLast, phoneNumber, email, address FROM employees";

if (!empty($_POST['id'])) 
{ 
	$sql = "SELECT id, nameFirst, nameLast, phoneNumber, email, address FROM employees WHERE id=$id";
}
/*if (!empty($nameFirst))
{
	$sql = "SELECT id, nameFirst, nameLast FROM employees WHERE nameFirst=$nameFirst";
}*/


//End script, Note: I need to develop a more efficient way to do this.

$result = mysqli_query($conn, $sql)

?>

<div>Add / Update an employee</div>

<div>Search for an employee</div>
<form action="users-manage.php" method="post">
	ID: <input type="text" name="id" value="<?php echo $id; ?>"/><br>
	First Name <input type="text" name="nameFirst" value="<?php echo $nameFirst; ?>"/><br>
	Last Name <input type="text" name="nameLast" value="<?php echo $nameLast; ?>"/><br>
	<input type="submit" value="search"/>
</form>

<div class='employee_row'>
	<div class='row employee_id'>ID</div>
	<div class='row employee_name'>Name</div>
	<div class='row employee_phone'>Phone Number</div>
	<div class='row employee_address'>Address</div>
</div>

<?php 
	if (mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			echo "
				<div class='employee_row'>
					<div class='row employee_id'>" . $row['id'] . "</div>
					<div class='row employee_name'>" . $row["nameFirst"]. " " . $row["nameLast"]. "</div>
					<div class='row employee_phone'>" . $row["phoneNumber"] . "</div>
					<div class='row employee_address'>" . $row["address"] . "</div>
				</div>

				";



			//"id: " . $row["id"]. " - Name: "" Phone Number: <br>";
		}
	} else {
		echo "No results found";
	}

	
	?>

