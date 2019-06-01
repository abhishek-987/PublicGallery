<?php

    //complete backend file
    session_start();

  if(isset($_POST['submit'])){
    $file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];
    //or $filename=$_FILES['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];//gives the address
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    print_r($file);
    
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    $allowed=array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed)){
      if($fileError===0){
        if($fileSize<2000000){
          $fileNameNew=$_SESSION['login-username'].uniqid(' ',true).".".$fileActualExt;
          $fileDestination='user-images/'.$fileNameNew;
          move_uploaded_file($fileTmpName,$fileDestination);
          header("location: userpage.php?uploadSuccess");
        }else{
          echo "your file is too big";
        }
      }else{
        echo "there is some error";
      }
    }else{
      echo "file extension not matching";
    }

  }


 ?>
