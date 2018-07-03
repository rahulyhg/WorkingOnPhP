<?php 
        session_start();
        $_SESSION['user_id'] = 1;
        if ($db = new PDO('mysql:host=localhost;dbname=mydb;', 
ds
?>      