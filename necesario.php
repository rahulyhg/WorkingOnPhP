
<?php
		// require_once('index.php');
		$link = 'mysql:host=localhost;dbname=mydb';
		$usuario =  'root';
		$pass = 'gatubelo=00';

		try{
				$db = new PDO($link
        ,$usuario, $pass);

				echo 'Conectado'; 

				

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


		

</body>
</html> -->