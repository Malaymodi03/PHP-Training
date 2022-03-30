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
      //        1 
      //      2 3 2
      //    3 4 5 4 3
      //  4 5 6 7 6 5 4 
      //5 6 7 8 9 8 7 6 5 
    $n=4;
    $c=1;
    $d=2;
    $e=3;
    $f=5;
    $g=7;
    $h=9;
    $k=4;
     echo "<b><h1>Pattern 4</b></h1><br><br>";
      for($i=0;$i<=4;$i++)
      {
          for($j=0;$j<=8;$j++)
          {
              if($j-$i==4)
              {
                  echo $c++ ." ";
              }
              elseif($i+$j==4)
              {
                    echo $d++ ." ";
              }
              else if($i>0 && $j-$i==3)
              {
                  echo $e++ ." ";
              }
              
             
              elseif($i>1 && $j-$i==2)
              {
                  echo $f++ ." ";
              }
              elseif($i>2&& $j-$i==1)
              {
                  echo $g++ ." ";
              }
              elseif($i>3&& $j-$i==0)
              {
                  echo $h++ ." ";
              }
              
            
            
         
            
              else
              {
                  echo "&nbsp&nbsp ";
              }
              
          }
          echo "<br>";
      }


    ?>
</body>
</html>