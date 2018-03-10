
<?
	try{
		$conn = new PDO("sqlsrv:Server=.\SQLEXPRESS;Database=mydb;
			null, null");
		$conn->setAttribute( PDO::ATR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	}

	catch(PDOException $e){
		die("Error connecting to Server\n");
	}

	echo "connected to sql SErvern";

	$query = 'select * from employees';
	$stmt = $conn->query( $query);
	while($row = $stmt->fetch( PDO::FETCH_ASSOC)){
		print_r($row);
	}

?>
