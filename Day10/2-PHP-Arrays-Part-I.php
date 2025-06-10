# PHP Arrays:
-> An array stores multiple values in one single variable:
-> Example:
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
    ?>

# What is an Array?
-> An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.

# PHP Array Types:
-> In PHP, there are three types of arrays:
    1. Indexed arrays - Arrays with a numeric index
    2. Associative arrays - Arrays with named keys
    3. Multidimensional arrays - Arrays containing one or more arrays

# Working With Arrays:
-> In this tutorial you will learn how to work with arrays, including:
    1. Create Arrays
    2. Access Arrays
    3. Update Arrays
    4. Add Array Items
    5. Remove Array Items
    6. Sort Arrays

# Array Items:
-> Array items can be of any data type.
-> The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.
-> You can have different data types in the same array.
-> Example: Array items of four different data types:
    <?php
        $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
    ?>

# Array Functions:
-> The real strength of PHP arrays are the built-in array functions, like the count() function for counting array items:
-> Example: How many items are in the $cars array:
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
    ?>

    # PHP Indexed Arrays:
    -> In indexed arrays each item has an index number.
    -> By default, the first item has index 0, the second item has item 1, etc.
    -> Example: Create and display an indexed array:
        <?php
            $cars = array("Volvo", "BMW", "Toyota");
            var_dump($cars);
        ?>
    
        # Access Indexed Arrays:
        -> To access an array item you can refer to the index number.
        -> Example: Display the first array item:
            <?php
                $cars = array("Volvo", "BMW", "Toyota");
                echo $cars[0];
            ?>

        # Change Value:
        -> To change the value of an array item, use the index number:
        -> Example: Change the value of the second item:    
            <?php
                $cars = array("Volvo", "BMW", "Toyota");
                $cars[1] = "Ford";
                var_dump($cars);
            ?>

        # Loop Through an Indexed Array:
        -> To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
        -> Example: Display all array items:
            <?php
                $cars = array("Volvo", "BMW", "Toyota");
                foreach ($cars as $x) {
                echo "$x <br>";
                }
            ?>

        # Index Number:
        -> The key of an indexed array is a number, by default the first item is 0 and the second is 1 etc., but there are exceptions.
        -> New items get the next index number, meaning one higher than the highest existing index.
        -> So if you have an array like this:
            <?php
                $cars[0] = "Volvo";
                $cars[1] = "BMW";
                $cars[2] = "Toyota";
            ?>
        -> And if you use the array_push() function to add a new item, the new item will get the index 3:
            <?php
                array_push($cars, "Ford");
                var_dump($cars);
            ?>
        -> But if you have an array with random index numbers, like this:
            <?php
                $cars[5] = "Volvo";
                $cars[7] = "BMW";
                $cars[14] = "Toyota";
            ?>
        -> And if you use the array_push() function to add a new item, what will be the index number of the new item?
            <?php
                array_push($cars, "Ford");
                var_dump($cars);
            ?>
    
    # PHP Associative Arrays:
    -> Associative arrays are arrays that use named keys that you assign to them.
    -> Example:
        <?php
            $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
            var_dump($car);
        ?>

        # Access Associative Arrays:
        -> To access an array item you can refer to the key name.
        -> Example: Display the model of the car:
            <?php
                $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
                echo $car["model"];
            ?>
        # Change Value:
        -> To change the value of an array item, use the key name:
        -> Example: Change the year item:
            <?php
                $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
                $car["year"] = 2024;
                var_dump($car);
            ?>

        # Loop Through an Associative Array:
        -> To loop through and print all the values of an associative array, you could use a foreach loop, like this:
        -> Example: Display all array items, keys and values:
            <?php
                $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);

                foreach ($car as $x => $y) {
                  echo "$x: $y <br>";
                }
            ?>

    # PHP Create Arrays:
    -> You can create arrays by using the array() function:
    -> Example:
        <?php
            $cars = array("Volvo", "BMW", "Toyota");
        ?>
    -> You can also use a shorter syntax by using the [] brackets:
    -> Example:
        <?php
            $cars = ["Volvo", "BMW", "Toyota"];
        ?>
    -> Multiple Lines: Line breaks are not important, so an array declaration can span multiple lines:
    -> Example:
        <?php
            $cars = [
                "Volvo",
                "BMW",
                "Toyota"
              ];
        ?>
    -> Trailing Comma: A comma after the last item is allowed:
    -> Example:
        <?php
            $cars = [
                "Volvo",
                "BMW",
                "Toyota",
              ];
        ?>
    -> Array Keys: When creating indexed arrays the keys are given automatically, starting at 0 and increased by 1 for each item, so the array above could also be created with keys:
    -> Example:
        <?php
            $cars = [
                0 => "Volvo",
                1 => "BMW",
                2 =>"Toyota"
              ];
        ?>
    -> As you can see, indexed arrays are the same as associative arrays, but associative arrays have names instead of numbers:
    -> Example:
        <?php
            $myCar = [
                "brand" => "Ford",
                "model" => "Mustang",
                "year" => 1964
              ];
        ?>
    -> Declare Empty Array: You can declare an empty array first, and add items to it later:
    -> Example:
        <?php
            $cars = [];
            $cars[0] = "Volvo";
            $cars[1] = "BMW";
            $cars[2] = "Toyota";
        ?>
    -> The same goes for associative arrays, you can declare the array first, and then add items to it:
    -> Example:
        <?php
            $myCar = [];
            $myCar["brand"] = "Ford";
            $myCar["model"] = "Mustang";
            $myCar["year"] = 1964;
        ?>
    -> Mixing Array Keys: You can have arrays with both indexed and named keys:
    -> Example:
        <?php
            $myArr = [];
            $myArr[0] = "apples";
            $myArr[1] = "bananas";
            $myArr["fruit"] = "cherries";
        ?>