<?
$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);
$ipad = $REMOTE_ADDR;
$qr = "INSERT INTO userips(ip) VALUES ('$ipad')";
$result2 = mysql_query($qr);
mysql_close($db);
?>
