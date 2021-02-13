<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
  margin:10px;
  padding: 7px;
}

</style>


<?php
include("connection.php");
error_reporting(0);
$query = "SELECT * FROM STUDENT";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


if($total != 0) 
{
    ?>
    <table style="width:40%">
        <tr >
            <th>rollno</th>
            <th>name</th>
            <th>class</th>
            <th colspan="2">action</th>
        </tr>
    <?php
    while($result = mysqli_fetch_assoc($data))
    {
        echo "<tr>
            <td>".$result['rollno']."</td>
            <td>".$result['name']."</td>
            <td>".$result['class']."</td>
            <td><a href='update.php?rn=$result[rollno] &sn=$result[name] &cl=$result[class]'>edit</td>
            <td><a href='delete.php?rn=$result[rollno] &sn=$result[name] &cl=$result[class]'onclick='checkdelete()'>delete</td>
         </tr>";
    }

}
    else
    {
        echo "no record found";
    }

?>
 </table>
<script>
function checkdelete()
{
    return confirm('are you sure you want to delete this data???');
}
</script>