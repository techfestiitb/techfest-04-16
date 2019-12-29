<?

$dbhost = 'techfest.techfest.org';
$dbname = 'techfest';
$dbuser = 'techfestiitb';
$dbpasswd = 'tec45st';
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="CREATE TABLE temp_id_codec (Regnum varchar(50),id varchar(255),Email varchar(255),submit int)";
$result=mysql_query($query);
echo mysql_error();

$query1="SELECT * FROM question_id_codec";
$result1=mysql_query($query1);
while ($row=mysql_fetch_row($result1))
{
	
	$query2="SELECT * FROM temp_id_codec WHERE Email='{$row[2]}'";
	$result2=mysql_query($query2);
	$num=mysql_num_rows($result2);
	if ($num==0)
	{
		$query3="INSERT INTO temp_id_codec VALUES ('{$row[0]}','{$row[1]}','{$row[2]}',{$row[3]})";
		$result3=mysql_query($query3);
		echo mysql_error();
	
	}
	




}



?>