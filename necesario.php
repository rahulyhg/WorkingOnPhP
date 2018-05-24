
<?php 
	
		require_once 'index.php';

	
		
		$itemsQuery = $db->prepare("
			SELECT id, username, gender
			FROM employees 
			WHERE user = :user
			");

		$itemsQuery->execute([
			'user' => $_SESSION['user_id']
		]); 

		$items = $itemsQuery->rowCount() ? $itemsQuery : []

		foreach($items as $item) {
			echo $item['name'], '<br>';

			// print_r($item);
}



?>

























<!DOCTYPE html>
<html>
<head>
	<title>title</title>
</head>
<body>
		<div class="list">
 			<h1 class="header">To Do.</h1>
 			<?php if(!empty($items)): ?>
 				<ul class="items">
 					<?php foreach($items as $item): ?>
 					<li><span class="item"><?php echo $item['name']; ?></span></li>
 					<li><span class="item done">Learn PhP.</span></li>
 				<?php endforeach; ?>
 				</ul>
 			<?php  else: ?>
 				<p>You Haven´t added items yet...!</p>
 			<?php endif; ?>

 				<form action="add.php" method="post" class="item-add">
 					<input type="text" name="name" placeholder="Type a new item here please." class="input" autocomplete="off" required>
 					 <input type="submit" value="add" class="submit">
 				</form>

 		</div>
</body>
</html>