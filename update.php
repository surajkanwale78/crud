<?php
include("connection.php");
error_reporting(0);

echo $_GET['rn'];
echo $_GET['sn'];
echo $_GET['cl'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">

        <table>
            <tr>
                <td>
                    <label>rollno</label>
                </td>
                <td>
                    <input type="text" name="rollno" value="<?php echo $_GET['rn'];?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>name</label>
                </td>
                <td>
                    <input type="text" name="name" value="<?php echo $_GET['sn'];?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>class</label>
                </td>
                <td>
                    <input type="text" name="class" value="<?php echo $_GET['cl'];?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="update">
                </td>
            </tr>
        </table>
    </form>
<?php

    if($_GET['submit'])  
    {
      
      $rollno = $_GET['rollno'];
       $name = $_GET['name'];
       $class = $_GET['class'];

       $query = "UPDATE STUDENT SET NAME='$name',CLASS='$class' WHERE ROLLNO='$rollno'";
      $data = mysqli_query($conn,$query);

       if($data)
       {
           echo "record updated succesfully.<a href='display.php'>check update list here</a>";
       }
       else
       {
           echo"record  not updated ";
       }

    }
    else
    {
     echo "<font color='blue'>click on update button to save the changes"; 
    }
 ?>

</body>

</html>