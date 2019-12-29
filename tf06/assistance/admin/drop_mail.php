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
$headers .= "From: Techfest '06<iterations@techfest.org>\r\n";
$headers .= "Reply-To: iterations@techfest.org\r\n";
$sub = "Techfest '06 - Instructions for filling Iterations Questionnare ";
$query="SELECT * FROM temp_id";
$result=mysql_query($query);
echo mysql_error();

while ($row=mysql_fetch_row($result))
{

	$mes= 'Hi there!';
	$mes .="\r\n\r\nThank You for showing so much enthusiasm for the Iterations workshop.";
	$mes .="\r\n\r\nThe link to the questionnare will follow this email shortly. Before answering the questionnare please read the following instructions carefully.";
	$mes .= "\r\n\r\n1. You are allowed to answer the questionnare only once, so  please take immense care while doing it.";
	$mes .= "\r\n\r\n2. The last date for filling the questionnare is 25th Dec. 2005."; 
	$mes.= "\r\n\r\n3. To be able to fill the questionnare your would require you  registeration number which has been sent to you upon registration by email.";
	$mes .= "\r\n\r\n4. Keep your answers to the point and brief. Long answers may not fetch you more points untill they answer what is being asked. ";
	$mes.= "\r\n\r\n5. The shortlist of the workshop will be displayed on Iterations page on our website on 27th Dec. 2005.";
	$mes.= "\r\n\r\n6. For any discrepancy mail at iterations@techfest.org.";
	$mes .= "\r\n\r\n Best of Luck! Hope to see you at Techfest '06.";
	$mes .= "\r\n\r\n Techfest Team";

	
	$h = mail($row[2], $sub, $mes, $headers);
}


?>