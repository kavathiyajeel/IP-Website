<?php
require 'connection/connection.php';
session_start();
$id=$_REQUEST['id'];

$sql="UPDATE `registration` SET `is_delete`=1 WHERE id= '$id'";
$message= "<p style=color:red;>Data Deleted Successfully!</p>";
$_SESSION['message'] = $message;
$rs = mysqli_query($db , $sql);
if($rs)
{
	header('location:index.php');
}


?>