<html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
		if(isset($_POST['submit'])){
		echo $_POST['fname'];
		echo "<br />";
		echo $_POST['iname'];
		echo "<br />";
		echo $_POST['about'];
		}
?>

		<div style="margin:3em;"> 
			<div><form action="necesario.php" method="post">
			First Name: <input type="text" name="fname"><br />
			Last Name: <input type="text" name="iname"><br />
			About: <textarea name="about"></textarea><br />

	<input type="reset" name="reset">

	<input type="submit" name="submit" value="Go">
</form></div>
		</div>

</body>
</html>