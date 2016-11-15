<html>
<head>
<title>Welcome to Flist!</title>
<center><img src="flistlogo.png"></center>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<br>
<?php
echo "<br><br><center><b>Delete All Students in F List</b><br>Are you sure you want to delete all the rows in the table?<br><br>";
?>
<br>
<br>
<form action="truncate_confirmation.php" method="POST" enctype="multipart/form-data">
	Please enter your password to continue: <input name="password" type="password" value="" size="30"/><br>
	<input type="image" src="green.png" style="width:150px;height:150px">
</form>
<a href='index.php'><img src='red.png' style='width:150px;height:150px'></a>
</center>
</html>