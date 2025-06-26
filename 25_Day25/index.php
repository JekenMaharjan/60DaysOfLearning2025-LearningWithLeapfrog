<?php
    // Example 1

    function my_callback($item) {
        return strlen($item);
    }

    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
    echo "<br>";
    echo implode(", ", $lengths); // ✅ convert array to string
    echo "<br><br>";



    // Example 2

    $strings = ["apple", "orange", "banana", "coconut"];
    $lengths = array_map(function($item) {
    return strlen($item);
    }, $strings);

    print_r($lengths);
    echo "<br>";
    echo implode(", ", $lengths); // ✅ convert array to string
    echo "<br><br>";



    // Example 3
    
    function exclaim($str) {
    return $str . "! ";
    }

    function ask($str) {
    return $str . "? ";
    }

    function printFormatted($str, $format) {
    // Calling the $format callback function
    echo $format($str);
    }

    // Pass "exclaim" and "ask" as callback functions to printFormatted()
    printFormatted("Hello world", "exclaim");
    echo "<br><br>";
    printFormatted("Hello world", "ask");
    echo "<br><br>";
