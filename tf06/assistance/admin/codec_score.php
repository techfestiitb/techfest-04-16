<?php
		include_once("./validate.php");

		$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		$t=trim($_GET['t']);
		?>		
				<html>
				<head><title>Codec Answers</title></head>
				<body style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; ">
				<br><br><br><br><br>
				<style type="text/css">
				a {color:#FFFFFF; text-decoration:none;}
				a:link {color:#FFFFFF; text-decoration:none;}
				a:visited {color:#FFFFFF; text-decoration:none;}
				a:hover {color:#D0D0D0; text-decoration:underline;}
				</style>
				<p>Following are the scores of teams who have submitted the queationnare so far</p>
				<center>
				<table style="font-size:11px; " border="1" bordercolor="#FFFFFF" cellpadding="6px" cellspacing="0" width="70%">
				
		<?
		$query="SELECT * FROM codec_ordered";
		$result=mysql_query($query);
		
		while ($row=mysql_fetch_row($result))
		{		
		?>
		<tr><td align="center" width="30%"><? print $row[0];?></td><td align="center"><? print $row[12]; ?></td></tr>
		
		<?
		}
		?>
		</table>
		</center>
		</body></html>