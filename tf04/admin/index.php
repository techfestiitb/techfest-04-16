<?php
if($action ==""){
?>
<html>

<head>
<title>Techfest Web Administration</title>
</head>

<body>

<form method="POST" action="">
  <p>
  <b><font size="5">Techfest</font><font size="5"> Web Administrative Interface</font></b></p>
  <table border="1" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#000000" width="20%" 
id="AutoNumber1" height="49" bgcolor="#C0C0C0" align=center>
    <tr>
      <td width="35%" bgcolor="#C0C0C0" height="22"><i><b><font size="4">Login :</font></b></i></td>
      <td width="65%" bgcolor="#C0C0C0" height="22">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="T1" size="20"></td>
    </tr>
    <tr>
      <td width="35%" bgcolor="#C0C0C0" height="19"><i><b><font size="4">
      Password :</font></b></i></td>
      <td width="65%" height="19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="T2" size="20"></td>
    </tr>
  </table>
  <p><input type="submit" value="Submit" name="action">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="reset" value="Reset" name="B2"></p>
</form>

</body>

</html>
<?
}else{
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result = mysql_query("SELECT password FROM tf_users WHERE username='".$T1."'");
$myrow = mysql_fetch_row($result);
mysql_close($link);
if($T2==$myrow[0]){
$ruser = $T1;
setcookie("user", $ruser, time()+604800);
?>
<html></body>
<HEAD><SCRIPT LANGUAGE="JavaScript">
redirTime = "1";
redirURL = "in.php";
function redirTimer() { self.setTimeout("self.location.href = redirURL;",redirTime); }
</script>
<BODY onLoad="redirTimer()">
</body>
</html>
<?php
}else{
 print "Wrong Username or password";
 exit; 
}



}?>
