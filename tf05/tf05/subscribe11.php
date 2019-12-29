
<?php   

$dbhost = '66.98.128.63';   
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
                
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$f=fopen("./subscribe.txt","r");
while(!feof($f))
 {
	$res=fgets($f,1024);
	$r1 = str_replace(" ", "", $res);

$query="SELECT * FROM newsletter2005 WHERE (email LIKE '{$r1}')";     
echo $query;
$result=mysql_query($query);
$r=mysql_fetch_row($result);

if ($r)
 {
	print "<p>This entry already exists</p>";
 }
else
{
$query="INSERT INTO newsletter2005 (email) VALUES ('{$r1}')";
$result=mysql_query($query);
if (!$result)
        {
                echo "Error writing to database. Please try again";

        }

else
	{
		print "<p>$r1 Your Registration was successful</p>";
	}
       
}



}
fclose($f);

?>   

