<?php 

require_once'index.php';

if(isset($_POST['name'])){
	$name = trim($_POST['name']);

	if (!empty($name)) {
		$addedQuery = $mydb->prepare("
				INSERT INTO jodidosTodos(id, user,  category)
			");
	}
}

?>