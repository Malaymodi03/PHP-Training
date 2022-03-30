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
      //1
      //1 2
      //1 2 3
      //1 2 3 4
      //1 2 3 4 5
    $n=5;
     echo "<b><h1>Pattern 1</b></h1><br>";
      for($i=1;$i<=$n;$i++)
      {
          for($j=1;$j<=$i;$j++)
          {
              echo $j." ";
          }
          echo "<br>";
      }


    ?>

    <?php
      //1 2 3 4 5
      //1 2 3 4
      //1 2 3
      //1 2 
      //1 
      $n=5;
      echo "<b><h1>Pattern 2</b></h1><br>";
       for($i=1;$i<=$n;$i++)
       {
           for($j=1;$j<=($n+1)-$i;$j++)
           {
               echo $j." ";
           }
           echo "<br>";
       }





    ?>

<?php
      //1
      //1 2
      //1   3
      //1     4 
      //1 2 3 4 5
    $n=5;
     echo "<b><h1>Pattern 3</b></h1><br>";
      for($i=1;$i<=$n;$i++)
      {
          for($j=1;$j<=$n;$j++)
          {
              if($j==1)
              {
                  echo $j." ";
              }
              elseif($i==$j)
              {
                  echo $i." ";
              }
              elseif($i==5)
              {
                    echo $j." ";
              }
              else
              {
                  echo "&nbsp&nbsp    ";
              }
          }
          echo "<br>";
      }


    ?>

<?php
      //        1 
      //      2 3 2
      //    3 4 5 4 3
      //  4 5 6 7 6 5 4 
      //5 6 7 8 9 8 7 6 5 
    $n=4;
     echo "<b><h1>Pattern 4</b></h1><br><br>";
      for($i=-$n;$i<=$n;$i++)
      {
          for($j=-$n+2;$j<=$n-2;$j++)
          {
              if(abs($i)-$j==2)
              {
                  echo $j+3 ." ";
              }
              elseif(abs($i)-$j==1)
              {
                  echo $j+4 ." ";
              }
              elseif(abs($i)-$j==0)
              {
                  echo $j+5 ." ";
              }
              elseif(abs($i)-$j==-1)
              {
                  echo $j+6 ." ";
              }
              elseif(abs($i)-$j==-2)
              {
                  echo $j+7 ." ";
              }
           
              else
              {
                  echo "&nbsp &nbsp";
              }
              
          }
          echo "<br>";
      }


    ?>
    <?php
      //    1    
      //   1 2   
      //  1   3
      // 1     4
      //1 2 3 4 5
    //$n=4;
    $c=1;
    $d=1;
    $e=1;
     echo "<b><h1>Pattern 5</b></h1><br><br>";
      for($i=-2;$i<=2;$i++)
      {
          for($j=-4;$j<=4;$j++)
          {

            
            
            if($i-$j==-2)
            {
                echo $c++ ." ";

            }
            
            elseif($i==2 && $j%2==0)
            {
                echo $d++ ." ";
            }   
            elseif($i+$j==-2)
            {
                echo 1 . " ";
            }                                                                                     
            
           
            
            
            else
            {
                   echo "&nbsp &nbsp";
            }
              
          }
          echo "<br>";
      }


    ?>
     <?php
      //1 2 3 4 5
      //2     5
      //3   5
      //4 5     
      //5 
    $n=5;
     echo "<b><h1>Pattern 6</b></h1><br><br>";
      for($i=-2;$i<=2;$i++)
      {
          for($j=-2;$j<=2;$j++)
          {
              if($j==-2)
              {
                  echo $i+3 ." ";
              }
              elseif($i==-2)
              {
                  echo $j+3 ." ";
              }
              elseif($i+$j==0)
              {
                  echo 5 ." ";
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