<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*  This is how you comment in PHP

        // Outputs a welcome message:
        echo "Welcome Home!";
        echo "Welcome Home!"; // Outputs a welcome message
        // echo "Welcome Home!";

        */

        // --------------------------------------------

        // PHP Vairables

        $x = 5;
        $y = "John";

        $txt = "W3Schools.com";
        echo "I love $txt!";

        $txt = "W3Schools.com";
        echo "I love " . $txt . "!";

        $x = 5;
        $y = 4;
        echo $x + $y;

        $x = 5;      // $x is an integer
        $y = "John"; // $y is a string
        echo $x;
        echo $y;

        // --------------------------------------------

        // PHP Variables Scope

        $x = 5; // global scope

        function myTest() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();

        echo "<p>Variable x outside function is: $x</p>";

        // --------------------------------------------

        function mySecondTest() {
            $x1 = 5; // local scope
            echo "<p>Variable x inside function is: $x1</p>";
          }
          myTest();
          
          // using x outside the function will generate an error
          echo "<p>Variable x outside function is: $x1</p>";

        // --------------------------------------------

        // PHP The global keyword

        $x = 5;
        $y = 10;

        function myThirdTest() {
        global $x, $y;
        $y = $x + $y;
        }

        myTest();
        echo $y; // outputs 15

        // --------------------------------------------

        $x = 5;
        $y = 10;

        function myFourthTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        myTest();
        echo $y; // outputs 15

        // --------------------------------------------

        function myFifthTest() {
            static $x = 0;
            echo $x;
            $x++;
          }
          
          myTest();
          myTest();
          myTest();

        // --------------------------------------------

        echo "Hello";
        //same as:
        echo("Hello");

        // --------------------------------------------

        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";
        
        // --------------------------------------------

        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo "<h2>$txt1</h2>";
        echo "<p>Study PHP at $txt2</p>";

        // --------------------------------------------

        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo '<h2>' . $txt1 . '</h2>';
        echo '<p>Study PHP at ' . $txt2 . '</p>';

        // --------------------------------------------

        // Same for the PHP print Statement

        // --------------------------------------------

        // PHP Data Types

        $x = 5;         // integer
        $x = null;      // null
        var_dump($x);   // getting data types

        // --------------------------------------------

        $x = "Hello world!";    // string
        $y = 'Hello world!';    // string

        var_dump($x);
        echo "<br>";
        var_dump($y);
        
        // --------------------------------------------

        $x = 10.365;    // float
        var_dump($x);

        // --------------------------------------------

        $x = true;      // boolean
        var_dump($x);

        // --------------------------------------------

        $cars = array("Volvo","BMW","Toyota");      // array
        var_dump($cars);
        
        // --------------------------------------------

        // object
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
            public function message() {
              return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }
        
        $myCar = new Car("red", "Volvo");
        var_dump($myCar);

        // --------------------------------------------
        
        // change data type
        $x = 5;
        var_dump($x);

        $x = "Hello";
        var_dump($x);

        $x = 5;
        $x = (string) $x;
        var_dump($x);
        ?>
</body>
</html>