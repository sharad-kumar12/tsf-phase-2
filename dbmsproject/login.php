<html>
<head>
<title>
Login page
</title>
<style>
                form{
                    margin: 110px 550px 580px 500px;
                }
                
                body{              
                background: url(loginpic.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
            }
            </style>
</head>
<body></br></br></br>
<center><h1 style="font-family:Comic Sans Ms;text-align="center";font-size:20pt;
color:#00FF00;>
please login
</h1></center>
<center><form action="showemployee.php" name="login">
<center><fieldset style="width:0px">
<table cellspacing=25px cellpending=10px>
<tr><td>
  <strong>Username<input type="text" name="userid"/></strong>
      </td></tr>
      <tr><td>
  <strong>Password<input type="password" name="pswrd"/></strong>
      </td></tr>
      <tr><td>
  <strong><center><input type="button" onclick="check(this.form)" value="Login"/></center></strong>
  <tr><td>
  <strong><center><input type="reset" value="Cancel"/></center></strong></br>
      </td></tr>
      </table>
      </fieldset></center>
</form></center>
<script language="javascript">
function check(form)/*function to check userid & password*/
{
 /*the following code checkes whether the entered userid and password are matching*/
 if(form.userid.value == "sharad" && form.pswrd.value == "Skbj@1213")
  {
    window.open('adminmainpage.php',"_self")/*opens the target page while Id & password matches*/
  }
  else if(form.userid.value == "user" && form.pswrd.value == "temp")
  {
    window.open('usermainpage.php',"_self")/*opens the target page while Id & password matches*/
  }
 else
 {
   alert("Error Password or Username")/*displays error message*/
  }
}
</script>
</body>
</html>