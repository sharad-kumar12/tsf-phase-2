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
<strong><center><a style="color:MidnightBlue;" href="adddepartment.php">CLICK HERE TO ADD MORE</a></br></br></center></strong>
<strong><center><a style="color:MidnightBlue;" href="showdepartment.php">CLICK HERE TO CHECK LIST</a></br></br></center></strong>
</font>
    </head>
    <body>
<?php
include_once "connect.php";
if (!$conn){echo "error";}
else {echo "connected successfully";}

$query="select * from `department` where id=".$_GET['id'];
$employees=mysqli_query($conn,$query);
$row = mysqli_fetch_array($employees);
print_r($row);
?>

<form action="updatedepartment.php" method="post">
<fieldset style="color:white;">
<table cellspacing=30px cellpending=30px>

<input type="hidden" name="id"
value="<?php echo $row['id'];?>"
/><br/>
<tr><td>
<strong>DEPARTMENT ID:<input type="text" name="id" 
       value="<?php echo $row ['id'];?>"
       /></br> </strong>
       </td></tr>
       <tr><td>
       <strong>DEPARTMENT NAME:<input type="text" name="dept_name"  value="<?php echo $row ['dept_name'];?>"/></br></strong>
       </td></tr>
      <tr><td>
      <strong>DEPARTMENT INCHARGE:<input type="text" name="dept_incharge" value="<?php echo $row ['dept_incharge'];?>"/></br></strong>
      </td></tr>
      <tr><td><input type="submit"/></td></tr>
      </table>
      </fieldset>
</form>
