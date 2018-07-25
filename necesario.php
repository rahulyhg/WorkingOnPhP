 
<?php

		require_once('index.php');

		$itemsQuery = $db->prepare("
			SELECT id, user, category
			FROM jodidostodos
			where user = user
			");

		$itemsQuery->execute([
			'user' => $_SESSION['user_id']
		]);



		$items = $itemsQuery->rowCount() ? $itemsQuery : [];

		// foreach($items as $item){
		// 	$item['id'];
		
		// 	}

		// print_r($item);

?>

<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link rel="stylesheet" href="main.css" type="text/css">
	<style type="text/css">
		
		body {
	background-color: #eceff0;
}

		body, 
		input {
			font: 1em "Open Sans", sans-serif;
			color:#363639;
		}

		a {
			text-decoration: none;
			border-bottom: 1px dashed #363639;
		}

		/* List */

		.list{
			background-color: #fff;
			margin: 20px auto;
			width: 100%;
			max-width: 500px;
			padding:20px;
			border-radius: 2px;
			box-shadow: 3px 3px 0 rgba(0, 0, 0, .1);
			box-sizing: border-box;
		}

		.list .header{
			font-family: sans-serif;
			margin: 0 0 10px 0;
		}

		.items{
			margin:0;
			padding:0;
			list-style-type: none;
		}

		.done-button {
			display: inline-block;
			text-decoration: underline;
		}

	</style>
</head>
<body>


	<div class="list">
		<h1 class="header">To Do.</h1>


	<?php if(!empty($items)): ?>

			<ul class="item" >	

				<?php foreach($items as $item): ?>
						<li>
							<span class="item<?php echo $item['category'] ? ' category' : '' ?>"><?php echo $item['category']; ?></span><br />
						<?php if(!$item['category']): ?><a href="#" class="done-button"
								>
							Mark As done</a>
							 <?php endif; ?> 
						</li>
						<!-- <div style="background-color: grey;">
						<!-- 	<?php  $items?> -->
						<!-- </div> --> 
				<?php endforeach; ?>


					</ul>
					<?php else: ?>
						<p>You haven´t added any items yet.</p>
				<?php endif; ?>
 		<p>You haven´t added any items yet.</p>
				
			<form class="item-add" action"add.php" method="post">
				<input type="text" name="name" placeholder="Type Your Name" class="">
				<input type="submit" value="Add" class="submit">
			</form>	

	</div>






			
</body>
</html>