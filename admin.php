<html>
<title>Welcome to Flist!</title>
<center><img src="flistlogo.png"></center>
	<br>
<?php
if($_POST["password"] == "karla")
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

	$sql = "SELECT last, first, teacher, email FROM flist ORDER BY last";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "Last Name: " . $row["last"]. " First Name: " . $row["first"]. " Teacher: " . $row["teacher"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}
	
	echo "<br>";
	echo "Duplicates: ";
	echo "<br>";
	
	$sql_dup = "SELECT COUNT(last), last, first FROM flist GROUP BY last HAVING (COUNT(last)>1)";
	$result_dup = $conn->query($sql_dup);
	
	if ($result_dup->num_rows > 0) {
	    // output data of each row
	    while($row = $result_dup->fetch_assoc()) {
	        echo "Last Name: " . $row["last"]. " First Name: " . $row["first"]. "<br>";
	    }
	} else {
	    echo "0 duplicates";
	}
	
	
	
	$conn->close();
}

else
{
	echo "Wrong password. Please try again. Press the back button on your browser to re-enter the password.";
}
?>
</html>