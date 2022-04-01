<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick Sort</title>
</head>
<body>

    <?php
      
       
      $left_val;
      $right_val;
      echo "<b><h1>Quick Sort</h1></b><br>";
      $myarray = [7,3,5,1,4,2];
      echo "<b>Array before Sorting</b><br>";

      foreach($myarray as $val)
      {
         echo $val." ";
       }
         echo "<br>";
         $length = count($myarray);  

         //partioning our array

        //  $mid_val = count($myarray)/2;
        //  $left_val = array(array_slice($myarray,0,$mid));
        //  $right_val = array(array_slice($myarray,$mid));

        //  echo $mid_val;
        //  print_r($left_val);
        //  print_r($right_val);

        function quick_sort($my_array)
        {
	         
           $left_pointer = array();
           $right_pointer = array();

        	 if(count($my_array) < 2)
	         {
		        return $my_array;
         	 }


	      $pivot_key = key($my_array);
	      $pivot = array_shift($my_array);
	      foreach($my_array as $val)
	     {

		     if($val <= $pivot)
		    {
			   $left_pointer[] = $val;

		     }
         
            elseif ($val > $pivot)
	     	{
		     	$right_pointer[] = $val;
	     	}

	     }
	          return array_merge(quick_sort($left_pointer),array($pivot_key=>$pivot),quick_sort($right_pointer));
      }
 
 
 
            $myarray = quick_sort($myarray);
            

            echo "<b><br><br>Array after sorting</b><br>";
            foreach($myarray as $v)
            {
               echo $v." ";
            }







    ?>
    
</body>
</html>