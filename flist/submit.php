<html>
<head>
<title>Welcome to Flist!</title>
<center><img src="flistlogo.png"></center>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<br>
<?php
		// this is a new visitor who has submitted the form
			$name=$_REQUEST['name'];  
		    $students=$_REQUEST['message'];
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

		    if (($name=="")||($students=="")) 
		        { 
		        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
		        } 
		    else{   
			    $students_array=explode(PHP_EOL, $students);
				//print_r(array_values($students_array));
					foreach ($students_array as $value)
					{

						$fl_array = explode(' ',$value);
						for ($i=1;$i<count($fl_array);$i++)
						{
							$first = $fl_array[0];
							$last = $fl_array[1];
							//echo "The Last name is " . $last . " and the first is " . $first . ".<br>";
							$sql = "INSERT INTO flist (first, last, teacher)
							VALUES ('".$first."','".$last."','".$name."')";

							if ($conn->query($sql) === TRUE) {

							} else {
							    echo "<br>Error: " . $sql . "<br>" . $conn->error."<br>";
							}
						}
					}

					$conn->close();
					echo "<br>";
					//echo count($students_array) . " records created successfully.";
					//echo count($students_array) . " records created successfully." Thank you!<br>Please contact Karla Carmichael at Carmichael.Karla@pps-nj.us with any questions.";
		        }
		
		//header("Location: index.php");
		echo "<center>" . count($students_array) . " records created successfully. Thank you!<br>Please contact Karla Carmichael at Carmichael.Karla@pps-nj.us with any questions.<br><br>You are now being redirected to the home page. Please do not press the refresh button again.</center>";
		echo "<script>setTimeout(\"location.href = 'index.php';\",3000);</script>";
?>
</center>
</body>
</html>