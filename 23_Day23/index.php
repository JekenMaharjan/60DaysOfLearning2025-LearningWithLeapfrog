<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
    echo "<h3>The PHP Filter Extension:</h3>";
    foreach (filter_list() as $id =>$filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
  ?>
</table>

<!-- Sanitize a String: uses the filter_var() function to remove all HTML tags from a string -->
<?php
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo "<h3>Sanitize a String:</h3>";
    echo $newstr;
    echo "<br>";
?>

<!-- Validate an Integer -->
<?php
    $int = 100;

    echo "<h3>Validate an Integer:</h3>";
    if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
    } else {
    echo("Integer is not valid");
    }
?>

<!-- Validate an IP Address: uses the filter_var() function to check if the variable $ip is a valid IP address-->
<?php
    $ip = "127.0.0.1";

    echo "<h3>Validate an IP Address:</h3>";
    if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
    } else {
    echo("$ip is not a valid IP address");
    }
    echo "<br>";
?>

<!-- Sanitize and Validate an Email Address: uses the filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address -->
<?php
    $email = "maharjanjeken@gmail.com";

    // Remove all illegal characters from email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    echo "<h3>Sanitize and Validate an Email Address:</h3>";

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
    } else {
    echo("$email is not a valid email address");
    }
?>

<!-- Sanitize and Validate a URL: uses the filter_var() function to first remove all illegal characters from a URL, then check if $url is a valid URL -->
<?php
    $url = "https://www.google.com";

    // Remove all illegal characters from a url
    $url = filter_var($url, FILTER_SANITIZE_URL);

    echo "<h3>Sanitize and Validate a URL:</h3>";

    // Validate url
    if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
    } else {
    echo("$url is not a valid URL");
    }
?>