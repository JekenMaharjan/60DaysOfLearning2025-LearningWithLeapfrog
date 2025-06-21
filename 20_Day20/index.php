<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- file_uploads = On ✅ -->
     <div class="file-upload-form">
        <form class="forms" action="upload.php" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">Select image to upload:</label><br><br>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
    
</body>
</html>