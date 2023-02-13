<?php
require "connection/connection.php"
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <title>Tutorial09</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="css/style.css" rel="stylesheet">

</head>

<body>
   <h1><u>Well Done!</u></h1>
   <?php
   if($db -> connect_errno)
   {
      echo $db->connect_error;
   }
   else
   {
      echo "Connection Done !";
   }
   ?>
   <p>You're successfully connected to the database.</p>
</body>

</html>