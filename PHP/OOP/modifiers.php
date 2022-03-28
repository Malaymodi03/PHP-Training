<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifiers</title>
    <style>
        h1{
            text-align:center;
        }
        </style>
</head>
<body>
        <?php
              echo "<h1>Access Modifiers in PHP</h1><br>";
              class Employee
            {    
                public $name="Malay";  
                protected $role="Software Engineer";   
                private $salary=5000000;  

                 public function details()  
                 {  
                      echo "Welcome : ".$this->name."<br/>";  
                      echo "Designation is => ".$this->role."<br/>";  
                      echo "Salary is => ".$this->salary."<br/>";  
                  }  
                } 
                    
                class emp extends Employee
                {  
                  public function detail_child()  
                  {  
                    echo "Welcome  ".$this->name."<br/>";  
                    echo "Designation is =>  ".$this->role."<br/>";  
                    echo "Salary is => ".$this->salary."<br/>";  
                  }  
                }     

                $obj= new emp;     
                $obj->detail_child();  


?>
    
</body>
</html>