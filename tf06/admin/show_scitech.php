<?php

		include_once("./validate.php");
		$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		$query="SELECT * FROM scitech_answers";
		$result=mysql_query($query);
		echo mysql_error();
		?>
		<html>
				<head><title>SciTech Answers</title></head>
				<body style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; ">
				<br><br><br><br><br>
				<style type="text/css">
				a {color:#FFFFFF; text-decoration:none;}
				a:link {color:#FFFFFF; text-decoration:none;}
				a:visited {color:#FFFFFF; text-decoration:none;}
				a:hover {color:#D0D0D0; text-decoration:underline;}
				</style>
				<p>Following teams have submitted the questionnaire. Click on any team name to see the answers submitted by them.</p>
				<table width="35%" border="0" cellspacing="10" style=" font-size:11px; font-weight:200; ">
		<?
		while ($row=mysql_fetch_row($result))
		{
		?>
				
				<tr><td align="center"><a href="scitech_answers.php?t=<? print $row[0];?>"><? print $row[0];?></a></td></tr>
				
				
		
		<?
		}
	

?>
</table>
</body>
</html>