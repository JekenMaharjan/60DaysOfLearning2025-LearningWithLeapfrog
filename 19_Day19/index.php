<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // fopen() will open the file if it exists else it will create a file
        $myfile = fopen("testfile.txt", "w");

        // fwrite() has 2 parameter -> (name of file to write to, string to be written)
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");     // name of the file to write to
        $txt = "John Doe\n";    // string to be written
        fwrite($myfile, $txt);
        $txt = "Jane Doe\n";    // string to be written
        fwrite($myfile, $txt);
        fclose($myfile);        // After we finish writing, we closed the file using fclose() function

        // If we open and write in an existing file then all existing data is ERASED and start with an empty file
        $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = "Mickey Mouse\n";    
        fwrite($myfile, $txt);      // overwriting newfile.txt file with new text i.e. $txt
        $txt = "Minnie Mouse\n";    
        fwrite($myfile, $txt);      // overwriting newfile.txt file with new text i.e. $txt
        fclose($myfile);

        // To overcome the overwriting file due to "w" mode, we got append mode i.e. "a" to append data to a file
        $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
        $txt = "Donald Duck\n";
        fwrite($myfile, $txt);      // append $txt into newfile.txt file overcoming overwriting problem
        $txt = "Goofy Goof\n";
        fwrite($myfile, $txt);      // append $txt into newfile.txt file overcoming overwriting problem
        fclose($myfile);
    ?>
</body>
</html>