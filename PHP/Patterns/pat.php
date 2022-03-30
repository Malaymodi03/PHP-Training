<?php 
      $n=5;   

      $lCount=0;
	  $rCount=0;
	  $k=0;

      for($row=1;$row<=$n; $row++)
      {
	       for($space=1; $space<=$n-$row; $space++)
	       {
	         	echo "&nbsp&nbsp";
		        $lCount++;
		
	       }
	
	      while($k !=2*$row-1)
	      {
		       if($lCount <= $n -1)
		       {
			      echo($row + $k);
			       $lCount++;
			
		       }


		      else
		       {

		     	    $rCount++;
			        echo ($row + $k) - 2 * $rCount;
		       }

		    $k++;
	      }


	       $lCount=$rCount=$k=0;
	        echo "<br>";
     }




?>