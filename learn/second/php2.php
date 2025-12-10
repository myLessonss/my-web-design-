<?php
//connect to database
$database=mysqli_connect("localhost","root","","employeeDB");
if (!$database) {
    die("Connection Failed.".mysqli_connect_error());
}
//connect table
if(isset($_POST['create'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $fpass=$_POST['finalPass'];
    //connect to table
    $table="INSERT INTO create_user(`name`,`email`,`password`,`final_password`)VALUES('$name','$email','$pass','$fpass')";

    //connect table and database
    if(mysqli_query($database,$table)){
        echo "created.";
    }else{
        echo "Error: ".mysqli_connect_error($database);
    }


}
?>