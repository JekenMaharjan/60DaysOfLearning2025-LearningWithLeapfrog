<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Welcome <?php //echo $_POST["name"]; ?><br>
    Your email address is <?php //echo $_POST["email"]; ?><br> -->

    <!-- Welcome <?php //echo $_GET["name"]; ?><br>
    Your email address is <?php //echo $_GET["email"]; ?> -->

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['name'];
            $email = $_POST['email'];
            echo "Welcome, " . htmlspecialchars($username) . "<br>";
            echo "Your email address is " . htmlspecialchars($email);
        }
    ?>

</body>
</html>