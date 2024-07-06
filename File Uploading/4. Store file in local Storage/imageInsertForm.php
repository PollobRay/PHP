<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>File Upload and view With PHP and MySql</title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <button type="submit" name="btn-upload">upload</button>
        </form>
        <a href="index.php">back to previous</a>
    </body>
</html>