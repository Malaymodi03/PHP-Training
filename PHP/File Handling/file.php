<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
    <style>
        h1{
            text-align:center;
        }

    </style>    
</head>
<body>

   <?php
     echo "<b><h1>File Handling in php</h1></b><br><br>";

     //fopen, fread and fclose()
     echo "<b>fopen(), fread() and fclose()</b><br>";
     $malay_file = fopen("malay.txt","r") or die("File does not exist");
     echo fread($malay_file,filesize("malay.txt"));
     fclose($malay_file);


     
     //fgets() This function is used to read a single line from the file.
     echo "<br><br><b>fgets()</b><br>";
     $malay_file = fopen("malay.txt", "r") or die("file does not exist");
     echo fgets($malay_file);
     fclose($malay_file);



     //feof() this function is used to check whether the end of the file has been reached or not
     echo "<br><br><b>feof()</b><br>";
     $malay_file = fopen("malay.txt", "r") or die("file does not exist");
     $i=1;
     while(!feof($malay_file))
     {
        echo fgets($malay_file)."line ".$i . "<br>";
        $i++;
     }

      fclose($malay_file);


     //fgetc() This function is used to read single character from file.
    //  echo "<br><br><b>fgetc()</b><br>";
    //  $malay_file = fopen("hello.txt", "r") or die("file does not exist");
    //  while(!feof($malay_file))
    //  {
    //     echo fgetc($malay_file)."<br>";
    
    //  }

    //   fclose($malay_file);

    //fwrite() this function is used to write something in the opened file.
    echo "<b>fwrite()</b><br>";
    $malay_file = fopen("myfile.txt", "r+") or die("file does not exist");
    fwrite($malay_file,"Malay Modi");
    fread($malay_file,filesize("myfile.txt"));
    fgets($malay_file);
    fgetc($malay_file);
    fclose($malay_file);

    //basename() REturns the filename form specified path.
    echo "<br><b>basename()</b><br>";
    $path = "/PHP/FILE HANDLING/file.php";

    //Show filename
    echo basename($path) ."<br/>";

    //Show filename, but cut off file extension for ".php" files
    echo basename($path,".php");
 

    //chgrp(file, group) 
    //This function changes the usergroup of the specified file.
    echo "<br><b>chgrp(file, group) </b><br>";
    chgrp("hello.txt","sudo");


    //chmod
    //This function changes permissions of specifies file.
    echo "<br><b>chmod()</b><br>";
    // Read and write for owner, nothing for everybody else
    //chmod("hello.txt",0100);

    // Read and write for owner, read for everybody else
    //chmod("hello.txt",0644);

    // Everything for owner, read and execute for everybody else
    //chmod("hello.txt",0755);

    // Everything for owner, read for owner's group
    //chmod("hello.txt",0740);

    //Four parameters are there in mode parameters
    //first digit is always zero
    //second number specifies permissions for owner
    //third number specifies permissions for owner's group
    //fourth number specifies permissions for everybody else

    //possible values for permissions are(we can add these values and set permissions)
    // 1 = execute permission
    // 2 = read permission
    // 4 = write permission


    //chown
    //changes owner of specifies file
    echo "<br><b>chown()</b><br>";
    chown("hello.txt","malay");

    //copy()
    //This function copies a file 
    echo "<br><b>copy()</b><br>";
    echo copy("hello.txt","target.txt");

    //dirname() 
    //This function returns the path of parent directory
    //second parameter specifies upto how many levels to go
    echo "<br><br><b>dirname()</b><br>";
    echo dirname("/Training/PHP/FILE HANDLING/file.php");
    echo "<br>";
    echo dirname("/Training/PHP/FILE HANDLING/file.php",3);

    //disk_free_space() and disk_total_space()
    //disk_total_space() returns the total size, in bytes, of the specified filesystem or disk.
    //disk_free_space() returns the free space in bytes of the specified filesystem on disk
    echo "<br><br><b>disk_total_space and disk_free_space()</b><br>";
    echo "disk total space is ";
    echo disk_total_space("/");
    echo "<br>";
    echo "disk free space is ";
    echo disk_free_space("/");

    //fclose
    //closes an open file pointer
    //The file must have been opened by fopen() or fsockopen().
    echo "<br><br><b>fclose()</b><br>";
    $file = fopen("hello.txt", "r");
    fclose($file);

    //fflush()
    //This function writes all buffered output to an open file
    echo "<br><br><b>fflush()</b><br>";
    $file = fopen("hello.txt","r+");
    rewind($file);
    fwrite($file, 'Good Afternoon');
    fflush($file);
    fclose($file);

    //fgetcsv() 
    //This function parses a line from an open file, checking for CSV fields.
    echo "<br><br><b>fgetcsv()</b><br>";
    $file = fopen("bos2021ModC.csv","r");
    print_r(fgetcsv($file));
    fclose($file);

    //file()
    //this function reads a file into an array
    echo "<br><br><b>file()</b><br>";
   // print_r(file("hello.txt"));

    //file_exists()
    //this function checks whether a file or directory exists
    echo "<br><br><b>file_exists()</b><br>";
    echo file_exists("hello.txt");

    //file_get_contents()
    //This function reads the file into strings
    echo "<br><br><b>file_get_contents</b></br>";
    //echo file_get_contents("hello.txt");

    //file_put_contents()
    //This function writes data to the file.
    echo "<br><br><b>file_put_contents</b></br>";
    //echo file_put_contents("hello.txt","Believe in God",FILE_APPEND);

    //fileatime()
    //This function returns the last access time of the specified file.
    echo "<br><br><b>fileatime()</b></br>";
    echo fileatime("hello.txt");
    echo "<br>";
    echo "Last access: ".date("F d Y H:i:s.", fileatime("hello.txt"));

    //filectime()
    //This function returns the last time a file was changed.
    echo "<br><br><b>filectime()</b></br>";
    echo filectime("hello.txt");
    echo "<br>";
    echo "Last changed: ".date("F d Y H:i:s.", filectime("hello.txt"));

    //filegroup() 
    //This function retunrs the group id of a file
    echo "<br><br><b>filegroup()</b></br>";
    echo filegroup("hello.txt");

    //fileinode()
    //This function returns the inode number of the specified file
    echo "<br><br><b>fileinode()</b><br>";
    echo fileinode("hello.txt");

    //filemtime() 
    //This function returns the last time the file content was modified
    echo "<br><br><b>filemtime()</b><br>";
    echo filemtime("hello.txt");
    echo "<br>";
    echo "Content last changed: ".date("F d Y H:i:s.", filemtime("hello.txt"));

    //fileowner()
    //This function returns the user ID (owner) of the specified file.
    echo "<br><br><b>fileowner()</b><br>";
    echo fileowner("hello.txt");

    //fileperms()
    //This function returns the permissiocho "<br><br><b>fileperms</b><br>";ns for a file
    echo "<br><br><b>fileperms</b><br>";
    echo fileperms("hello.txt");
    echo "<br>";
    echo substr(sprintf("%o", fileperms("hello.txt")),-4);

    //filesize() 
    //This function returns the size of a file in bytes.
    echo "<br><br><b>filesize()</b><br>";
    echo filesize("hello.txt");

     //filetype()
    //This function returns the type of a file
    echo "<br><br><b>filetype()</b><br>";
    echo filetype("hello.txt");
    echo "<br>";
    echo filetype("upload");

    //flock()
    //This function locks and releases a file
    echo "<br><br><b>flock()</b><br>";
    $file = fopen("hello.txt","w+");

    // exclusive lock
    if (flock($file,LOCK_EX))
    {
      fwrite($file,"Add some text to the file.");
       fflush($file);
       // release lock
       flock($file,LOCK_UN);
    }
     else
      {
        echo "Error locking file!"; 
       }
      fclose($file);

      //fnmatch()
      //This function checks if a string or filename matches the given shell wildcard pattern.
      echo "<br><br><b>fnmatch()</b><br>";
      $txt = "My car is a dark color";
        if (fnmatch("*col[ou]r",$txt))
        {
        echo "yes matched";
        }

        //fpassthru()
        //This  function reads from the current position in a file - until EOF, and then writes the result to the output buffer.
        echo "<br><br><b>fpassthru()</b><br>";
        $file = fopen("hello.txt","r");
        // Read first line
        fgets($file);

        // Read from the current position in file - until EOF, and then write the result to the output buffer
        echo fpassthru($file);

        fclose($file);

      //fputcsv()
      //This function formats a line as CSV and writes it to an open file.
      echo "<br><br><b>fputcsv()</b><br>";
      $list = array (
        array("Peter", "Griffin" ,"Oslo", "Norway"),
        array("Glenn", "Quagmire", "Oslo", "Norway")
      );
      
      $file = fopen("bos2021ModC.csv","w");
      
      foreach ($list as $line) {
        fputcsv($file, $line);
      }
      
      fclose($file);

      //fscanf()
      //This function parses the input from an open file according to the specified format.
      //Note: Any whitespace in the format string matches any whitespace in the input stream. This means that a tab (\t) in the format string can match a single space character in the input stream.

      //fseek()
      //This function seeks in an open file.
      //This function moves the file pointer from its current position to a new position, forward or backward, specified by the number of bytes
   
      echo "<br><br><b>fseek()</b><br>";
      $file = fopen("hello.txt","r");
      // Read first line
      echo fgets($file);
      // Move back to beginning of file
      fseek($file,0);
      fclose($file);

      //fstat() 
      //This function returns information about an open file.
      //The results from this function will differ from server to server. The array may contain the number index, the name index, or both.
      echo "<br><br><b>fstat()</b><br>";
      $file = fopen("hello.txt","r");
      print_r(fstat($file));
      fclose($file);

      //ftell()
      //This function returns the current position of the read/write pointer in an open file.
      echo "<br><br><b>ftell()</b><br>";
      $file = fopen("hello.txt","r");
 
      // Print current position
      echo ftell($file);

      // Change current position
      fseek($file,"15");

      // Print current position again
      echo "<br>" . ftell($file);

      fclose($file);

      //ftruncate()
      //This function truncates an open file to the specified length.

      echo "<br><br><b>ftruncate()</b><br>";
      // Check filesize
      echo filesize("hello.txt");
      echo "<br>";

      $file = fopen("hello.txt", "a+");
      ftruncate($file,100);
      fclose($file);

      // Clear cache and check filesize again
      clearstatcache();
      echo filesize("hello.txt");
      
      // glob()
      //This function returns an array of filenames or directories matching a specified pattern.
      echo "<br><br><b>glob()</b><br>";
      print_r(glob("*.txt"));

      //is_dir()
      //This function checks whether the specified filename is a directory.
      echo "<br><br><b>is_dir()</b><br>";
      $file = "upload";
      if(is_dir($file))
       {
         echo ("$file is a directory");
       }
        else 
        {
        echo ("$file is not a directory");
       }

       //is_executable()
       //This function checks whether the specified filename is executable.
       echo "<br><br><b>is_executable()</b><br>";
       $file = "setup.exe";
       if(is_executable($file))
       {
       echo ("$file is executable");
       }
        else
         {
        echo ("$file is not executable");
       }

       //is_file()
       //This  function checks whether the specified filename is a regular file.
       echo "<br><br><b>is_file()</b><br>";
       $file = "hello.txt";
        if(is_file($file))
         {
        echo ("$file is a regular file");
        } 
        else
         {
        echo ("$file is not a regular file");
        }

        //is_link() 
        //This function checks whether the specified filename is a symbolic link.
        echo "<br><br><b>is_link()</b><br>";
        $link = "images";
        if(is_link($link))
        {
        echo ("$link is a link");
        }
        else
         {
        echo ("$link is not a link");
        }

        //is_readable() 
        //This function checks whether the specified filename is readable.
        echo "<br><br><b>is_readable()</b><br>";
        $file = "hello.txt";
        if(is_readable($file))
         {
        echo ("$file is readable");
        }
         else 
         {
        echo ("$file is not readable");
        }

        //is_uploaded_file() 
        //This function checks whether the specified file is uploaded via HTTP POST.
        echo "<br><br><b>is_uploaded_file()</b><br>";
        $file = "hello.txt";
        if(is_uploaded_file($file))
         {
        echo ("$file is uploaded via HTTP POST");
        }
         else 
         {
        echo ("$file is not uploaded via HTTP POST");
        }

        //is_writable()
        //This function checks whether the specified filename is writable.
        echo "<br><br><b>is_writable()</b><br>";
        $file = "hello.txt";
        if(is_writable($file))
         {
        echo ("$file is writable");
        }
         else 
         {
        echo ("$file is not writable");
        }

        //lchgrp()
        //This function changes the group ownership of a symbolic link.
        //This is not an HTML link, but a link in the filesystem.
        // This function does not work on Windows platforms.

        $target = "upload.php";
        $link = "upload";
        symlink($target, $link);

        lchgrp($link, 8);

        //link() 
        //This  function creates a hard link.
        echo "<br><br><b>link()</b><br>";
        $target = "hello.txt";
        $linkname = "mylink";

        link($target, $linkname);

        //linkinfo()
        //This unction returns information about a hard link, and is used to verify if a link really exists.
        echo "<br><br><b>linkinfo()</b><br>";
        echo linkinfo(rubbish);

        //lstat() 
        //This function returns information about a file or symbolic link.
        //The results from this function will differ from server to server. The array may contain the number index, the name index, or both.
        echo "<br><br><b>lstat()</b><br>";
        print_r(lstat("hello.txt"));

        //mkdir();
        //This function creates a directory specified by a pathname.
        echo "<br><br><b>mkdir()</b><br>";
        mkdir("test");

        //move_uploaded_file() 
        //This function moves an uploaded file to a new destination.
        //This function only works on files uploaded via PHP's HTTP POST upload mechanism.
        //If the destination file already exists, it will be overwritten.

        //parse_ini_file()
        //This function parses a configuration (ini) file and returns the settings.
        // This function can be used to read in your own configuration files, and has nothing to do with the php.ini file.
        //The following reserved words must not be used as keys for ini files: null, yes, no, true, false, on, off, none. Furthermore, the following reserved characters must not be used in the key: {}|&~!()^".
        echo "<br><br><b>parse_ini_file()</b><br>"; 
        
        print_r(parse_ini_file("test.ini")); 

        //pathinfo() 
        //This function returns information about a file path.
        echo "<br><br><b>pathinfo()</b><br>"; 
        print_r(pathinfo("hello.txt"));

        //pclose() $ popen() 
        //This functions opens and closes a pipe to the program specified in the command parameter.
        echo "<br><br><b>popen() & pclose()</b><br>";
        $file = popen("/bin/ls","r");
        //some code to be executed
        pclose($file);


        //readfile()
        //This function reads a file and writes it to the output buffer.
        echo "<br><br><b>readfile()</b><br>";
        echo readfile("hello.txt");

        //readlink()
        //This function returns the target of a symbolic link.
        echo "<br><br><b>readlink()</b><br>";
        echo readlink("hello");

        //realpath
        //This function returns the absolute pathname.
        echo "<br><br><b>readpath()</b><br>";
        echo realpath("hello.txt");

        //realpath_cache_get()
        //This function returns realpath cache entries.
        echo "<br><br><b>readpath_cache_get()</b><br>";
        var_dump(realpath_cache_get());

        //realpath_cache_size()
        //This function returns realpath cache size.
        echo "<br><br><b>readpath_cache_size()</b><br>";
        var_dump(realpath_cache_size());
        
        //rename()    
        //This function renames a file or directory.
        echo "<br><br><b>rename()</b><br>";
        rename("hello.txt","greet.txt");

        //rmdir()
        //This function removes an empty directory
        $path = "test";
        if(!rmdir($path)) {
        echo ("Could not remove $path");
        }

        //set_file_buffer() 
        //
        $file = fopen("hello.txt","w");
if ($file) {
  set_file_buffer($file,0);
  fwrite($file,"Hello World. Testing!");
  fclose($file);
}

    // unlink() 
    //
    $file = fopen("test.txt","w");
echo fwrite($file,"Hello World. Testing!");
fclose($file);

unlink("test.txt");

   //unmask()
   //











        

   ?>
    
</body>
</html>