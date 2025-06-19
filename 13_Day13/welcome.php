<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Welcome <?php //echo $_POST["name"]; ?><br>
    Your email address is <?php //echo $_POST["email"]; ?><br>

    <Welcome <?php //echo $_GET["name"]; ?><br>
    Your email address is <?php //echo $_GET["email"]; ?>

    <?php
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     $username = $_POST['name'];
        //     $email = $_POST['email'];
        //     echo "Welcome, " . htmlspecialchars($username) . "<br>";
        //     echo "Your email address is " . htmlspecialchars($email);
        // }
    ?> 

    # Validate Form Data With PHP:

    -> We will also do two more things when the user submits the form:
        1. Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
        2. Remove backslashes \ from the user input data (with the PHP stripslashes() function)
    -> The next step is to create a function that will do all the checking for us (which is much more convenient than writing the same code over and over again).
    -> We will name the function test_input().
    -> Now, we can check each $_POST variable with the test_input() function, and the script looks like this: -->

    <?php
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Assigning value to variables
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
            $gender = test_input($_POST["gender"]);
            // Display Results
            echo "<h2>Your Input:</h2>";
            echo "Name : " . $name . "<br>";
            echo "E-mail : " . $email . "<br>";
            echo "Website : " . $website . "<br>";
            echo "Comment : " . $comment . "<br>";
            
            echo "Gender : " . $gender . "<br>";
        }

        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
    ?>

    <!--
    -> Notice that at the start of the script, we check whether the form has been submitted using $_SERVER["REQUEST_METHOD"]. If the REQUEST_METHOD is POST, then the form has been submitted - and it should be validated. If it has not been submitted, skip the validation and display a blank form.
    -> However, in the example above, all input fields are optional. The script works fine even if the user does not enter any data.
    -> The next step is to make input fields required and create error messages if needed. -->

</body>
</html>