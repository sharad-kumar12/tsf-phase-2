<!doctype html>
    <html>
    <head> 
    <title>DBMS PROJECT</title>
    <style>
                
                
                body{
                  background: url(updateemployeepage.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
            }
            </style>
            <style type="text/css">
#theText { font-weight: bold; }
</style>
<span id="theText"><span>
<font color=red size='6pt'>
</br>
</br>
</br>
</br>
</br>
<strong><P align=right><h3><a style="color:yellow;" href="login.php"> LOGOUT </a></h3></P></strong>
<strong><center><a style="color:MidnightBlue;" href="usermainpage.php">CLICK HERE FOR MAIN PAGE </a></br></br></center></strong>
<strong><center><a style="color:MidnightBlue;" href="adddepartmentuser.php">CLICK HERE TO ADD MORE</a></br></br></center></strong>
<strong><center><a style="color:MidnightBlue;" href="showdepartmentpage.php">CLICK HERE TO CHECK LIST</a></br></br></center></strong>

</font>
    </head>
    <body>
<?php
echo "<ol align='center'><font color=DeepPink size='6pt'>";
include_once "connect.php";
if (!$conn){echo "error";}
else {echo "connected successfully";}

$autoquery="update `department` set `dept_name` = '".$_POST['dept_name']."',
`dept_incharge` = '".$_POST['dept_incharge']."'
where `department`.`id`=".$_POST['id'];

echo"</br>";
echo"</br>";
if(mysqli_query($conn,$autoquery))
echo "sucessfully updated";
else
  echo mysqli_error($conn);
  echo " </font></ol>";

?>