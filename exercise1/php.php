<?php
$con = mysqli_connect("localhost", "root", "", "University");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM salary";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>								
                <th>Gross_salary</th>
                <th>Transport_allowance</th>
                <th>Provident_fund</th>
                <th>Income_tax</th>
                <th>Health_insurance</th>
                <th>Net_salary</th>
                <th>Monthly_salary</th>
                <th>Anually_salary</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['gross']}</td>
                <td>{$row['allowance']}</td>
                <td>{$row['fund']}</td>
                <td>{$row['tax']}</td>
                <td>{$row['insurance']}</td>
                <td>{$row['
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found!";
}

mysqli_close($con);
?>
