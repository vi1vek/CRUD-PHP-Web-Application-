<?php
include("db_con.php");
extract($_POST);

$sql="insert into student (s_name,s_rollno,s_fname) values ('$student_name', '$roll_no', '$father_name')";
$query=mysqli_query($con,$sql) or die (mysqli_error($con));
echo "Data Entered sucessfully";
header('location: student_view.php');
?>