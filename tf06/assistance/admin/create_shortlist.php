<?
	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$query ="SELECT * FROM events2k6";
	$result=mysql_query($query);
	while ($row=mysql_fetch_row($result))
	{
		$tab=$row[1];
		echo "table is ".$tab."<br>";
		$shorttab=$tab."_shortlisted";
		$q1="CREATE TABLE {$shorttab} SELECT * FROM {$tab}";
		$r1=mysql_query($q1);
		mysql_error();
		
	
	}
	
	?>