<?php
//connect to database
$database=mysqli_connect("localhost","root","","employeeDB");
if (!$database) {
    die("Connection Failed".mysqli_connect_error());
}
echo "Connected.";
//fetching data
$data="SELECT * FROM login";
$result=mysqli_query($database,$data);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Display Data</title>
    </head>
    <body>
        <h2>DATA ENTERED IN DATABASE</h2>
        <table border="1">
            <tr>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
            </tr>
                <?php
                if (mysqli_num_rows($result)>0) {
                    while ($row=mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row['first_name']."</td>";
                        echo "<td>".$row['second_name']."</td>";
                        echo "<td>".$row['email']."</td>";
                        echo "<td>".$row["passw"]."</td>";
                        echo "</tr>";
                    }
                }else{
                    echo "<tr><td> No records Found</td></tr>";
                }
                mysqli_close($database);
                ?>
        </table>
    </body>
</html>