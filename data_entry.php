<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Entry</title>
  
</head>
<body>
    <h1 align="center" style="background-color: #09b147;">Student's Data Entry</h1>
    
    <form name = "frm" method = "POST" action ="data_save.php">
        <table align="center">
        <tr>
        <th>
        <label for="sname">Student Name:</label></th>
        <td>
        <input name = "student_name" type="text" placeholder="Enter name" size="40" id="sname"></td>
        </tr>
        <tr>
        <th>
        <label for="roll">Roll Number:</label></th>
        <td>
        <input name="roll_no" type="text" placeholder="Enter Roll number." size="15" id="roll"></td>
        </tr>
        <tr>
        <th>
        <label for="fname">Father's Name:</label></th>
        <td>
        <input name="father_name" type="text" placeholder="Enter father's name" size="30" id="fname"></td>
        </tr>
        <tr style="text-align: center; font-size: 20px">
        <td colspan="2">
        <input type="submit" name ="s1">
        </td>
        </tr>
        </table>
    </form>
   
    
</body>
</html>