<?php
        namespace Dishes;
        class Food {
           public $name = "";
           public $price = 0;
           public function info()
           {
            echo "<p>Price of '{$this->name}' is Rs {$this->price}.</p>";
           }
        }

        $foods = new Food();
        $foods->name = "Italian Pizza";
        $foods->price = 120;
     
     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespace</title>

    <style>
         h1{
             text-align:center;
         }
    </style>    

</head>
<body>
    <?php
        echo "<b><h1>Namespace in PHP</h1></b><br><br>";
        $foods->info();



    ?>
   
</body>
</html>