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
     $n=5;
     $num=1;
     $numb=2;
     $num1=3;
     $numb1=4;
     $num2=5;
     $numb2=6;
     $num3=7;
     $numb3=8;
     $num4=9;
     echo "<b><h1>Pattern 4</b></h1><br><br>";
      for($i=0;$i<=$n-1;$i++)
      {
          for($j=0;$j<=$n*2-1;$j++)
          {
              if($j-$i==$n-1)
              {
                  echo $num++ ." ";
              }
              elseif($j+$i==$n-1)
              {
                  echo $numb++ ." ";
              }
              elseif($j-$i==$n-2 && $j>3)
              {
                  echo $num1++  ." ";
              }
              elseif($j+$i==$n && $j<4)
              {
                  echo $numb1++ ." ";
              }
              elseif($j-$i==$n-3 && $j>3)
              {
                  echo $num2++ ." ";
              }
              elseif($j+$i==$n+1 && $j<4)
              {
                  echo $numb2++ ." ";
              }
              elseif($j-$i==$n-4 && $j>3)
              {
                  echo $num3++ ." ";
              }
              elseif($j+$i==$n+2 && $j<4)
              {
                  echo $numb3++ ." ";
              }
              elseif($j-$i==$n-5 && $j>3)
              {
                  echo $num4++ ." ";
              }

            
            
         
            
              else
              {
                  echo "&nbsp&nbsp&nbsp";
              }
              
          }
          echo "<br>";
      }


    ?>
</body>
</html>