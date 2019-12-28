<?php
include("testuser.php");
$f=fopen('temp1.xls','w');
$clear= ' ';
fwrite($f, $clear);
fclose($f);


$c_code = $HTTP_GET_VARS['comp'];
if($c_code=="")
{
echo "yes";
exit;

}
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());


$result = mysql_query("Select if_mac from comp_data where comp_code = '".$c_code."'");
$if_mac1 = mysql_fetch_row($result);
$if_mac = $if_mac1[0];
$result1 = mysql_query("SELECT * FROM ".$c_code." ORDER BY Regnum");

$f=fopen('temp1.xls','w');


while ($myrow1 = mysql_fetch_row($result1))
{
$reg=$myrow1[0];

if ($lastreg!=$reg)
{
$line ='"';
$line .= $reg.'"';
$line.= "\t";
if ($if_mac == 'y')
{
$line .='"';
$line .= $myrow1[6].'"';
$line.= "\t";
}
else
{
$line .='" "';
$line.= "\t";
}
}//if enbs here
else
{
$line ='" "';
$line.= "\t";
$line.='" "';
$line.= "\t";
}

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

if ($lastreg!=$reg)
{
$result4 = mysql_query("SELECT * FROM ".$c_code."_post where Regnum ='".$reg."'");
$address = mysql_fetch_row($result4);
$line.='"'.$address[1].'"';
$line.= "\t";
}
$line.= "\r\n";

fputs ($f, $line);
$lastreg = $reg;
}// end of while
 
fclose($f);

mysql_close($link);



$filename = temp1.xls; // the name the file will have on client computer
$file_to_download = temp1.xls; // the name the file has on the server (or an FTP or HTTP request)
$user_agent = strtolower ($_SERVER["HTTP_USER_AGENT"]);
header( "Content-type: application/force-download" );
if ((is_integer (strpos($user_agent, "msie"))) && (is_integer (strpos($user_agent, "win")))) {
  header( "Content-Disposition: filename=".$filename);
} else {
  header( "Content-Disposition: attachment; filename=".$filename);
}
header( "Content-Description: File Transfert");
@readfile($file_to_download);
?>
