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
			SELECT id, username, gender
			FROM employees 
			WHERE user = :user;
			");

		$itemsQuery->execute([
			'user' => $_SESSION['user_id']
		]);

		$items = $itemsQuery->rowCount() ? $itemsQuery : [];

		foreach($items as $item) {
			echo $item['name'], '<br>';
}
		// echo '<pre>', print_r($items), '</pre>';
		
		
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>To Do List</title>
 	<link rel="stylesheet"  href="htdocs/main.css">
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