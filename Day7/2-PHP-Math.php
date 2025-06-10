# PHP Math:
-> PHP has a set of math functions that allows you to perform mathematical tasks on numbers.

    1. PHP pi() Function:
    -> The pi() function returns the value of PI. Example:
        <?php
            echo(pi());
        ?>

    2. PHP min() and max() Functions:
    -> The min() and max() functions can be used to find the lowest or highest value in a list of arguments: Example:
        <?php
            echo(min(0, 150, 30, 20, -8, -200));
            echo(max(0, 150, 30, 20, -8, -200));
        ?>

    3. PHP abs() Function:
    -> The abs() function returns the absolute (positive) value of a number. Example:
        <?php
            echo(abs(-6.7));
        ?>

    4. PHP sqrt() Function:
    -> The sqrt() function returns the square root of a number. Example:
        <?php
            echo(sqrt(64));
        ?>

    5. PHP round() Function:
    -> The round() function rounds a floating-point number to its nearest integer. Example:
        <?php
            echo(round(0.60));
            echo(round(0.49));
        ?>

    6. Random Numbers:
    -> The rand() function generates a random number. Example:
        <?php
            echo(rand());
        ?>
    -> To get more control over the random number, you can add the optional min and max parameters to specify the lowest integer and the highest integer to be returned.
    -> For example, if you want a random integer between 10 and 100 (inclusive), use rand(10, 100): Example:
        <?php
            echo(rand(10, 100));
        ?>