<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern 1</title>
    <style>
          h1{
              text-align:center;
          }
    </style>
</head>
<body>
    <?php
      //1 2 3 4 5
      //1 2 3 4
      //1 2 3
      //1 2 
      //1 
    $n=10;
     echo "<b><h1>Pattern 2</b></h1><br><br>";
      for($i=1;$i<=$n;$i++)
      {
          for($j=1;$j<=($n+1)-$i;$j++)
          {
              echo $j." ";
          }
          echo "<br>";
      }


    ?>
</body>
</html>