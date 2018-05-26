<html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
		if(isset($_POST['submit'])){
			if(empty($_POST['fname'])){
				
			}
		}
?>

		<div style="margin:3em;"> 
			<div><form action="necesario.php" method="post">
			First Name: <font color=red*>*</font><input type="text" name="fname"><br />
			Last Name: <font color=red*>*</font><input type="text" name="iname"><br />
			About: <textarea name="about"></textarea><br />

	<input type="reset" name="reset">

	<input type="submit" name="submit" value="Go">
</form></div>
		</div>

</body>
</html>