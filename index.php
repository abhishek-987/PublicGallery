<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Index-Page</title>
        <link rel = "icon" type = "image/png" href = "images/title.png">
        <link rel="stylesheet" href="css/styles.css">
        
    </head>
    <body>
        <div id="main-wrapper" class="main-wrapper">
            <div id="main-logo-div">
                <img src="images/mainlogo.png" id="main-logo">
                <div id="heading">
                    Gallery |
                </div>
            </div>
            <div id="navigation">
                
                <a href="index.php">Home</a>
                <a href="#">Contact</a>
                <a href="#">Search</a>
            </div>
            <div id="login-div">
                <div id="login">
                    <form action="session-start.php" method="GET">
                        <?php 
                            if(isset($_GET['login-username'])){
                                $username=$_GET['login-username'];
                                echo '<input type="text" name="login-username" class="login-details" id="login-username" value="'.$username.'">';
                            }else
                                echo  '<input type="text" name="login-username" class="login-details" id="login-username" placeholder="username">';
                        ?>
                        <input type="password" name="login-password" class="login-details" id="login-password" placeholder="password">
                        <button type="submit" id="signin-button">Signin</button>
                    </form>
                   
                </div>
                
                <?php
                    if(isset($_GET['login-username']))
                        echo "<br><p><font color='red'><b>username or password is incorrect</b></font></p>";
                    if(isset($_GET['login-error']))
                        echo "<br><p><font color='red'>fileds empty</font></p>";
                ?>
            </div>
        </div>
        <div id="first-heading">
            <div id="signup-heading">
                <h1 id="signup-heading-heading">Signup with us</h1>
                <br>
                <p id="signup-para">Signup with us and access your public gallery within seconds from anywhere. And showcase your word with everyone out there. </p>
            </div>
            <div id="signup-portal">
                <?php include 'newuser1.php';?>
            </div>
        </div>
        <br><br>
        <div class="footer">
            <footer id="footer">

            </footer>

        </div>
    </body>
</html>