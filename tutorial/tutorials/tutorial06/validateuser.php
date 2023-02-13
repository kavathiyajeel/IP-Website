<?php
    session_start();
  
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == "jk@gmail.com" && $password == "1234567")
    {
        $_SESSION['email']=$email;
        header("location:index.php"); 
    }
    else
    {
        header("location:login.php");

    }



?>