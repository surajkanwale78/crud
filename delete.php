<?php
include("connection.php");
error_reporting(0);
$rollno = $_GET['rn'];
$query = "DELETE FROM STUDENT WHERE ROLLNO='$rollno'";
$data = mysqli_query($conn,$query);

if($data)
{
    echo"<font color='green'>record delete succesfully";
}
else
{
    echo"<font color='red'>Soory, record is not deleted";
}
?>
