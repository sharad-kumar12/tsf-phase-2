<!doctype html>
    <html>
    <head> 
    <title>DBMS PROJECT</title>
    <style>
                form{
                    margin: 110px 550px 580px 500px;
                }
                
                body{
                
                    background: url(saveemployeepage.jpg) no-repeat center center fixed; 
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
<strong><P align=right><h3><a style="color:yellow;" href="login.php"> LOGOUT </a></h3></P></strong>
<strong><center><a style="color:Lime;" href="adminmainpage.php">CLICK HERE FOR MAIN PAGE </a></br></br></center></strong>
<strong><center><a style="color:Lime;" href="addemployee.php">CLICK HERE TO ADD MORE</a></br></br></center></strong>
<strong><center><a style="color:Lime;" href="showemployee.php">CLICK HERE TO SEE ALL ENTERED DATA</a></br></br></center></strong>
</font>
    </head>
    <body>
<?php
echo "<ol align='center'><font color=DeepPink size='6pt'>";
echo $_POST['id']."<br/>";
echo $_POST['emp_name']."<br/>";
echo $_POST['specialisation']."<br/>";
echo $_POST['salary']."<br/>";
echo $_POST['post']."<br/>";
echo $_POST['emp_phone_number']."<br/>";



$autoquery="INSERT INTO `employee` (`id`, `emp_name`, `specialisation`,`salary`, `post`, `emp_phone_number`,`joining_info`)
VALUES ('".$_POST['id']."','".$_POST['emp_name']."','".$_POST['specialisation']."','".$_POST['salary']."','".$_POST['post']."','".$_POST['emp_phone_number']."',CURRENT_TIMESTAMP)";


include_once "connect.php";
if (!$conn){echo "error";}
else {echo "<ol align='center'><font color=Lime size='6pt'>connected successfully  </font></ol>";}
echo "<br>";
echo "<br>";
//$query="INSERT INTO `students` (`id`, `name`, `phone_number`,`admission_time`, `status`) VALUES ('6','satwik', '8798', 'CURRENT_TIMESTAMP','curr')";


if(mysqli_query($conn,$autoquery))

echo "<ol align='center'><font color=Lime size='6pt'>successfully registered </font></ol>";

else
echo mysqli_error($conn);
echo " </font></ol>";

?>
