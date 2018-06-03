<?php 
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