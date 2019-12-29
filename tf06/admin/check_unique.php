<?	
	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$query="SELECT * FROM scitech_answers";
	$result=mysql_query($query);
	while ($row=mysql_fetch_row($result))
	{
		$query1="SELECT * FROM scitech_answers WHERE Username='{$row[0]}'";
		$result1=mysql_query($query1);
		$num=mysql_num_rows($result1);
		if ($num!=1)
		{
		echo "match found for ".$row[0]." <br>";
		}
	
	}
	?>