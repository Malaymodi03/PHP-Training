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
      //    1    
      //   1 2   
      //  1   3
      // 1     4
      //1 2 3 4 5
    $n=9;
    $num=1;
     echo "<b><h1>Pattern 5</b></h1><br><br>";
      for($i=0;$i<$n;$i++)
      {
          for($j=0;$j<$n*2-1;$j++)
          {
             if($i==$n-1 & $j%2==0)
             {
                echo $num++. " ";
             }
             elseif($j-$i==$n-1)
             {
                echo $i+1 . " ";
             }
             elseif($i+$j==$n-1)
             {
                 echo $num. " ";
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