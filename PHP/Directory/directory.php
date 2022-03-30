<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory</title>
    <style>
        h1{
            text-align:center;
        }
    </style>    
</head>
<body>
    <?php
    echo "<b><h1>Directory Functions in PHP</h1></b><br>";

    //getcwd()-gets the current working directory 
    echo "<b>getcwd()</b><br>";
    echo getcwd();

    //chdir()-changes current working directory
    echo "<br><br><b>chdir(directory)</b><br>";
    // Get current directory
    echo "Our current directory is => ".getcwd() . "<br>";
 
    // Change directory
    chdir("new directory");

    // Get current directory
    echo "after changing the directory => ".getcwd();

    //chroot()-anges the root directory of the current process to directory, and changes the current working directory to "/".
    echo "<br><br><b>chroot()</b><br>";

    // Change root directory
    chroot("/home/woc/malay/training");
    echo getcwd();

    // Get current directory
    echo getcwd();

    //opendir()-Opens directory handle
    echo "<br><br><b>opendir and readdir()</b><br>";
    $dir = "/home/woc/malay/Training/PHP/";

    // Open a directory, and read its contents
    if (is_dir($dir)){
     if ($dh = opendir($dir)){
      while (($file = readdir($dh)) !== false)
      {
       echo "filename:".$file."<br>";
      }
       closedir($dh);
  }
}

   //rewinddir()
   $dir = "/home/woc/malay/Training/PHP/OOP";

   // Open a directory, and read its contents
echo "<br><br><b>rewinddir()</b><br>";
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    // List files in images directory
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    rewinddir();
    // List once again files in images directory
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}

       //scandir()
       //This function returns an array of files and directories of the specified directory.
       echo "<br><br><b>scandir()</b><br>";
       $dir = "/home/woc/malay/Training/PHP/";

       // Sort in ascending order - this is default
       $a = scandir($dir);
       
       // Sort in descending order
       $b = scandir($dir,1);

       // Sort in unsorted order
       $c = scandir($dir,SCANDIR_SORT_NONE);
       
       print_r($a);
       echo "<br>";
       print_r($b);
       echo "<br>";
       print_r($c);


       //dir()-returns an instance of directory class
       echo "<br><br><b>dir()</b><br>";
       

       $d = dir(getcwd());

       echo "Handle: " . $d->handle . "<br>";
       echo "Path: " . $d->path . "<br>";

       while (($file = $d->read()) !== false){
       echo "filename: " . $file . "<br>";
       }
       $d->close();

  


         








    ?>
</body>
</html>