<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = mysqli_connect("localhost", "root", "", "University");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "connected successfully";
if (isset($_POST['submit'])) {
    $grossp=(int)$_POST['gross'];
    $allowancep=(int)$_POST['allowance'];
    $fundp=(int)$_POST['fund'];
    $taxp=(int)$_POST['tax'];
    $insurancep=(int)$_POST['insurance'];
    $netSalary=($grossp+$allowancep+$fundp)-$taxp-$insurancep;
    $monthlySalary=$netSalary;
    $annulSalary=$monthlySalary*12;

    $table="INSERT INTO salary(Gross_salary, Transport_allowance, Provident_fund, Income_tax, Health_insurance, Net_salary, Monthly_salary, Anually_salary)
            VALUES ($grossp,$allowancep,$fundp,$taxp,$insurancep,$netSalary,$monthlySalary,$annulSalary)";
            if (mysqli_query($con,$table)) {
                echo "Record added successfuly!";
            }else{
                echo "Erroe: " . mysqli_error($con);
            }
}
mysqli_close($con);


?>