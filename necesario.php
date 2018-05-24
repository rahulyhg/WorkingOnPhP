
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

		$items = $itemsQuery->rowCount() ? $itemsQuery : [];

		foreach($items as $item) {
		

			print_r($item);
			}



?>





<!DOCTYPE html>
<html>
<head>
	<title>title</title>
</head>
<body>
		<div class="list">
			<h1 class="header"></h1>

			<ul class="items">
				<li>
					<span class="item">Pick Up Shopping</span>
					<a href="#" class="done-button">Mark as done</a>
				</li>
			</ul>

			<form class="item-add" action="add.php" method="post">
				<input type="text" >
		</div>
</body>
</html>