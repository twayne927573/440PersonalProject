<?php
	//include("local-connect.php");
	include("server-connect.php");
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	if (isset($_GET['a'])) {
		if($_GET['a'] == 1){
			$fname = mysqli_real_escape_string($dbc,$_POST['fname']);
			$lname = mysqli_real_escape_string($dbc,$_POST['lname']);
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$email = $_POST['email'];
			
			$query = "INSERT INTO perproj (firstName, lastname, city, state, zip, email) 
			VALUES ('$fname','$lname','$city','$state','$zip','$email')";
			
			$result = mysqli_query($dbc, $query) or die('Unable to write to DB! Process aborted...');
			mysqli_close($dbc);
			header('Location: list.php?a=1');
			exit;
		}
		else if($_GET['a'] == 2){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$email = $_POST['email'];
			
			$query = "UPDATE perproj SET firstName='$fname', lastname='$lname', city='$city', state='$state', zip='$zip', email='$email' WHERE id='$id'";
			$result = mysqli_query($dbc, $query) or die('Unable to write to DB! Process aborted...');
			mysqli_close($dbc);
			header('Location: list.php?a=2');
			exit;
		}
		else if($_GET['a'] == 3){
			$query = "DELETE FROM perproj WHERE id = '$id'";
			$result = mysqli_query($dbc, $query) or die('Unable to write to DB! Process aborted...');
			mysqli_close($dbc);
			header('Location: list.php?a=3');
		}
	}	
?>