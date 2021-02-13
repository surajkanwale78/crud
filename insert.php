<?php
include("connection.php");
error_reporting(0);
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
                    <input type="text" name="rollno" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>name</label>
                </td>
                <td>
                    <input type="text" name="studentname" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>class</label>
                </td>
                <td>
                    <input type="text" name="class" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="submit">
                </td>
                <td>
                    <input type="reset" name="reset" value="reset">
                </td>
            </tr>
        </table>
    </form>
    <?php

    if($_GET['submit'])  
    {   
        $rn = $_GET['rollno'];
        $sn = $_GET['studentname'];
        $cl = $_GET['class'];

        if($rn!="" &&  $sn!="" &&  $cl!="") 
        {
            
         $query = "INSERT INTO STUDENT VALUES('$rn','$sn','$cl')";
         $data = mysqli_query($conn,$query);

            if($data) 
            {
                echo "data inserted succesfully.<a href='display.php'>check display list here</a>";
            }
        }
            else
            {
                echo "all field are requird";
            }

    }
    ?>
</body>

</html>