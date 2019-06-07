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
<strong><center><a style="color:MidnightBlue;" href="showemployeepage.php">CLICK HERE TO CHECK LIST</a></br></br></center></strong>
</font>
    </head>
    <body>
    <form action="saveemployeeuser.php" method="post">
  <fieldset style="color:white;">
  <table cellspacing=30px cellpending=30px>
  <strong>
  <tr><td>
      <strong>Employee Id:<input type="text" name="id"/></strong></br>
      </td></tr>
  <tr><td>
      <strong>Employee Name:<input type="text" name="emp_name"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>Specialisation:</br><input type="radio" name="specialisation" value="Medicine"> Medicine</br>
      <input type="radio" name="specialisation" value="Pediatrics"> Pediatrics</br>
      <input type="radio" name="specialisation" value="Cardiology"> Cardiology</strong></br>
      <input type="radio" name="specialisation" value="Neurosurgery"> Neurosurgery</strong></br>
      <input type="radio" name="specialisation" value="Orthopedics"> Orthopedics</strong></br>
      <input type="radio" name="specialisation" value="Psychiatry"> Psychiatry</strong></br>
      </td></tr>
      <tr><td>
      <strong> Salary:<input type="text" name="salary"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>Post:</br><input type="radio" name="post" value="Senior Doctor"> Senior Doctor</br>
      <input type="radio" name="post" value="Nurse"> Nurse</br>
      <input type="radio" name="post" value="Physician"> Physician</strong></br>
      <input type="radio" name="post" value="Therapist"> Therapist</strong></br>
      </td></tr>
      <tr><td>
      <strong>Phone Number:<input type="number" name="emp_phone_number"/></strong></br>
      </td></tr>
      <tr><td><input type="submit"/></td></tr>
      </table>
      </fieldset>      
</form>
</body>
</html>
