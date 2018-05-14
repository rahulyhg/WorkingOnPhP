<?php 
	
		

		// $connection_string = 'DRIVER={SQL Server};SERVER=<.\SQLEXPRESS>;DATABASE=<mydb>';

		// $user = 'username';
		// $pass = 'password';

		// $connection = odbc_connect($connection_string, $user, $password);

		// $servername = "servername\SQLEXPRESS";

		// $connection_info = array("Database"=>"mydb");
		// $conn = sqlsrv_connect( $servername, $connection_info);

		// if($conn){
		// 	echo "Connection established";
		// }else {
		// 	echo "Connection could not be established.<br/>";
		// 	die( print_r(sqlsrv_errors(), true));
		// }



		

		// $itemsQuery = $db->prepare("SELECT ID, FIRSTNAME, LASTNAME, GENDER, SALARY, DATEOFBIRTH
		// 	FROM employeestable
		// 	WHERE user =: user
		// 	");

		// $itemsQuery->execute([
		// 	'user' => $_SESSION['user_id']
		// ]);

		// $items = $itemsQuery->rowCount() ? $itemsQuery : [];

		
	  // $c = new PDO("sqlsrv:Server=.\SQLEXPRESS;Database=mydb","","");
   //   print_r(c);
   //   ini_set();
   //      ini_get('pcre.backtrack_limit');



		// $handler = new PDO('mysql:host=127.0.0.1;dbname')
		require_once 'index.php';

		$itemsQuery = $db->prepare("
			SELECT id, username
			FROM employees 
			WHERE user = :user;
			");

		$itemsQuery->execute([
			'user' => $_SESSION['user_id']
		]);

		$items = $itemsQuery->rowCount() ? $itemsQuery : [];

		foreach($items as $item) {
			print_r($item);
		}
		
 ?>