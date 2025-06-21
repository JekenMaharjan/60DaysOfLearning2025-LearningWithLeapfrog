<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    // $cookie_expiration = time() + (86400 * 30); // 30 days from now
    $cookie_expiration = time() + (5); // 5 secs from now

    // Set the cookie
    setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");

    // Delete the cookie (this will take effect on next reload)
    setcookie("user", "", time() - 3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookies Function</title>
</head>
<body>
    <?php
        // Check if the cookie is set
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!<br>";
        } else {
            echo "Cookie '" . $cookie_name . "' is set!<br>";
            echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
            // Show expiration date
            echo "Cookie will expire on: " . date("Y-m-d || H:i:s", $cookie_expiration) . "<br>";
        }

        echo "Cookie 'user' is deleted.<br>";

        // Check if cookies are enabled
        if (count($_COOKIE) > 0) {
            echo "Cookies are enabled.<br>";
        } else {
            echo "Cookies are disabled.<br>";
        }
    ?>
</body>
</html>
