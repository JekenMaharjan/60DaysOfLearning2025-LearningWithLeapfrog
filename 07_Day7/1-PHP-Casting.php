# PHP Casting:
-> Sometimes you need to change a variable from one data type into another, and sometimes you want a variable to have a specific data type. This can be done with casting.

    # Change Data Type:
    -> Casting in PHP is done with these statements:
        1. (string) - Converts to data type String
        2. (int) - Converts to data type Integer
        3. (float) - Converts to data type Float
        4. (bool) - Converts to data type Boolean
        5. (array) - Converts to data type Array
        6. (object) - Converts to data type Object
        7. (unset) - Converts to data type NULL

    1. Cast to String:
    -> To cast to string, use the (string) statement:
        Example:
        <?php
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = "hello"; // String
            $d = true;    // Boolean
            $e = NULL;    // NULL
            
            $a = (string) $a;
            $b = (string) $b;
            $c = (string) $c;
            $d = (string) $d;
            $e = (string) $e;
            
            //To verify the type of any object in PHP, use the var_dump() function:
            var_dump($a);
            var_dump($b);
            var_dump($c);
            var_dump($d);
            var_dump($e);
        ?>

    2. Cast to Integer:
    -> To cast to integer, use the (int) statement:
        Example:
        <?php
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = "25 kilometers"; // String
            $d = "kilometers 25"; // String
            $e = "hello"; // String
            $f = true;    // Boolean
            $g = NULL;    // NULL
            
            $a = (int) $a;
            $b = (int) $b;
            $c = (int) $c;
            $d = (int) $d;
            $e = (int) $e;
            $f = (int) $f;
            $g = (int) $g;
        ?>

    3. Cast to Float:
    -> To cast to float, use the (float) statement:
        Example:
        <?php
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = "25 kilometers"; // String
            $d = "kilometers 25"; // String
            $e = "hello"; // String
            $f = true;    // Boolean
            $g = NULL;    // NULL
            
            $a = (float) $a;
            $b = (float) $b;
            $c = (float) $c;
            $d = (float) $d;
            $e = (float) $e;
            $f = (float) $f;
            $g = (float) $g;
        ?>

    4. Cast to Boolean:
    -> To cast to boolean, use the (bool) statement:
        Example:
        <?php
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = 0;       // Integer
            $d = -1;      // Integer
            $e = 0.1;     // Float
            $f = "hello"; // String
            $g = "";      // String
            $h = true;    // Boolean
            $i = NULL;    // NULL
            
            $a = (bool) $a;
            $b = (bool) $b;
            $c = (bool) $c;
            $d = (bool) $d;
            $e = (bool) $e;
            $f = (bool) $f;
            $g = (bool) $g;
            $h = (bool) $h;
            $i = (bool) $i;
        ?>
    -> If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. Even -1 converts to true.

    5. Cast to Array:
    -> To cast to array, use the (array) statement:
        Example:
        <?php
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = "hello"; // String
            $d = true;    // Boolean
            $e = NULL;    // NULL
            
            $a = (array) $a;
            $b = (array) $b;
            $c = (array) $c;
            $d = (array) $d;
            $e = (array) $e;
        ?>
    -> When converting into arrays, most data types converts into an indexed array with one element. NULL values converts to an empty array object.
    -> Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values:
    -> Example: Converting Objects into Arrays:
        <?php
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
            
            $myCar = (array) $myCar;
            var_dump($myCar);
        ?>

    6. Cast to Object:
    -> To cast to object, use the (object) statement:
        Example:
        <?php
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = "hello"; // String
            $d = true;    // Boolean
            $e = NULL;    // NULL
            
            $a = (object) $a;
            $b = (object) $b;
            $c = (object) $c;
            $d = (object) $d;
            $e = (object) $e;
        ?>
    -> When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value. NULL values converts to an empty object. Indexed arrays converts into objects with the index number as property name and the value as property value. Associative arrays converts into objects with the keys as property names and values as property values.
    -> Example: Converting Arrays into Objects:
        <?php
            $a = array("Volvo", "BMW", "Toyota"); // indexed array
            $b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); // associative array
            
            $a = (object) $a;
            $b = (object) $b;
        ?>

    7. Cast to NULL: (Currently not support by latest version of PHP)
    -> To cast to NULL, use the (unset) statement:
        Example:
        <?php
            $a = 5;       // Integer
            $b = 5.34;    // Float
            $c = "hello"; // String
            $d = true;    // Boolean
            $e = NULL;    // NULL
            
            // $a = (unset) $a;    // This error is due to The (unset) cast is no longer supported.
            // $b = (unset) $b;    // This means the casting a variable to (unset) to set it to
            // $c = (unset) $c;    // NULL os deprecated and no longer allowed in modern
            // $c = (unset) $c;    // versions of PHP (PHP 7.2 and later).
            // $d = (unset) $d;
            // $e = (unset) $e;
        ?>