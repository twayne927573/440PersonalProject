<?php
	//include("local-connect.php");
	include("server-connect.php");
	session_start();
	if (isset($_SESSION['id'])) {
		$id = $_SESSION['id'];
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
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>List Page</title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex,nofollow" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>List Page</h1>
		<hr>
		<?php
			
		?>
		<br />
			<?php
				$query = "SELECT * FROM perproj";
				$result = mysqli_query($dbc, $query) or die('Unable to write to DB! Process aborted...');
				if (mysqli_num_rows($result) == 0){
					echo '<p>There are currently no contacts in this list</p>';
				}
				else{
					while($row = mysqli_fetch_array($result)){
						echo '<table id="contactListItem"><tr>
								<td><img src="1.jpg" alt="profile" height="100" width="100"><br />'.$row['firstName']." ".$row['lastName'].'<br /></td>
								<td>'.$row['city'].", ".$row['state'].'<br />'.$row['zip'].'<br /><a href="'.$row['email'].'">'.$row['email'].'</a></td>
								<td><a href="update.php?id='.$row['id'].'"><input type="button" value="Update"></a><br />
								<a href="delete.php?id='.$row['id'].'"><input type="button" value="Delete"></a></td>
							</tr></table>';
					}
				}
			?>
			<br /><a href="index.html"><input type="button" value="Back"></a><br /><br />
		<hr>
		<footer>
			<p>&copy; 2014, Truong-An Do</p>
		</footer>

	</body>
</html>