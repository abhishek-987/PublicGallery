<?php
  //complete backend file


  include 'connection/db.inc.php';
  if(!isset($_POST['submit'])){
    header("Location:newuser.php?signup=success");
    //going back and displaying message into url
    exit();
  }else{
  $first = $_POST['signup-first'];
  $last = $_POST['signup-last'];
  $email = $_POST['signup-email'];
  $username = $_POST['signup-username'];
  $password = $_POST['signup-password'];
  if(empty($first)||empty($last)||empty($email)||empty($username)||empty($password))
  {
    header("Location:newuser.php?signup=empty");
    exit();
  }else
  {
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("Location:newuser.php?signup=emailerror&first=$first&last=$last&username=$username");
    exit();
    }else{
        $object=new dbh;

        $stmt=$object->connect()->prepare("INSERT into users(firstname , lastname , email, username, password)
        VALUES(?, ?, ?, ?, ?);");
        $stmt->execute([$first,$last,$email,$username,$password]);
          header("Location:newuser.php?signup=success");
          //going back and displaying message into url
          exit();
      }
    }
  }
?>
