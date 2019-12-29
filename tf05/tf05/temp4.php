<?php

$dbhost = '70.85.134.18';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());


$query="SELECT * FROM finalmailing";
echo $query;
$r=mysql_query($query);
while($row=mysql_fetch_row($r)) 	 
 {
	print "<br>".$row[0].$row[1];
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text; charset=iso-8859-1\r\n";
	$headers .= "From: Techfest2005  <info@techfest.org>\r\n";
	$headers .= "Reply-To: info@techfest.org\r\n";
	$sub = "Techfest 2004 Feedback ";
	$mes = "Dear ".$row[0]."\r\n\r\n";
	$mes .= "Techfest is back with the 8th edition scheduled from 28th 
	to 30th Jan 2005. The new team is looking for your feedback and 
	suggestions in order to present to you a much improved Techfest in 
	2005.\r\r\n
	Please go to the following link and fill up the form\r\n
	http://www.techfest.org/feedback/  
	\n\n
	Team Techfest 2005 ";

	$mes .= "\r\n\r\n
	Contact address:
	Techfest 2005,
	Student Gymkhana,
	IITB, Powai
	Mumbai
	India
	http://www.techfest.org";

	$h = mail($row[1], $sub, $mes, $headers);
	if($h == TRUE){
		echo "mail sent to {$row[0]}";
	?>
		<br>
	<?
	}
	else
	{
	print "Unable to send mail to ".$row[0]."<br>";
	}
}
?>
