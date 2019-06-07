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
<strong><center><a style="color:MidnightBlue;" href="addemployee.php">CLICK HERE TO ADD MORE</a></br></br></center></strong>
<strong><center><a style="color:MidnightBlue;" href="showemployee.php">CLICK HERE TO CHECK LIST</a></br></br></center></strong>
</font>
    </head>
    <body>
<?php
include_once "connect.php";
if (!$conn){echo "error";}
else {echo "connected successfully";}
$query="select * from `employee` where id=".$_GET['id'];
$employees=mysqli_query($conn,$query);
$row = mysqli_fetch_array($employees);
print_r($row);
?>

<form action="updateemployee.php" method="post">
<fieldset style="color:white;">
<table cellspacing=60px cellpending=40px>
<input type="hidden" name="id"
value="<?php echo $row['id'];?>"
/><br/>
<tr><td><strong>EMPLOYEE ID:<input type="text" name="id" 
       value="<?php echo $row ['id'];?>"</strong></td></tr>
       </br>

       <tr><td> <strong>EMPLOYEE NAME:<input type="text" name="emp_name" value="<?php echo $row ['emp_name'];?>"/></br></strong></td></tr>
       <tr><td><strong>Specialisation:<br/>
<input type="radio" name="specialisation" value="Pediatrics"
<?php if ($row['specialisation']=="Pediatrics")
echo 'checked="true"';?>
/>Pediatrics<br/>
<input type="radio" name="specialisation" value="Cardiology" 
<?php if ($row['specialisation']=="Cardiology")
echo 'checked="true"';?>
/>Cardiology<br/>
<input type="radio" name="specialisation" value="Neurosurgery"
<?php if ($row['specialisation']=="Neurosurgery")
echo 'checked="true"';?>
/>Neurosurgery<br/>
<input type="radio" name="specialisation" value="Orthopedics"
<?php if ($row['specialisation']=="Orthopedics")
echo 'checked="true"';?>
/>Orthopedics<br/>
<input type="radio" name="specialisation" value="Psychiatry"
<?php if ($row['specialisation']=="Psychiatry")
echo 'checked="true"';?>
/>Psychiatry<br/>
       <tr><td><strong>SALARY:<input type="text" name="salary" value="<?php echo $row ['salary'];?>"/></br></strong></td></tr>
       <tr><td><strong>POST:</br><input type="radio" name="post" value="Senior Doctor"
<?php if ($row['post']=="Senior Doctor")
echo 'checked="true"';?>
/>Senior Doctor<br/>
<input type="radio" name="post" value="Nurse"
<?php if ($row['post']=="Nurse")
echo 'checked="true"';?>
/>Nurse<br/>
<input type="radio" name="post" value="Physician"
<?php if ($row['post']=="Physician")
echo 'checked="true"';?>
/>Physician<br/>
<input type="radio" name="post" value="Therapist"
<?php if ($row['post']=="Therapist")
echo 'checked="true"';?>
/>Therapist<br/>
       <tr><td><strong>PHONE NUMBER:<input type="text" name="post" value="<?php echo $row ['emp_phone_number'];?>"/></br></strong></td></tr>
      
       <tr><td><input type="submit"/></td></tr>
             </table>
      </fieldset>
</form>
