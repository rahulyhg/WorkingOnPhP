<html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
		echo $_POST['fname'];
		echo "<br />";
		echo $_POST['iname'];
		echo $_POST['about'];

?>

<form action="necesario.php" method="post">
	First Name: <input type="text" name="fname"><br />
	Last Name: <input type="text" name="iname"><br />
	About: <textarea name="about"></textarea><br />

	<input type="reset" name="reset">

	<input type="submit" name="submit" value="Go">
</form>
</body>
</html>