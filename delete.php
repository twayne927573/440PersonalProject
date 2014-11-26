<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Delete Page</title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex,nofollow" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Delete Page</h1>
		<hr>
		<form id="form" action="process.php?a=3&id=<?php echo $id ?>" method="post">
			<?php
				//include("local-connect.php");
				include("server-connect.php");
				$query = "SELECT * FROM perproj WHERE id = $id";
				$result = mysqli_query($dbc, $query) or die('Unable to write to DB! Process aborted...');
				while($row = mysqli_fetch_array($result)){
					echo '<table id="contactListItem"><tr>
							<td><img src="1.jpg" alt="profile" height="100" width="100"><br />'.$row['firstName']." ".$row['lastName'].'<br /></td>
							<td>'.$row['city'].", ".$row['state'].'<br />'.$row['zip'].'<br /><a href="'.$row['email'].'">'.$row['email'].'</a></td>
						   </tr></table>';
				}
			?>
			<p>Are you sure you want to delete this record?</p>
			<input type="submit" value="Delete" />
			<span><a href="list.php"><input type="button" value="Back"></a></span>
		</form>
		<hr>
		<footer>
			<p>&copy; 2014, Truong-An Do</p>
		</footer>

	</body>
</html>