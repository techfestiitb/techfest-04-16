<?
	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	
	$query="CREATE TABLE main_scitech (Regnum varchar(10),Institute text,Name1 varchar(100),Email1 varchar(100),Name2 varchar(100),Email2 varchar(100),Username varchar(10),Password varchar(20))";
	$result=mysql_query($query);
	echo mysql_error();
	if ($result)
	{
		$query="SELECT * FROM unique_scitech";
		$result=mysql_query($query);
		while($row=mysql_fetch_row($result))
		{	
			$user="SC06".$row[0];
			$passwd=md5($user.$row[1]);
			$passwd=substr($passwd,0,8);
			$row[3]=strtolower($row[3]);
			$row[8]=strtolower($row[8]);
			$query1="INSERT INTO main_scitech VALUES ('{$row[0]}','{$row[1]}','{$row[2]}','{$row[3]}','{$row[7]}','{$row[8]}','{$user}','{$passwd}')";
			$result1=mysql_query($query1);
			echo mysql_error();
			
		}
		
	}
	?>