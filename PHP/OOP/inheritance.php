<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritnace</title>
    <style>
        h1{
            text-align:center
        }
    </style>    
</head>
<body>
    <?php
    
    echo "<h1><b>Inheritance in PHP</b></h1><br><br>";

    class Person{
        public $name;
        public $age;


       public function set_name($name)
        {
            $this->name=$name;
        }

       public function get_name()
        {
            return $this->name;
        }

       function set_age($age)
        {
            $this->age=$age;
        }

        function get_age()
        {
            return $this->age;
        }

        protected function display()
        {
            echo "this is protected method of parent class<br><br>";
        }

        function intro()  //declaring function for overriding topic
        {
            echo "I am a Backend Developer<br>";
        }

        //will result in error as it cannot be overrided


    }


    class Student extends Person
    {
        private $rollno;
        private $percent;

        function set_roll($rollno)
        {
            $this->rollno=$rollno;
        }

        function get_roll()
        {
            return $this->rollno;
        }

        function set_percent($percent)
        {
            $this->percent=$percent;
        }

        function get_percent()
        {
            return $this->percent;
        }

        public function message()
        {
             $this->display();
        }

        function intro()   //this will override intro of person class
        {
            echo "I am a fullstack developer<br><br>";
        }
        
    



    }


    $stud1 = new Student();
    $stud1->set_name("Malay");
    $stud1->set_age(23);
    $stud1->set_roll(22);
    $stud1->set_percent(80);
    $stud1->message();
    $stud1->intro();     //output of student class will be displayed and not of person class

    echo "<b>Child class Data</b><br>";
    echo "Name is ".$stud1->get_name()."<br>";
    echo "Age is ".$stud1->get_age()."<br>";
    echo "Roll No ".$stud1->get_roll()."<br>";
    echo "Percentage is ".$stud1->get_percent()."<br>";


    Class Const_demo{
        const PRINT_MESSAGE = "<br>I am a Constant of class Const_demo <br>";

        public function const_function()
        {
            echo self::PRINT_MESSAGE;  //calling constant from within class
        }


    }

     $a = Const_demo::PRINT_MESSAGE;
     echo $a;

     $obj = new Const_demo();
     $obj->const_function();

    









?>
</body>
</html>