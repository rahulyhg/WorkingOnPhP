
<?php
		// require_once('index.php');
		$link = 'mysql:host=localhost;dbname=mydb';
		$usuario =  'root';
		$pass = 'gatubelo=00';

		try{
				$db = new PDO($link
        ,$usuario, $pass);

				echo 'Conectado'; 

				foreach($pdo->query('SELECT * FROM `employees`') as $fila){
					print_r($fila);
				}

		} catch(PDOException $e){
			print "Error!: " .$e->getMessage()."<br/>";
			die();
		}






?>



<!-- 
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
</html> -->