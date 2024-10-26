<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data view</title>
    <link rel="stylesheet" href="student_view_css.css">
</head>
<body>
    <h1><b>Student Data<b></h1>
    <table align="center" width="80%" border="1" cellpadding="5" cellspacing ="2">
        <tr>
            <th class ="vi" >Serial Number</th>
            <th class ="vi" >Student ID</th>
            <th class ="vi" >Name</th>
            <th class ="vi" >Roll No.</th>
            <th class ="vi" >Student FName</th>
            <th class ="vi" >Correction</th>
            <th class ="vi" >Delete</th>
        </tr>

        <?php
        $a=0;
        include("db_con.php");
        $sql="select * from student";
        $query=mysqli_query($con,$sql) or die (mysqli_error($con));
        while($row=mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php 
                
                $a =$a+1;
                echo $a;
                ?></td>
                <td><?php echo $row["s_id"];?></td>
                <td><?php echo $row["s_name"];?></td>
                <td><?php echo $row["s_rollno"];?></td>
                <td><?php echo $row["s_fname"];?></td>
                <td><a href="student_edit.php?v=<?php echo $row["s_id"];?>">EDIT</a></td>
                <td><a href="delete.php?v=<?php echo $row["s_id"];?>">Delete</a></td>
            </tr>

        <?php } ?>
        </table>
        <h3><a href="data_entry.php">Click Here to Add data</a></h3>
    
</body>
</html>