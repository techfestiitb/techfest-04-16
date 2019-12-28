<?php
include("testuser.php");
$f=fopen('temp1.xls','w');
$clear= ' ';
fwrite($f, $clear);
fclose($f);


$w_code = $HTTP_GET_VARS['workshop'];

if($w_code=="")
{
echo "Invalid Access";
exit;
}

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());


$result = mysql_query("Select * from w_data where w_code = '".$w_code."'");
$num=mysql_num_rows($result);
if($result==0)
{
echo "ERROE";
exit;
}

$result1 = mysql_query("SELECT * FROM ".$w_code." ");

$f=fopen('temp1.xls','w');

while ($myrow1 = mysql_fetch_row($result1))
{
$line = '"'.$myrow1[0].'"';
$line.= "\t";
$line .= '"'.$myrow1[1].'"';
$line.= "\t";
$line .= '"'.$myrow1[2].'"';
$line.= "\t";
$line .= '"'.$myrow1[3].'"';
$line.= "\t";
$line .= '"'.$myrow1[4].'"';
$line.= "\t";
$line .= '"'.$myrow1[5].'"';
$line.= "\t";
$address1 =    str_replace("\n", " ", $myrow1[6]);
$address1 =    str_replace("\r", " ", $address1);
$line.='"'.$address1.'"';
$line.= "\t";


$line.= "\r\n";

fputs ($f, $line);
}// end of while
 
fclose($f);
mysql_close($link);



$filename = "temp1.xls"; // the name the file will have on client computer
$file_to_download = "temp1.xls"; // the name the file has on the server (or an FTP or HTTP request)
$user_agent = strtolower ($_SERVER["HTTP_USER_AGENT"]);
header( "Content-type: application/force-download" );
if ((is_integer (strpos($user_agent, "msie"))) && (is_integer (strpos($user_agent, "win")))) {
  header( "Content-Disposition: filename=".$filename);
} else {
  header( "Content-Disposition: attachment; filename=".$filename);
}
header( "Content-Description: File Transfert");
@readfile($file_to_download);

$f=fopen('temp1.xls','w');
$clear= ' ';
fwrite($f, $clear);
fclose($f);

?>
