<!DOCTYPE html>
<html lang="en">
<?php

session_start();
$message = isset($_SESSION['logoutmsg'])?$_SESSION['logoutmsg']:"";
unset($_SESSION['logoutmsg']);

$usercookie=isset($_COOKIE['usercookie'])?$_COOKIE['usercookie']:"";
$passcookie=isset($_COOKIE['passcookie'])?$_COOKIE['passcookie']:"";
$remembercookie=isset($_COOKIE['usercookie'])?"checked":"";

?>
<head>
    <title>Log in</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300display=swap" rel="stylesheet"/>
    <script src ="jquery-3.6.0.min.js"></script>

    
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form action="validateuser.php" method="post" id="form">
          <input type="Email" value="<?=$usercookie?>" placeholder="Enter username : jk@gmail.com" name="email" id="email" r>
          <input type="password" value="<?=$passcookie?>" placeholder="Enter password : 1234567" name="password" id="password"> 
          <!--input type="checkbox" <?=$remembercookie?> id="remember-me" value="remember"-->  
          <label for="remember-me"><input type="checkbox" <?=$remembercookie?> id="remember-me" name="remember">Remember me</label>
          <input type="submit" value="LOGIN" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <p class="para-2">
      Not have an account? <a href="SignUp.php">Sign Up Here</a>
    </p>


    <h3 class="text-sucess"><?=$message?></h3>
        </form>
    </div>
    </body>
</html>
