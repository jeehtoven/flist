<html>
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
    Please list the students, using a LAST NAME, FIRST NAME format. Create a new line for each student:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Send email"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $students=$_REQUEST['message'];
	$servername = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "myDB";

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
        echo "Message sent!"; 
		//print_r(array_values($students_array));
			foreach ($students_array as $value)
			{
				
				$fl_array = explode(',',$value);
				for ($i=1;$i<count($fl_array);$i++)
				{
					$last = $fl_array[0];
					$first = $fl_array[1];
					echo "The Last name is " . $last . " and the first is " . $first . ".";
				}
			}
        } 
    }   
?>
</body>
</html>     