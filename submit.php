<?php

include_once 'submitquery.php';

$name = $_REQUEST['first'];
$lastname = $_REQUEST['last'];
$email = $_REQUEST['email'];
$employeeid = $_REQUEST['id'];
$designation = $_REQUEST['designation'];
$department = $_REQUEST['department'];

$sqlinsert = "INSERT INTO `company`(`First_name`, `Last_name`, `Email`, `Employee_Id`, `Designation`, `Department`) VALUES ('$name','$lastname','$email', '$employeeid' , '$designation','$department')";

$finel = mysqli_query($sub,$sqlinsert);

if($final)
{
    header("location:Home.php?success= Sign in Successfully");
}

else
{
    header("location:Home.php?error= Sign in failed");

}

mysqli_close($sub);









?>