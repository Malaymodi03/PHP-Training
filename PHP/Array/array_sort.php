<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Arrays</title>
    <style>

        h1{
            text-align:center;
        }
        </style>
</head>
<body>
    <?php
        echo "<h1>Sorting Arrays in PHP</h1><br><br>";

        echo "Sort()- This Function is used to sort array in ascending order";

        $fruit_array = array("Banana","Pineapple","Orange","Mango","Chickoo","Apple","Pomogrenate",
        "Grapes","Mosambi");
        echo "<br><br>Before Sorting<br><br>";

        for($f=0; $f<count($fruit_array); $f++)
        {
            echo "Element at index ".$f." is ".$fruit_array[$f]."<br>";
        }

        echo "<br>After Sorting<br><br>";

        sort($fruit_array);
    
        for($f=0; $f<count($fruit_array); $f++)
        {
            echo "Element at index ".$f." is ".$fruit_array[$f]."<br>";
        } 


        echo "<br> rsort()- This Function is used to sort array in descending order";

        $fruit_array = array("Banana","Pineapple","Orange","Mango","Chickoo","Apple","Pomogrenate",
        "Grapes","Mosambi");

        echo "<br><br>Before Sorting<br><br>";

        for($f=0; $f<count($fruit_array); $f++)
        {
            echo "Element at index ".$f." is ".$fruit_array[$f]."<br>";
        }

        echo "<br>After Sorting<br><br>";

        rsort($fruit_array);
    
        for($f=0; $f<count($fruit_array); $f++)
        {
            echo "Element at index ".$f." is ".$fruit_array[$f]."<br>";
        } 



        echo "<br>asort()- This Function is used to sort assocative array in ascending order
        accordign to values <br>";

        echo "<br>Before Sorting<br><br>";

        $food_price = array("Burger"=>"70","Sandwitch"=>"50","Dhosa"=>"60",
        "Pizza"=>"90","Pau bhaji"=>"80");

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }

        echo "<br>After Sorting<br><br>";

        asort($food_price);

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }


        echo "<br>ksort()- This Function is used to sort assocative array in ascending order
        according to key <br>";

        echo "<br>Before Sorting<br><br>";

        $food_price = array("Burger"=>"70","Sandwitch"=>"50","Dhosa"=>"60",
        "Pizza"=>"90","Pau bhaji"=>"80");

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }

        echo "<br>After Sorting<br><br>";

        ksort($food_price);

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }

        echo "<br>asort()- This Function is used to sort assocative array in ascending order
        according to values <br>";

        echo "<br>Before Sorting<br><br>";

        $food_price = array("Burger"=>"70","Sandwitch"=>"50","Dhosa"=>"60",
        "Pizza"=>"90","Pau bhaji"=>"80");

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }

        echo "<br>After Sorting<br><br>";

        asort($food_price);

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }

        echo "<br>arsort()- This Function is used to sort assocative array in ascending order
        according to values <br>";

        echo "<br>Before Sorting<br><br>";

        $food_price = array("Burger"=>"70","Sandwitch"=>"50","Dhosa"=>"60",
        "Pizza"=>"90","Pau bhaji"=>"80");

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }

        echo "<br>After Sorting<br><br>";

        arsort($food_price);

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }


        echo "<br>krsort()- This Function is used to sort assocative array in ascending order
        according to keys <br>";

        echo "<br>Before Sorting<br><br>";

        $food_price = array("Burger"=>"70","Sandwitch"=>"50","Dhosa"=>"60",
        "Pizza"=>"90","Pau bhaji"=>"80");

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }

        echo "<br>After Sorting<br><br>";

        krsort($food_price);

        foreach($food_price as $k=>$v)
        {
            echo "Key: ".$k." Value: ".$v."<br>";
        }






        


    ?>

    
</body>
</html>