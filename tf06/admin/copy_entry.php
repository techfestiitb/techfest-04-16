<?

$dbhost = 'techfest.techfest.org';
$dbname = 'techfest';
$dbuser = 'techfestiitb';
$dbpasswd = 'tec45st';
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query="SELECT  * FROM main_scitech";
$result=mysql_query($query);
while ($row=mysql_fetch_row($result))
{
	
	$query1="INSERT INTO scitech (Username,Password,open,submit) VALUES ('{$row[6]}','{$row[7]}',0,0)";
	$result1=mysql_query($query1);
	echo mysql_error();

}



?>
