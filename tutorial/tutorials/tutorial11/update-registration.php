<?php
session_start();
$_SESSION['id']= $_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <script src ="jquery-3.6.0.min.js"></script>
    
  </head>
  <body>
    <div class="signup-box">
	    <h1>registration</h1>
      <?php
      require "connection/connection.php";

      $n=@$_REQUEST['id'];
      //echo $n;
      $q="select * from registration where id='$n'";
      $res=mysqli_query($db,$q);
      $m=mysqli_fetch_array($res);
      {
        ?>
      <form action="update.php" id="form" method="POST" name="form" onsubmit="return myfunction()">
      
      <label>Name</label>
      <input type="text" placeholder="" name="fname" id="name-f" value="<?php echo $m['full_name'];?>" required/> 
      <label>Email</label>
      <input type="Email" placeholder=""  name="email" id="email" value="<?php echo $m['email'];?>"  required/>
      <label>Password</label>
      <input type="password" placeholder="" name="password" id="pass" value="<?php echo $m['password'];?>"required/>
      <label>Confirm Password</label>
      <input type="password" placeholder="" id="cpassword" value="<?php echo $m['password'];?>" required/>
      <label>City</label>
      <input type="text" placeholder="" id="city" name="city" value="<?php echo $m['city'];?>" required/>  
      <input type="submit" name="submit" value="update">  
      </form>
      <?php
      }

      ?>
		    
     
    </div>
    
  </body>
</html>
<script type="text/javascript">
  function myfunction() {
    var awe = /^[a-zA-Z]+$/;
    var b = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
    var c = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,20}$/;

    var fn = document.forms["form"]["fname"];
    var email = document.forms["form"]["email"];
    var password = document.forms["form"]["password"];
    var cpassword = document.forms["form"]["cpassword"];
    var add = document.forms["form"]["city"];
    // var func=fn.value;		 
    if (fn.value == "") {
      window.alert("Full Name Is Empty.");
      fn.focus();
      return false;
    } else if ((fn.value.length <= 3) || (fn.value.length > 15)) {
      window.alert("First name must be 3 or less than 15.");
      fn.focus();
      return false;
    }
    if (fn.value.match(awe)) {

      email.focus();
      //return false;
    } else {
      alert("Please Enter values in Character only");
      fn.focus();
      return false;
    }

    if (email.value == "") {
      window.alert("Email Address is Empty.");
      email.focus();
      return false;
    }
    if (email.value.match(b)) {
      password.focus();
    } else {
      window.alert("Please Enter Valid Email.");
      email.focus();
      return false;
    }

    if (password.value == "") {
      window.alert("Password is Empty.");
      password.focus();
      return false;
    } else if ((password.value.length <= 7) || (password.value.length > 20)) {
      window.alert("Password is must be 8 or less than 20.");
      password.focus();
      return false;
    } else {
      cpassword.focus();
    }

    //confirm password
    if (cpassword.value == "") {
      window.alert("Reenter Password Is Empty.");
      cpassword.focus();
      return false;
    } else if (cpassword.value != password.value) {
      window.alert("Reenter password is wrong.");
      cpassword.focus();
      return false;
    }
    if (add.value == "") {
      window.alert("City Is Empty.");
      add.focus();
      return false;
    }
    //password
    else {
      //alert("Succesfully Register");
    }
  }
</script>

