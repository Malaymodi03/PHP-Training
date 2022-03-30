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
    $n=9;
     echo "<b><h1>Pattern 3</b></h1><br><br>";
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
              elseif($i==$n)
              {
                    echo $j." ";
              }
              else
              {
                  echo "&nbsp&nbsp ";
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
     $n=5;
    
     
    
     echo "<b><h1>Pattern 4</b></h1><br><br>";
      for($i=0;$i<=$n-1;$i++)
      {
          for($j=0;$j<=$n*2-1;$j++)
          {
              if($j-$i==$n-1)
              {
                  echo $i+1 ." ";
              }
              elseif($j+$i==$n-1)
              {
                  echo $i+1 ." ";
              }
              
              elseif($j-$i==$n-2 && $j>$n-2)
              {
                    echo $i+2  ." ";
              }
              elseif($j+$i==$n && $j<$n-1)
              {
                    echo $i+2 ." ";
              }
              elseif($j-$i==$n-3 && $j>$n-2)
              {
                    echo $i+3 ." ";
              }
              elseif($j+$i==$n+1 && $j<$n-1)
              {
                    echo $i+3 ." ";
              }

              elseif($j-$i==$n-4 && $j>$n-2)
              {
                    echo $i+4 ." ";                   
              }
              elseif($j+$i==$n+2 && $j<$n-1)
              {
                    echo $i+4 ." ";
              }
              elseif($j-$i==$n-5 && $j>$n-2)
              {
                   echo $i+5 . " ";
              }
             
              else
              {
                  echo "&nbsp&nbsp&nbsp";
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


    
    


