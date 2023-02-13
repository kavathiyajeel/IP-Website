

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
<div class="profile-box">        
  <div class="para-3">
<?php

session_start();
$message = '';
if (isset($_POST['btnupload']) && $_POST['btnupload']=='Upload')
{
    if(isset($_FILES['image']) && $_FILES['image']['error']== UPLOAD_ERR_OK)
    {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $filename = $_FILES['image']['name'];
        $filesize = $_FILES['image']['size'];
        $filetype = $_FILES['image']['type'];
        $filecomp = explode('.',$filename);
        $fileext = strtolower(end($filecomp));

        $allowedfilext = array('jpg','png','svg','bmp','jpeg');
        if(in_array($fileext,$allowedfilext)){
            $uploaddir = 'images/';
            $destion = $uploaddir.$filename;
            if(move_uploaded_file($fileTmpPath,$destion)){
                $message= "<p style=color:white;>File Uploaded Successfully!</p>";
            }
            else{
                $message= "<p style=color:red;>There is internal file upload error.</p>";
            }
        }
        else{
            $message= "<p style=color:red;>Allowed extensions are jpg,png,svg,bmp,jpeg</p>";
        }
    }
    else{
        $message= "<p style=color:red;>There is an error in file upload.</p>";
    }
}
else{
}
$_SESSION['message']=$message;
header('location:index.php');




?>
</div>
</div>
          
</body>
</html>