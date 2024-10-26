<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data</title>
    <link rel ="stylesheet" href="student_edit_css.css">
</head>
<body>
    <center><h1><b>Data Edit</b></h1></center>
    <?php
    extract($_GET);
    include("db_con.php");
    $sql= "select * from student where s_id=$v";
    $query=mysqli_query($con,$sql) or die("No Data");
    while($row=mysqli_fetch_array($query)){
        $stud_id=$row['s_id'];
        $stud_name=$row['s_name'];
        $stud_roll=$row['s_rollno'];
        $stud_fname=$row['s_fname'];
    }
    ?>
    <form name="frm" action="edit_data_save.php" method="POST">
    <input type="hidden" name="stud_id" value =<?php echo $stud_id;?>>
    
    <label> Student Name</label>
    

        <input type="text" name="stud_name" size="30" value =<?php echo $stud_name;?> required>
        <br>
        
    <label>Student Roll No.</label>
    
        <input type="text" name="stud_roll" size="20" value =<?php echo $stud_roll;?> required>
        <br>
        <label>Student Father's Name</label>
    
        <input type="text" name="stud_fname" size="30" value =<?php echo $stud_fname;?> required>
        <br>
        <input type="submit" name="s1">

</form>

    
</body>
</html>