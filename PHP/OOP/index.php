<?php
include "html.php";
use Html\Table as T;
$table = new T();
$table->title = "My table";
$table->numRows = 5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
     
     echo "<b><h1>OOP IN PHP</b></h1><br><br>";
     echo "<a href=class.php>Classes</a><br>";
     echo "<a href=modifiers.php>Modifiers</a><br>";
     echo "<a href=inheritance.php>Inheritance</a><br>";
     echo "<a href=abstract.php>Abstract classes  and methods</a><br>";
     echo "<a href=interface.php>Interfaces</a><br>";
     echo "<a href=traits.php>Traits</a><br>";


     $table->message(); 







?>
</body>
</html>