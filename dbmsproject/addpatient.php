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
<strong><center><a style="color:MidnightBlue;" href="adminmainpage.php">CLICK HERE FOR MAIN PAGE </a></br></br></center></strong>
<strong><center><a style="color:MidnightBlue;" href="showpatient.php">CLICK HERE TO CHECK LIST</a></br></br></center></strong>
</font>
    </head>
    <body>
  <form action="savepatient.php" method="post">
  <fieldset style="color:white;">
  <table cellspacing=30px cellpending=30px>
  <strong>
  <tr><td>
  <strong>Patient Id:<input type="text" name="id"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>Patient Name:<input type="text" name="patient_name"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>Phone Number:<input type="text" name="phone_number"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>Stay:<input type="text" name="stay"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>Amount Paid:<input type="text" name="amount_paid"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>Mode Of Payment:</br><input type="radio" name="mode_of_payment" value="Online"> Online</br>
      <input type="radio" name="mode_of_payment" value="Cash"> Cash</br>
      <input type="radio" name="mode_of_payment" value="Cheque"> Cheque</br>
      <input type="radio" name="mode_of_payment" value="Demand Draft"> Demand Draft</strong></br>
      </td></tr>
      <tr><td>
      <strong>Insurance Provider:<input type="text" name="insurance_provider"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>Ward Number:<input type="text" name="ward"/></strong></br>
      </td></tr>
      <tr><td>
      <strong>Address:<input type="text" name="address"/></strong></br>
      </td></tr>
      <tr><td><input type="submit"/></td></tr>
      </table>
      </fieldset>

      
</form>
</body>
</html>
