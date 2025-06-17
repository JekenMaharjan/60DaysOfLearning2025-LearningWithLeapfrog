<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form Build using PHP</title>

    <style>
        .error {color: red;}
    </style>
</head>
<body>
    <main>

        <?php
            // define variables and set to empty values
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $name = $email = $gender = $comment = $website = "";
            
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
                // Or, return htmlspecialchars(stripslashes(trim($data)));
                }
                
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "* Name is required";
                } else {
                    $name = test_input($_POST["name"]);
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                        $nameErr = "Only letters and white space allowed";
                      }
                }

                if (empty($_POST["email"])) {
                    $emailErr = "* Email is required";
                } else {
                    $email = test_input($_POST["email"]);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                      }
                }
                
                if (empty($_POST["website"])) {
                    $website = "";
                } else {
                    $website = test_input($_POST["website"]);
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                        $websiteErr = "Invalid URL";
                      }
                }
                
                if (empty($_POST["comment"])) {
                    $comment = "";
                } else {
                    $comment = test_input($_POST["comment"]);
                }
                
                if (empty($_POST["gender"])) {
                    $genderErr = "* Gender is required";
                } else {
                    $gender = test_input($_POST["gender"]);
                }
            }
        ?>
        
        <!-- Using POST method to Submit the FORM -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <!-- NAME -->
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $name;?>">
            <br>
            <span class="error"><?php echo $nameErr;?></span>
            <br><br>

                <!-- E-mail -->
            <label for="email">E-mail:</label>
            <input type="text" name="email" value="<?php echo $email;?>">
            <br>
            <span class="error"><?php echo $emailErr;?></span>
            <br><br>

                <!-- Website -->
            <label for="website">Website:</label>
            <input type="text" name="website" value="<?php echo $website;?>">
            <br>
            <span class="error"><?php echo $websiteErr;?></span>
            <br><br>

                <!-- Comment -->
            <label for="comment">Comment:</label>
            <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
            <br><br>

                <!-- Gender -->
            <label for="gender">Gender:</label>
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="female") echo "checked";?>
            value="female">Female
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="male") echo "checked";?>
            value="male">Male
            <input type="radio" name="gender"
            <?php if (isset($gender) && $gender=="other") echo "checked";?>
            value="other">Other
            <br>
            <span class="error"><?php echo $genderErr;?></span>
            <br><br>

            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        // Display Results:
        echo "<h2>Your Input:</h2>";
        echo "Name : " . $name . "<br>";
        echo "E-mail : " . $email . "<br>";
        echo "Website : " . $website . "<br>";
        echo "Comment : " . $comment . "<br>";
        echo "Gender : " . $gender . "<br>";
        ?>

    </main>
</body>
</html>