<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form Build using PHP</title>
</head>
<body>
    <main>
    <!-- # Use GET when:
        -> You want to send data via URL parameters (e.g., form.php?name=Jeken)
        -> The data is not sensitive (e.g., search queries, filters)
        -> You want the form data to be bookmarkable or shareable
        -> The data is small (URL length limit: around 2000 characters)

    # Use POST when:
        -> You are sending sensitive or private information (e.g., passwords)
        -> You are sending large amounts of data (like file uploads or long messages)
        -> You don't want the data to appear in the URL
        -> You are performing actions that change data (e.g., submitting a registration form)

    # So, According to above difference and reason we choose POST method for Forms, since Form data is always sensitive and important or private info.
    # Proper validation of form data is important to protect your form from hackers and spammers! 
    # ALWAYS THINK SECURITY FIRST WHEN PROCESSING PHP FORMS AND ALL.. -->
        
        <!-- Using POST method to Submit the FORM -->
        <form action="welcome.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name"><br>

            <label for="email">E-mail:</label>
            <input type="text" name="email"><br>

            <label for="website">Website:</label>
            <input type="text" name="website"><br>

            <label for="comment">Comment:</label>
            <textarea name="comment" rows="5" cols="40"></textarea><br>

            <label for="gender">Gender:</label>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <br>

            <input type="submit">
        </form>

        <!-- Using GET method to Submit the FORM -->
        <!-- <form action="welcome.php" method="GET">
            <label for="name">Name:</label>
            <input type="text" name="name">
            <label for="email">E-mail:</label>
            <input type="text" name="email">
            <input type="submit">
        </form> -->
    </main>
</body>
</html>