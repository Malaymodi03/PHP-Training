<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterable</title>
    <style>
        h1{
            text-align:center;
        }
    </style>    
</head>
<body>
    <?php
     echo "<b><h1>Iterables in php</h1></b><br><br>";
     echo"<b><h2>Example 1</h2></b>";
      
     function printIterable(iterable $myIterable) {
        foreach($myIterable as $item) {
          echo $item." ";
        }
      }
      
      $arr = ["here", "are", "some","values","of","array"];
      printIterable($arr);

      echo"<br><b><h2>Example 2</h2></b>";

      function seven_times(iterable $numberiterable)
      {
        foreach($numberiterable as $num)
        {
            echo $num * 7 ."<br>";
        }
      }

      $num_array = [1,2,3,4,5,6,7,8,9,10];
      seven_times($num_array)
      


    ?>
    
</body>
</html>