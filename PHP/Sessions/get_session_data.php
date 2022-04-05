<?php

session_start();
//accessing the session data

    if(isset($_SESSION['username']))
    {

        echo "Welcome ".$_SESSION['username'];
        echo "<br>";
        echo "Your Favourite Food is ".$_SESSION['favouritefood'];
        echo "<br>";
        echo "Your age is ".$_SESSION['age'];
        echo "<br>";
        echo "Your Qualification is ".$_SESSION['Qualification'];
        echo "<br><br>";

        //accessing all variables
        print_r($_SESSION);

        echo "<br>";
        echo "<a href = session_close.php>Click Here</a>to close the session";

    }

    else
    {

        echo "Please start the session first";
        echo "<br>";
        echo  "<a href = session.php>Click Here</a> to start session";
    
    }


?>