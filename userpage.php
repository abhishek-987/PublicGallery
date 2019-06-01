<!DOCTYPE html>
<?php
    session_start();

?>
<html>
    <head>
        <title>user</title>
        <link rel = "icon" type = "image/png" href = "images/title.png">
        <link rel="stylesheet" href="css/styles.css">
        <meta charset="UTF-8">
        <meta name="description" content="Free Web tutorials">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="author" content="John Doe">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div id="main-wrapper" class="main-wrapper">
            <div id="main-logo-div">
                <img src="images/mainlogo.png" id="main-logo">
                <div id="heading">
                    Gallery
                </div>
            </div>
            <div id="navigation">
                
                <a href="index.php">Home</a>
                <a href="#">Contact</a>
                <a href="#">Search</a>
            </div>
            <div id="user-details">
                <?php
                    echo "welcome ".$_SESSION['login-username'];
                    echo " <a href='session-stop.php' style='text-decoration:none'> logout</a>";

                ?>
            </div>
        </div>
        <div id="user-images">
            <?php
                 include 'user-images.php';
            ?>
        </div>
        <div class="upload">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                
                <input type="file" name="file" id="upload-file">
                <br>
                <button type="submit" name="submit" id="upload-button">Upload</button>

            </form>

        </div>
        <div class="footer">
            <footer id="footer">

            </footer>

        </div>
    </body>
</html>