<!doctype html>
    <html>
    <head> 
    <title>DBMS PROJECT</title>
    <style>
                form{
                    margin: 110px 550px 580px 500px;
                }
                
                body{
                
                background-color:white;
                height: 100%;
                background-repeat:no-repeat;
            }
            </style>
            <style type="text/css">
#theText { font-weight: bold; }
</style>
<span id="theText"><span>
<font color=red size='6pt'>
<strong><P align=right><h3><a style="color:yellow;" href="login.php"> LOGOUT </a></h3></P></strong>
<strong><center><a style="color:MidnightBlue;" href="adminmainpage.php">CLICK HERE FOR MAIN PAGE </a></br></br></center></strong>
<strong><center><a style="color:MidnightBlue;" href="adddepartment.php">CLICK HERE TO ADD MORE</a></br></br></center></strong>
</font>
    </head>
    <body>
<?php

include_once "connect.php";
if (!$conn){echo "error";}
else {echo "<ol align='center'><font color=DeepPink size='6pt'>connected successfully</font></ol>";}
$query="select * from department";
$employeedata = mysqli_query($conn,$query);

echo "<table>
<tr>
<th><ol align='center'><font color=red size='4pt'>DEPARTMENT ID</font></ol></th> 
<th><ol align='center'><font color=red size='4pt'>DEPARTMENT NAME</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>DEPARTMENT INCHARGE</font></ol></th>
</tr>";
foreach($employeedata as $row){
echo"<tr>
<td><ol align='center'><font color=red size='4pt'>".$row['id']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['dept_name']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['dept_incharge']."</font></ol></td>
<td><a href='editdepartment.php?id=".$row['id']."'>Edit</a></td>
<td><a href='deletedepartment.php?id=".$row['id']."'>Delete</a></td>
</tr>";



}
echo"</table>";

?>