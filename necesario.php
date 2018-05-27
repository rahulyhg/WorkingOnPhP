
<?php
		require_once('htdocs/index.php');

		$itemsQuery = $db->prepare("
			SELECT id, username, gender
			FROM employees
			WHERE user = :user
			");

		$itemsQuery->execute([
			'user' =>$_SESSION['user_id']
		]);

		$items = $itemsQuery->rowCount() ? $itemsQuery : [];

		foreach($items as $item){
			// echo $item['name'], '<br>';
			print_r($item);
		}



		// $link = 'mysql:host=localhost;dbname=mydb';
		// $usuario =  'root';
		// $pass = 'gatubelo=00';

		// try{
		// 		$db = new PDO($link
  //       ,$usuario, $pass);

		// 		echo 'Conectado'; 

				

		// } catch(PDOException $e){
		// 	print "Error!: " .$e->getMessage()."<br/>";
		// 	die();
		// }






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