<!-- Validate an Integer Within a Range -->
<?php
    $int = 122;
    $min = 1;
    $max = 200;

    echo "<h3>Validate an Interger Within a Range: uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200</h3>";
    echo "Min_Int = $min and Max_Int = $max <br>";
    if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("Variable value is not within the legal range<br>");
    } else {
    echo("Variable value is within the legal range<br>");
    }
?>

<!-- Validate IPv6 Address -->
<?php
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    echo "<h3>Validate IPv6 Address: uses the filter_var() function to check if the variable $ip is a valid IPv6 address</h3>";
    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
    echo("$ip is a valid IPv6 address");
    } else {
    echo("$ip is not a valid IPv6 address");
    }
?>

<!-- Validate URL - Must Contain QueryString -->
<?php
    $url = "https://www.w3schools.com";

    echo "<h3>Validate URL - Must Contain QueryString: uses the filter_var() function to check if the variable $url is a URL with a querystring</h3>";
    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
    echo("$url is a valid URL with a query string");
    } else {
    echo("$url is not a valid URL with a query string");
    }
?>

<!-- Remove Characters With ASCII Value > 127 -->
<?php
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    echo "<h3>Remove Characters With ASCII Value > 127: uses the filter_var() function to sanitize a string. It will both remove all HTML tags, and all characters with ASCII value > 127, from the string</h3>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
?>