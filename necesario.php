
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
	<title>To do</title>
<

		<?php if(!empty($items)): ?>

		<ul class="items">
			<?php foreach($items as $item): ?>
			<li>
				<span class="item<?php echo $item[''] ? ' done' : 
				'' ?> "><?php echo $item['user']; ?></span>
				<a href="#" class="done-button">mark as done</a>
			</li>
			<?php endforeach; ?>
