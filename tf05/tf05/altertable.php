<?

$dbhost = '66.98.128.63';   
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
                
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());


$query="SELECT * FROM opendes2k51";
$result=mysql_query($query);
while($row=mysql_fetch_row($result))
 {
	$query1= "INSERT INTO opendesign2k5 (Regnum, Name1,Email1,Univ1,Year1,Address) VALUES ('".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."')";
	$res1=mysql_query($query1);
	echo $query1;
 }


$query="SELECT * FROM openhard2k51";
$result=mysql_query($query);
while($row=mysql_fetch_row($result))
 {
        $query1="INSERT INTO openhardware2k5 (Regnum, Name1,Email1,Univ1,Year1,Address) VALUES ('".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."')";
        $res1=mysql_query($query1);
        echo $query1;
 }


$query="SELECT * FROM opensoft2k51";
$result=mysql_query($query);

while($row=mysql_fetch_row($result))
 {
        $query1="INSERT INTO opensoftware2k5 (Regnum, Name1,Email1,Univ1,Year1,Address) VALUES ('".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."')";
        $res1=mysql_query($query1);
        echo $query1;
 }



?>

