<?
	include_once("./validate.php");
	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	function make_seed()
	{
	   list($usec, $sec) = explode(' ', microtime());
	   return (float) $sec + ((float) $usec * 100000);
	}
	$tab=trim($_POST{'tablename'});
	echo " table is ".$tab;
	$fields = mysql_list_fields($dbname, $tab, $link);
	$columns = mysql_num_fields($fields);
	for ($i=0;$i<$columns;$i++)
	{
		$count=count($valid);
		echo "count".$count."<br>";
		$str=mysql_field_name($fields,$i);
		echo "str".$str."<br>";
		$str=trim($str);
		echo "str".$str."<br>";
		$str=strtolower($str);
		echo "str".$str."<br>";
		$val=strstr($str,"email");
		echo "val".$val."<br>";
		if ($val!= FALSE)
		{
			echo "blah";
			$valid[$count]=$i;
		
		}
		
	}
	print_r($valid);
	$count=count($valid);
	echo "<br>".$count." count";
	if ($count>0)
	{		
		$time=time();
		$tab1="lsss".$time;
		echo $tab1."<br>";
		$query="CREATE TABLE {$tab1} (Email varchar(255))";
		$result=mysql_query($query);
		echo mysql_error();
		$query="SELECT * FROM {$tab}";
		$result=mysql_query($query);
		echo mysql_error();
		while($row=mysql_fetch_row($result))
		{
			for ($j=0;$j<$count;$j++)
			{
				$index=$valid[$j];
				$row[$index]=trim($row[$index]);
				$query2="SELECT * FROM {$tab1} WHERE Email LIKE '".$row[$index]."'";
				$result2=mysql_query($query2);
				echo mysql_error();
				$n=mysql_num_rows($result2);
				echo mysql_error();
				if ($n==0)
				{
					
					$query3="INSERT INTO {$tab1} VALUES('{$row[$index]}')";
					$result3=mysql_query($query3);
					echo mysql_error();
					echo "<p>A mail will be sent to ".$row[$index]."</p><br>";
				}
				
		
			}
	
		}
	}
	?>
		<form method="post" action="mailany2.php">
				<p> If everything is fine submit form to compose mail</p>
			<input type="hidden" name="tablecreated" value="<? print $tab1;?>">
		<input type="submit">
		</form>

	<?



?>