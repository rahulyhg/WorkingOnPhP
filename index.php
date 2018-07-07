<?php 
        session_start();
        $_SESSION['user_id'] = 1;

        $db = new PDO('mysql:host=localhost;dbname=mydb', 
        'root', 'gatubelo=00');

        // Handle this in other way 

        if(!isset($_SESSION['user_id'])){
            die('You Are logged!');
        }

        ?>