<?php
//Error reporting
error_reporting(E_ALL);
ini_set('display_errors',1);

//Connecting to Database
$mydatabase=mysqli_connect("localhost","root","","employeeDB");
if (!$mydatabase) {
    die("Connection Failed: ".mysqli_connect_error());
}
echo "Database Connected.";

//Connecting table to inputs Form
if (isset($_POST["send"])) {
    $fName=$_POST["fname"];
    $sName=$_POST["sname"];
    $emails=$_POST["email"];
    $password=$_POST["pass"];

    //Connect to Table
    $table="INSERT INTO login(`first_name`,`second_name`,`email`,`passw`)VALUES('$fName','$sName','$emails','$password')";

    //Send to database
    if(mysqli_query($mydatabase,$table)){
        echo "Recorded";
    }else {
        echo "Error: ".mysqli_error($mydatabase);
    }

}