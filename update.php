<?php
	//include("local-connect.php");
	include("server-connect.php");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	$query = "SELECT * FROM perproj WHERE id = '$id'";
	$result = mysqli_query($dbc, $query) or die('Unable to write to DB! Process aborted...');
	$row = mysqli_fetch_array($result);
	$_SESSION['fname'] 	= $row['firstName'];
	$_SESSION['lname']	= $row['lastName'];
	$_SESSION['city'] 	= $row['city'];
	$_SESSION['state'] 	= $row['state'];
	$_SESSION['zip'] 	= $row['zip'];
	$_SESSION['email'] 	= $row['email'];
	mysqli_close($dbc);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Update Page</title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex,nofollow" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Update Page</h1>
		<hr>
		<p>Make the appropriatec change and submit to update a contact listing.</p>
		<form id="form" action="process.php?a=2&id=<?php echo $id ?>" method="post">
			<table>
				<tr>
					<td><label>First Name: </label></td>
					<td><input type="text" name="fname" value="<?php echo $_SESSION['fname'] ?>" required 
					title="3-20 Upper/Lower Case Alphabetic Characters, - and ' Only." pattern="[a-zA-Z-' ]{3,20}" /></td>
				</tr>
				<tr>
					<td><label>Last Name: </label></td><td><input type="text" name="lname" value="<?php echo $_SESSION['lname'] ?>" required 
					title="2-20 Upper/Lower Case Alphabetic Characters, - and ' Only." pattern="[a-zA-Z-' ]{2,20}" /></td>
				</tr>
				<tr>
					<td><label>City: </label></td><td><input type="text" name="city" value="<?php echo $_SESSION['city'] ?>" required 
					title="Please enter a city." pattern="[a-zA-Z]{3,25}" /></td>
				</tr>
				<tr>
					<td><label>State: </label></td><td><input type="text" name="state" value="<?php echo $_SESSION['state'] ?>" required 
					title="Please enter a state." pattern="[a-zA-Z]{3,25}" /></td>
				</tr>
				<tr>
					<td><label>Zip Code: </label></td><td><input type="text" name="zip" value="<?php echo $_SESSION['zip'] ?>" required 
					title="5 Numeric Characters Only." pattern="[0-9]{5,5}" /></td>
				</tr>
				<tr>
					<td><label>E-mail Address: </label></td><td><input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" required 
					title="{6-50 char}  Must include an @ and a . after" pattern="[a-z0-9.-_$]+@[a-z0-9-_]+\.[a-z]{2,6}" maxlength="50"/></td>
				</tr>
			</table><br />
			<input type="submit" value="Update" />
			<span><input type="reset" value="Reset" onclick="history.go(0)"/></span>
			<span><a href="list.php"><input type="button" value="Back"></a></span>
		</form>
		<hr>
		<footer>
			<p>&copy; 2014, Truong-An Do</p>
		</footer>

	</body>
</html>