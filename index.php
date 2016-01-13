<html>
<title>Welcome to Flist!</title>
<center><img src="flistlogo.png">
    <form  action="submit.php" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
	<input type="hidden" name="flag" value="submit"> 
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br><br> 
    Please list the students, using a FIRST NAME, LAST NAME format:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="image" src="upload.png" style="height:150px;width:150px"/> 
    </form> 
	<center>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	<form action="admin.php" method="POST" enctype="multipart/form-data">
		Please enter your password to view the admin page: <input name="password" type="password" value="" size="30"/><br>
		<input type="image" src="admin-login.png">
	</form>
</body>
</html>     