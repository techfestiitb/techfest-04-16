<?php
include_once("./validate.php");

		$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		?>
		<html>
		<head><title>View shortlist</title></head>
		<body style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px;">
		<style type="text/css">
				a {color:#FFFFFF; text-decoration:none;}
				a:link {color:#FFFFFF; text-decoration:none;}
				a:visited {color:#FFFFFF; text-decoration:none;}
				a:hover {color:#D0D0D0; text-decoration:underline;}
				</style>
		<br><br><br>
		<br><br><br>
		<center>
		<table width="60%" border="0" cellspacing="10px" style="font-size:11px; ">
		<?
		$query="SELECT * FROM events2k6";
		$result=mysql_query($query);
		while ($row=mysql_fetch_row($result))
		{
			echo "<tr><td align=left><a href=./tempn.php?t={$row[1]}_shortlisted>{$row[0]}</a></td></tr>";		
		
		
		}
		
		?>
		</table>
		
		</center>
		</body>
		</html>
		
		

