<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
      echo "<h1>Array Functions in PHP</h1><br><br>";
      
      //array_change_key_case()
      //this function changes the case of key.
      echo "array_change_key_case() <br>";
      $friend_array = array("Parth"=>"10","Malay"=>"20","Jaydeep"=>"30");
      print_r(array_change_key_case($friend_array,CASE_UPPER));
      echo "<br>";
      print_r( array_change_key_case($friend_array,CASE_LOWER));    
      print_r("<br><br>");  


      //array_chunk()
      //syntax: array_chunk(array,size,preserve_key)
      //this function splits given array into chuncks of new array
       //here the first two parameters are compulsory and third is optional default is false
      //in default it will reindex the key numerically
      
      echo "array_chunk() <br>";
      $friend_array = array("Parth"=>"10","Malay"=>"20","Jaydeep"=>"30","Yash"=>"40");
      print_r(array_chunk($friend_array,2));
      print_r("<br>"); 
      print_r(array_chunk($friend_array,2,True));
      echo "<br><br>";
    
     

      //array_column
      //syntax: array_column(array,columnkey,indexkey)
      //this function return a specific column from a multidimensional array  

      echo "array_column() ";
      $friend_array = array(array("rollno"=>"1","first_name"=>"malay","last_name"=>"modi"),
                             array("rollno"=>"2","first_name"=>"jaydeep","last_name"=>"joshi"),
                             array("rollno"=>"3","first_name"=>"parth","last_name"=>"doshi"),
                             array("rollno"=>"4","first_name"=>"yash","last_name"=>"paida"));
       
       print_r("<br>");                      
       print_r($friend_array); 
       print_r("<br>"); 
       print_r(array_column($friend_array,'last_name'));
       print_r("<br>"); 
       print_r(array_column($friend_array,'last_name','rollno'));
       print_r("<br>");
       
       //array_combine
       //syntax: array_combine($array1,$array2)
       //this function combines two array it takes one array as key and another as value.
       //both array must have same number of elements

       echo "<br>array_comnine() <br>";

       $first_name = array("malay","jaydeep","parth","yash");
       $rollno = array("1","2","3","4");
       echo "first_name array <br>";
       print_r($first_name);
       echo "<br>roll no array <br>";
       print_r($rollno);
       echo "<br>combined array <br>";
       print_r(array_combine($first_name,$rollno));
       echo "<br>";


       //array_count_values
       //syntax:array_count_values($array)
       //this function counts how many times a element is in array
       //it returns an assoiative array in which elements are keys and thier count is value.


       echo "<br>array_count_values()<br>";
       $count_array = array("mango","lemon","1","mango","cars","mango","lemon");
       print_r(array_count_values($count_array));

       //array_diff()
       //syntax:array_count_values($array1,$array2,$array3,...)
       //this function compares the values of two array and returns the difference
       //first array is for to compare and second array is to compare against.

       
       echo "<br><br>array_diff()<br>";

       $array1 = array("malay","parth","jaydeep","yash");
       $array2 = array("yash","parth");
       echo "array 1<br>";
       print_r($array1);
       echo "<br>";
       echo "array 2<br>";
       print_r($array2);
       echo "<br>";
       echo "difference array<br>";
       print_r(array_diff($array1,$array2));

                            
       //array_diff_assoc()
       //syntax:array_diff_assoc($array1,$array2,$array3,...)
       //this function compares the key and values both of an associative array and returns
       //the difference.
       //first array is for to compare and second array is to compare against.
       

       echo "<br><br>array_diff_assoc()<br>";
       $array1 = array("malay"=>"1","parth"=>"2","jaydeep"=>"3","yash"=>"4");
       $array2 = array("yash"=>"4","parth"=>"2");
       print_r(array_diff_assoc($array1,$array2));


       //array_diff_key()
       //syntax:array_diff_assoc($array1,$array2,$array3,...)
       //this function compares the keys of two array  and returns the difference.
       //first array is for to compare and second array is to compare against.

       echo "<br><br>array_diff_key()<br>";
       $array1  = array("1"=>"malay","2"=>"parth","4"=>"yash");
       $array2 = array("1"=>"malay","2"=>"parth","3"=>"yash","8"=>"jaydeep");
       echo "array1<br>";
       print_r($array1);
       echo "<br>";
       echo "array2<br>";
       print_r($array2);
       echo "<br>";
       echo "difference <br>";
       
       print_r(array_diff_key($array1,$array2));


       
       //array_diff_

       /*function key_compare_func($a, $b)
            {
                if ($a === $b) {
                    return 0;
                }
                return ($a > $b)? 1:-1;
            }

        $array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
        $array2 = array("a" => "green", "yellow", "red");
        $result = array_diff_uassoc($array1, $array2, "key_compare_func");
        print_r($result);*/





        //array_fill()
        //syntax: array_fill(index,number,value)
        //this function fills an array with the value given in 3rd parameter
        echo "<br><br>";
        echo "array_fill()<br>";
        $filled_array_1 = array_fill(4,3,"malay");
        print_r($filled_array_1);
        
        $filled_array_2 = array_fill(3,6,"mango");
        echo "<br>";
        print_r($filled_array_2);


        //array_fill_keys()
        //syntax:array_fill_keys(keys,value)
        //this function fill the array with values and keys are specified.


        echo "<br><br>";
        echo "array_fill_keys()<br>";
        $filled_array_1 = array(1,2,3,4,5);
        print_r(array_fill_keys($filled_array_1,"chickoo"));


        //array_flip()
        //syntax:array_flip(array)
        //this function changes the keys and values of array with eaxh other

        echo "<br><br>";
        echo "array_flip()<br>";
        $fruit_array = array("1"=>"apple","2"=>"banana","3"=>"chickoo");
        echo "normal array<br>";
        print_r($fruit_array);
        echo "<br>flipped array<br>";
        print_r(array_flip($fruit_array));
       
        //array_intersect()
        //syntax:array_intersect($array1,$array2,....)
        //this function matches the two array and returns the common elements from both array

        echo "<br><br>";
        echo "array_intersect()<br>";
        $food_array_1 = array("1"=>"pizza","2"=>"Dhosa","3"=>"Pau Bhaji");
        $food_array_2 = array("4"=>"pizza","5"=>"Dhosa","6"=>"Burger");
        print_r(array_intersect($food_array_1,$food_array_2));


        //array_intersect_assoc()
        //syntax:array_intersect_assoc(array1,array2,.....)
        //this function matches the keys and values of two arrays and returns the matches

        echo "<br><br>";
        echo "array_intersect_assoc()<br>";
        $food_array_1 = array("1"=>"pizza","2"=>"Dhosa","3"=>"Pau Bhaji");
        $food_array_2 = array("1"=>"pizza","2"=>"Dhosa","6"=>"Burger");
        print_r(array_intersect_assoc($food_array_1,$food_array_2));


        //array_intersect_key()
        //syntax:array_intersect_key(array1,array2,....)
        //this function compares both keys and values of two array and return the matches.



        echo "<br><br>";
        echo "array_intersect_key()<br>";
        $food_array_1 = array("7"=>"Bhel","8"=>"Sandwitch","9"=>"Pau Bhaji");
        $food_array_2 = array("7"=>"Bhel","8"=>"Sandwitch","10"=>"Burger");
        print_r(array_intersect_key($food_array_1,$food_array_2));


        //array_key_exists()
        //syntax:array_key_exists(key,array)
        //this function checks for the key in a gien array and returns true if key exist and false if not
   
        echo "<br><br>";
        echo "array_intersect_key()<br>";
        $key_check_array=array("Pau Bhaji"=>"70","Burger"=>"80","Pizza"=>"90");
        if(array_key_exists("Burger",$key_check_array))
        {
            echo "Key Exist";
        } 
        else
        {
            echo "key does not exist";
        }

        //array_keys()
        //syntax:array_keys(array,value,strict)
        //this functin return an array containing the strings

        echo "<br><br>";
        echo "array_keys()<br>";
        $key_array=array("Pau Bhaji"=>"70","Burger"=>"80","Pizza"=>"90");
        echo "normal array<br>";
        print_r($key_array);
        echo "<br>only keys of array<br>";
        print_r(array_keys($key_array));

        //array_map()
        //syntax:array_map(function,array1,array2,......)
        //this function sends each value of array to user defined function, performs the task 
        //and returns the array.
        
        echo "<br><br>";
        echo "array_map()<br>";
        function myfunction($v)
        {
            return($v*10);
        }

        $a=array(1,2,3,4,5);
        echo "normal array<br>";
        print_r($a);
        echo "<br>array after using function<br>";
        print_r(array_map("myfunction",$a));

        //array_merge()
        //syntax:array_merge(array1,array2,........)
        //this function merges two or more arrays and returns the merged array.
        //if two arrays have same keys then then last one overrides other.
   
        echo "<br><br>";
        echo "array_merge()<br>";
        $car1=array("bmw","mercedes");
        $car2=array("skoda","fortuner");
        print_r(array_merge($car1,$car2));

        //array_merge_recursive
        //syntax: array_merge_recursive(array1,array2,.......)
        //this function is similar to array_merge() the only difference is that if the two 
        //elements have same key than instead of overriding this function makes array of that values.

        echo "<br><br>";
        echo "array_merge_recursive()<br>";
        $car1=array("a"=>"bmw","b","mercedes");
        $car2=array("c"=>"skoda","b","fortuner");
        print_r(array_merge($car1,$car2));


        //array_pad()
        //syntax:array_pad(array,size,value)
        //this function adds value to a given array
        //if you give second parameter negative then the elements will be inserted at 
        //starting of array.
   
        echo "<br><br>";
        echo "array_pad()<br>";
        $array1 = array("yellow","white");
        print_r(array_pad($array1,4,"blue"));


        //array_pop()
        //syntax:array_pop(array)
        //deletes last elemenst of array

        echo "<br><br>";
        echo "array_pop()<br>";
        $array1 = array("yellow","white","green","blue");
        echo "normal array<br>";
        print_r($array1);
        echo "<br>after deleting last element<br>";
        array_pop($array1);
        print_r($array1);

        //array_product()
        //syntax:array_pop(array)
        //returns the product of a given array
    
        echo "<br><br>";
        echo "array_product()<br>";
        $a=array(5,5,2,10);
        echo(array_product($a));

        //array_push()
        //syntax:array_push(array,value1,value2,...)
        //this function adds value at the last of array

        echo "<br><br>";
        echo "array_push()<br>";

        $fruit=array("apple","banana");
        array_push($fruit,"mango");
        print_r($fruit);

        //array_rand()
        //syntax:array(array,number)
        //this function returns random key from array or array of random keys

  
        echo "<br><br>";
        echo "array_rand()<br>"; 
        $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        print_r(array_rand($a,2));

        //array_multisort()
        //syntax:array(array1.sortorder.sorttype,array2,array3,....)
        //this function sorts array in ascending order if more than 2 arrays are passed in parameter
        //than first array is sorted and all other arrays are sorted in oreder of first array 
        //not in ascending order

        echo "<br><br>";
        echo "array_multisort()<br>";
        $a1=array("Dog","Cat");
        $a2=array("Aido","Bisy");
        $a3=array("Bido","Cisy");
        array_multisort($a1,$a2,$a3);
        print_r($a1);
        print_r($a2);
        print_r($a3);

        //array_replace()
        //syntax:array_replace(array1,array2,.........)
        //this fucction replaces the value of array1 with the value of array2 
        //if more than two arrays are passed in th parameter than the last overrides all. 
        
        echo "<br><br>";
        echo "array_replace()<br>";
        $a1=array("pizza","burger");
        $a2=array("pasta","samosa");
        print_r(array_replace($a1,$a2));

        //array_replace_recursive
        //syntax:array_replace_recursive(array1,array2,...)
        //this function replaces the value of array recursively 

        //difference of both function
  
        echo "<br><br>";
        echo "array_replace_recursive()<br>";
        $a1=array("a"=>array("red"),"b"=>array("green","blue"),);
        $a2=array("a"=>array("yellow"),"b"=>array("black"));

        $result=array_replace_recursive($a1,$a2);
        print_r($result);
        echo "<br>";
        $result=array_replace($a1,$a2);
        print_r($result);
                
        //array_reverse
        //syntax:array_reverse(array)
        //this function reverses an array.

        echo "<br><br>";
        echo "array_reverse()<br>"; 
        $a=array("a"=>"pizza","b"=>"burger","c"=>"shake");
        print_r(array_reverse($a));

        //array_search()
        //syntax:array_search(value,array,strict)
        //this function searches a value in array and returns its key.
        //strict specifies the type should be same or not by default true

        echo "<br><br>";
        echo "array_search()<br>"; 
        $a=array("a"=>"pizza","b"=>"burger","c"=>"shake");
        print_r(array_search("burger",$a));

        //array_shift()
        //syntax:array_shift(array)
        //this function removes first element from array and returns removed element

        echo "<br><br>";
        echo "array_shift()<br>";
        $a=array("a"=>"red","b"=>"green","c"=>"blue");
        echo array_shift($a)."<br>";
        print_r ($a);

        //array_slice()
        //syntax: array_alice(array,start,length,preserve)
        //returns selected part of array

        echo "<br><br>";
        echo "array_slice()<br>";
        $a=array("pizza","samosa","dabeli","hotdog","vadapav");
        print_r(array_slice($a,2));

        //array_splice()
        //syntax:array_splice(array,start,length,array)
        //removes elements and replces with new one.
   
        echo "<br><br>";
        echo "array_splice()<br>"; 
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("a"=>"purple","b"=>"orange");
        array_splice($a1,0,2,$a2);
        print_r($a1);

        //array_sum()
        //syntax:array_sum(array)
        //returns sum of all elemenst of array

        echo "<br><br>";
        echo "array_sum()<br>"; 
        $sum_array = array(5,10,15,20);
        print_r(array_sum($sum_array));

        //array_unique()
        //syntax:array_unique(array)
        //removes duplicate values and returns unique values

        echo "<br><br>";
        echo "array_unique()<br>"; 
        $unique_array = array("pizza","burger","pizza");
        print_r(array_unique($unique_array));

        //array_unshift()
        //syntax:array_unshift(array, value1,...)
        //adds values at begginning of array

        echo "<br><br>";
        echo "array_unshift()<br>"; 
        $fruit = array("mango","banana");
        array_unshift($fruit,"apple");
        print_r($fruit);

        //array_values()
        //syntax:array_values(array)
        //returns values of array and not the keys

        echo "<br><br>";
        echo "array_values()<br>"; 
        $a=array("Name"=>"Pizza","price"=>"100","Category"=>"fast-food");
        print_r(array_values($a));

        //array_walk
        //syntax:array_walk(array,function,parameter)
        //run each and every element of array in user-defined function

        echo "<br><br>";
        echo "array_walk()<br>"; 
        function myfunction1($value,$key)
        {
            echo "The key $key has the value $value<br>";
        }
        $a=array("a"=>"red","b"=>"green","c"=>"blue");
        array_walk($a,"myfunction1");

        //array_walk_recursive
        //similar to array_walk function the only difference is that in this function
        //we can work with array inside array

        echo "<br><br>";
        echo "array_walk_recursive()<br>"; 
        function myfunction2($value,$key)
        {
        echo "The key $key has the value $value<br>";
        }
        $a1=array("a"=>"red","b"=>"green");
        $a2=array($a1,"1"=>"blue","2"=>"yellow");
        array_walk_recursive($a2,"myfunction2");

        //compact
        //syntax:(var1,...)
        //creates array from variables and thier values
        //if any string does not matches the variable sthen it will be skipped

        echo "<br><br>";
        echo "compact()<br>";
        $firstname = "Peter";
        $lastname = "Griffin";
        $age = "41";

        $result = compact("firstname", "lastname", "age");

        print_r($result);

        //count
        //syntax:count(array)
        //count length of the given array

        echo "<br><br>";
        echo "count()<br>"; 
        $c_array = array("apple","banana","chickoo","mango");
        echo count($c_array);

        //current
        //syntax:current(array)
        //returns current position of array element by default it is at index 0
    
        echo "<br><br>";
        echo "current()<br>"; 
        $food  = array("pizza","burger","dhosa","cheese sandwich","pasta");
        echo current($food);

        //each
        //syntax:each(array)
        //returns current elements key and value

        echo "<br><br>";
        echo "each()<br>"; 
        $food  = array("pizza","burger","dhosa","cheese sandwich","pasta");
        print_r(each($food));

        //end
        //syntax:end(array)
        //returns last element of array
  
        echo "<br><br>";
        echo "end()<br>"; 
        $food  = array("pizza","burger","dhosa","cheese sandwich","pasta");
        print_r(end($food));

        //extract
        //syntax:extract(array)
        //function uses array keys as variable names and values as variable values

        echo "<br><br>";
        echo "extract()<br>"; 
        $a = "Original";
        $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
        extract($my_array);
        echo "\$a = $a; \$b = $b; \$c = $c";

        //in_array()
        //syntax:in_array(search,array,type)

        echo "<br><br>";
        echo "in_array()<br>"; 

        $food = array("pizza", "burger", "pasta", "sandwich");

        if (in_array("pasta", $food))
        {
        echo "Match found";
        }
        else
        {
        echo "Match not found";
        }

        //key(array)
        //returns key of current element position

        echo "<br><br>";
        echo "key()<br>"; 

        $food = array("pizza", "burger", "pasta", "sandwich");
        echo "key of current element is ".key($food);

        //list(var1,..)
        //it is used to assign values to the list of variables
        
        echo "<br><br>";
        echo "list()<br>"; 
        $my_array = array("Dog","Cat","Horse");

        list($a, $b, $c) = $my_array;
        echo "I have several animals, a $a, a $b and a $c.";


        //natcasesort and natsort

        echo "<br><br>";
        echo "natcasesort() and natsort()<br>"; 
        $temp_files = array("temp15.txt","Temp10.txt",
        "temp1.txt","Temp22.txt","temp2.txt");

        natsort($temp_files);
        echo "Natural order: ";
        print_r($temp_files);
        echo "<br />";

        natcasesort($temp_files);
        echo "Natural order case insensitve: ";
        print_r($temp_files);

        //next(array)
        echo "<br><br>";
        echo "key()<br>"; 

        $food = array("pizza", "burger", "pasta", "sandwich");
        echo next($food);

        //pos(array)
        //similar to current but does not move the pointer
        echo "<br><br>";
        echo "pos()<br>"; 

        $food = array("pizza", "burger", "pasta", "sandwich");
        echo pos($food)."<br>";

        //previous(array)
        //moves internal pointer and outputs previous element

        $food = array("pizza", "burger", "pasta", "sandwich");
        echo current($food)."<br>";
        echo next($food)."<br>";
        echo prev($food)."<br>";

        //range(low, high)
        //creates array containing range of elements

        echo "<br><br>";
        echo "range()<br>";
        $number = range(0,5);
        print_r ($number);

        //reset()
        //it resets arrays internal pointer to first element

        echo "<br><br>reset()<br>";

        $food = array("pizza", "burger", "pasta", "sandwich");
        echo current($food) . "<br>";
        echo next($food) . "<br>";

        echo reset($food);

        //shuffle()
        //randomize entire array

        echo "<br><br>shuffle()<br>";
        $my_array = array("red","green","blue","yellow","purple");

        shuffle($my_array);
        print_r($my_array);

        //sizeof()
        //similar to count function

        echo "<br><br>sizeof()<br>";
        $cars=array("Volvo","BMW","Toyota");
        echo sizeof($cars);






                    
                












   

       



    









    ?>
    
</body>
</html>