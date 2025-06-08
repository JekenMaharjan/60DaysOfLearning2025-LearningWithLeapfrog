# PHP Numbers:
    -> They are of 3 main numeric types in PHP:
        1. Integer
        2. Float
        3. Number Strings
        In addition, PHP has two more data types used for numbers:
            1. Infinity
            2. NaN
    -> Variables of numeric types are created when you assign a value to them:
        Example:
        <?php
            $a = 5;         // an integer
            $b = 5.34;      // a float (double)
            $c = "25";      // a string of length 2

            // To verify the type of any object in PHP, use the var_dump() function:
            var_dump($a);
            var_dump($b);
            var_dump($c);

            /*
            Result:
                a = int(5)
                b = float(5.34)
                c = string(2) "25"
            */
        ?>

    1. PHP Integers:
        -> 2, 256, -256, 10358, -179567 are all integers.
        -> An integer is a number without any decimal part.
        -> An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems.
            A value greater (or lower) than this, will be stored as float, because it exceeds the limit of an integer.
        -> Note: Another important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float (2.5).
        -> PHP uses 'is_int()' to check if the variable is of integer type.
            Example:
                <?php
                    $x = 5985;
                    var_dump(is_int($x));

                    $y = 59.85;
                    var_dump(is_int($y));

                    /*
                    Result:
                        bool(true)  --> $x = 5985 → it's an integer → is_int() returns true
                        bool(false) --> $y = 59.85 → it's a float → is_int() returns false
                    */
                ?>

    2. PHP Floats:
        -> A float is a number with a decimal point or a number in exponential form.
        -> 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
        -> The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), and have a maximum precision of 14 digits.
        -> PHP uses 'is_float()' to check if the variable is of float type.
            Example:
                <?php
                    $x = 10.365;
                    var_dump(is_float($x));

                    $y = 136;
                    var_dump(is_float($y));

                    /*
                    Result:
                        bool(true)
                        bool(false)
                    */
                ?>

    3. PHP Numerical Strings:
        -> The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.
            Example:
            <?php
                $x = 5985;
                var_dump(is_numeric($x));
                
                $x = "5985";
                var_dump(is_numeric($x));

                $x = "59.85" + 100;
                var_dump(is_numeric($x));
                
                $x = "Hello";
                var_dump(is_numeric($x));

                /*
                Result:
                    bool(true)
                    bool(true)
                    bool(true)
                    bool(false)
                */
            ?>
            Note: 
            From PHP 7.0: The is_numeric() function will return FALSE for numeric strings in hexadecimal form (e.g. 0xf4c3b00c), as they are no longer considered as numeric strings.

    4. PHP Infinity:
        -> A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
        -> PHP has the following functions to check if a numeric value is finite or infinite:
            a. is_finite()
            b. is_infinite()
        -> However, the PHP var_dump() function returns the data type and value:
            Example:
            <?php
                // Check if a numeric value is finite or infinite:
                $x = 1.9e411;
                var_dump($x);

                /*
                Result:
                    float(INF)
                */
            ?>

    5. PHP NaN:
        -> NaN stands for Not a Number.
        -> NaN is used for impossible mathematical operations.
        -> PHP has the following functions to check if a value is not a number:
            a. is_nan()
        -> However, the PHP var_dump() function returns the data type and value:
            Example:
            <?php
                // Invalid calculation will return a NaN value:
                $x = acos(8);
                var_dump($x);

                /*
                Result:
                    float(NAN)
                */
            ?>