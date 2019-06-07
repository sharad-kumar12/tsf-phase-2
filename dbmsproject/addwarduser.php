<!doctype html>
    <html>
    <head> 
    <title>DBMS PROJECT</title>
    <style>
                form{
                    margin: 110px 550px 580px 500px;
                }
                
                body{
                
                background-image:url("addemployeepage.jpg");
                background-repeat:no-repeat;
            }
            
            </style>
            <font color=red size='6pt'>
    <strong><P align=right><h3><a style="color:yellow;" href="login.php"> LOGOUT </a></h3></P></strong>
<strong><center><a style="color:MidnightBlue;" href="usermainpage.php">CLICK HERE FOR MAIN PAGE </a></br></br></center></strong>
<strong><center><a style="color:MidnightBlue;" href="showwardpage.php">CLICK HERE TO CHECK LIST</a></br></br></center></strong>
</font>
    </head>
    <body>
  <form action="savewarduser.php" method="post">
  <fieldset style="color:white;">
  <table cellspacing=30px cellpending=30px>
  <strong>
  <tr><td>
  <strong>Ward Number:<input type="text" name="id"/></strong></br>
      </td></tr>
      <tr><td>
  <strong>Ward Type:</br><input type="radio" name="ward_type" value="Emergency"> Emergency</br>
      <input type="radio" name="ward_type" value="ICU"> ICU</br>
      <input type="radio" name="ward_type" value="General Ward"> General Ward</br>
      <input type="radio" name="ward_type" value="Operation Theatre"> Operation Theatre</strong></br>
      </td></tr>
      <tr><td>
  <strong>Ward Status:</br><input type="radio" name="ward_status" value="Vacant"> Vacant</br>
      <input type="radio" name="ward_status" value="Engaged"> Engaged</br>
      </td></tr>
      <tr><td>
      <strong>Ward Incharge:<input type="text" name="ward_incharge"/></strong></br>
      </td></tr>
      <tr><td>
      <strong> Location:<input type="text" name="location"/></strong></br>
      </td></tr>
      <tr><td><input type="submit"/></td></tr>
      </table>
      </fieldset>

      
</form>
</body>
</html>
