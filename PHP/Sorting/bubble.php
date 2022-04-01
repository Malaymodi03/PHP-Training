<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble Sort</title>
</head>
<body>
    <?php
        echo "<b><h1>Bubble Sort</h1></b><br>";
        $myarray = [8,23,13,5,3,17,10,4,2,1];
        echo "<b>Array before Sorting</b><br>";
        //print_r($myarray);
        foreach($myarray as $val)
        {
            echo $val." ";
        }
        echo "<br>";

        $length = count($myarray);

       
        //outer loop is for the how many times the iteration will be there 
        for($i=0; $i<$length-1; $i++)
        {
            //inner loop is for swapping elements
            //it will loop only upto length-i-1 times because after every pass last element 
            //will be sorted
            for($j=0; $j<$length-$i-1; $j++)
            {
                if($myarray[$j+1]<$myarray[$j])
                {
                    $temp = $myarray[$j];
                    $myarray[$j] = $myarray[$j+1];
                    $myarray[$j+1] = $temp;

                    //foreach($myarray as $v)
                    //{
                     //   echo $v." ";
                    //}
                    //echo "<br>";

                }
            }
           // echo "<br>";
            //echo $i+1 ." Pass Completed <br><br>";

          }

    
    
  
        
         
        echo "<br><b>After Sorting</b><br>";
        foreach($myarray as $value)
        {
            echo $value. " ";
        }

        
    
    
    
    
    
    ?>
</body>
</html>