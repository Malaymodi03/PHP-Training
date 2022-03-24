<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
    <style>
        h1{
            text-align:center;
        }



    </style>
</head>
     
<body>
    <?php
            echo "<h1>Calendar Functions in PHP</h1><br>";


       //cal_days_in_month(calendar,month,year)   
       //this function returns number of days in month for a specified year and calendar.  

       echo "cal_days_in_month()<br>";
       $d=cal_days_in_month(CAL_GREGORIAN,2,2020);
       echo "There was $d days in February 2020.<br>";
       $e=cal_days_in_month(CAL_GREGORIAN,2,2022);
       echo "There was $e days in February 2022.";     

       //cal_info(0)
       //returns information of calnedar like months of calendar short form of months
       //max days in month , calendar name and symbol
       //0 is for gregorian calendar, 1 is for julian calendar, 2 is for jewish calendar
       // and 3 is for french calendar
  
       echo "<br><br>"; 
       echo "cal_info()<br>";
       print_r(cal_info(0));


       //easter_date(year)
       //this function returns the date of easter of a given year.
       //if you don't give year parameter by default it will give date of current year.
       echo "<br><br>"; 
       echo "easter_date()<br>";
       echo date("M-d-Y",easter_date(2020)) . "<br />";
       echo date("M-d-Y",easter_date(2021)) . "<br />";
       echo date("M-d-Y",easter_date(2022));

       //easter_day(year)
       //returns how many days is easter date after march 21

       echo "<br><br>"; 
       echo "easter_days()<br>";
       echo "Easter Day is ". easter_days() . " days after March 21 this year.<br />";
       echo "Easter Day was ". easter_days(2020) . " days after March 21 in 2020.<br />";
       echo "Easter Day was ". easter_days(2021) . " days after March 21 in 2021.<br />";
       echo "Easter Day will be ". easter_days(2023) . " days after March 21 in 2023.";

       //gregoriantojd(month,day,year);
       //converts date form greorian calendar to julian calendar
       echo "<br><br>gregoriantojd<br>";
       $jd=gregoriantojd(3,23,2022);
       echo $jd . "<br>";
       echo jdtogregorian($jd);

       //jddayofweek(jd,mode);
       //returns week day of specified date
       echo "<br><br>jddayofweek(jd,mode)<br>";
       $jd=gregoriantojd(3,23,2022);
       echo jddayofweek($jd,1);

       //jdmonthname(jd,mode);
       //return short form of month of gregorian date
       echo "<br><br>jdmonthname(jd,mode)<br>";
       $jd=gregoriantojd(3,23,2022);
       echo jdmonthname($jd,0);

       //jdtofrench(jd);
       //converts julian day count to french republican date
       echo "<br><br>jdtofrench(jd)<br>";
       $jd=frenchtojd(3,3,14);
       echo $jd . "<br>";
       echo jdtofrench($jd);

       //jdtogregorian(jd)
       //converts julian day to gregorian date
       echo "<br><br>jdtogregorian(jd)<br>";
       $jd=gregoriantojd(6,20,2007);
       echo $jd . "<br>";
       echo jdtogregorian($jd);

       //jdtojewish(jd,hebrew,fl)
       //converts julian day to jewish date
       echo "<br><br>jdtojewish(jd)<br>";
       $jd=jdtojewish(1789430);
       echo $jd;

       //jdtojulian(jd)
       //converts julian day to julian date
       echo "<br><br>jdtojulian(jd)<br>";
       $jd=juliantojd(6,20,2007);
       echo $jd . "<br>";
       echo jdtojulian($jd);

       //jdtounix(jd)
       //conerts julian day to unix timestamp
       echo "<br><br>jdtounix(jd)<br>";
       $jd=gregoriantojd(3,23,2022); 
       echo jdtounix($jd);

       //jewishtojd(month,day,year)
       //converts date form jewish calendar to julian day
       echo "<br><br>jewishtojd(month,day,year)<br>";
       $jd=jewishtojd(6,20,2007);
       echo $jd;

       //juliantojd(month,day,year)
       //converts julian date to julian day
       echo "<br><br>juliantojd(month,day,year)<br>";
       echo $jd . "<br>";
       echo jdtojulian($jd);

       //unixtojd(timestamp)
       //converts unix timestamp to julian day
       echo "<br><br>unixtojd(timestamp)<br>";
       echo unixtojd();

       //cal_to_jd(calendar,month,day,year)
       //converts gregorian date to julian day
       echo "<br><br>cal_to_jd(calendar,month,day,year)<br>";
       $d=cal_to_jd(CAL_GREGORIAN,3,23,2022);
       echo $d;

       //frenchtojd(month,day,year)
       //converts date from french republican to julian day
       echo "<br><br>frenchtojd(month,day,year)<br>";
       $jd=frenchtojd(3,3,14);
       echo $jd . "<br>";
       echo jdtofrench($jd);

















?>
</body>
</html>