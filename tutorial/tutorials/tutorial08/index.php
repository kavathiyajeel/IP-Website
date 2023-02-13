<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
          <title>Profile Photo</title>
          <link rel="stylesheet" href="Css/style.css" />
          <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
          <script src="jquery-3.6.0.min.js"></script>

          <script>
          $(document).ready(function() {
                    $('#form').submit(function() {

                              var image = $('#image').val();



                              if (image == "") {
                                        alert("Profile Photo cannot be empty");
                              }


                    });
          });
          </script>
</head>

<body>

          <div class="profile-box">
                    <h1>Choose Profile Photo</h1>
                    <form action="upload.php" id="form" method="POST" enctype="multipart/form-data">
                              <label>Profile Photo</label>
                              <input type="file" placeholder="" id="image" class="pphoto" name="image" />
                              <input type="submit" name="btnupload" value="Upload" />
                              
                    </form>
          </div>
          <div class="para">
          <?php
                                if(isset($_SESSION['message'])&& ($_SESSION['message']))
                                {
                                  echo'<p>'.$_SESSION['message'].'</p>';
                                  unset($_SESSION['message']);
                                }
                              ?>
          </div>
</body>

</html>