<?php

      echo "<b>Merge Sort</b><br>";
      $myarray = [7,5,6,4,3,1,8,2];
	
	  $length = count($myarray);
	
      function merge_sort($my_array){
		  
	  if(count($my_array) == 1 )
		  return $my_array;
	  
	  $mid = count($my_array) / 2;
	  
      $left_values = array_slice($my_array, 0, $mid);
	  
      $right_values = array_slice($my_array, $mid);
	  
	  $left_values = merge_sort($left_values);
	  $right_values = merge_sort($right_values);
	  
	  return merge($left_values, $right_values);
     }
	 
	 
      function merge($left_values, $right_values){
	   $result = array();
	   
	   while (count($left_values) > 0 && count($right_values) > 0)
	   {
		if($left_values[0] > $right_values[0])
		{
			$result[] = $right_values[0];
			$right_values = array_slice($right_values , 1);
		}
		else
		{
			$result[] = $left_values[0];
			$left_values = array_slice($left_values, 1);
		}
	}
	while (count($left_values) > 0)
	{
		$result[] = $left_values[0];
		$left_values = array_slice($left_values, 1);
	}
	while (count($right_values) > 0)
	{
		$result[] = $right_values[0];
		$right_values = array_slice($right_values, 1);
	}
	return $result;
}

       echo implode(', ',merge_sort($myarray))."\n";
		
		
?>



