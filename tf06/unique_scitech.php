<?
	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	
	$query="CREATE TABLE unique_scitech (Regnum varchar(10),Institute text,Name1 varchar(100),Email1 varchar(100),Age1 varchar(50),Year1 varchar(30),Contact1 varchar(255),Name2 varchar(100),Email2 varchar(100),Age2 varchar(50),Year2 varchar(30),Contact2 varchar(255))";
	$result=mysql_query($query);
	echo mysql_error();
	if ($result)
	{
		$query="SELECT * FROM scitech2k6";
		$result=mysql_query($query);
		while($row=mysql_fetch_row($result))
		{
			$query1="SELECT * FROM unique_scitech WHERE Name1='{$row[5]}' AND Name2='{$row[10]}'";
			$result1=mysql_query($result1);
			$n=mysql_num_rows($result1)
			if ($n==0)
			{
				$query2="INSERT INTO unique_scitech VAlUES ('{$row[0]}','{$row[1]}','{$row[5]}','{$row[6]}','{$row[7]}','{$row[8]}','{$row[9]}','{$row[10]}','{$row[11]}','{$row[12]}','{$row[13]}','{$row[14]}')";
				$result2=mysql_query($query2);
				echo mysql_error();
			}
			if ($n!=0)
			echo "Record with reg no. ".$row[0]." not added"; 
		
		
		}
		
	}