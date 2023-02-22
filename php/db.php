<?php 

$conn = new mysqli('localhost','root','','informácie');
if(!$conn.mysqli_connect_error())
{
    echo "Connection Denied";
}


?>
