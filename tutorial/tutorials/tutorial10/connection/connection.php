
<?php

$user = "root";
$pass = "";
$db = "tutorial10";


$db = new mysqli("localhost",$user,$pass,$db);
if($db -> connect_errno)
{
    echo $db->connect_error;
}
else
{
    echo "";
}
?>