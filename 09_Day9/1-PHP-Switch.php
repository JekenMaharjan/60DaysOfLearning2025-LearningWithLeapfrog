# PHP switch Statement:
-> The switch statement is used to perform different actions based on different conditions.
-> Use the switch statement to select one of many blocks of code to be executed.
-> Syntax:
    <?php
        switch (expression) {
            case label1:
            //code block
            break;
            case label2:
            //code block;
            break;
            case label3:
            //code block
            break;
            default:
            //code block
        }
    ?>
-> This is how it works:
    - The expression is evaluated once
    - The value of the expression is compared with the values of each case
    - If there is a match, the associated block of code is executed
    - The break keyword breaks out of the switch block
    - The default code block is executed if there is no match
-> Example: 
    <?php
        $favcolor = "red";

        switch ($favcolor) {
          case "red":
            echo "Your favorite color is red!";
            break;
          case "blue":
            echo "Your favorite color is blue!";
            break;
          case "green":
            echo "Your favorite color is green!";
            break;
          default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
    ?>

# The Break Keyword:
-> When PHP reaches a break keyword, it breaks out of the switch block.
-> This will stop the execution of more code, and no more cases are tested.
-> The last block does not need a break, the block breaks (ends) there anyway.
-> Warning: If you omit the break statement in a case that is not the last, and that case gets a match, the next case will also be executed even if the evaluation does not match the case!
-> Example:
    - What happens if we remove the break statement from case "red"?
    - $favcolor is red, so the code block from case "red" is executed, but since it has no break statement, the code block from case "blue" will also be executed:
        <?php
            $favcolor = "red";

            switch ($favcolor) {
              case "red":
                echo "Your favorite color is red!";
              case "blue":
                "Your favorite color is blue!";
                break;
              case "green":
                echo "Your favorite color is green!";
                break;
              default:
                echo "Your favorite color is neither red, blue, nor green!";
            }
        ?>

# The Default Keyword:
-> The default keyword specifies the code to run if there is no case match:
-> Example: If no cases get a match, the default block is executed:
    <?php
        $d = 4;

        switch ($d) {
          case 6:
            echo "Today is Saturday";
            break;
          case 0:
            echo "Today is Sunday";
            break;
          default:
            echo "Looking forward to the Weekend";
        }
    ?>
-> The default case does not have to be the last case in a switch block:
    Example:
        - Putting  the default block elsewhere than at the end of the switch block is allowed, but not recommended.
        <?php
            $d = 4;

            switch ($d) {
            default:
                echo "Looking forward to the Weekend";
                break;
            case 6:
                echo "Today is Saturday";
                break;
            case 0:
                echo "Today is Sunday";
            }
        ?>
-> Note: If default is not the last block in the switch block, remember to end the default block with a break statement.

# Common Code Blocks:
-> If you want multiple cases to use the same code block, you can specify the cases like this:
-> Example:
    - More than one case for each code block:
        <?php
            $d = 3;

            switch ($d) {
              case 1:
              case 2:
              case 3:
              case 4:
              case 5:  
                echo "The weeks feels so long!";
                break;
              case 6:
              case 0:
                echo "Weekends are the best!";
                break;
              default:
                echo "Something went wrong";
            }
        ?>