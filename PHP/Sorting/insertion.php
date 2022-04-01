<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Sort</title>
</head>
<body>
    <?php
      echo "<b><h1>Insertion Sort</h1></b><br>";
      $myarray = [8,23,13,5,3,17,10,4,2,1];
      echo "<b>Array before Sorting</b><br>";

      foreach($myarray as $val)
      {
          echo $val." ";
      }
      echo "<br>";

      $length = count($myarray);

      for($i=1; $i<$length; $i++)
      {
          $temp = $myarray[$i];
          $j = $i-1;

          while($j>=0 && $temp < $myarray[$j])
          {
                $myarray[$j+1] = $myarray[$j];
                $j--;
                //foreach($myarray as $v)
                //{
                  //     echo $v." ";
                //}
          }
         // echo "<br>";
          $myarray[$j+1] = $temp;
         // echo "<br>";

         

      }

  
       echo "<b>Array after sorting</b><br>";
      foreach($myarray as $v)
      {
          echo $v." ";
      }

     ?>
    
</body>
</html>