<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract class and methods</title>

    <style>
            h1{
                text-align:center;
            }
    </style>
</head>
<body>

        <?php
            echo "<h1><b>Abstract class and methods</b></h1><br><br>";
            echo "<b><h2>First Example</h2></b>";

            // Parent class
            abstract class Car {
                public $name;
                public function __construct($name) {
                $this->name = $name;
                }
                abstract public function intro() : string; 
            }
            
            // Child classes
            
            class BMW extends Car {
                public function intro() : string {
                return "Choose German Quality! I'm  $this->name!"; 
                }
            }
            
            class Maruti extends Car {
                public function intro() : string {
                return "Proud to be Indian! I'm  $this->name!"; 
                }
            }
            
            
            class Ford extends Car {
                public function intro() : string {
                return "Want US Car! I'm  $this->name!"; 
                }
            }
            
            // Create objects from the child classes
            
            $bmw = new BMW("BMW X4");
            echo $bmw->intro();
            echo "<br>";
            
            $maruti = new Maruti("Ertiga");
            echo $maruti->intro();
            echo "<br>";
            
            
            $ford = new Ford("Ecosport");
            echo $ford->intro();
            echo "<br>";




            //second example
            echo "<b><h2>Second Example</h2></b>";
            abstract class Student{
                abstract protected function result_category($percent);
                
          }

         class Friends extends Student{
              public function result_category($percent)
              {
                  if($percent>=70)
                  {
                      $category = "Distinction ";
                  }

                  elseif($percent>=60 and $percent<70)
                  {
                      $category = "First Class ";
                  }


                  elseif($percent>=50 and $percent<60)
                  {
                      $category = "Second Class ";
                  }

                  elseif($percent>=35 and $percent<50)
                  {
                      $category = "Pass Class ";
                  }

                  else
                  {
                      $categoty = "Failed ";
                  }

                  return "{$category} {$percent}";

                  
              }
          }

          $malay = new Friends;
          echo $malay->result_category(85);
          echo "<br>";

          $parth = new Friends;
          echo $parth->result_category(66);
          echo "<br>";

          $jaydeep = new Friends;
          echo $jaydeep->result_category(54);
          echo "<br>";


          //third example
          echo "<b><h2>Third Example</h2></b>";
          abstract class Student1{
            abstract protected function result_category1($percent);
            
      }

      class Friends1 extends Student1{
          public function result_category1($percent, $msg="Congratulations! Result is ")
          {
              if($percent>=70)
              {
                  $category = "Distinction ";
              }

              elseif($percent>=60 and $percent<70)
              {
                  $category = "First Class ";
              }


              elseif($percent>=50 and $percent<60)
              {
                  $category = "Second Class ";
              }

              elseif($percent>=35 and $percent<50)
              {
                  $category = "Pass Class ";
              }

              else
              {
                  $categoty = "Failed ";
              }

              return "{$msg} {$category} {$percent}";

              
          }
      }

      $malay = new Friends1;
      echo $malay->result_category1(85);
      echo "<br>";

      $parth = new Friends1;
      echo $parth->result_category1(66);
      echo "<br>";

      $jaydeep = new Friends1;
      echo $jaydeep->result_category1(54);
      echo "<br>";

        ?>
    
</body>
</html>