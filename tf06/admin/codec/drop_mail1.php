$mes .= "\r\n\r\nhttp://www.techfest.org/sixth_gear/iterations/questionnare.php?t=".$row[1];


<?php
$dbhost = 'techfest.techfest.org';
$dbname = 'techfest';
$dbuser = 'techfestiitb';
$dbpasswd = 'tec45st';
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
$headers .= "From: Techfest '06<codec@techfest.org>\r\n";
$headers .= "Reply-To: codec@techfest.org\r\n";
$sub = "Techfest '06 - Codec Questionnare ";
$query="SELECT * FROM temp_id_codec";
$result=mysql_query($query);
echo mysql_error();

while ($row=mysql_fetch_row($result))
{

	$mes= 'Hi there!';
	$mes .= "Here is the link to your questionnare. Remember to fill it by 4th Jan 2006.";
	$mes .= "\r\n\r\n  http://www.techfest.org/smart_tech/codec/questionnare.php?t=".$row[1];
	$mes.= "\r\n\r\n For any discrepancy mail at codec@techfest.org. Best of Luck! Hope to see you at Techfest '06.";
	$mes .= "\r\n\r\n Techfest Team";

	
	$h = mail($row[2], $sub, $mes, $headers);
	if ($h)
	echo "dropping mail to ".$row[2];
}


?>