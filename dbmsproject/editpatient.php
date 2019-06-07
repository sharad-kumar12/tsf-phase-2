<!doctype html>
    <html>
    <head> 
    <title>DBMS PROJECT</title>
    <style>
                form{
                    margin: 110px 550px 580px 500px;
                }
                
                body{
                
                background-color:Green;
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
<strong><center><a style="color:MidnightBlue;" href="showpatient.php">CLICK HERE TO CHECK LIST</a></br></br></center></strong>
</font>
    </head>
    <body>
<?php
include_once "connect.php";
if (!$conn){echo "error";}
else {echo "connected successfully";}
$query="select * from `patient` where id=".$_GET['id'];
$employees=mysqli_query($conn,$query);
$row = mysqli_fetch_array($employees);
print_r($row);
?>

<form action="updatepatient.php" method="post">
<fieldset style="color:white;">
<table cellspacing=60px cellpending=40px>
<input type="hidden" name="id"
value="<?php echo $row['id'];?>"
/><br/>
<tr><td><strong>PATIENT ID:<input type="text" name="id" 
       value="<?php echo $row ['id'];?>"</strong></td></tr>
       </br>

       <tr><td> <strong>PATIENT NAME:<input type="text" name="patient_name" value="<?php echo $row ['patient_name'];?>"/></br></strong></td></tr>
       <tr><td><strong>PATIENT PHONE NUMBER:<input type="text" name="phone_number"  value="<?php echo $row ['phone_number'];?>"/></br></strong></td></tr>
       <tr><td><strong>STAY:<input type="text" name="stay" value="<?php echo $row ['stay'];?>"/></br></strong></td></tr>     
       <tr><td><strong>AMOUNT PAID:<input type="text" name="amount_paid" value="<?php echo $row ['amount_paid'];?>"/></br></strong></td></tr>     
       <tr><td><strong>MODE OF PAYMENT:<input type="text" name="mode_of_payment" value="<?php echo $row ['mode_of_payment'];?>"/></br></strong></td></tr>     
       <tr><td><strong>INSURANCE PROVIDER:<input type="text" name="insurance_provider" value="<?php echo $row ['insurance_provider'];?>"/></br></strong></td></tr>     
       <tr><td><strong>WARD:<input type="text" name="ward" value="<?php echo $row ['ward'];?>"/></br></strong></td></tr>     
       <tr><td><strong>ADDRESS:<input type="text" name="address" value="<?php echo $row ['address'];?>"/></br></strong></td></tr>     
       <tr><td><input type="submit"/></td></tr>
             </table>
      </fieldset>
</form>
