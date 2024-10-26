<?php
extract($_POST);
include("db_con.php");
$sql="update student set s_name='$stud_name',s_rollno='$stud_roll',s_fname='$stud_fname' where s_id=$stud_id";
$query=mysqli_query($con,$sql) or die ("Error");
header('location: student_view.php');
?>