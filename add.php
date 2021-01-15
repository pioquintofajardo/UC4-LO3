<?php

    include_once("connections/connection.php");

    $con = connection();
    
    if(isset($_POST['submit'])){

        $fName = $_POST['fname'];
        $lName = $_POST['lname'];
        $mName = $_POST['mname'];
        $userLvl = $_POST['userlevel'];

       echo $sql = "INSERT INTO `user_lists`(`FIRSTNAME`, `LASTNAME`, `MIDDLENAME`, `USERLVL`) 
        VALUES ('$fName','$lName','$mName','$userLvl')";
        $con->query($sql) or die($con->error);

    }

?> 
 

<!DOCTYPE html>
<html>
<head>
        <title>Admin Page</title>
        
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    
    <h1><center><font color="#d82626" size="10">ONLINE ATTENDANCE SYSTEM</font></center></h1>
    <br/>
 <form action="" method="post">
        <center>
        
        <input type="text" name="fname" placeholder="Firstname">
        <input type="text" name="mname" placeholder="Middlename" >
        <input type="text" name="lname" placeholder="Lastname">
        <label>User Level</label>
        <select name="userlevel" id="userlevel">
            <option value="one">1</option>
            <option value="two">2</option>
        </select>
        
       

            <input type="submit" name ="submit" value="Add">
            <input type="submit" name ="update" value="Edit">
            <input type="submit" name ="delete" value="Delete">
            <input type="submit"  value="Logout">

</center>
</form><br>

<h1>PROFILE</h1>
<table style = "width: 100% ">

<tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Middlename</th> 
</tr>

</table>

</body>
</html>