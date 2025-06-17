<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolution of Humans : PHP-Include</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <div class="header">
        <?php
        // include header file
        include 'header.php'
        ?>
    </div>

    <div class="menu">
        <?php
        // include menu file
        include 'menu.php';
        ?>
    </div>

    <div class="middle-section">
        <?php
        // include middle-section file
        include 'middle-section.php';
        // include vars file
        include 'vars.php';
        echo "I have a $color $car.";
        ?>
    </div>

    <!-- it is commented as it returns error -->
    <?php
    // include noFileExists file -> when a file is included with the include statement and PHP cannot find it, the script will continue to execute
    // include 'noFileExists.php';
    // echo "I have a $color $bike.";
    ?>

    <!-- it is commented as it returns fatal error and doesn't execute further code/script -->
    <?php
    // require noFileExists file -> If we do the same example using the require statement, the echo statement will not be executed because the script execution dies after the require statement returned a fatal error
    // require 'noFileExists.php';
    // echo "I have a $color $bike.";
    ?>

    <div class="footer">
        <?php 
        // include_once footer file as it ensures that footer file is included only once even if called again
        include_once 'footer.php';   // used include statement to include the footer file in this page like importing file into this page
        include_once 'footer.php';
        ?>
    </div>
</body>
</html>