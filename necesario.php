
<?php
		require_once('index.php');

		$itemsQuery = $db->prepare("
			SELECT id, user, category
			FROM jodidosTodos
		
			");

		$itemsQuery->execute([
			'user' =>$_SESSION['user_id']
		]);



		$items = $itemsQuery->rowCount() ? $itemsQuery : [];




		foreach($items as $item){
			 // echo $item['user'], '<br>', $item['category'];

			// print_r($item);
		}

		// foreach($items as $item){
		// 	echo $item['user'], '<br>';
			
		// }



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
	<title>To Do List</title>
</head>
<body>


	<div class="list">
		<h1 class="header">To Do.</h1>

	<?php if(!empty($items)): ?>

			<ul class="items">

				<?php foreach($item as $items): ?>
						<li>
							<span class="item"><?php echo $item['user']; ?></span><br />
							<a href="#" class="done-button">jodidos</a>
						</li>
				<?php endforeach; ?>
					</ul>
					<?php else: ?>
						<p>You haven´t added any items yet.</p>
				<?php endif; ?>
			<form class="item-add" action"add.php" method="post">
				<input type="text" name="name" placeholder="Type Your Name" class="">
				<input type="submit" value="Add" class="submit">
			</form>	
	</div>






			
</body>
</html>