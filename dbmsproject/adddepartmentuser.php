<!doctype html>
    <html>
    <head> 
    <title>DBMS PROJECT</title>
    <style>
                form{
                    margin: 110px 550px 580px 500px;
                }
                
                body{
                background: url(addemployeepage.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
            }
            </style>
            <font color=red size='6pt'>
    <strong><P align=right><h3><a style="color:yellow;" href="login.php"> LOGOUT </a></h3></P></strong>
<strong><center><a style="color:MidnightBlue;" href="usermainpage.php">CLICK HERE FOR MAIN PAGE </a></br></br></center></strong>
<strong><center><a style="color:MidnightBlue;" href="showdepartmentpage.php">CLICK HERE TO CHECK LIST</a></br></br></center></strong>
</font>
    </head>
    <body>
  <form action="savedepartmentuser.php" method="post">
  <fieldset style="color:white;">
  <table cellspacing=30px cellpending=30px>
  <strong>
  <tr><td>
  <strong>DEPARTMENT ID:<input type="text" name="id"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>DEPARTMENT NAME:<input type="text" name="dept_name"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>DEPARTMENT INCHARGE:<input type="text" name="dept_incharge"/></strong></br>
      </td></tr>
      <tr><td><input type="submit"/></td></tr>
      </table>
      </fieldset>

      
</form>
</body>
</html>
