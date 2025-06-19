<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-File-Open/Read(File Handling)</title>
</head>
<body>
    <?php

    // 1. PHP readfile() Function -> Read the file and write it to the ouput buffer
    echo readfile("webdictionary.txt");
    echo "<br><br>";

    // 2. used fopen() and fclose() and inbetween them is used some code to be executed..
    $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    echo fread($myfile,filesize("webdictionary.txt"));
    fclose($myfile);

    // 3. fread() reads the file to the end
    fread($myfile,filesize("webdictionary.txt"));

    // 4. feof() reads the file line by line, until end-of-file is reached
    $myfile2 = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one line until end-of-file
    while(!feof($myfile2)) {
    echo fgets($myfile2) . "<br>";
    }
    fclose($myfile2);

    // 5. fgetc() reads the file charater by character, until end-of-file is reached
    $myfile5 = fopen("webdictionary.txt", "r") or die("Unable to open file!");
    // Output one character until end-of-file
    while(!feof($myfile5)) {
      echo fgetc($myfile5);
    }
    fclose($myfile5);

    ?>
</body>
</html>