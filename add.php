<?php 

require_once'index.php';

if(isset($_POST['name'])){
	$name = trim($_POST['name']);

}

header('Location: index.php');

?>