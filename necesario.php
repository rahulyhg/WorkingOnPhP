
<?php
		require_once('index.php');

		$itemsQuery = $db->prepare("
			SELECT id, username, gender
			FROM employees
		
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

<!DOCTYPE html>
<html>
<head>
	<title>To do</title>
</head>
<body>
	<div class="list">
		<h1 class="header">To do</h1>

		<ul class="items">
			<li>
				<span class="item">Pick up shopping</span>
				<a href="#" class="done-button">Mark as done</a>
			</li>
		</ul>

		<form class="item-add" action="add.php2" method="post">
			<input type="text"  name="name" placeholder="Type a new item here." class="">
			<input type="submit" value="Add" class="submit">
		</form>
	</div>
</body>
</html>