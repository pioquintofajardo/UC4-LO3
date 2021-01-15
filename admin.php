  
<?php

include_once("connections/connection.php");

$con = connection();

$sql = "SELECT * FROM user_lists";
$listed = $con->query($sql) or die ($con->error);
$row = $listed->fetch_assoc();



?> 

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1><center><font color="#d82626" size="10">ONLINE ATTENDANCE SYSTEM</font></center></</h1>
<br>




<form action="add.php" method="post">
    <center>
    <input type="number" name="id" placeholder="id">
    <input type="text" name="fname" placeholder="Firstname">
    <input type="number" name="mname" placeholder="Middlename" >
    <input type="text" name="lname" placeholder="Lastname">
    
   
        <a href="add.php">ADD</a>
        <a href="add.php">EDIT</a>
        <a href="add.php">DELETE</a>
        
        <input type="submit"  value="Logout">

</center>
</form><br>

PROFILE
<table style = "width: 100% ">
<tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Middlename</th> 
    <th>User Level</th> 
</tr>
<?php do { ?> 
<tr>
    <td><?php echo $row['ID'];?></td>  
    <td><?php echo $row['FIRSTNAME'];?></td>  
    <td><?php echo $row['LASTNAME'];?></td>     
    <td><?php echo $row['MIDDLENAME'];?></td>   
    <td><?php echo $row['USERLVL'];?></td>   
</tr>
<?php }while($row = $listed->fetch_assoc()); ?>
</table>

</body>
</html>
