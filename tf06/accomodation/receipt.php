				<html>
				<head><title>Accomodation Desk</title></head>
				<body style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; ">
				<br><br><br><br><br>
				<style type="text/css">
				a {color:#FFFFFF; text-decoration:none;}
				a:link {color:#FFFFFF; text-decoration:none;}
				a:visited {color:#FFFFFF; text-decoration:none;}
				a:hover {color:#D0D0D0; text-decoration:underline;}
				</style><body>

<?

		$user=$_POST['user'];
		$passwd=$_POST['passwd'];
		if (($user=="Admin")&&($passwd=="sb363in"))
		{
	 	$t=setcookie("acoo","acoo",$time+3600);
		?>
			<h1>Accomodation Desk</h1>
			<font size="+2">
			<br><br><br><br><br><br><br><br>
			<center><a href="./numberof.php?stat=part">1.Participants</a>
			<br>
			<a href="./numberof.php?stat=visit">2.Visitors</a>
			</font>
			</center>
<?
		}
		else 
		{
		echo "<p>Wrong Username or Password.</p>";
		
		
		}

?>
</body></html>