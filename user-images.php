<?php

    //complete backend file
    
    
    $name=$_SESSION['login-username'];
    
    $path="user-images/$name *";

    $fileinfo=glob($path);
    echo "<br>";

    foreach($fileinfo as $i)
    {
        echo "<img src='".$i."' style='width:250px;height:250px'><br>";
    }



?>