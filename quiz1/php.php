<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$database=mysqli_connect("localhost","root","","University");
if (!$database) {
    die("Conncetion failed: ".mysqli_connect_error());
}
echo "Database connected successfully";
if (isset($_POST['submit'])) {
    $namep=$_POST['empName'];
    $addressp=$_POST['addresses'];
    $salaryp=(int)$_POST['monthSalary'];
    $periodp=(int)$_POST['time'];
    if ($periodp >= 10) {
        $benefitp = 0.20;
    } elseif ($periodp >= 5) {
        $benefitp = 0.15;
    } else {
        $benefitp = 0.10;
    }
    $totalp  = $salaryp * $benefitp * ($periodp * 12);
    $mounthp = $totalp / 12;
//name	address	salary	period	benefit	total	received
    $mytables="INSERT INTO employee(`name`,`address`,salary,`period`,benefit,total,received)
              VALUES('$namep','$addressp',$salaryp,$periodp,$benefitp,$totalp,$mounthp)";
    if (mysqli_query($database,$mytables)) {
        echo"Recorded Successfully";
    }else{
        echo"Error: " . mysqli_error($database);
    }
}
mysqli_close($database);
?>
