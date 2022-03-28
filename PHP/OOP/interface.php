<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface in PHP</title>
    <style>

        h1{
            text-align:center;
        }
    </style>    
</head>
<body>

  <?php
        echo "<b><h1>Interface in PHP</h1></b><br><br>";
        interface MyInterface{

            public function method1();
        
            public function method2();
        
        } 
        
        class MyClass implements MyInterface{
        
            public function method1(){
        
                echo "Method1 Called" . "<br>";
        
            } 
        
            public function method2(){
        
                echo "Method2 Called". "\n";
        
            }
        
        } 
        
        $obj = new MyClass;
        
        $obj->method1();
        
        $obj->method2();
        
        





?>
    
</body>
</html>