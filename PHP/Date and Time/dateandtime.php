<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time</title>
    <style>
         h1{
             text-align:center;
         
            }
    </style>
</head>
<body>

       <?php
            echo "<h1>Date and Time in PHP</h1><br><br>";

            //checkdate(month,day,year)
            //this function is used to check whether a date is a balid gregorian date or not.
          
            echo "checkdate(month,day,year)<br>";
            var_dump(checkdate(12,31,-400));
            echo "<br>";
            var_dump(checkdate(2,29,2021));
            echo "<br>";
            var_dump(checkdate(2,28,2022));

            //date_add()
            //this function is used to add some day, months and years to a specified date
            echo "<br><br>date_add()<br>"; 
            $date=date_create("2022-3-23"); 
            echo "Today is ".date("Y-m-d")."<br>"; 
            date_add($date, date_interval_create_from_date_string("3 year + 2 months + 4 days  
                                    + 5 hours  + 20 mins + 25 secs"));  
            echo date_format($date, "Y-m-d H:i:s");  

            //date_create()
            //this function returns a formatted date ffrom a given date
            echo "<br><br>date_create_from_format()<br>"; 
            $date=date_create_from_format("j-M-Y","3-Mar-2022");
            echo date_format($date,"Y/m/d");

            //date_date_set



         ?>

    <?php

     /*echo "<h1>Date and Time in PHP</h1><br><br>";
     echo "<h2>Date</h2><br>";
     echo "Today is ".date("d-m-y")."<br>";
     echo "Today is ".date(l)."<br>";
     echo "Today is ".date("Y-m-d-l");

     echo "<br><br>";
     echo "<h2>Time</h2><br><br>";
     echo "The time in 12 hour format is ".date("h-i-s-a")."<br>";
     echo "The time in 24 hour format is ".date("H-i-s-a")."<br><br>";

     //the date_default_timezone is used to set the timezone of our country

     
     date_default_timezone_set("America/New_York");
     echo "The time is " . date("h:i:sa");   

     $timezone_identifiers = DateTimeZone::listIdentifiers();

     foreach($timezone_identifiers as $key => $list){
     
     echo $list . "<br/>";
     }*/

?>
    
</body>
</html>