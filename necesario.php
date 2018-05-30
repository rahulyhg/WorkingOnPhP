
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
			echo $item['username'], '<br>';
			
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

		<?php if(!empty($items)): ?>

		<ul class="items">
			<?php  foreach($items as $item): ?>

						<li>
							<span class="item<?php echo $item['done'] ? ' done' : '' ?>	"><?php echo$item['username']; ?></span>
							<?php if(!$item['done']): ?>
							<a href="#" class="done-button">Mark as done</a>
						<?php endif; ?>
						</li>
					<?php endforeach; ?>
		</ul>
	<?php else: ?>
		<p>You haven´t added anything.</p>
	<?php endif; ?>

		<form class="item-add" action="add.php2" method="post">
			<input type="text"  name="name" placeholder="Type a new item here." class="">
			<input type="submit" value="Add" class="submit">
		</form>
	</div>
</body>
</html>