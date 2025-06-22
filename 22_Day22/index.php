<?php
    echo "Starting the Session...!!<br><br>";
    session_start(); // Start the session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Example</title>
</head>
<body>
    <?php
        // Set session variables
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo "<strong>Session variables are set.</strong><br><hr>";

        // Display session variables
        echo "<h2>First Session:</h2>";
        echo "Favorite color is <strong>" . $_SESSION["favcolor"] . "</strong><br>";
        echo "Favorite animal is <strong>" . $_SESSION["favanimal"] . "</strong><br><hr>";

        // Another way to display all session data
        echo "<h2>First Session (Alternative):</h2>";
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre><hr>";

        // Change a session variable
        $_SESSION["favcolor"] = "yellow";
        echo "<h2>Second Session (After Update):</h2>";
        echo "Favorite color is <strong>" . $_SESSION["favcolor"] . "</strong><br>";
        echo "Favorite animal is <strong>" . $_SESSION["favanimal"] . "</strong><br><hr>";

        // Remove all session variables
        echo "Unsetting the session variables...<br>";
        session_unset();

        // Destroy the session
        echo "Destroying the session...<br>";
        session_destroy();
    ?>
</body>
</html>
