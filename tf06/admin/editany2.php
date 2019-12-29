<?	
	include_once("./validate.php");
	if ($_POST['submit']=="")
	{
	$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$tab=$_POST['file'];
	$fields = mysql_list_fields($dbname, $tab, $link);
	$columns = mysql_num_fields($fields);
	$query="SELECT * FROM {$tab}";
	$result=mysql_query($query);
	echo mysql_error();
	?>
	<form method="post" action="">
	<?
	
	while ($row=mysql_fetch_row($result))
	{
		if ($_POST[$row[0]]=='y')
		{	$reg=$row[0];
			?><table border="0" cellspacing="10" cellpadding="10"><?
			for ($i = 0; $i < $columns; $i++) 
			{
			?><tr align="center"><td align="center"><?
			echo mysql_field_name($fields, $i);
			?></td><td align="center"><textarea name="<? print mysql_field_name($fields,$i);?>"  rows="3" cols="30"><? print $row[$i];?></textarea></td></tr>
			<?
			}
			?></table><?
		}
			
	}
			


	?>
	<input type="hidden" name="g" value="<? print $tab;?>">
	<input type="hidden" name="keyword" value="<? print $reg;?>">
	<input type="submit" name="submit" value="make_changes">
	</form>

	<?
	
	}
	else if ($_POST['submit']=="make_changes")
	{	
	
			$dbhost = '70.85.134.18';
			$dbname = 'techfest';
			$dbuser = 'techfest';
			$dbpasswd = 'tec45st';
			$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
			or die("Could not connect : " . mysql_error());
			mysql_select_db($dbname) or die("Query failed : " . mysql_error());
			$no=$_POST['keyword'];
			echo "no is".$no."<br>";
			$tab=$_POST['g'];
			$fields = mysql_list_fields($dbname, $tab, $link);
        	$columns = mysql_num_fields($fields);
			$tag=mysql_field_name($fields,0);
			$query="UPDATE {$tab} SET ";
			for ($i = 0; $i < $columns; $i++) 
		    {
				$str=mysql_field_name($fields, $i);
				if ($i==$columns-1)
				$query .= "{$str}='{$_POST[$str]}' ";
				else 
				$query .= "{$str}='{$_POST[$str]}', ";
			}
			$query .= "WHERE {$tag}={$no}";
			echo "The querry is<br>".$query."<br>";
			$result=mysql_query($query);
			echo mysql_error();
			echo "<a href=./temp1.php?t={$tab}>Check the table for updated values</a>";
		}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	