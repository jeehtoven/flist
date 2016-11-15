<html>
<head>
<title>Welcome to Flist!</title>
<center><img src="flistlogo.png"></center>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<br>
<?php
if($_POST["password"] == "elise89")
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

	$sql = "SELECT first, last, teacher FROM flist_7th ORDER BY last";
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
	
	$sql_dup = "SELECT COUNT(last), last, first FROM flist_7th GROUP BY last HAVING (COUNT(last)>1)";
	$sql_csv = "SELECT first, last, teacher FROM flist_7th ORDER BY last ASC";
	$result_dup = $conn->query($sql_dup);
	$result_csv = $conn->query($sql_csv);
	$file = "flist.csv";
	$fp = fopen($file,'w');
	
	if ($result_dup->num_rows > 0) {
	    // output data of each row
	    while($row = $result_dup->fetch_assoc()) {
	        echo "Last Name: " . $row["last"]. " First Name: " . $row["first"]. "<br>";
		
			
	    }
	} 
	
	else {
	    echo "0 duplicates";
	}
	
	//csv output
	if ($result_csv->num_rows > 0) {
		$f1 = array();
		$f1[] = 'First Name'; 
		$f1[] = 'Last Name';
		$f1[] = 'Teacher';
		fputcsv($fp, $f1);
		while($row_csv = $result_csv->fetch_assoc()) {
			fputcsv($fp, $row_csv);
		}
	}
	
	echo "<br><br><center><a href='".$file."'><img src='csv.jpg' alt='Export to CSV file.' style='width:150px;height:150px'></a>&nbsp&nbsp<a href='truncate.php'><img src='truncate.png' style='width:150px;height:150px'></a><br>Download to CSV&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTruncate F List";
	fclose($fp);
	
	$conn->close();
}

else
{
	echo "Wrong password. Please try again. Press the back button on your browser to re-enter the password.";
}
?>
</html>