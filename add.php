<?php 

require_once'index.php';

if(isset($_POST['user'])){
	$name = trim($_POST['user']);

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

