<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static methods and Properties</title>
    <style>
        h1{
            text-align:center;
        }
    </style>    
</head>
<body>
    <?php

    echo "<b><h1>Staic Methods and Properties in PHP</h1></b><br><br>";
    class employee
    {
        public static function ename()
        {
            echo "Employee name is Malay"."<br>";
        }

        public function __construct()
        {
             self::ename();
         }

    }

    employee::ename();
    new employee();


    class Student{
        public static $name = "Malay Modi";
        public static function display()
        {
            echo self::$name." is a student";
        }

    }

    student::display();
    echo "<br>";
    echo student::$name;





    ?>
    
</body>
</html>