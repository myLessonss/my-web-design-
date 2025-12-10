<?php
// Connect to database
$con = mysqli_connect("localhost", "root", "", "University");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all students
$sql = "SELECT * FROM student";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>ID</th>
                <th>Department</th>
                <th>Coursework</th>
                <th>Midterm</th>
                <th>Final Exam</th>
                <th>Total</th>
                <th>Average</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['student_name']}</td>
                <td>{$row['student_id']}</td>
                <td>{$row['department']}</td>
                <td>{$row['coursework']}</td>
                <td>{$row['midterm']}</td>
                <td>{$row['final_exam']}</td>
                <td>{$row['total']}</td>
                <td>{$row['average']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found!";
}

mysqli_close($con);
?>
