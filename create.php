<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Create Page</title>
		<meta charset="utf-8">
		<meta name="robots" content="noindex,nofollow" />
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<h1>Create Page</h1>
		<hr>
		<p>Fill in the following information to create a contact listing.</p>
		<form id="form" action="process.php?a=1" method="post">
			<table>
				<tr>
					<td><label>First Name: </label></td>
					<td><input type="text" name="fname" placeholder="First Name" required 
					title="3-20 alphabetic characters, - and ' only." pattern="[a-zA-Z-' ]{3,20}" /></td>
				</tr>
				<tr>
					<td><label>Last Name: </label></td><td><input type="text" name="lname" placeholder="Last Name" required 
					title="2-20 alphabetic characters, - and ' only." pattern="[a-zA-Z-' ]{2,20}" /></td>
				</tr>
				<tr>
					<td><label>City: </label></td><td><input type="text" name="city" placeholder="City" required
					title="Please enter a city." pattern="[a-zA-Z]{3,25}" /></td>
				</tr>
				<tr>
					<td><label>State: </label></td><td><input type="text" name="state" placeholder="State" required
					title="Please enter a state." pattern="[a-zA-Z]{2,25}" /></td>
				</tr>
				<tr>
					<td><label>Zip Code: </label></td><td><input type="text" name="zip" placeholder="Zip Code" required
					title="5 Numeric Characters Only." pattern="[0-9]{5,5}" /></td>
				</tr>
				<tr>
					<td><label>E-mail Address: </label></td><td><input type="email" name="email" placeholder="E-mail Address" required 
					title="{6-50 char}  Must include an @ and a . after" pattern="[a-z0-9.-_$]+@[a-z0-9-_]+\.[a-z]{2,6}" maxlength="50"/></td>
				</tr>
			</table><br />
			<input type="submit" value="Create" />
			<span><input type="reset" value="Reset" onclick="history.go(0)" /></span>
			<span><a href="index.html"><input type="button" value="Back"></a></span>
		</form>
		<hr>
		<footer>
			<p>&copy; 2014, Truong-An Do</p>
		</footer>

	</body>
</html>