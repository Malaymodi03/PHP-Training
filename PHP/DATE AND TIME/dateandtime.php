<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and Time in php</title>
    <style>
        h1{
            text-align:center;
        }

    </style>    
</head>
<body>
    <?php
        echo "<h1>Date and Time functions in php</h1><br>";

        //checkdate(month, day, year)
        //This function is used to validate a gregorian date
        echo "<b>checkdate(month, day, year)</b><br>";
        var_dump(checkdate(13,31,-400));
        echo "<br>";
        var_dump(checkdate(2,29,2020));
        echo "<br>";
        var_dump(checkdate(3,29,2022));

        //date_add(object, interval)
        //this function adds days, months, years, hours, minutes and seconds to a specified date
        echo "<br><br><b>date_add(object, interval)</b><br>";
        $date=date_create("2022-03-24");  
        date_add($date, date_interval_create_from_date_string("2 year + 5 months + 10 days  
                                      + 5hours + 20 mins + 25 secs"));  
  
        echo date_format($date, "Y-m-d H:i:s");  

        //date_create_from_format(format, time, timezone)
        //This function returns new date time object formatted according to specified format
        echo "<br><br><b>date_create_from_format(format, time, timezone)</b><br>";
        $date=date_create_from_format("j-M-Y-l","24-Mar-2022-Thursday");
        echo date_format($date,"Y/m/d l");

        //date_create(time, timezone)
        //This function returns new date time object and then formats the date
        echo "<br><br><b>date_create(time, timezone)</b><br>";
        $date=date_create("2022-03-24");
        echo date_format($date,"Y/m/d");


        //date_date_set(object, year, month, day)
        //This function sets a new date
        echo "<br><br><b>date_date_set(object, year, month, day)</b><br>";
        $date=date_create();
        date_date_set($date,2025,1,25);
        echo date_format($date,"Y/m/d");

        //date_default_timezone_get()
        //This function return returns the default timezone used by all date/time function in script
        echo "<br><br><b>date_default_timezone_get()</b><br>";
        echo date_default_timezone_get();

        //date_default_timezone_set(timezone)
        //This function sets the default timezone which is to be used by all functions
        echo "<br><br><b>date_default_timezone_set(timezone)</b><br>";
        date_default_timezone_set("Asia/Dubai");
        echo date_default_timezone_get();
        date_default_timezone_set("Asia/Kolkata");

        //date_diff(datetime1, datetime2, absolute)
        //This fucntion returns date difference between two dates
        echo "<br><br><b>date_diff(datetime1, datetime2, absolute)</b><br>";
        $date1=date_create("2022-03-29");
        $date2=date_create("2022-01-14");
        $diff=date_diff($date1,$date2); 
        echo $diff->format("%R%a days");

        //date_format(object, format)
        //This function returns a date formatted according to specified format
        echo "<br><br><b>date_format(object,format)</b><br>";
        $date=date_create("2022-03-29 Thursday");
        echo date_format($date,"Y/m/d H:i:s l");

        //date_get_last_errors()
        //This function is returns warning/errors while parsing a date
        echo "<br><br><b>date_format(object,format)</b><br>";
        date_create("gyuiyiuyui%&&/");
        print_r(date_get_last_errors());

        //date_interval_create_from_date_string(datetime)
        //This function sets up a DateInterval from the relative parts of the string.
        echo "<br><br><b>date_interval_create_from_date_string(datetime)</b><br>";
        $date = date_create('2022-03-24');
        date_add($date, date_interval_create_from_date_string('1 year 2months 35 days'));
        echo date_format($date, 'Y-m-d');

        // date_interval_format() 
        //This function is used to format the interval
        echo "<br><br><b>date_interval_format</b><br>";
        $date1=date_create("2022-03-24");
        $date2=date_create("2022-05-13");
        $diff=date_diff($date1,$date2);

        // %a outputs the total number of days
        echo $diff->format("Total number of days: %a.");
        echo "<br>";

        // %R outputs + beacause $date2 is after $date1 (a positive interval)
        echo $diff->format("Total number of days: %R%a.");
        echo "<br>";

        // %d outputs the number of days that is not already covered by the month
        echo $diff->format("Month: %m, days: %d."); 

        //date_isodate_set(object, year, week, day)
        //This function sets date according to ISO 8601 standard, using weeks and day offsets (instead of using a specific date).
        echo "<br><br><b>date_isodate_set(object, year, week, day)</b><br>";
        $date=date_create();

        date_isodate_set($date,2022,13);
        echo date_format($date,"Y-m-d") . "<br>";

        date_isodate_set($date,2022,13,2);
        echo date_format($date,"Y-m-d");

        //date_modify(object, modify)
        //This function modifies the timestamp
        echo "<br><br><b>date_modify(object,modify)</b><br>";
        $date=date_create("2022-03-01");
        date_modify($date,"+ 1 year +2 months +15 days");
        echo date_format($date,"Y-m-d-l");

        //date_offset_get(object)
        //This function returns the timezone offset.
        echo "<br><br><b>date_offset_get(object)</b><br>";
        $winter=date_create("2022-12-31",timezone_open("Asia/Kolkata"));
        $summer=date_create("2022-06-30",timezone_open("ASia/kolkata"));
        echo date_offset_get($winter) . " seconds.<br>";
        echo date_offset_get($summer) . " seconds.";

        //date_parse_from_format(format, date)
        //This  function returns an associative array with detailed information about a specified date, according to the specified format.
        echo "<br><br><b>date_parse_from_format(object)</b><br>";
        print_r(date_parse_from_format("mmddyyyy","05122013"));
        echo "<br><br>";
        print_r(date_parse_from_format("j.n.Y H:iP","12.5.2022 14:35+02:00"));

        //date_parse(date)
        //This function returns an associative array with detailed information about a specified date.
        echo "<br><br><b>date_parse(date)</b><br>";
        print_r(date_parse("2022-03-25 10:35:45.5"));

        //date_sub(object, interval)
        //This function subtracts some days, months, years, hours, minutes, and seconds from a date.
        echo "<br><br><b>date_sub(object, interval)</b><br>";
        $date=date_create("2022-05-15");
        date_sub($date,date_interval_create_from_date_string("1year + 2months + 40 days "));
        echo date_format($date,"Y-m-d");

        //date_sun_info(timestamp, latitude, longitude)
        //This function returns an array containing information about sunset/sunrise and twilight begin/end, for a specified day and location.
        echo "<br><br><b>date_sun_info(timestamp, latitude, longitude)</b><br>";
        echo "<h3>Date: 1st January, 2013</h3>";
        $sun_info=date_sun_info(strtotime("2013-01-01"),31.7667,35.2333);
        foreach ($sun_info as $key=>$val)
        {
        echo "$key: " . date("H:i:s",$val) . "<br>";
        }

        echo "<h3>Date: 1st June, 2013</h3>";
        $sun_info=date_sun_info(strtotime("2013-06-01"),31.7667,35.2333);
        foreach ($sun_info as $key=>$val)
        {
        echo "$key: " . date("H:i:s",$val) . "<br>";
        }

        //date_time_set(object, hour, minute, second, microseconds)
        //This function sets the time.
        echo "<br><br><b>date_time_set(object,hour,minute,second,microsecond)</b><br>";
        $date=date_create("2022-03-25");

        date_time_set($date,11,24);
        echo date_format($date,"Y-m-d H:i:s") . "<br>";

        date_time_set($date,12,20,55);
        echo date_format($date,"Y-m-d H:i:s");

        //date_timestamp_get(object)
        //This function returns the Unix timestamp.
        echo"<br><br><b>date_time_set</b><br>";
        $date=date_create();
        echo date_timestamp_get($date);

        //date_timestamp_set(object, unixtimestamp)
        //This function sets the date and time based on a Unix timestamp.
        echo"<br><br><b>date_timestamp_set(object,unixtimestamp)</b><br>";
        $date=date_create();
        date_timestamp_set($date,1648186837);
        echo date_format($date,"U = Y-m-d H:i:s");

        //date_timezone_get(object)
        //This function returns the time zone of the given DateTime object. 
        echo"<br><br><b>date_timezone_get(object)</b><br>";
        $date=date_create(null,timezone_open("Asia/Bangkok"));
        $tz=date_timezone_get($date);
        echo timezone_name_get($tz);

        //date_timezone_set(object, timezone)
        //This function sets the time zone for the DateTime object.
        echo"<br><br><b>date_timezone_set(object, timezone)</b><br>";
        $date=date_create("2022-03-25",timezone_open("Indian/Kerguelen"));
        echo date_format($date,"Y-m-d H:i:sP") . "<br>";

        date_timezone_set($date,timezone_open("Europe/Paris"));
        echo date_format($date,"Y-m-d H:i:sP");

        //getdate(timestamp)
        //This function returns an associative array with detailed information of timestamp
        echo"<br><br><b>getdate(timestamp)</b><br>";
        // Print the array from getdate()
        print_r(getdate());
        echo "<br><br>";

        // Return date/time info of a timestamp; then format the output
        $mydate=getdate(date("U"));
        echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";

        //gettimeofday(return_float)
        //This function Returns an associative array by default, with the following array keys:
        echo"<br><br><b>gettimeofday(return_float)</b><br>";
        // Print the array from gettimeofday()
        print_r(gettimeofday());
        echo "<br><br>";

        // Print the float from gettimeofday()
        echo gettimeofday(true) . "<br><br>";

        // Return current time; then format the output
        $mytime=gettimeofday();
        echo "$mytime[sec].$mytime[usec]";

        //gmdate(format, timestamp)
        //This function formats a GMT/UTC date and time, and returns the formatted date string.
        echo"<br><br><b>gmdate(format, timestamp)</b><br>";
        // Prints the day
        echo gmdate("l") . "<br>";

        // Prints the day, date, month, year, time, AM or PM
        echo gmdate("l jS \of F Y h:i:s A") . "<br>";

        // Prints October 3, 1975 was on a Thursday
        echo "Oct 3, 1975 was on a ".gmdate("l", mktime(0,0,0,10,3,1975)) . "<br>";

        // Use a constant in the format parameter
        echo gmdate(DATE_RFC822) . "<br>";

        // prints something like: 1975-10-03T00:00:00+00:00
        echo gmdate(DATE_ATOM,mktime(0,0,0,10,3,1975));

        //gmmktime(hour, minute, second, month, day, year, is_dst)
        //This function returns the Unix timestamp for a GMT date.
        echo"<br><br><b>gmmktime(hour, minute, second, month, day, year, is_dst)</b><br>";
        // Prints: October 3, 1975 was on a Friday
        echo "Oct 3, 1975 was on a ".date("l", gmmktime(0,0,0,10,3,1975));

        //gmstrftime(format, timestamp)
        //This function formats a GMT/UTC time and/or date according to locale settings.
        echo"<br><br><b>gmstrftime(format, timestamp)</b><br>";
        echo(gmstrftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,98))."<br>");
        setlocale(LC_ALL,"hu_HU.UTF8");
        echo(gmstrftime("%Y. %B %d. %A. %X %Z"));

        //localtime(timestamp, is_assoc)
        //This function returns the locale time
        echo"<br><br><b>localtime(timestamp, is_assoc)</b><br>";
        print_r(localtime());
        echo "<br><br>";
        print_r(localtime(time(),true));

        //microtime(return_float);
        //This function returns the current Unix timestamp with microseconds.
        echo"<br><br><b>microtime(return_float)</b><br>";
        $time = microtime();
        print($time);

        //mktime(hour, minute, second, month, day, year, is_dst)
        //This  function returns the Unix timestamp for a date.
        echo"<br><br><b>mktime(hour, minute, second, month, day, year, is_dst)</b><br>";
        // Prints: October 3, 1975 was on a Friday
        echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975)) . "<br><br>";

        //The mktime() function is useful for doing date arithmetic and validation.
        //It will automatically calculate the correct value for out-of-range input:
        echo date("M-d-Y",mktime(0,0,0,12,36,2001)) . "<br>";
        echo date("M-d-Y",mktime(0,0,0,14,1,2001)) . "<br>";
        echo date("M-d-Y",mktime(0,0,0,1,1,2001)) . "<br>";
        echo date("M-d-Y",mktime(0,0,0,1,1,99)) . "<br>";

        //strftime(format, timestamp)
        //This function formats a local time and/or date according to locale settings.
        echo"<br><br><b>strftime(format,timestamp)</b><br>";
        echo(strftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,22))."<br>");
        setlocale(LC_ALL,"hu_HU.UTF8");
        echo(strftime("%Y. %B %d. %A. %X %Z"));    

        //strptime(date, format)
        //This function parses a time/date generated with strftime().
        echo"<br><br><b>strptime(date, format)</b><br>";
        $format="%d/%m/%Y %H:%M:%S";
        $strf=strftime($format);
        echo("$strf");
        print_r(strptime($strf,$format));

        //strtotime(time, now);
        //This function parses an English textual datetime into a Unix timestamp (the number of seconds since January 1 1970 00:00:00 GMT).
        echo"<br><br><b>strtotime(time, now)</b><br>";    
        echo(strtotime("now") . "<br>");
        echo(strtotime("3 October 2005") . "<br>");
        echo(strtotime("+5 hours") . "<br>");
        echo(strtotime("+1 week") . "<br>");
        echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
        echo(strtotime("next Monday") . "<br>");
        echo(strtotime("last Sunday"));

        //time()
        //This function returns the current time in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).
        echo "<br><br><b>time()</b><br>";
        $t=time();
        echo($t . "<br>");
        echo(date("Y-m-d",$t));    

        //timezone_abbreviations_list()
        //This function returns an associative array containing dst, offset, and the timezone name.
        echo "<br><br><b>timezone_abbreviations_list()</b><br>";    
        $tzlist = DateTimeZone::listAbbreviations();
        print_r($tzlist["ist"]);

        //timezone_identifiers_list(what, country)
        //This function returns an indexed array containing all timezone identifiers.
        echo "<br><br><b>timezone_identifiers_list(what, country)</b><br>";    
        // Print all timezones in Asia
        print_r(timezone_identifiers_list(16));

        //timezone_location_get(object)
        //This function returns location information for the given timezone.
        //Country code, latitudes and longitudes
        echo "<br><br><b>timezone_location_get(object)</b><br>";    
        $tz=timezone_open("Asia/Kolkata");
        print_r(timezone_location_get($tz));

        //timezone_name_from_abbr(abbr, gmtoffset, isdst)
        //This function returns the timezone name from abbreviation.
        echo "<br><br><b>timezone_name_from_abbr(abbr,gmtoffset,isdt)</b><br>";  
        echo timezone_name_from_abbr("IST",19800);  

        //timezone_name_get(object)
        //This function retirns the name of the timezone
        echo "<br><br><b>timezone_name_get(object)</b><br>";    
        $tz=timezone_open("Asia/Bangkok"); 
        echo timezone_name_get($tz);

        //timezone_open(timezone)
        //This function creates a new DateTimeZone object.
        echo "<br><br><b>timezone_open(timezone)</b><br>";
        $tz=timezone_open("Asia/Kolkata");
        echo timezone_name_get($tz);    

        //timezone_version_get()
        //This function returns the version of the timezonedb.
        echo "<br><br><b>timezone_version_get()</b><br>";
        //$version = timezone_version_get();
        //print($version);
        echo timezone_version_get();

        //timezone_offset_get(object, datetime)
        //This function returns timezone offset of GMT
        echo "<br><br><b>timezone_open()</b><br>";
        $tz=timezone_open("Asia/Taipei");
        $dateTimeOslo=date_create("now",timezone_open("Europe/Oslo"));
        echo timezone_offset_get($tz,$dateTimeOslo);

        //idate()
        //This function formats local date or time as integer
        echo"<br><br><b>idate</b><br>";
        echo idate("B") . "<br>";
        echo idate("d") . "<br>";
        echo idate("h") . "<br>";
        echo idate("H") . "<br>";
        echo idate("i") . "<br>";
        echo idate("I") . "<br>";
        echo idate("L") . "<br>";
        echo idate("m") . "<br>";
        echo idate("s") . "<br>";
        echo idate("t") . "<br>";
        echo idate("U") . "<br>";
        echo idate("w") . "<br>";
        echo idate("W") . "<br>";
        echo idate("y") . "<br>";
        echo idate("Y") . "<br>";
        echo idate("z") . "<br>";
        echo idate("Z") . "<br>";

        //date_sun_info()
        //returns information of surise sunset and other such details
   
         
echo "<h3>Date: 1st January, 2013</h3>";
$sun_info=date_sun_info(strtotime("2013-01-01"),23.0225,72.5714);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }

echo "<h3>Date: 1st June, 2013</h3>";
$sun_info=date_sun_info(strtotime("2013-06-01"),23.0225,72.5714);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }






                
                






















                











?>
    
    
</body>
</html>