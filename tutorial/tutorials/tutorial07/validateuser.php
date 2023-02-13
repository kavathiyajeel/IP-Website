<?php
    session_start();
  
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == "jk@gmail.com" && $password == "1234567")
    {

        if(isset($_POST['remember'])){
            setcookie("usercookie",$email,time()+60);
            setcookie("passcookie",$password,time()+60);

        }
        else{
            setcookie("usercookie",$email,time());
            setcookie("passcookie",$password,time());

        }


        $_SESSION['email']=$email;
        header("location:index.php"); 
    }
    else
    {
        header("location:login.php");

    }
?>