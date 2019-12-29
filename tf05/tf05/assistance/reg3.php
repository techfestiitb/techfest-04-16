Hot & Rising<br><br><br>

<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$comp="Hot & Rising";
// echo "$comp";
?>
<form method="GET" >
<a href="./links2.htm" >Home</a><br>
Reg.Number <input type="text" size="10" name="begin"> to  <input type="text" size="10" name="end"> 
<input type="submit" value="Send" name="go">
</form>
<?php
if($_GET['go']=="Send")
{
$start=$_GET['begin'];
$end=$_GET['end'];
//echo "$start";
//echo "$end";
$query="SELECT * FROM hotnrising2k5 WHERE (Regnum <=$end && Regnum >= $start)"; 
$result=mysql_query($query) or die ("Error in query") .mysql_error();

$mes.="This is in regard to Techfest 2005, the annual science and technology festival of IIT Bombay. This is to inform you that your participation in the event Hot & Rising has been confirmed\r\n";
$mes.="Kindly note that accommodation is provided to students from outside Mumbai only. To avail accommodation, you are requested to get a printout of this mail signed (with stamp) by the Dean/Head of your Institute/Department. You should then send us the letter by post/fax at the address mentioned below as soon as possible. Please note that this is necessary to avail accommodation and this mail is being sent to the Contingent Leaders only. \r\n";
$mes.="All teams whose letters are received will then be sent the Confirmation of Accommodation mail soon. Kindly note that accommodation will be provided to only those who have received this Confirmation of Accommodation mail. You are requested to refer to the accommodation policy at http://www.techfest.org/assistance for complete details.\r\n";
$mes.="\r\nWarm Regards,\r\n";
$mes.="Puneet Maheshwari\r\n";
$mes.="Manager, Assistance and Hospitality\r\n";
$mes.="Techfest 2005\r\n\r\n";
$mes.="Contact Address:
TECHFEST  2005 	
Students Gymkhana 
IIT Bombay, Powai, 
Mumbai-400076 \r\n";
$mes.="Tel: (022) 25764045 ,Fax-91-22 25723480 \r\n";
$mes.="Email: info@techfest.org\r\n";
$mes.="------------------------------------------------------------------------------------------------------------ \r\n";
$tabname="hotnrising2k5";
$comp="Hot & Rising";
$sub="Application for Accommodation";
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: Techfest 2005 <assistance@techfest.org>\r\n";
$headers .= "Reply-To: assistance@techfest.org\r\n";
//echo "\r\n adba";
while($row=mysql_fetch_row($result))
{	$mes2=$mes;
	$fields = mysql_list_fields($dbname, $tabname, $link) or die ("Error").mysql_error();
	$columns = mysql_num_fields($fields);
//	query1="SELECT * FROM {$tabname} WHERE (Regnum LIKE '{$row[0]}')";
//	$result1=mysql_query($query1) or die ("Mysql Error : ".mysql_error());
//	$row1=mysql_fetch_row($result1);
	//	else echo $row1;
	$mes1.="                 Application for Accommodation \r\n";
	$mes1.="Competition : $comp \r\n";
	$mes1.="Registration Number : HR05".$row[0]." \r\n";
	$mes1.="Contingent Leader : ".$row[1]." \r\n";
	$mes1.="Email : ".$row[2]."  \r\n";
	$mes1.="University : ".$row[3]."  \r\n";
	$mes1.="\r\nTeam Members :\r\n";
	for ($i=5;$i<$columns && $i<9;$i+=4) $mes1.=$row[$i]."\r\n";
	$mes1.="Address: ".$row[9]."\r\n\r\n\r\n\r\n";	
	$mes2.=$mes1;
	$mes2.="Dean/Head of the Department/Institute";
	$mes2=stripslashes($mes2);
	$h = mail("$row[2]", $sub, $mes2,$headers);
	if($h == TRUE){
	echo " mail sent to {$row[2]}<br>";
	 }
	else
	 {
		print "Unable to send mail to ".$row[$i]."<br>";
	 }
	 
	 $mes1="";
}


}
?>

	
	


