<?php
    session_start();
    unset($_SESSION['email']);
    $_SESSION['logoutmsg']='Logout Sucessfully';
    header("location:index.php");
    
?>


