<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";


$conn = mysqli_connect($servername,$username,$password,$dbname);
 if ($conn) 
 {
    echo "";
 }
else
{
    die("connection failled".mysqli_connect_errno());
}

?>
