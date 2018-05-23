<?php 
	
    // require_once ''

    // echo "alguien";
    //  echo "alguien"; echo "alguien";
    //   echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien"; echo "alguien";

      // print_r(PDO::getAvailableDrivers());
    // phpinfo();
    // print_r(get_loaded_extensions()); 

        // session_start();
        // $_SESSION['user_id'] = 1;
        if ($db = new PDO('mysql:dbname=mydb;host=localhost', 
        'root', 'gatubelo=00')) {
            echo "success";
        }
       else {
        echo "you are not logged!";
       }
      
        // Handle this in some other way

        if(!isset($_SESSION['user_id'])){
            die('You are not signed in.');
        }else
        {
            echo "jodido!";
        }
  
?>