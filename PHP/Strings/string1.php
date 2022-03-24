<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in PHP</title>
    <title>Date and Time</title>
    <style>
         h1{
             text-align:center;
         
            }
    </style>
</head>
<body>
    <?php
        echo "<h1>String Functions in PHP</h1><br><br>";

        //addcslashes(string,characters)
        //this function is used to add backslashes in front of specified characters.
        echo "addcslashes()<br>";
        $str = addcslashes("Good Afternoon to all","tn");
        echo $str;

        //addslashes(string)
        //this function returns backslashes in front of double or single quote
        echo "<br><br>addslashes(string)<br>";
        $str = addslashes('What is "your" favourite food ?');
        echo($str)."<br>";
        $str2 = addslashes("which is 'your' favourite place ?");
        echo($str2);

        //bin2hex(string)
        //this function converts string of ASCII characters into hexadecimal values

        echo "<br><br>bin2hex(string)<br>";
        $str  = "What is your name ?";
        echo bin2hex($str);

        //chop(string,charlist)
        //this function removes whitespace and other specified characters from a string
        echo "<br><br>chop(string,charlist)<br>";
        $str = "Hello World!";
        echo $str . "<br>";
        echo chop($str,"World!");

        //chr(ascii)
        //This function returns characters from different ascii values.

        echo "<br><br>chr(ascii)<br>";
        echo chr(52) . "<br>"; // Decimal value
        echo chr(052) . "<br>"; // Octal value
        echo chr(0x52) . "<br>"; // Hex value

        //chunk_split(string,length,end)
        //This function splits string into smaller parts and can also add some chaarcters to it
        echo "<br><br>chunk_split(string,length,end)<br>";
        $str = "Hello world!";
        echo chunk_split($str,2,".");

        //convert_cyr_string(string,from,to)
        //This function converts string from one Cyrillic character-set to another
        echo "<br><br>convert_cyr_string(string,from,to)<br>";
        $str = "Hello world! æøå";
        echo $str . "<br>";
        echo convert_cyr_string($str,'w','a'); 

        //convert_uuencode(str) & convert_uudecode(str)
        //This functions encodes and decodes strings into printable characters using 
        //uuencode algorithm

        echo "<br><br>convert_uuencode(str) & convert_uudecode(str)<br>";
        $str = "Good Afternoon !";
        // Encode the string
        $encodeString = convert_uuencode($str);
        echo $encodeString . "<br><br>";

        // Decode the string
        $decodeString = convert_uudecode($encodeString);
        echo $decodeString;

        //count_chars(string,mode)
        //This function counts all different characters of a string
        echo "<br><br>count_chars(string,mode)<br>";        
        $str = "Full Stack Development";
        print_r(count_chars($str,3));

        //crc32(string)
        //This function generates 32-bit crc for a given string

        echo "<br><br>crc32(string)<br>";
        $str = crc32("Hyderabad");
        printf("%u\n",$str);

        //echo()
        //echo is used to output one or more strings

        echo "<br><br>echo<br>";
        echo "Welcome to Ahmedabad";

        //explode(seperator,string,limit)
        //This function is used to convert a string into array 
        //if limit is given 0 then returns array if greator then 0 then size of 
        //array will be given limit and if less than zero than last limit elements
        //will be removed

        echo "<br><br>explode(seeperator,string,limit)<br>";
        $str = 'Italian Pizza is my favourite food';

        // zero limit
        print_r(explode(' ',$str,0));
        print "<br>";

        // positive limit
        print_r(explode(' ',$str,5));
        print "<br>";

        // negative limit 
        print_r(explode(' ',$str,-2));

        //fprintf(stream,format,arglist)
        //This function writes a formatted string to a specified output stream
        echo "<br><br>fprintf()<br>";
        $number = 60;  
        $str = "class";  
        $file = fopen("test.txt","w");  
        echo fprintf($file,"There are %u students in my  %s.",$number,$str);  

        //get_html_translation_table() 
        //this function displays all entities used by htmlspecialchars() and htmlentities()
        //echo "<br><br>get_html_translation_table()<br>"; 
        //print_r (get_html_translation_table());

        //echo hebrev("á çùåï äúùñâ.");
   
        //hex2bin(str)
        //This function converts hexadecimal values into string of ascii values 
        echo "<br><br>hex2bin()<br>";
        echo hex2bin("5768617420697320796f7572206e616d65203f");

        //implode(seperator,array)
        //This function returns string from array elements

        echo "<br><br>implode(seperator,array)<br>";
        $arr = array('Pizza','is','my','favourite','food');
        echo implode(" ",$arr);

        //join(seperator,array)
        //This function is similar to implode function
        echo "<br><br>join(seperator,array)<br>";
        $arr = array('Pizza','is','my','favourite','food');
        echo implode("@",$arr);

        //lcfirst(string)
        //converts first character of string into lower case
        echo "<br><br>lcfirst(string)<br>";
        echo lcfirst("BANGLORE IS SILICON VALLEY OF INDIA");

        //ltrim(string,charlist)
        //This function removes whitespace and predefined characters from the left side of string
        echo "<br><br>ltrim(string,charlist)<br>";
        $str = "Pizza is my favourite food";
        echo $str . "<br>";
        echo ltrim($str,"Pizza");

        //rtrim(string,charlist)
        //This function removes whitespace and predefined characters from the right side of string

        echo "<br><br>rtrim(string,charlist)<br>";
        $str = "Pizza is my favourite food";
        echo $str . "<br>";
        echo rtrim($str,"food");

        //trim(string,charlist)
        //This function removes whitespace and predefined characters from both sides of string
        echo "<br><br>trim(string,charlist)<br>";
        $str = "Pizza is my favourite food";
        echo $str . "<br>";
        echo trim($str,"Pizzafood");

        //md5(string,raw)
        //This function generates MD5 hash of a given string
        echo "<br><br>md5()<br>";
        $str = "Pizza";
        echo md5($str);

        //md5_file()
        //Generates md5 hash of a file
        echo "<br><br>md5_file()<br>";
        $filename = "test.txt";
        $md5file = md5_file($filename);
        echo $md5file;

        //metaphone(string)
        //generates metaphone key of a string means that how it will sound if spoken
        // by a english speaking person
        echo "<br><br>metaphone(string)<br>"; 
        echo metaphone("pizza");


        //nl2br(string)
        //inserts a new line break
        echo "<br><br>nl2br(string)<br>";
        echo nl2br("Pizza is my.\nFavourite food.");

        //number_format(number,decimals,decimalpoint,separator)
        //used to format numbers with decimal point
        echo "<br><br>number_format()<br>";    
        echo number_format("1000000")."<br>";
        echo number_format("1000000",2)."<br>";
        echo number_format("1000000",2,",",".");

        //ord(string)
        //returns ascii value of first character of string
        echo "<br><br>ord(string)<br>";
        echo ord("M")."<br>";
        echo ord("Malay")."<br>";

        //parse_str()
        //parses query string into variables
        echo "<br><br>parse_str()<br>";
        parse_str("name=Malay&age=23");
        echo $name."<br>";
        echo $age;

        //print
        //outputs one or more string
        echo "<br><br>print<br>";
        print "pizza is my favourite food";

        //sha1(string)
        //calculates sha1 hash of string
        echo "<br><br>sha1(string)<br>";
        $str = "Pizza";
        echo sha1($str);

        //sha1_file()
        //Generates sha1 hash of a file
        echo "<br><br>sha1_file()<br>";
        $filename = "test.txt";
        $sha1file = sha1_file($filename);
        echo $sha1file;

        //similar_text(str1,str2)
        //calculates similiarity of two strings
        echo "<br><br>similar_text()<br>";
        echo similar_text("Ahmedabad","Ahmednagar");    

        //soundex(string)
        //calculates soundex key of a string
        echo "<br><br>soundex(string)<br>";
        $str = "Rajkot";
        echo soundex($str);

        //str_ireplace(find,replace,string)
        //replaces a case-insensitive world in a string
        echo "<br><br>str_ireplace(find,replace,string)<br>";
        echo str_ireplace("FOOD","dish","pizza is my favourite food!");

        //str_repeat(string,repeat)
        //repeates a string to specific times
        echo "<br><br>str_repeat(string,repeat)<br>";
        echo str_repeat("Pizza",7);

        //str_replace(find,replace,string)
        //replaces a case-sensitive world in a string
        echo "<br><br>str_replace(find,replace,string)<br>";
        echo str_ireplace("food","dish","pizza is my favourite food!");

        //str_rot13(string)
        //performs rot13 encoding on a string
        //shifts every letter 13 next in alphabets
        //non-alphabets and numeric are untouched
        echo "<br><br>str_rot13(string)<br>";
        echo str_rot13("pau bhaji");
        echo "<br>"; 
        echo str_rot13("cnh ounwv");

        //str_shuffle(string)
        //shuffles string randomly
        echo "<br><br>str_shuffle(string)<br>";
        echo str_shuffle("pizza is my favourite food");

        //str_split(string)
        //splits string into array
        echo "<br><br>str_split(string)<br>";
        print_r(str_split("Burger"));

        //str_word_count(string)
        //counts number of words found in string
        echo "<br><br>str_word_count(string)<br>";
        echo str_word_count("BANGLORE IS SILICON VALLEY OF INDIA");

        //strcasecmp(string1,string2)
        //compares two strings. case-insensitive
        echo "<br><br>strcasecmp(string1,string2)<br>";
        echo strcasecmp("masala dhosa","MASALA DHOSA");
        echo "<br>returns zero means true";

        //strchr(string,search);
        //searches for first occurence of string inside another string
        echo "<br><br>strchr(string,search)<br>";
        echo strchr("Hello world!","world");

        //strcmp(string1,string2)
        //compares two strings. case-sensitive
        echo "<br><br>strcmp(string1,string2)<br>";
        echo strcmp("masala dhosa","masala dhosa");
        echo "<br>returns zero means true";

        //strcspn(string,char)
        //count the number of character includding whitespaces found in string before specified character
        echo "<br><br>strcspn(string,char)<br>";
        echo strcspn("mexican pizza","p");

        //strip_tags(string,allow)
        //strips html,xml and php tags from strings
        echo "<br><br>strip_tags(string,allow)<br>";
        echo strip_tags("Pizza is my <b>favourite</b> food");

        //stripcslashes(string)
        //removes backslashes from string added by addcslashes
        echo "<br><br>stripcslashes(string)<br>";
        echo stripcslashes("mexican \pizza");

        //stripslashes(string)
        //removes backslashes from string added by addslashes
        echo "<br><br>stripslashes(string)<br>";
        echo stripslashes("Who\'s Peter Griffin?");

        

        
        
        
        
        
        
        

        
        



        













    









            

                


    ?>
</body>
</html>