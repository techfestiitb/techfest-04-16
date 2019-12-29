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
				<head><title>Grey Circuits Answers</title></head>
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
		$query="SELECT * FROM grey_ordered";
		$result=mysql_query($query);
		
		while ($row=mysql_fetch_row($result))
		{		
				
				
				
		?>
		<tr><td align="left"><? print "Registration no.: ".$row[0];?></td>
		<td align="left"><? print "Score: ".$row[2]; ?></td>
		<td>6. What is so "fuzzy" about Fuzzy Logic? (This is a subjective question)<br>
		<p>Ans<br>
		<textarea rows="8" cols="60"><? print $row[1];?></textarea>
		</p>
		</td></tr>
		
		<?
		
		}
		?>
		</table>
		</center>
		</body></html>