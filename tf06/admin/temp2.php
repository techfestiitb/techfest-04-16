<?php
include_once("./validate.php");
$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) 
or die("Query failed : " . mysql_error());

//$query="CREATE TABLE finalmailing (name varchar(30), email 
//varchar(30))";
//echo $query;
//$r=mysql_query($query)
//or die("Query error : " . mysql_error());

$query="SELECT * FROM mailinglist";
echo $query;
$r=mysql_query($query)
or die("Query error : " . mysql_error());

while($row=mysql_fetch_row($r))

 {
	$query1= "SELECT * FROM finalmailing WHERE (email = '$row[1]')";
	$r1=mysql_query($query1)  
	or die("Query error in loop: " . mysql_error());
	if(!($row1=mysql_fetch_row($r1)))
	{
		$query1= "INSERT INTO finalmailing (name,email) VALUES ('$row[0]','$row[1]')";
		$r2=mysql_query($query1)
		or die("Query error in loop in adding: " . mysql_error());
		echo "mohit";  

	}		

}
$query="DELETE FROM mailinglist  WHERE (email LIKE '%iitb.ac.in%')";
echo $query;

?>

