<?php 
	
// 		require_once 'index.php';

	
		
// 		$itemsQuery = $db->prepare("
// 			SELECT id, username, gender
// 			FROM employees 
// 			WHERE user = :user
// 			");

// 		$itemsQuery->execute([
// 			'user' => $_SESSION['user_id']
// 		]); 

// 		$items = $itemsQuery->rowCount() ? $itemsQuery : [];

// 		foreach($items as $item) {
// 			// echo $item['name'], '<br>';

// 			print_r($item);
// }
		// echo '<pre>', print_r($items), '</pre>';
		
				// DEFINE ('DB_USER', 'root');
				// DEFINE ('DB_PSWD', 'gatubelo=00');
				// DEFINE ('DB_HOST', 'ManuP');
				// DEFINE ('DB_NAME', 'mydb');	

		// print_r(PDO::getAvailableDrivers());

		

		try {
			$handler = new PDO('mysql:host=ManuP;dbname=mydb', 
					'root', 'gatubelo=00');
			
		} catch (Exception $e) {
			echo $e->getMessage();
		}




 ?>
