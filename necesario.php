
<?php
		$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true)); 






?>




<html>
<html>
<head>
	<title></title>
</head>
<body>


		<div style="margin:3em;"> 
			<div><form action="necesario.php" method="post">
			First Name: <font color=red*>*</font><input type="text" name="fname"><br />
			Last Name: <font color=red*>*</font><input type="text" name="iname"><br />
			About: <textarea name="about"></textarea><br />

	<input type="reset" name="reset">

	<input type="submit" name="submit" value="Go">
</form>
		<input type="hidden"  name="token" value="<?php echo $token;?>"/>
</div>
		</div>

</body>
</html>