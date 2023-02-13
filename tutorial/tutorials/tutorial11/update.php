<?php
session_start();
require 'connection/connection.php';
$id=$_SESSION['id'];


if(isset($_POST['submit']))
{
$name = $_POST['fname'];
$user = $_POST['email'];
$pass = $_POST['password'];
$city = $_POST['city'];

// database insert SQL code
$sql = "UPDATE `registration` set `full_name`= '$name',`email` = '$user',`password`='$pass',`city`='$city' WHERE id= '$id'";
$message= "<p style=color:yellow;>Data Updated Successfully!</p>";
$_SESSION['message'] = $message;
// insert in database 
$rs = mysqli_query($db, $sql);
if($rs)
{
	header('location:index.php');
}
}
?>