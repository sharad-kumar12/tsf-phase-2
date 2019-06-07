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
<strong><center><a style="color:MidnightBlue;" href="addpatient.php">CLICK HERE TO ADD MORE</a></br></br></center></strong>
</font>
    </head>
    <body>
<?php

include_once "connect.php";
if (!$conn){echo "error";}
else {echo "<ol align='center'><font color=DeepPink size='6pt'>connected successfully</font></ol>";}
$query="select * from patient";
$employeedata = mysqli_query($conn,$query);

echo "<table>
<tr>
<th><ol align='center'><font color=red size='4pt'>PATIENT ID</font></ol></th> 
<th><ol align='center'><font color=red size='4pt'>PATIENT NAME</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>PATIENT PHONE NUMBER</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>ADMIT TIME</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>STAY</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>AMOUNT PAID</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>MODE OF PAYMENT</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>INSURANCE PROVIDER</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>WARD</font></ol></th>
<th><ol align='center'><font color=red size='4pt'>ADDRESS</font></ol></th>
</tr>";
foreach($employeedata as $row){
echo"<tr>
<td><ol align='center'><font color=red size='4pt'>".$row['id']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['patient_name']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['phone_number']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['admit_time']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['stay']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['amount_paid']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['mode_of_payment']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['insurance_provider']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['ward']."</font></ol></td>
<td><ol align='center'><font color=red size='4pt'>".$row['address']."</font></ol></td>
<td><a href='editpatient.php?id=".$row['id']."'>Edit</a></td>
<td><a href='deletepatient.php?id=".$row['id']."'>Delete</a></td>
</tr>";



}
echo"</table>";

?>