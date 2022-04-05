<?php
$cookie_name = "myself";
$cookie_value = "Malay Modi";
setcookie($cookie_name, $cookie_value, time() + 3600, "/"); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>

<?php
      echo "<b>Cookies in php</b><br>";
      if(!isset($_COOKIE[$cookie_name]))
       {
          echo "Cookie named '" . $cookie_name . "' is not set!";
       }
      else
       {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
      }


      if(count($_COOKIE) > 0) 
      {
        echo "<br>Cookies are enabled.";
      }
       else
      {
        echo "<br>Cookies are disabled.";
      }

      echo "<br>";
      print_r($_COOKIE);
      
?>

    
</body>
</html>