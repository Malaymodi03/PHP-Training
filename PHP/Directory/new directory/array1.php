<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
      echo "<h1>Arrays in PHP</h1>";
      echo "<br>";
      echo "There are 3 types of arrays in php";
      echo "<br>";
      echo "they are indexed array, associative array and multidimensional array";
      echo "<br><br>";
      echo "<b>Indexed Array</b>";
      echo "<br><br>";

       
      $my_friends_array = array("Parth","Karan","Toyam","Jaydeep","Yash");   //creating array
      //displaying all elements of array
      echo $my_friends_array[0]."<br>";
      echo $my_friends_array[1]."<br>";
      echo $my_friends_array[2]."<br>";
      echo $my_friends_array[3]."<br>";
      echo $my_friends_array[4]."<br>";

      //displaying all elements of array with for each loop
      foreach($my_friends_array as $f)
      {
          echo $f."<br>";
      }

      echo "<br><br>";

      //counting length of array with count() function
      //in php count() is used to find the length of array
      

      echo "length of the arrays is".count($my_friends_array);
      echo "<br>";
      echo "<b>Associative Arrays</b><br><br>";

      $percent  = array("Parth"=>"70", "Karan"=>"95","Toyam"=>"80","Jaydeep"=>"65","Yash"=>"85");
      echo "percentage of Parth is => ".$percent["Parth"]."<br>";
      echo "percentage of Karan is => ".$percent["Karan"]."<br>";
      echo "percentage of Toyam is => ".$percent["Toyam"]."<br>";
      echo "percentage of Jaydeep is => ".$percent["Jaydeep"]."<br>";
      echo "percentage of Yash is => ".$percent["Yash"]."<br>";

      //display array elements with foreach loop.

      foreach($percent as $k=>$v){
          echo "key is ".$k." and value is ".$v."<br>";

      }





    
    ?>
    
</body>
</html>