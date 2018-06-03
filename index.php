<?php 
        session_start();
        $_SESSION['user_id'] = 1;
        if ($db = new PDO('mysql:host=localhost;dbname=mydb;', 
        'root', 'gatubelo=00')) {
            // echo "success";
        }
       else {
        echo "you are not logged!";
       }
      
        // Handle this in some other way

        if(!isset($_SESSION['user_id'])){
            die('You are not signed in.');
        }else
        {
            // echo "jodido!";
        }
  
?>