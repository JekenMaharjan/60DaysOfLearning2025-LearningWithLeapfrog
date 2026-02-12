# Day 5 : PHP Strings & Modify Strings

## PHP Strings

- A string is a sequence of characters, like "Hello world!".
- Strings in PHP are surrounded by either double quotation marks, or single quotation marks.

    Example:

    ```php
    <?php
        echo "Hello";   // double quotation mark
        echo 'Hello';   // single quotation mark

        /*
        Result:
        Hello        
        Hello
        */
    ?>
    ```

**NOTE:**
- There is a big difference between double quotes and single quotes in PHP.
- Double quotes process special characters, single quotes does not.

---

**What do use: Double or Single Quotes?**
- You can use both, but you should be aware of the difference between the two.
- Double quoted strings perform action on special characters.
    E.g. when there is a variable in the string, it returns the value of the variable:

    Example:  
    Double quoted string literals perform operations for special characters.

    ```php
    <?php
        $x = "Jeken";
        echo "Hello $x";

        /*
        Result:
        Hello Jeken
        */
    ?>
    ```

- Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name:

    Example:  
    Single quoted string literals returns the string as it is.
    
    ```php
    <?php
        $x = "John";
        echo 'Hello $x';

        /*
        Result:
        Hello $x
        */
    ?>
    ```

---

## String Length:

- The PHP strlen() function returns the length of a string.

    Example:  
    Return the length of the string "Hello world!".

    ```php
    <?php
        echo strlen("Hello world!");

        /*
        Result:
        12
        */
    ?>
    ```

---

## Word Count:

- The PHP str_word_count() function counts the number of words in a string.

    Example:  
    Count the number of word in the string "Hello world!".

    ```php
    <?php
        echo str_word_count("Hello world!");

        /*
        Result:
        2
        */
    ?>
    ```

---

## Search For Text Within a String:

- The PHP strpos() function searches for a specific text within a string.
- If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE.

    Example:  
    Search for the text "world" in the string "Hello world!".

    ```php
    <?php
        echo strpos("Hello world!", "world");

        /*
        Result:
        6
        */
    ?>
    ```

> Tip: The first character position in a string is 0 (not 1).

---

## PHP - Modify Strings:

- PHP has a set of built-in functions that you can use to modify strings.

1. **Upper Case:**
   - The strtoupper() function returns the string in upper case.

        Example:
        
        ```php
        <?php
            $x = "Hello World!";
            echo strtoupper($x);

            /*
            Result:
            HELLO WORLD!
            */
        ?>
        ```

---

2. **Lower Case:**
   - The strtolower() function returns the string in lower case. 

       Example:

       ```php
       <?php
           $x = "Hello World!";
           echo strtolower($x);

           /*
           Result:
           hello world!
           */
       ?>
       ```

---

3. **Replace a String:**
   - The PHP str_replace() function replaces some characters with some other characters in a string.

       Example:  
       Replace the text "World" with "Dolly".

       ```php
       <?php
           $x = "Hello World!";
           echo str_replace("World", "Dolly", $x);

           /*
           Result:
           Hello Dolly!
           */
       ?>
       ```

---

4. **Reverse a String:**
   - The PHP strrev() function reverses a string.

       Example:  
       Reverse the string "Hello World!".

       ```php
       <?php
           $x = "Hello World!";
           echo strrev($x);

           /*
           Result:
           !dlroW olleH
           */
       ?>
       ```

---

5. **Remove Whitespace:**
   - Whitespace is the space before and/or after the actual text, and very often you want to remove this space.

       Example:  
       The trim() removes any whitespace from the beginning or the end.

       ```php
       <?php
           $x = " Hello World! ";
           echo trim($x);

           /*
           Result:
           Hello World!
           */
       ?>
       ```

---

6. **Convert String into Array:**
   - The PHP explode() function splits a string into an array.
   - The first parameter of the explode() function represents the "separator". The "separator" specifies where to split the string.

       **Note:** The separator is required.

       Example:  
       Split the string into an array. Use the space character as separator.

       ```php
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
       ```