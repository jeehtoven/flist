<html>
<head>
<title>Welcome to Flist!</title>
<center><img src="flistlogo.png"></center>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<br>
<?php
if($_POST["password"] == "karla71")
{
	$servername = "localhost";
	$username = "jeehtove_flist";
	$password = "VMf+TogMzf{X";
	$dbname = "jeehtove_flist";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql = "TRUNCATE TABLE flist";
	$result = $conn->query($sql);
	
	echo "<center>Table Truncated. Thank you.<br><br><b><a href='index.php'>Return to F List</b></a></center>";
}
else
{
	echo "You entered an incorrect password. Please press the back button on your browser and try again.";
}
?>
