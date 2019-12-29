// include functions
include("http://www.techfest.org/geoip.inc");

// read GeoIP database
$handle = geoip_open("http://www.techfest.org/GeoIP.dat", GEOIP_STANDARD);
$ip=$_SERVER["REMOTE_ADDR"];
$url=$_SERVER['SCRIPT_NAME'];
$dbhost = '70.85.134.18';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$query="SELECT * FROM hits2k6 WHERE (ip='{$ip}' && url='{$url}')";
$result=mysql_query($query);
echo mysql_error();
$num=mysql_num_rows($result);
if ($num==1)
{
	$n=$row[3];
	$n++;
	$query2="UPDATE hits2k6 SET counts={$n} WHERE (ip='{$ip}' && url='{$url}')";
	$result2=mysql_query($query2);
	echo mysql_error();
}
else if ($num==0)
{	
	$country=geoip_country_name_by_addr($handle, $ip);
	$query3="INSERT INTO hist2k6 VALUES('$url','$country','$ip',1)";
	$result3=mysql_query($query3);
	echo mysql_error();

}

// close database handler
geoip_close($handle);

// print compulsory license notice


