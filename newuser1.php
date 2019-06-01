<form action="signup-newuser.php" method="POST">
            <?php
                echo "<p class='signup-askings'>FirstName</p>";
                if(isset($_GET['first'])){
                    $firstname=$_GET['first'];
                    echo '<input type="text" class="signup-details" name="signup-first" value="'.$firstname.'"><br>';
                }
                else
                    echo  '<input type="text" class="signup-details" name="signup-first" placeholder="first_name"><br>';
                    echo "<p class='signup-askings'>LastName</p>";
                    if(isset($_GET['last'])){
                        $lastname=$_GET['last'];
                        echo '<input type="text" class="signup-details" name="signup-last" value="'.$lastname.'"><br>';
                    }
                    else
                        echo  '<input type="text" class="signup-details" name="signup-last" placeholder="last_name"><br>';
            ?>
            <p class='signup-askings'>Email</p>
            <input type="text" name="signup-email" class="signup-details" placeholder="email_id">
            <br>
            <?php
            echo "<p class='signup-askings'>Username</p>";
            if(isset($_GET['username'])){
                $username=$_GET['username'];
                echo '<input type="text" class="signup-details" name="signup-username" value="'.$username.'"><br>';
            }
            else
                echo  '<input type="text" class="signup-details" name="signup-username" placeholder="username"><br>';
            ?>
            <p class='signup-askings'>Password</p>
            <input class="signup-details" type="password" name="signup-password" placeholder="password">
            <br>
            <br>
            <input class="signup-details" type="submit" name="submit" id="signup-button">
            </form>

            <?php
            /*
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
                }*/
            ?>