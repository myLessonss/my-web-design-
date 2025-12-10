<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$database=mysqli_connect("localhost","root","","University");
if (!$database) {
    die("Conncetion failed: ".mysqli_connect_error());
}
if (isset($_POST['submit'])) {
    $fname=$_POST['name'];
    $femail=$_POST['email'];
    $password=$_POST['password'];
    $mytable="INSERT INTO logins(names,emails,pass)VALUES('$fname','$femail','$password')";
    if (mysqli_query($database,$mytable)) {
        echo"Recorded Successfully";
    }else{
        echo"Error: " . mysqli_error($database);
    }
}
mysqli_close($database);
?>