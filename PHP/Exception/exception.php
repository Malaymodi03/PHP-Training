<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception</title>
</head>
<body>
    <?php
     echo "<br><b>Exceptions in php</b><br>";
     echo "<br><b>Try,Throw and Catch</b><br><br>";
     
    //create function with an exception
    function checkAge($number)
    {
        if($number<18) 
        {
            throw new Exception("You are not eligible for voting<br>");
        }
        return true;
    }

    //trigger exception in a "try" block
    try 
    {
        checkAge(23);
        //If the exception is thrown, this text will not be shown
        echo 'If you see this, the number is 18 or above<br>';
    }

    //catch exception
    catch(Exception $e)
    {
        echo 'Message: ' .$e->getMessage();
    }
      
     //Exception
     //The Exception() constructor is used to create an Exception object and set some of its properties.

     echo "<b>Exception</b><br><br>";
     function divide($dividend, $divisor) 
     {
        if($divisor == 0)
         {
          throw new Exception("Division cannot be on zero", 1);
        }
        return $dividend / $divisor;
      }
      
      try 
      {
        echo divide(11, 0);
      }
       catch(Exception $ex)
        {
        $code = $ex->getCode();
        $message = $ex->getMessage();
        $file = $ex->getFile();
        $line = $ex->getLine();
        echo "Exception thrown in $file on line $line: [Code $code]
        $message";
      }

      //getcode()
      //This method returns an integer which can be used to identify the exception.
      echo "<br><br><b>getcode()</b><br>";
      try {
        throw new Exception("An error occurred", 404);
      } 
      catch(Exception $e)
       {
        echo "Error code: " . $e->getCode();
      }

      //getfile()
      //this method returns the absoulte path of the file where the error occured
      echo "<br><br><b>getfile()</b><br>";
      try 
      {
        throw new Exception("Undefined index");
      } 
      catch(Exception $e)
       {
        echo "Error in this file: " . $e->getFile();
      }

      //getmessage()
      //This method returns a description of the error or behaviour that caused the exception to be thrown
      echo "<br><br><b>getmessage()</b><br>";
      try
       {
        throw new Exception("Undefined Index");
      } 
      catch(Exception $e)
       {
        echo $e->getMessage();
      }

      //getline()
      //This method returns the line number of the line of code which threw the exception.
      echo "<br><br><b>getline()</b><br>";
      try 
      {
        throw new Exception("An error occurred");
      } 
      catch(Exception $e) 
      {
        echo $e->getLine();
      }

      //getPrevious()
      //If the exception was triggered by another one, then the getPrevious() method returns the other exception. Otherwise it returns null.
      echo "<br><br><b>getPrevious()</b><br>";
      try {
        try {
          throw new Exception("An error occurred", 1);
        } catch(Exception $e1) {
          throw new Exception("Another error occurred", 2, $e1);
        }
      
      } catch (Exception $e2) {
        echo $previous = $e2->getPrevious();
        echo $previous->getMessage();
      }

      //getTrace()
      //The getTrace() method returns a stack trace in the form of an array.
      echo "<br><br><b>getTrace()</b><br>";
      
        function myFunction($num)
        {
            throw new Exception("Undefined index");
        }

        try
        {
            myFunction(5);
        }
        catch (Exception $e) 
        {
            print_r($e->getTrace());
        }

        //getTraceAsString()
        //The getTraceAsString() method returns a stack trace in the form of a string.
        echo "<br><br><b>getTraceAsString()</b><br>";
        function myFunction2($num) 
        {
            throw new Exception("An error occurred");
        }
          
        try
        {
            myFunction(5);
        }
        catch (Exception $e)
        {
            print_r($e->getTraceAsString());
        }





    ?>
    
</body>
</html>