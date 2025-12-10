<?php
$database = mysqli_connect("localhost", "root", "", "University");

if (!$database) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM employee";
$result = mysqli_query($database, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            
        }
    </style>
</head>
<body>

<h2>Employee Records</h2>

<table>
    <tr>
        <th style="background-color:blue;">Name</th>
        <th>Address</th>
        <th>Salary</th>
        <th>Period (Years)</th>
        <th>Benefit</th>
        <th>Total</th>
        <th>Received / Month</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['address']."</td>";
            echo "<td>".$row['salary']."</td>";
            echo "<td>".$row['period']."</td>";
            echo "<td>".$row['benefit']."</td>";
            echo "<td>".$row['total']."</td>";
            echo "<td>".$row['received']."</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No records found</td></tr>";
    }

    mysqli_close($database);
    ?>

</table>
</body>
</html>
