<?php 



session_start();

$_SESSION['user_id'] = 1;

$db = PDO('mysql:dbname=mydb;host:localhost', 'root', 'root');

/// Handle this in some other way

if(!isset($_SESSION['user_id'])){
	   die('You Are not Signed in');
}