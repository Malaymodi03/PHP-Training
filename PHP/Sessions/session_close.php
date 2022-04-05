<?php
//session_start
session_start();

//unset all session variables
session_unset();

//destroying the session
session_destroy();

echo "session has been closed";
echo "<br>";
echo  "<a href = session.php>Click Here</a> to start session";


?>