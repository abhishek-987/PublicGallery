<?php

    //complete backend file


    include 'connection/db.inc.php';

    session_start();
    $u_username=$_GET['login-username'];
    $u_password=$_GET['login-password'];
    $_SESSION['login-username']=$u_username;
    $_SESSION['login-password']=$u_password;

    if(empty($u_username)||empty($u_password))
    {
        session_unset();
        session_destroy();
        header("Location:index.php?error=fieldsempty");
        exit();
    }

    $object=new dbh;

    $stmt=$object->connect()->prepare("SELECT password FROM users WHERE username=?");
    $stmt->execute([$u_username]);
    $data=$stmt->fetch();
    

    if($data['password']==$u_password)
        header("Location:userpage.php?login-signin=success");
    else
        header("Location:index.php?login-signin=failed&login-username=$u_username");

?> 