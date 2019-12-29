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
		<head><title>Iterations Answers</title></head>
		<body style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px;">
		<style type="text/css">
				a {color:#FFFFFF; text-decoration:underline;}
				a:link {color:#FFFFFF; text-decoration:underline;}
				a:visited {color:#FFFFFF; text-decoration:underline;}
				a:hover {color:#D0D0D0; text-decoration:none;}
				</style>
		<br><br><br>
		<p>These are the current values on the page. Edit them and submit to change values on page.</p>
		<?
		if ($_POST['submit']=="")
		{
			$contents=file_get_contents("../concreate/connecting/five.txt");
			if(!$contents)
			{
				echo "<p>Error reading input file.</p>";
			}
			else
			{
				$arr=explode("\n",$contents,10);
			
			}
			?>
			<form method="post" action="">
			<center>
			<table border="0" width="60%" cellpadding="5">
			<tr><td width="30%"><input type="text" name="field1" value="<? print $arr[0];?>"></td><td width="30%"><input type="text" name="field2" value="<? print $arr[1];?>"></tr>
			<tr><td width="30%"><input type="text" name="field3" value="<? print $arr[2];?>"></td><td width="30%"><input type="text" name="field4" value="<? print $arr[3];?>"></tr>
			<tr><td width="30%"><input type="text" name="field5" value="<? print $arr[4];?>"></td><td width="30%"><input type="text" name="field6" value="<? print $arr[5];?>"></tr>
			<tr><td width="30%"><input type="text" name="field7" value="<? print $arr[6];?>"></td><td width="30%"><input type="text" name="field8" value="<? print $arr[7];?>"></tr>
			<tr><td width="30%"><input type="text" name="field9" value="<? print $arr[8];?>"></td><td width="30%"><input type="text" name="field10" value="<? print $arr[9];?>"></tr>
			</table>
			</center>
			<p><input type="submit" name="submit" value="submit"></p>
			</form>
		<?
		
		}
		else if ($_POST['submit']=="submit")
		{
		$fh=fopen("../concreate/connecting/five.txt",'w');
		$str=$_POST['field1']."\n".$_POST['field2']."\n".$_POST['field3']."\n".$_POST['field4']."\n".$_POST['field5']."\n".$_POST['field6']."\n".$_POST['field7']."\n".$_POST['field8']."\n".$_POST['field9']."\n".$_POST['field10'];
		$h=fwrite($fh,$str);		
		
		echo "<p>Changes made. Click <a href=http://www.techfest.org/concreate/connecting/top_five.php>here</a> to check if the changes have been made</p>";
		fclose($fh);
		}
		?>
		</body>
		</html>
		
		

