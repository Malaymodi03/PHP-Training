<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
</head>
<body>
    <?php
        echo "<b>Filters in php</b><br><br>";
        //uisng of filter_list() to show all filter functions
        
    ?>
    <table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

   <?php
    echo "<br><b>filter_var()</b>";
    //remove all html tags
    echo "<br>Use of filter_var() to remove all html tags from strings";
    $str = "<h3>Good Afternoon</h3>";
    echo $str;
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;

    //checking if the variable is integer or not
    echo "<br><br>Use of filter_var() to check if the variable is valid integer or not<br>";
    $int = 25;

    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || filter_var($int, FILTER_VALIDATE_INT) === true)
    {
        echo("Integer is valid");
    }
    else
    {
        echo("Integer is not valid");
    }

    //validate ip address
    echo "<br><br>Use of filter_var() to validate ip address<br>";
    $ip = "127.0.0.1";

     if (!filter_var($ip, FILTER_VALIDATE_IP) === false)
     {
        echo("$ip is a valid IP address");
     } 
     else
     {
        echo("$ip is not a valid IP address");
     }

     //remove illegal characters from email address
     echo "<br><br>Use of filter_var() to remove illegal characters from email<br>";
     $email = "malay.modi@gmail.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
    {
        echo("$email is a valid email address");
    }
    else
    {
        echo("$email is not a valid email address");
    }

    //validating url
    echo "<br><br>Use of filter_var() to validate url<br>";
    $url = "https://www.glsuniversity.ac.in/";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false)
    {
        echo("$url is a valid URL");
    } 
    else
    {
        echo("$url is not a valid URL");
    }

    //filter_has_var() 
    //function checks whether a variable of a specified input type exist
    echo "<br><br><b>filter_has_var()</b><br>";

    if(!filter_has_var(INPUT_POST, "name")) {
        echo("Input type does not exist");
    }
    else {
        echo("Input type exists");
    }

    //filter_id
    //This function returns filter ID of a specified filter name.
    echo "<br><br><b>filter_id()</b><br>";
    echo(filter_id("string"));

    //filter_input
    //This  function gets an external variable (e.g. from form input) and optionally filters it.
    echo "<br><br><b>filter_input()</b><br>";

   ?>
   <form method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    E-mail: <input type="text" name="email">
    <input type="submit" name="submit" value="Submit"> 
    </form>

    <?php
    if (isset($_GET["email"]))
     {
        if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL) === false) 
        {
            echo("Email is valid");
        }
        else
        {
            echo("Email is not valid");
        }
     }
?>
   
    <?php
    //filter_input_array() 
    $filters = array (
        "name" => array ("filter"=>FILTER_CALLBACK,
                                   "flags"=>FILTER_FORCE_ARRAY,
                                   "options"=>"ucwords"
                                  ),
        "age"   => array ( "filter"=>FILTER_VALIDATE_INT,
                                    "options"=>array("min_range"=>1,"max_range"=>120)
                                  ),
        "email" => FILTER_VALIDATE_EMAIL
        );
      print_r(filter_input_array(INPUT_POST, $filters));
  
      //filter_list()
      //this function returns a list of all the supported filter names.
      echo "<br><br><b>filter_list()</b><br>";
      print_r(filter_list());

      //filter_var()
      //this  function filters a variable with the specified filter.
      echo "<br><b>filter_var()</b><br><br>";
      $email = "malaym.wot2022@gmail.com";

        if (filter_var($email, FILTER_VALIDATE_EMAIL))
         {
             echo("$email is a valid email address");
        } 
        else
         {
            echo("$email is not a valid email address");
        }

        //filter_var_array()
        //this function filters multiple values
        echo "<br><b>filter_var_array()</b><br>";
        $data = array(
            'fullname' => 'Malay Modi',
            'age' => '23',
            'email' => 'malaym.wot2022@gmail.com',
          );
          
          $mydata = filter_var_array($data);
          var_dump($mydata);

          //filter_advanced
          //to validate the integer within a given range
          echo "<br>";
          $int = 25;
          $min = 1;
          $max = 20;

          if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) 
          {
              echo("Variable value is not within the legal range");
          }
          else
          {
              echo("Variable value is within the legal range");
          }

          //Remove Characters With ASCII Value > 127 and also remove html tags
          echo "<br><br>";
          $str = "<h1>Good Evening pppÆØÅ!</h1>";

          $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);  
          echo $newstr;





     ?>

    
</body>
</html>