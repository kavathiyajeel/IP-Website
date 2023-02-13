<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet"/>
    <script src ="jquery-3.6.0.min.js"></script>

    
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <form action="#" id="form">
        <label>First name</label>
        <input type="text" placeholder="" id="fname"/> 
        <label>Last name</label>
        <input type="text" placeholder=""  id="lname"/>
        <label>Email</label>
        <input type="Email" placeholder=""  id="email"/>
        <label>Password</label>
        <input type="password" placeholder="" id="password" />
        <label>Confirm Password</label>
        <input type="password" placeholder="" id="cpassword"/>
        <label>Age</label>
        <input type="number" placeholder="" min="1" max="100"/ id="age">  
        <label> Birth date</label>
        <input type="date" min="2000-01-01" max="2099-01-01" placeholder="" id="bdate"/>
        <label>City</label>
        <input type="text" placeholder=""  id="city"/>
        <label>State</label>
        <input type="text" placeholder="" id="state"/>
        <label>Country</label>
        <input type="text" placeholder="" id="country"/>  
        <label>Profile Photo</label>
        <input type="file" placeholder="" id="pphoto"/>  
        <input type="submit" name="" value="SUMBIT"/>  
    </form>
     
    </div>
    <p class="para-3">
      Already have an account? <a href="login.php">Login here</a>
    </p>
  </body>
</html>
