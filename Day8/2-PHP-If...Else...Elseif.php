1. PHP if Statements:
-> Conditional statements are used to perform different actions based on different conditions.

    # PHP Conditional Statements:
    -> Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this.
    -> In PHP we have the following conditional statements:
        1. if statement -> executes some code if one condition is true
        2. if...else statement -> executes some code if a condition is true and another code if that condition is false
        3. if...elseif...else statement -> executes different codes for more than two conditions
        4. switch statement -> selects one of many blocks of code to be executed

    # PHP - The if Statement:
    -> The if statement executes some code if one condition is true.
    -> Syntax:
        <?php
            if (condition) {
                // code to be executed if condition is true;
                }
        ?>
    -> Example: Output "Have a good day!" if 5 is larger than 3:
        <?php
            if (5 > 3) {
                echo "Have a good day!";
                }
        ?>
    -> We can also use variables in the if statement:
    -> Example: Output "Have a good day!" if $t is less than 20:
        <?php
            $t = 14;

            if ($t < 20) {
                echo "Have a good day!";
            }
        ?>

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

2. PHP if Operators:
    
    # Comparison Operators:
    -> If statements usually contain conditions that compare two values.
    -> Example: Check if $t is equal to 14:
        <?php
            $t = 14;

            if ($t == 14) {
              echo "Have a good day!";
            }
        ?>
    -> To compare two values, we need to use a comparison operator(As mentioned in PHP-Operators.php file).

    # Logical Operators:
    -> To check more than one condition, we can use logical operators(As mentioned in PHP-Operators.php file), like the && operator:
    -> Example: Check if $a is greater than $b, AND if $a is less than $c:
        <?php
            $a = 200;
            $b = 33;
            $c = 500;
            
            if ($a > $b && $a < $c ) {
              echo "Both conditions are true";
            }
        ?>
    -> We can compare as many conditions as we like in one if statement:
    -> Example: Check if $a is either 2, 3, 4, 5, 6, or 7:
        <?php
            $a = 5;

            if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
              echo "$a is a number between 2 and 7";
            }
        ?>  

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

3. PHP if...else Statements:
-> The if...else statement executes some code if a condition is true and another code if that condition is false.
-> Syntax:
    <?php
        if (condition) {
            // code to be executed if condition is true;
            } else {
            // code to be executed if condition is false;
            }
    ?>
-> Example: Output "Have a good day!" if the current time is less than 20, and "Have a good night!" otherwise:
    <?php
        $t = date("H");

        if ($t < "20") {
          echo "Have a good day!";
        } else {
          echo "Have a good night!";
        }
    ?>

    # PHP - The if...elseif...else Statement:
    -> The if...elseif...else statement executes different codes for more than two conditions.
    -> Syntax:
        <?php
        if (condition) {
            // code to be executed if this condition is true;
            } elseif (condition) {
            // code to be executed if first condition is false and this condition is true;
            } else {
            // code to be executed if all conditions are false;
            }
        ?>
    -> Example: Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output
                "Have a good night!":
            <?php
                $t = date("H");

                if ($t < "10") {
                echo "Have a good morning!";
                } elseif ($t < "20") {
                echo "Have a good day!";
                } else {
                echo "Have a good night!";
                }
            ?>

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

4. PHP Shorthand if Statements:

    # Short Hand If:
    -> To write shorter code, you can write if statements on one line.
    -> Example: One-line if statement:
        <?php
            $a = 5;

            if ($a < 10) $b = "Hello";
            
            echo $b
        ?>

    # Short Hand If...Else:
    -> if...else statements can also be written in one line, but the syntax is a bit different.
    -> Example: One-line if...else statement:
        <?php
            $a = 13;

            $b = $a < 10 ? "Hello" : "Good Bye";
            
            echo $b;
        ?>
    -> This technique is known as Ternary Operators, or Conditional Expressions.

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

5. PHP Nested if Statement:

    # Nested If:
    -> You can have if statements inside if statements, this is called nested if statements.
    -> Example: An if inside an if:
        <?php
            $a = 13;

            if ($a > 10) {
              echo "Above 10";
              if ($a > 20) {
                echo " and also above 20";
              } else {
                echo " but not above 20";
              }
            }
        ?>