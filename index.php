<html>
<title>Welcome to Flist!</title>
<center><img src="flistlogo.png">
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Please list the students, using a LAST NAME, FIRST NAME format, separated by a comma. <br>Create a new line for each student:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="image" src="upload.png" style="height:50px;width:50px"/> 
    </form> 
	<center>
	<form action="admin.php" method="POST" enctype="multipart/form-data">
		Please enter your password to view the admin page: <input name="password" type="password" value="" size="30"/><br>
		<input type="image" src="admin-login.png">
	</form>
	</center>
	</center>
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
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

    if (($name=="")||($email=="")||($students=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{   
	    $students_array=explode(PHP_EOL, $students);
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        //mail("jason.banks@provindex.com", $subject, $message, $from); 
        //echo "Message sent!"; 
		//print_r(array_values($students_array));
			foreach ($students_array as $value)
			{
				
				$fl_array = explode(',',$value);
				for ($i=1;$i<count($fl_array);$i++)
				{
					$last = $fl_array[0];
					$first = $fl_array[1];
					//echo "The Last name is " . $last . " and the first is " . $first . ".<br>";
					$sql = "INSERT INTO flist (last, first, teacher, email)
					VALUES ('".$last."','".$first."','".$name."','".$email."')";

					if ($conn->query($sql) === TRUE) {
					    
					} else {
					    echo "<br>Error: " . $sql . "<br>" . $conn->error."<br>";
					}
				}
			}
			
			$conn->close();
			echo "<br>";
			echo count($students_array) . " records created successfully. Thank you!<br>Please contact Jason Banks at jason.banks@provindex.com with any questions.";
        } 
    }  
 
?>
</body>
</html>     