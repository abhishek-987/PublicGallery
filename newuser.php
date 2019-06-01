<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>signup</title>
        <link rel = "icon" type = "image/png" href = "images/title.png">
        <link rel="stylesheet" href="css/styles.css">
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
            <div id="login-div">
                <div id="login">
                    <form action="session-start.php" method="GET">
                        <?php 
                            if(isset($_GET['login-username'])){
                                $username=$_GET['login-username'];
                                echo '<input type="text" name="login-username" id="login-username" value="'.$username.'">';
                            }else
                                echo  '<input type="text" name="login-username" id="login-username" placeholder="username">';
                        ?>
                        <input type="password" name="login-password" id="login-password" placeholder="password">
                        <button type="submit">Signin</button>
                        <button onclick="window.location.href = 'newuser.php';">Signup</button>
                    </form>
                </div>
                
                <?php
                    if(isset($_GET['login-username']))
                        echo "<br>username or password is incorrect";
                    if(isset($_GET['login-error']))
                        echo "<br>fileds empty";
                ?>
            </div>
        </div>
        <div id="signuppage">
            <form action="signup-newuser.php" method="POST">
            <?php
                if(isset($_GET['first'])){
                    $firstname=$_GET['first'];
                    echo '<input type="text" name="signup-first" value="'.$firstname.'"><br>';
                }
                else
                    echo  '<input type="text" name="signup-first" placeholder="first_name"><br>';
                if(isset($_GET['last'])){
                        $lastname=$_GET['last'];
                        echo '<input type="text" name="signup-last" value="'.$lastname.'"><br>';
                    }
                    else
                        echo  '<input type="text" name="signup-last" placeholder="last_name"><br>';
            ?>
            <input type="text" name="signup-email" placeholder="email_id">
            <br>
            <?php
            if(isset($_GET['username'])){
                $username=$_GET['username'];
                echo '<input type="text" name="signup-username" value="'.$username.'"><br>';
            }
            else
                echo  '<input type="text" name="signup-username" placeholder="username"><br>';
            ?>
            <input type="password" name="signup-password" placeholder="password">
            <br>
            <br>
            <button type="submit" name="submit">Signup</button>
            </form>
            <?php
                if(!isset($_GET['signup']))
                {
                    exit();
                }else{
                     $signupcheck=$_GET['signup'];
                    if($signupcheck=="empty"){
                        echo "you didn't fill one or more field";
                        exit();
                    }else if($signupcheck=="emailerror")
                    {
                        echo "email error is there";
                        exit();
                    }else if($signupcheck=="success")
                    {
                        echo "you have been successfully signed up go and log in again";
                    }
                }
            ?>
    
        <div class="footer">
            <footer id="footer">

            </footer>

        </div>
    </body>
</html>