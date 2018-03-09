<html>
        <head>
            <title>Hello Madrid!!</title>
        </head>
        <body>
            <?php 
             $first = "Godd Morning";
            $second = " Have a Nice Day";
            $third = $first;
            echo $third;
            echo "<br />";
            $third .= $second;
            echo    "{$third}<br />";
            echo strtoupper($third);
            echo "<br />";
            echo strtolower($third);
            echo "<br />";
            echo ucwords($third);
            echo "<br />";
            echo $third;
            ?>
        </body>
</html>





 

<!--<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <title>To Do</title>
            <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
            <link href="http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="" />
            <link rel="stylesheet" href="main.css" />

            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        </head>

    <body>
        <div class="list">
            <h1 class="header">To Do List</h1>

            <ul class="items">
                <li>
                    <span class="item">Pick Up Shopping</span>
                    <a href="#" class="done-button">Mark As Done</a>
                </li>
               </ul>

            <form class="item-add" action="add.php" method="post">
                <input type="text" name="name" placeholder="Type a new item here" class="" />
                <input type="submit" value="Add" class="submit" />
            </form>
        </div>    
    </body>
</html>-->
 