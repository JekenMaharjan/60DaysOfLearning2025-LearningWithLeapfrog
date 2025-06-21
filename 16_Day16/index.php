<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Get a Date
    echo "<h2>Get a Date:</h2>";
    echo "Today is " . date("Y/m/d") . "<br>";  // Y -> Year
    echo "Today is " . date("Y.m.d") . "<br>";  // m -> month
    echo "Today is " . date("Y-m-d") . "<br>";  // d -> day
    echo "Today is " . date("l");               // l -> day of the week
    echo "<br><br>";

    // PHP Tip - Automatic Copyright Year
    echo "<h2>PHP Tip - Automatic Copyright Year:</h2>";
    echo "&copy; 2010-" . date("Y");
    echo "<br><br>";

    // Get a Time
    echo "<h2>Get a Time:</h2>";
    echo "The time is " . date("h:i:sa");   // H -> 24 hr format, h -> 12 hr format, i -> minutes, s -> seconds, a -> am or pm
    echo "<br><br>";

    // Get Your Time Zone
    echo "<h2>Get Your Time Zone:</h2>";
    date_default_timezone_set("America/New_York");
    echo "The time is " . date("h:i:sa");
    echo "<br><br>";

    // Create a Date With mktime()
    echo "<h2>Create a Date With mktime():</h2>";
    $d=mktime(11, 14, 54, 8, 12, 2014);     // mktime(hour, minute, second, month, day, year)
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    echo "<br><br>";

    // Create a Date From a String With strtotime()
    echo "<h2>Create a Date From a String With strtotime():</h2>";
    $d=strtotime("10:30pm April 15 2014");      // strtotime(time, now)
    echo "Created date is " . date("Y-m-d h:i:sa", $d);
    echo "<br><br>";

    // Converting string to date
    echo "<h2>Converting string to date:</h2>";
    $d=strtotime("tomorrow");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    $d=strtotime("next Saturday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";
    $d=strtotime("+3 Months");
    echo date("Y-m-d h:i:sa", $d) . "<br><br>";

    // More Date Examples
    echo "<h2>More Date Examples:</h2>";
    $startdate = strtotime("Saturday");
    $enddate = strtotime("+6 weeks", $startdate);
    while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
    }
    echo "<br>";

    $d1=strtotime("July 04");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 4th of July.";
    ?>
</body>
</html>