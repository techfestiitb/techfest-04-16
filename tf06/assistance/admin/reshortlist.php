<?php
include_once("./validate.php");
if ($_POST['action']=="")
{
	
	$tab=$_GET['t'];
	$shorttab=$tab."_shortlisted";
	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());

?>
<br><h3>Check the boxes to shortlist the entries. The entries you check here will be added to the shortlist.</h3>

	<form method="post" action="./reshortlist.php">
	
	<table border="0" cellspacing="2" cellpadding="2">
<?
	$fields = mysql_list_fields($dbname, $tab, $link);
	$columns = mysql_num_fields($fields);
?>

<tr>
<td>&nbsp; &nbsp; </td>
<?
	for ($i = 0; $i < $columns; $i++) {
?>
<td><?
    echo mysql_field_name($fields, $i);

?>
</td>
<?
										}
?>
</tr>
<?
	
	$query="SELECT * FROM ".$tab;
	$result=mysql_query($query,$link);

	while($row=mysql_fetch_row($result))
	{
 		$query1="SELECT * FROM ".$shorttab." WHERE Regnum=".$row[0];
		
		$res=mysql_query($query1,$link);
		if (mysql_num_rows($res)==0)
		{
	
			
			?>
			<tr><td><input type="checkbox" name="<? print "{$row[0]}";?>" value="y" ></td>
			<?
			for ($i = 0; $i < $columns; $i++) 
			{
?><td>
				<? echo "{$row[$i]}" ; ?>
</td>
<?
			}
			echo "</tr>";
	
		}
	}
		echo "</table>";
	
?>


<input type="hidden" name="t" value="<? echo "{$tab}"; ?>">
<input type="submit" name="action" value="submit_list">
</form>
<?
}

if ($_POST['action']=="submit_list")
{
	
	$tab=trim($_POST['t']);
	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$r=$tab."_shortlisted";
	$query="SELECT * FROM ".$tab;
	$result=mysql_query($query,$link);
	while($row=mysql_fetch_row($result))
	{  
			if (($_POST[$row[0]]=='y'))
		{		
			$quer="INSERT INTO ".$r." SELECT * FROM ".$tab." WHERE Regnum=".$row[0];
			$res=mysql_query($quer,$link);
			echo mysql_error();
		
		
		}
		
	}
	
	?>
		<html>
			<HEAD><SCRIPT LANGUAGE="JavaScript">
			redirTime = "1";
			redirURL = "./shortlist.php";
			function redirTimer() { self.setTimeout("self.location.href = redirURL;",redirTime); }
			</script>
			<BODY onLoad="redirTimer()">
			</body>
			</html>
	
		
<?
}

?>


