<?php
    // # PHP Access Arrays:

    //     # Access Array Item:
    //     -> To access an array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
    //     -> Example: Access an item by referring to its index number:
                $cars = array("Volvo", "BMW", "Toyota");
                echo $cars[2];
        // -> Note: The first item has index 0.
        // -> To access items from an associative array, use the key name:
        // -> Example: Access an item by referring to its key name:
                $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
                echo $cars["year"];
        
        // # Double or Single Quotes
        // -> You can use both double and single quotes when accessing an array:
        // -> Example
                echo $cars["model"];
                echo $cars['model'];
        
        // # Excecute a Function Item
        // -> Array items can be of any data type, including function.
        // -> To execute such a function, use the index number followed by parentheses ():
        // -> Example: Execute a function item:
                function myFunction() {
                echo "I come from a function!";
                }

                $myArr = array("Volvo", 15, myFunction);

                $myArr[2]();
        // -> Use the key name when the function is an item in a associative array:
        // -> Example: Execute function by referring to the key name:
                function myThisFunction() {
                echo "I come from a function!";
                }
                
                $myArr = array("car" => "Volvo", "age" => 15, "message" => myFunction);
                
                $myArr["message"]();

        // # Loop Through an Associative Array
        // -> To loop through and print all the values of an associative array, you can use a foreach loop, like this:
        // -> Example: Display all array items, keys and values:
                $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
                
                foreach ($car as $x => $y) {
                echo "$x: $y <br>";
                }

        // # Loop Through an Indexed Array
        // -> To loop through and print all the values of an indexed array, you can use a foreach loop, like this:
        // -> Example: Display all array items:
                $cars = array("Volvo", "BMW", "Toyota");
                foreach ($cars as $x) {
                echo "$x <br>";
                }

    // # PHP Update Array Items:
        
    //     # Update Array Item:
    //     -> To update an existing array item, you can refer to the index number for indexed arrays, and the key name for associative arrays.
    //     -> Example: Change the second array item from "BMW" to "Ford":
                $cars = array("Volvo", "BMW", "Toyota");
                $cars[1] = "Ford";
        // -> Note: The first item has index 0.
        // -> To update items from an associative array, use the key name:
        // -> Example: Update the year to 2024:
                $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
                $cars["year"] = 2024;

        // # Update Array Items in a Foreach Loop:
        // -> There are different techniques to use when changing item values in a foreach loop.
        // -> One way is to insert the & character in the assignment to assign the item value by reference, and thereby making sure that any changes done with the array item inside the loop will be done to the original array:
        // -> Example: Change ALL item values to "Ford":
                $cars = array("Volvo", "BMW", "Toyota");
                foreach ($cars as &$x) {
                $x = "Ford";
                }
                unset($x);
                var_dump($cars);
        // -> Note: Remember to add the unset() function after the loop.
        // -> Without the unset($x) function, the $x variable will remain as a reference to the last array item.
        // -> To demonstrate this, see what happens when we change the value of $x after the foreach loop:
        // -> Example: Demonstrate the consequence of forgetting the unset() function:
                $cars = array("Volvo", "BMW", "Toyota");
                foreach ($cars as &$x) {
                $x = "Ford";
                }
                
                $x = "ice cream";
                
                var_dump($cars);
            
        // # PHP Add Array Items:
            
        //     # Add Array Item:
        //     -> To add items to an existing array, you can use the bracket [] syntax.
        //     -> Example: Add one more item to the fruits array:
                    $fruits = array("Apple", "Banana", "Cherry");
                    $fruits[] = "Orange";
            
            // # Associative Arrays:
            // -> To add items to an associative array, or key/value array, use brackets [] for the key, and assign value with the = operator.
            // -> Example: Add one item to the car array:
                    $cars = array("brand" => "Ford", "model" => "Mustang");
                    $cars["color"] = "Red";

            // # Add Multiple Array Items:
            // -> To add multiple items to an existing array, use the array_push() function.
            // -> Example: Add three item to the fruits array:
                    $fruits = array("Apple", "Banana", "Cherry");
                    array_push($fruits, "Orange", "Kiwi", "Lemon");

            // # Add Multiple Items to Associative Arrays
            // -> To add multiple items to an existing array, you can use the += operator.
            // -> Example: Add two items to the cars array:
                    $cars = array("brand" => "Ford", "model" => "Mustang");
                    $cars += ["color" => "red", "year" => 1964];

        // # PHP Delete Array Items:

        //     # Remove Array Item:
        //     -> To remove an existing item from an array, you can use the array_splice() function.
        //     -> With the array_splice() function you specify the index (where to start) and how many items you want to delete.
        //     -> Example: Remove the second item:
                    $cars = array("Volvo", "BMW", "Toyota");
                    array_splice($cars, 1, 1);
            // -> After the deletion, the array gets reindexed automatically, starting at index 0.

            // # Using the unset Function:
            // -> You can also use the unset() function to delete existing array items.
            // -> Note: The unset() function does not re-arrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.
            // -> Example: Remove the second item:
                    $cars = array("Volvo", "BMW", "Toyota");
                    unset($cars[1]);

            // # Remove Multiple Array Items
            // -> To remove multiple items, the array_splice() function takes a length parameter that allows you to specify the number of items to delete.
            // -> Example: Remove 2 items, starting a the second item (index 1):
                    $cars = array("Volvo", "BMW", "Toyota");
                    array_splice($cars, 1, 2);
            // -> The unset() function takes a unlimited number of arguments, and can therefore be used to delete multiple array items:
            // -> Example: Remove the first and the second item:
                    $cars = array("Volvo", "BMW", "Toyota");
                    unset($cars[0], $cars[1]);

            // # Remove Item From an Associative Array
            // -> To remove items from an associative array, you can use the unset() function.
            // -> Specify the key of the item you want to delete.
            // -> Example: Remove the "model":
                    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
                    unset($cars["model"]);

            // # Using the array_diff Function
            // -> You can also use the array_diff() function to remove items from an associative array.
            // -> This function returns a new array, without the specified items.
            // -> Example: Create a new array, without "Mustang" and "1964":
                    $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
                    $newarray = array_diff($cars, ["Mustang", 1964]);
            // -> Note: The array_diff() function takes values as parameters, and not keys.
    
            // # Remove the Last Item
            // -> The array_pop() function removes the last item of an array.
            // -> Example: Remove the last item:
                    $cars = array("Volvo", "BMW", "Toyota");
                    array_pop($cars);

            // # Remove the First Item
            // -> The array_shift() function removes the first item of an array.
            // -> Example: Remove the first item:
                    $cars = array("Volvo", "BMW", "Toyota");
                    array_shift($cars);

        