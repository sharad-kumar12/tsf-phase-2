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
<strong><center><a style="color:MidnightBlue;" href="addemployee.php">CLICK HERE TO ADD MORE</a></br></br></center></strong>
</font>
    </head>
    <body>
<?php

include_once "connect.php";
if (!$conn){echo "error";}
else {echo "<ol align='center'><font color=DeepPink size='6pt'>connected successfully</font></ol>";}
$query="select * from employee";
$employeedata = mysqli_query($conn,$query);

echo "<table>
<tr>
<th><ol align='center'><font color=red size='4pt'>EMPLOYEE ID</font></ol></th> 
<th><ol align='center'><font color=red size='4pt'>EMPLOYEE NAME</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>SPECIALISATION</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>SALARY</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>POST</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>PHONE NUMBER</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>DATE AND TIME OF JOINING</font></ol></th>
</tr>";
foreach($employeedata as $row){
echo"<tr>
<td><ol align='center'><font color=red size='4pt'>".$row['id']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['emp_name']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['specialisation']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['salary']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['post']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['emp_phone_number']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['joining_info']."</font></ol></td>
<td><a href='editemployee.php?id=".$row['id']."'>Edit</a></td>
<td><a href='deleteemployee.php?id=".$row['id']."'>Delete</a></td>
</tr>";



}
echo"</table>";

?>