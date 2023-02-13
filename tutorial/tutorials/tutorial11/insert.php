<?php
require 'connection/connection.php';

if(isset($_POST['submit']))
{
$name = $_POST['fname'];
$user = $_POST['email'];
$pass = $_POST['password'];
$city = $_POST['city'];

// database insert SQL code
$sql = "INSERT INTO `registration` (`id`,`full_name`,`email`,`password`,`city`) VALUES ('0', '$name','$user', '$pass','$city')";

// insert in database 
$rs = mysqli_query($db , $sql);
if($rs)
{
header('location:index.php');
}
}

?>