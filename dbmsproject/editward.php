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
<strong><center><a style="color:MidnightBlue;" href="addward.php">CLICK HERE TO ADD MORE</a></br></br></center></strong>
<strong><center><a style="color:MidnightBlue;" href="showward.php">CLICK HERE TO CHECK LIST</a></br></br></center></strong>
</font>
    </head>
    <body>
<?php
include_once "connect.php";
if (!$conn){echo "error";}
else {echo "connected successfully";}
$query="select * from `wards` where id=".$_GET['id'];
$employees=mysqli_query($conn,$query);
$row = mysqli_fetch_array($employees);
?>

<form action="updateward.php" method="post">
<fieldset style="color:white;">
<table cellspacing=60px cellpending=40px>
<input type="hidden" name="id"
value="<?php echo $row['id'];?>"
/><br/>
<tr><td><strong>WARD ID:<input type="text" name="id" 
       value="<?php echo $row ['id'];?>"</strong></td></tr>
       </br>

       <tr><td><strong>WARD IINCHARGE:<input type="text" name="ward_incharge" 
       value="<?php echo $row ['ward_incharge'];?>"</strong></td></tr>
       </br>
       <tr><td><strong>WRAD TYPE:<br/>
<input type="radio" name="ward_type" value="Emergency"
<?php if ($row['ward_type']=="Emergency")
echo 'checked="true"';?>
/>Emergency<br/>
<input type="radio" name="ward_type" value="ICU" 
<?php if ($row['ward_type']=="ICU")
echo 'checked="true"';?>
/>ICU<br/>
<input type="radio" name="ward_type" value="General Ward"
<?php if ($row['ward_type']=="General Ward")
echo 'checked="true"';?>
/>General Ward<br/>
<input type="radio" name="ward_type" value="Operation Theatre"
<?php if ($row['ward_type']=="Operation Theatre")
echo 'checked="true"';?>
/>Operation Theatre<br/>

       
       <tr><td><strong>WARD STATUS:</br><input type="radio" name="ward_status" value="Vacant"
<?php if ($row['ward_status']=="Vacant")
echo 'checked="true"';?>
/>Vacant<br/>
<input type="radio" name="ward_status" value="Engaged"
<?php if ($row['ward_status']=="Engaged")
echo 'checked="true"';?>
/>Engaged<br/>

       <tr><td><strong>LOCATION:<input type="text" name="location" value="<?php echo $row ['location'];?>"/></br></strong></td></tr>
      
       <tr><td><input type="submit"/></td></tr>
             </table>
      </fieldset>
</form>
