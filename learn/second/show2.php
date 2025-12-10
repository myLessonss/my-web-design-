<?php
//connect to database
$databased=mysqli_connect("localhost","root","","employeeDB");
if(!$databased){
    die("Not connected".mysqli_connect_error());
}echo "connected";

//fetching data from table
$data="SELECT * FROM create_user";
$result=mysqli_query($databased,$data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Created User</title>
</head>
<body>
    <h1><u>List of created user</u></h1>
    <table border="2">
        <tr>
            <th>USER NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>REPEATED PASSWORD</th>
        </tr>
        <?php
        if(mysqli_num_rows($result)>0){
            while ($row=mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['final_password']."</td>";
                echo "</tr>";
            }
        }else{
            echo "<tr><td>Not Found</td></tr>";
        }
        mysqli_close($databased);
        ?>
    </table>
</body>
</html>