<?php 
	
		
		// $handler = new PDO('mysql:host=127.0.0.1;dbname')
// 		require_once 'index.php';

// 		$itemsQuery = $db->prepare("
// 			SELECT id, username, gender
// 			FROM employees 
// 			WHERE user = :user;
// 			");

// 		$itemsQuery->execute([
// 			'user' => $_SESSION['user_id']
// 		]);

// 		$items = $itemsQuery->rowCount() ? $itemsQuery : [];

// 		foreach($items as $item) {
// 			echo $item['name'], '<br>';
// }
		// echo '<pre>', print_r($items), '</pre>';
		
				DEFINE ('DB_USER', 'root');
				DEFINE ('DB_PSWD', 'gatubelo=00');
				DEFINE ('DB_HOST', 'ManuP');
				DEFINE ('DB_NAME', 'mydb');	






 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>To Do List</title>
 	<link rel="stylesheet" href="/main.css">
 	<style type="text/css">
 		body {
	background-color: #eceff0;
}

body,
input {
	font: 1em "Open Sans", sans-serif;
	color: "#363639";
}

a{
	text-decoration: none;
	border-bottom: 1px dashed #363639;
}
 	</style>
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