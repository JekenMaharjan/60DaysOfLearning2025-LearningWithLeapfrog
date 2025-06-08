PHP - Modify Strings:
-> PHP has a set of built-in functions that you can use to modify strings.

1. Upper Case:
-> The strtoupper() function returns the string in upper case. Example:
    <?php
        $x = "Hello World!";
        echo strtoupper($x);

        /*
        Result:
        HELLO WORLD!
        */
    ?>

2. Lower Case:
-> The strtolower() function returns the string in lower case. Example:
    <?php
        $x = "Hello World!";
        echo strtolower($x);

        /*
        Result:
        hello world!
        */
    ?>

3. Replace a String:
-> The PHP str_replace() function replaces some characters with some other characters in a string. Example: Replace the text "World" with "Dolly":
    <?php
        $x = "Hello World!";
        echo str_replace("World", "Dolly", $x);

        /*
        Result:
        Hello Dolly!
        */
    ?>

4. Reverse a String:
-> The PHP strrev() function reverses a string. Example: Reverse the string "Hello World!":
    <?php
        $x = "Hello World!";
        echo strrev($x);

        /*
        Result:
        !dlroW olleH
        */
    ?>

5. Remove Whitespace:
-> Whitespace is the space before and/or after the actual text, and very often you want to remove this space. Example: The trim() removes any whitespace from the beginning or the end:
    <?php
        $x = " Hello World! ";
        echo trim($x);

        /*
        Result:
        Hello World!
        */
    ?>

6. Convert String into Array:
-> The PHP explode() function splits a string into an array.
-> The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.
    Note: The separator is required.
    Example: Split the string into an array. Use the space character as separator:
    <?php
        $x = "Hello World!";
        $y = explode(" ", $x);
        
        //Use the print_r() function to display the result:
        print_r($y);
        
        /*
        Result:
        Array ( [0] => Hello [1] => World! )
        */
    ?>