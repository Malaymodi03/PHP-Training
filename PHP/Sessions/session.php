<?php
//session start

session_start();




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <?php
    echo "<b>Sessions in Php</b><br>";
    //setting the variables of session
    $_SESSION['username'] = "malay";
    $_SESSION['favouritefood'] = "pizza";
    $_SESSION['age'] = 23;
    $_SESSION['Qualification'] = "M.C.A.";
    echo "session data is saved";
    echo "<br>";
    echo "<a href = get_session_data.php>Click Here</a>to view session data"



    
    
    
    
    ?>
    
</body>
</html>