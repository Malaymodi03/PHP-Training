<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <style>
        h1{
            text-align:center;
        }
        </style>
</head>
<body>
    <?php
        echo "<h1>Class and Objects in PHP</h1><br>";


        class Student{

            //properties
            public $fname;
            public $lname;
            public $rollno;
            public $age;
            
            //methods
              function set_fname($fname)
              {
                 $this->first_name = $fname;
              }

              function get_fname() 
              {
                return $this->first_name;
              }


              function set_lname($lname)
              {
                  $this->last_name=$lname;
              }

              function get_lname()
              {
                  return $this->last_name;
              }

              function set_rollno($rollno)
              {
                  $this->rno=$rollno;
              }

              function get_rollno()
              {
                  return $this->rno;
              }

              function __construct($age)
              {
                  $this->age = $age;
              }

              function __destruct()
              {
                  echo "Age is {$this->age}";
              }

            //   function get_age()
            //   {
            //       return $this->age;
            //   }

              
                
            


        }

        $parth = new Student(18);
        $parth->set_fname("Parth");
        $parth->set_lname("Doshi");
        $parth->set_rollno(8);


        $jaydeep = new Student(9);
        $jaydeep->set_fname("Jaydeep");
        $jaydeep->set_lname("Joshi");
        //$jaydeep->set_rollno(14);

        echo"<br><b>First Object Data</b><br>";
        echo "First name is =>".$parth->get_fname()."<br>";
        echo "Last name is =>".$parth->get_lname()."<br>";
        echo "Roll No is =>".$parth->get_rollno()."<br><br>";


        echo "<b>Second Object Data</b><br>";
        echo "First name is =>".$jaydeep->get_fname()."<br>";
        echo "Last name is =>".$jaydeep->get_lname()."<br>";
        echo "Roll No is =>".$jaydeep="14"."<br>";
       // echo "Roll No is =>".$jaydeep->get_rollno()."<br>";

       if($parth instanceof Student)
       {
           echo "<br>belongs to class Student<br>";
       }

       else
       {
           echo "<br>does not belongs to class Student<br>";
       }

      
       echo "<br><b>Data of Third Object</b><br>";
       $malay = new Student(23);
    //    echo "age is =>".$malay->get_age();


    ?>
    
</body>
</html>