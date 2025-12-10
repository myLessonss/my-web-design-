<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to database
$con = mysqli_connect("localhost", "root", "", "University");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $student_name = mysqli_real_escape_string($con, $_POST['student_name']);
    $student_id   = mysqli_real_escape_string($con, $_POST['student_id']);
    $department   = mysqli_real_escape_string($con, $_POST['department']);
    $coursework   = (int)$_POST['coursework'];
    $midterm      = (int)$_POST['midterm'];
    $final_exam   = (int)$_POST['final_exam'];
    $total        = $coursework + $midterm + $final_exam;
    $average      = $total / 3;

    $sql = "INSERT INTO student(student_name, student_id, department, coursework, midterm, final_exam, total, average)
            VALUES ('$student_name', '$student_id', '$department', $coursework, $midterm, $final_exam, $total, $average)";

    if (mysqli_query($con, $sql)) {
        echo "Record added successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>
