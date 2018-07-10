<?php 

require_once'index.php';

if(isset($_POST['name'])){
	$name = trim($_POST['name']);

	if (!empty($name)) {
		$addedQuery = $mydb->prepare("
				INSERT INTO jodidosTodos(id, user,  category)
				values 
				(:id, :user, :category NOW())
			");

		$addedQuery->execute([
				'name' => $name, 
				'user' => $_SESSION['user_id']
		]);
	}
}

header('Location: index.php');

?>

<?php foreach($items as $item): ?>
						<li>
							<span class="item<?php echo $item['category'] ? ' done' : '' ?>"><?php echo $item['user']; ?></span><br />
							<?php if(!$item['done']): ?>
							<a href="#" class="done-button">Mark As done</a>
							 <?php endif; ?> 
						</li>
				<?php endforeach; ?>