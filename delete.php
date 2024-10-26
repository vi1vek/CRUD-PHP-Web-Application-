<?php
include("db_con.php");
extract($_GET);

$sql = "delete from student where s_id=".$v;
$query =mysqli_query($con,$sql);

header('location: student_view.php');


?>