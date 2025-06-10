<?php
    // # PHP Sorting Arrays:
    // -> The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.
            
    //     # PHP - Sort Functions For Arrays
    //     -> In this chapter, we will go through the following PHP array sort functions:
    //         - sort() - sort arrays in ascending order
    //         - rsort() - sort arrays in descending order
    //         - asort() - sort associative arrays in ascending order, according to the value
    //         - ksort() - sort associative arrays in ascending order, according to the key
    //         - arsort() - sort associative arrays in descending order, according to the value
    //         - krsort() - sort associative arrays in descending order, according to the key

    //     # Sort Array in Ascending Order - sort()
    //     -> The following example sorts the elements of the $cars array in ascending alphabetical order:
    //     -> Example:
                $cars = array("Volvo", "BMW", "Toyota");
                sort($cars);
        // -> The following example sorts the elements of the $numbers array in ascending numerical order:
        // -> Example:
                $numbers = array(4, 6, 2, 22, 11);
                sort($numbers);

        // # Sort Array in Descending Order - rsort()
        // -> The following example sorts the elements of the $cars array in descending alphabetical order:
        // -> Example:
                $cars = array("Volvo", "BMW", "Toyota");
                rsort($cars);
        // -> The following example sorts the elements of the $numbers array in descending numerical order:
        // -> Example:
                $numbers = array(4, 6, 2, 22, 11);
                rsort($numbers);

        // # Sort Array (Ascending Order), According to Value - asort()
        // -> The following example sorts an associative array in ascending order, according to the value:
        // -> Example:
                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                asort($age);

        // # Sort Array (Ascending Order), According to Key - ksort()
        // -> The following example sorts an associative array in ascending order, according to the key:
        // -> Example:
                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                ksort($age);

        // # Sort Array (Descending Order), According to Value - arsort()
        // -> The following example sorts an associative array in descending order, according to the value:
        // -> Example:
                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                arsort($age);

        // # Sort Array (Descending Order), According to Key - krsort()
        // -> The following example sorts an associative array in descending order, according to the key:
        // -> Example:
                $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
                krsort($age);

    // # PHP Multidimensional Arrays:
    // -> Previously, we have described arrays that are a single list of key/value pairs.
    // -> However, sometimes you want to store values with more than one key. For this, we have multidimensional arrays.

    //     # PHP - Multidimensional Arrays
    //     -> A multidimensional array is an array containing one or more arrays.
    //     -> PHP supports multidimensional arrays that are two, three, four, five, or more levels deep. However, arrays more than three levels deep are hard to manage for most people.
    //     -> The dimension of an array indicates the number of indices you need to select an element.
    //         - For a two-dimensional array you need two indices to select an element
    //         - For a three-dimensional array you need three indices to select an element

    //     # PHP - Two-dimensional Arrays
    //     -> A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).
    //     -> First, take a look at the following table:
    //         Name	        Stock	       Sold
    //         -----------------------------------------
    //         Volvo	        22	           18
    //         BMW	            15	           13
    //         Saab	        5	           2
    //         Land Rover	    17	           15
        // -> We can store the data from the table above in a two-dimensional array, like this:
                $cars = array (
                array("Volvo",22,18),
                array("BMW",15,13),
                array("Saab",5,2),
                array("Land Rover",17,15)
                );
        // -> Now the two-dimensional $cars array contains four arrays, and it has two indices: row and column.
        // -> To get access to the elements of the $cars array we must point to the two indices (row and column):
        // -> Example:
                echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
                echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
                echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
                echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        // -> We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices):
        // -> Example:
                for ($row = 0; $row < 4; $row++) {
                echo "<p><b>Row number $row</b></p>";
                echo "<ul>";
                    for ($col = 0; $col < 3; $col++) {
                    echo "<li>".$cars[$row][$col]."</li>";
                    }
                echo "</ul>";
                }

    // # PHP Array Functions:
    // -> PHP has a set of built-in functions that you can use on arrays.
    //     Function	                            Description
    //     ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    //     array()	                            Creates an array
    //     array_change_key_case()	            Changes all keys in an array to lowercase or uppercase
    //     array_chunk()	                    Splits an array into chunks of arrays
    //     array_column()	                    Returns the values from a single column in the input array
    //     array_combine()	                    Creates an array by using the elements from one "keys" array and one "values" array
    //     array_count_values()	                Counts all the values of an array
    //     array_diff()	                        Compare arrays, and returns the differences (compare values only)
    //     array_diff_assoc()	                Compare arrays, and returns the differences (compare keys and values)
    //     array_diff_key()	                    Compare arrays, and returns the differences (compare keys only)
    //     array_diff_uassoc()	                Compare arrays, and returns the differences (compare keys and values, using a user-defined key comparison function)
    //     array_diff_ukey()	                Compare arrays, and returns the differences (compare keys only, using a user-defined key comparison function)
    //     array_fill()	                        Fills an array with values
    //     array_fill_keys()	                Fills an array with values, specifying keys
    //     array_filter()	                    Filters the values of an array using a callback function
    //     array_flip()	                        Flips/Exchanges all keys with their associated values in an array
    //     array_intersect()	                Compare arrays, and returns the matches (compare values only)
    //     array_intersect_assoc()	            Compare arrays and returns the matches (compare keys and values)
    //     array_intersect_key()	            Compare arrays, and returns the matches (compare keys only)
    //     array_intersect_uassoc()	            Compare arrays, and returns the matches (compare keys and values, using a user-defined key comparison function)
    //     array_intersect_ukey()	            Compare arrays, and returns the matches (compare keys only, using a user-defined key comparison function)
    //     array_key_exists()	                Checks if the specified key exists in the array
    //     array_keys()	                        Returns all the keys of an array
    //     array_map()	                        Sends each value of an array to a user-made function, which returns new values
    //     array_merge()	                    Merges one or more arrays into one array
    //     array_merge_recursive()	            Merges one or more arrays into one array recursively
    //     array_multisort()	                Sorts multiple or multi-dimensional arrays
    //     array_pad()	                        Inserts a specified number of items, with a specified value, to an array
    //     array_pop()	                        Deletes the last element of an array
    //     array_product()	                    Calculates the product of the values in an array
    //     array_push()	                        Inserts one or more elements to the end of an array
    //     array_rand()	                        Returns one or more random keys from an array
    //     array_reduce()	                    Returns an array as a string, using a user-defined function
    //     array_replace()	                    Replaces the values of the first array with the values from following arrays
    //     array_replace_recursive()	        Replaces the values of the first array with the values from following arrays recursively
    //     array_reverse()	                    Returns an array in the reverse order
    //     array_search()	                    Searches an array for a given value and returns the key
    //     array_shift()	                    Removes the first element from an array, and returns the value of the removed element
    //     array_slice()	                    Returns selected parts of an array
    //     array_splice()	                    Removes and replaces specified elements of an array
    //     array_sum()	                        Returns the sum of the values in an array
    //     array_udiff()	                    Compare arrays, and returns the differences (compare values only, using a user-defined key comparison function)
    //     array_udiff_assoc()	                Compare arrays, and returns the differences (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
    //     array_udiff_uassoc()	                Compare arrays, and returns the differences (compare keys and values, using two user-defined key comparison functions)
    //     array_uintersect()	                Compare arrays, and returns the matches (compare values only, using a user-defined key comparison function)
    //     array_uintersect_assoc()	            Compare arrays, and returns the matches (compare keys and values, using a built-in function to compare the keys and a user-defined function to compare the values)
    //     array_uintersect_uassoc()	        Compare arrays, and returns the matches (compare keys and values, using two user-defined key comparison functions)
    //     array_unique()	                    Removes duplicate values from an array
    //     array_unshift()	                    Adds one or more elements to the beginning of an array
    //     array_values()	                    Returns all the values of an array
    //     array_walk()	                        Applies a user function to every member of an array
    //     array_walk_recursive()	            Applies a user function recursively to every member of an array
    //     arsort()	                            Sorts an associative array in descending order, according to the value
    //     asort()	                            Sorts an associative array in ascending order, according to the value
    //     compact()	                        Create array containing variables and their values
    //     count()	                            Returns the number of elements in an array
    //     current()	                        Returns the current element in an array
    //     each()	                            Deprecated from PHP 7.2. Returns the current key and value pair from an array
    //     end()	                            Sets the internal pointer of an array to its last element
    //     extract()	                        Imports variables into the current symbol table from an array
    //     in_array()	                        Checks if a specified value exists in an array
    //     key()	                            Fetches a key from an array
    //     krsort()	                            Sorts an associative array in descending order, according to the key
    //     ksort()	                            Sorts an associative array in ascending order, according to the key
    //     list()	                            Assigns variables as if they were an array
    //     natcasesort()	                    Sorts an array using a case insensitive "natural order" algorithm
    //     natsort()	                        Sorts an array using a "natural order" algorithm
    //     next()	                            Advance the internal array pointer of an array
    //     pos()	                            Alias of current()
    //     prev()	                            Rewinds the internal array pointer
    //     range()	                            Creates an array containing a range of elements
    //     reset()	                            Sets the internal pointer of an array to its first element
    //     rsort()	                            orts an indexed array in descending order
    //     shuffle()	                        Shuffles an array
    //     sizeof()	                            Alias of count()
    //     sort()	                            Sorts an indexed array in ascending order
    //     uasort()	                            Sorts an array by values using a user-defined comparison function and maintains the index association
    //     uksort()	                            Sorts an array by keys using a user-defined comparison function
    //     usort()	                            Sorts an array by values using a user-defined comparison function
