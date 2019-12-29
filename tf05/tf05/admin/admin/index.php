<?php
if ($_POST['action']=="")
 {
?>
	<h1 align="center">Admin Page</h1>
	<p>&nbsp;</p>
	<form name="form1" method="post" action="">
	  <div align="center">
		<table width="28%" height="63" border="1" cellpadding="0" cellspacing="0">
		  <tr> 
			<td>User </td>
			<td><input name="user" type="text"></td>
		  </tr>
		  <tr> 
			<td>Password</td>
			<td><input name="passwd" type="password" maxlength="30"></td>
		  </tr>
		</table>
	  </div>
	  <p align="center"> 
		<input type="submit" name="action" value="Login">
	  </p>
	  </form>
	<p>&nbsp;</p>
<?php
 }
else if ($_POST['action']=="Login")
 {
	$user=$_POST['user'];
	$passwd=$_POST['passwd'];
	if (($user=="Admin")&&($passwd=="sb363in"))
	 	$t=setcookie("admin","Admin",$time+3600);
	else
	 {
	 	echo "Wrong Username or password. Please Login Again. <a href=./index.php>Click Here/a> to go back.";
		exit;
	 }
 ?>
 			<html>
			<HEAD><SCRIPT LANGUAGE="JavaScript">
			redirTime = "1";
			redirURL = "./main.php";
			function redirTimer() { self.setTimeout("self.location.href = redirURL;",redirTime); }
			</script>
			<BODY onLoad="redirTimer()">
			</body>
			</html>
<?php 
 }
 ?>
 