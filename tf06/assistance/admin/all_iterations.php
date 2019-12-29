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
		$query="SELECT * FROM iterations_answer WHERE Regnum='{$t}'";
		$result=mysql_query($query);
		$row=mysql_fetch_row($result);
		?>		
				<html>
				<head><title>Iterations Answers</title></head>
				<body style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; ">
				<br><br><br><br><br>
				<style type="text/css">
				a {color:#FFFFFF; text-decoration:none;}
				a:link {color:#FFFFFF; text-decoration:none;}
				a:visited {color:#FFFFFF; text-decoration:none;}
				a:hover {color:#D0D0D0; text-decoration:underline;}
				</style>
				<p>Following are the answers submitted by team <strong><? print $row[0]; ?></strong></p>
				<table width="100%" border="0" cellspacing="10" style=" font-size:11px; font-weight:200; ">
				<tr>
				<td>1.	What is the name given to equations governing fluid flows ?</td></tr>
				<tr><td><textarea rows="7" cols="80" name="1"><? print $row[2]; ?></textarea></td></tr>
				
				<tr>
				<td><br>2.	What is the range of Lift/Drag ratio for airfoils?</td></tr>
				<tr><td><textarea rows="7" cols="80" name="2"> <? print $row[3]; ?></textarea></td></tr>
				
				<tr>
				<td><br>3.	What is Couette flow?</td></tr>
				<tr><td><textarea rows="7" cols="80" name="3" ><? print $row[4]; ?></textarea></td></tr>
				
				<tr>
				<td><br>4.	Name one CFD discussion forum on the internet?</td></tr>
				<tr><td><textarea rows="7" cols="80" name="4" ><? print $row[5]; ?></textarea></td></tr>
				
				<tr>
				<td><br>5.	List  3 CFD companies & their CFD products.</td></tr>
				<tr><td><textarea rows="7" cols="80" name="5" ><? print $row[6]; ?></textarea></td></tr>
				
				<tr>
				<td><br>6.  Specify 3 turbulence models for CFD.</td></tr>
				<tr><td><textarea rows="7" cols="80" name="6" ><? print $row[7]; ?></textarea></td></tr>
				
				<tr>
				<td><br>7.	What is the laminar-turbulent transition Reynolds n for external & internal flows ?</td></tr>
				<tr><td><textarea rows="7" cols="80" name="7" ><? print $row[8]; ?></textarea></td></tr>
				
				<tr>
				<td><br>8.	What does FVM, FEM & FDM stand for?</td></tr>
				<tr><td><textarea rows="7" cols="80" name="8" ><? print $row[9]; ?></textarea></td></tr>
				
				<tr>
				<td><br>9.	What is Blasius Profile?</td></tr>
				<tr><td><textarea rows="7" cols="80" name="9" ><? print $row[10]; ?></textarea></td></tr>
				
				<tr>
				<td><br>10.	 List 3 application area of CFD in designing automobile.</td></tr>
				<tr><td><textarea rows="7" cols="80" name="10" ><? print $row[11]; ?></textarea></td></tr>
				</tr>
				</table>
				</body>
				</html>
		
		
		

