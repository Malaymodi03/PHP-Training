<?php
      //1 2 3 4 5
      //2     5
      //3   5
      //4 5     
      //5 
    $n=7;
     echo "<b><h1>Pattern 6</b></h1><br><br>";
      for($i=0;$i<=$n-1;$i++)
      {
          for($j=0;$j<=$n-1;$j++)
          {
              if($i+$j==$n-1)
              {
                  echo $n ." ";
              }
              elseif($j==0)
              {
                  echo $i+1 ." ";
              }
              elseif($i==0)
              {
                  echo $j+1 ." ";
              }
              else
              {
                  echo "&nbsp&nbsp ";
              }
          }
          echo "<br>";
      }


    ?>