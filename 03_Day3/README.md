# Day 3 : PHP Comments, Variables, Echo and Datatypes

## PHP Comments

- A comment in PHP code is a line that is not executed as a part of the program. Its only purpose is to be read by someone who is looking at the code.
- Comments can be used to:
    - Let others understand your code
    - Remind yourself of what you did - Most programmers have experienced coming back to their own work a year or two later and having to re-figure out what they did. Comments can remind you of what you were thinking when you wrote the code
    - Leave out some parts of your code
- PHP supports several ways of commenting:

Example:

```bash
// This is a single-line comment

# This is also a single-line comment

/* This is a
multi-line 
comment */
```

---

## PHP Variables

- Variables are "containers" for storing information.
- In PHP, a variable starts with the $ sign, followed by the name of the variable:

    Example:

    ```bash
    $x = 5;
    $y = "John";
    ```

- In the example above, the variable $x will hold the value 5, and the variable $y will hold the value "John".
- **Note**: When you assign a text value to a variable, put quotes around the value.
- **Note**: Unlike other programming languages, PHP has no command for declaring a variable. It is created the moment you first assign a value to it.
- Think of variables as containers for storing data.
- A variable can have a short name (like $x and $y) or a more descriptive name ($age, $carname, $total_volume).
- Rules for PHP variables:
    - A variable starts with the $ sign, followed by the name of the variable
    - A variable name must start with a letter or the underscore character
    - A variable name cannot start with a number
    - A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - Variable names are case-sensitive ($age and $AGE are two different variables)
- Rem- ber that PHP variable names are case-sensitive!
- PHP- upports the following data types:
    - String
    - Integer
    - Float (floating point numbers - also called double)
    - Boolean
    - Array
    - Object
    - NULL
    - Resource
- In PHP, variables can be declared anywhere in the script.
- The scope of a variable is the part of the script where the variable can be referenced/used.
- PHP has three different variable scopes:
    - local
    - global
    - static
- A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:

    Example:

    ```php
    $x = 5; // global scope

    function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
    
    echo "<p>Variable x outside function is: $x</p>";
    ```

- A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:

    Example:

    ```php
    function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    // using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>";
    ```

- The global keyword is used to access a global variable from within a function.
- To do this, use the global keyword before the variables (inside the function):

    Example:

    ```php
    $x = 5;
    $y = 10;

    function myTest() {
    global $x, $y;
    $y = $x + $y;
    }

    myTest();
    echo $y; // outputs 15
    ```

- PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly.
- The example above can be rewritten like this:

    Example:

    ```php
    $x = 5;
    $y = 10;

    function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest();
    echo $y; // outputs 15
    ```

- Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
- To do this, use the static keyword when you first declare the variable:

    Example:

    ```php
    function myTest() {
    static $x = 0;
    echo $x;
    $x++;
    }

    myTest();
    myTest();
    myTest();
    ```

- Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.
- Note: The variable is still local to the function.

---

## PHP echo and print Statements

- With PHP, there are two basic ways to get output: echo and print.
- echo and print are more or less the same. They are both used to output data to the screen.
- The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.
- The echo statement can be used with or without parentheses: echo or echo().

    Example:

    ```php
    echo "Hello";
    //same as:
    echo("Hello");
    ```

- The following example shows how to output text with the echo command (notice that the text can contain HTML markup):

    Example:

    ```php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    ```

- The following example shows how to output text and variables with the echo statement:

    Example:

    ```php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    echo "<h2>$txt1</h2>";
    echo "<p>Study PHP at $txt2</p>";
    ```

- Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.
- When using double quotes, variables can be inserted to the string as in the example above.
- When using single quotes, variables have to be inserted using the . operator, like this:

    Example:

    ```php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    echo '<h2>' . $txt1 . '</h2>';
    echo '<p>Study PHP at ' . $txt2 . '</p>';
    ```


- The print statement can be used with or without parentheses: print or print().
    
    Example:

    ```php
    print "Hello";
    //same as:
    print("Hello");
    ```

- The following example shows how to output text with the print command (notice that the text can contain HTML markup):

    Example:

    ```php
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";
    ```

- The following example shows how to output text and variables with the print statement:

    Example:

    ```php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    print "<h2>$txt1</h2>";
    print "<p>Study PHP at $txt2</p>";
    ```

- Strings are surrounded by quotes, but there is a difference between single and double quotes in PHP.
- When using double quotes, variables can be inserted to the string as in the example above.
- When using single quotes, variables have to be inserted using the . operator, like this:

    Example:

    ```php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";

    print '<h2>' . $txt1 . '</h2>';
    print '<p>Study PHP at ' . $txt2 . '</p>';
    ```

---

## PHP Data Types
- Variables can store data of different types, and different data types can do different things.
- PHP supports the following data types:
    🔹 String
    🔹 Integer
    🔹 Float (floating point numbers - also called double)
    🔹 Boolean
    🔹 Array
    🔹 Object
    🔹 NULL
    🔹 Resource

- You can get the data type of any object by using the var_dump() function.

    Example:

    The var_dump() function returns the data type and the value:

    ```php
    $x = 5;
    var_dump($x);
    ```

- A string is a sequence of characters, like "Hello world!".
- A string can be any text inside quotes. You can use single or double quotes:

    Example:

    ```php
    $x = "Hello world!";
    $y = 'Hello world!';

    var_dump($x);
    echo "<br>";
    var_dump($y);
    ```

- An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
- Rules for integers:  
    🔹 An integer must have at least one digit  
    🔹 An integer must not have a decimal point  
    🔹 An integer can be either positive or negative  
    🔹 Integers can be specified in:     decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation
- In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

    Example:

    ```php
    $x = 5985;
    var_dump($x);
    ```

- A float (floating point number) is a number with a decimal point or a number in exponential form.
- In the following example $x is a float. The PHP var_dump() function returns the data type and value:

    Example:

    ```php
     $x = 10.365;
    var_dump($x);
    ```

- A Boolean represents two possible states: TRUE or FALSE. Booleans are often used in conditional testing

    Example:

    ```php
     $x = true;
    var_dump($x);
    ```

- An array stores multiple values in one single variable.
- In the following example $cars is an array. The PHP var_dump() function returns the data type and value:

    Example:

    ```php
     $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    ```

- Classes and objects are the two main aspects of object-oriented programming.
- A class is a template for objects, and an object is an instance of a class.
- When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
- Let's assume we have a class named Car that can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
- When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
- If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

    Example:

    ```php
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this-color = $color;
            $this-model = $model;
        }
        public function message() {
            return "My car is a " . $this-color . " " . $this-model . "!";
        }
        }

        $myCar = new Car("red", "Volvo");
        var_dump($myCar);
    ```

- Null is a special data type which can have only one value: NULL.
- A variable of data type NULL is a variable that has no value assigned to it.
- Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
- Variables can also be emptied by setting the value to NULL:

    Example:

    ```php
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    ```

- If you assign an integer value to a variable, the type will automatically be an integer.
- If you assign a string to the same variable, the type will change to a string:

    Example:

    ```php
    $x = 5;
    var_dump($x);

    $x = "Hello";
    var_dump($x);
    ```

- If you want to change the data type of an existing variable, but not by changing the value, you can use casting.
- Casting allows you to change data type on variables:

    Example:

    ```php
    $x = 5;
    $x = (string) $x;
    var_dump($x);
    ```