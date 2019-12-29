<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

if ($_POST['action']=="")
 {
?>
	<html>

	<head>
	<title>New Page 1</title>
	</head>

	<body>

	<form method="POST" ENCTYPE="multipart/form-data" action="./postnoabstract.php">
	<?php echo "<input type=hidden name=tablename value={$_GET['t']}>";?>
	<table>
   	 <tr>
    	  	<td width="50%">No of Participants per team:</td>
      	  	
      <td width="50%"><input type="text" name="num" size="20" 
value =<? echo "$c";?>></td>
    	</tr>
	
   	 <tr>
    	  	<td width="50%">Name of Competition (Make sure that it is in title case ie Opne Software)</td>
      	  	<td width="50%"><input type="text" name="namecomp" size="20"></td>
    	</tr>
    	<tr>
      		<td width="50%">tablename</td>
      		<td width="50%"><input type="text" name="tablename" size="20"></td>
    	</tr>
    	<tr>
      		<td width="50%">Registration Code (eg IC05 for survivor):</td>
      		<td width="50%"><input type="text" name="regcode" size="20"></td>
    	</tr>

    	
	</table>
  	<p><input type="submit" value="Submit" name="action"></p>
	</form>

	</body>

	</html>
<?
 }
else
 {
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	
	$query="SELECT * FROM {$_POST['tablename']}";
	$result=mysql_query($query) or die("Mysql error : ".mysql_error());
	while($row=mysql_fetch_row($result))
	 {
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: Techfest 2005 <techfest@cc.iitb.ac.in>\r\n";
		$headers .= "Reply-To: info@techfest.org\r\n";
		$subject="Confirmation of Accommodation";
		$mes="Hi\r\n\r\nWe are pleased to inform you that participation of your team has been confirmed for the competition ".$_POST['namecomp'].". Congratulations for the same.";
		$mes.="\r\n\r\nAccommodation has been confirmed for all the team members of the following team:";
		$mes.="\r\nTeam Code : ".$_POST['regcode'].$row[0];
		$mes.="\r\nTeam Leader : ".$row[1];
                for($i=1;$i<=$_POST['num'];$i++)
		 {
			$name[$i]="";
       	  	       	$email[$i]="";
       	       	  	$univ[$i]="";
                	$year[$i]="";
		 }
		$name[1]=$row[1];
                $email[1]=$row[2];
                $univ[1]=$row[3];
                $year[1]=$row[4];
		for ($i=2;$i<=$_POST['num'];$i++)
		 {
			$query1="SELECT Name{$i}, Email{$i}, Univ{$i}, Year{$i} FROM {$_POST['tablename']} WHERE Regnum='{$row[0]}'";
			$result1=mysql_query($query1) or die ("Mysql error : ".mysql_error());
			$row1=mysql_fetch_row($result1);
			if ($row1)
 			 {
				$name[$i]=$row1[0];
				$email[$i]=$row1[1];
				$univ[$i]=$row1[2];
				$year[$i]=$row1[3];
			 }
			$query1="SELECT Address FROM {$_POST['tablename']} WHERE Regnum='{$row[0]}'";
			$result1=mysql_query($query1) or die ("Mysql error : ".mysql_error());
			$row1=mysql_fetch_row($result1);
			if ($row1)
				$address=$row1[0];
		 }
		$time=time();
		$regnum=$_POST['regcode'].$row[0];
		$md5=$regnum.$time;
		$md5=md5($md5);
		$mes.="\r\n\r\nPlease note that accommodation will be provided to teams from outside Mumbai only. Please note the following carefully:";
		
		$mes.="\r\n\r\n1. Accommodation will be provided 6:00A.M. on 27th Jan 2005 onwards and you will be required to vacate the room by 10.00A.M. of 31st Jan 2005. Please report at accommodation desk as soon as you reach IIT Bombay campus to avail accommodation.";
		
		$mes.="\r\n\r\n2. Please bring a printout of the Confirmation of Accommodation mail (i.e. this mail's print out) to the accommodation desk at Techfest in order to avail accommodation.";
		
		$mes.="\r\n\r\n3. Please bring your college Identity Cards to the Accommodation Desk in order to avail accommodation. Accommodation will be provided only on production of I-card. Please note that no other document (a letter or otherwise) will be accepted.";
		
		$mes.="\r\n\r\n4. Techfest identity cards will be provided to all participants and visitors at the time of availing accommodation. You are required to carry these with you at all times while in IIT Bombay during Techfest. Random checks will be made to check unauthorized persons staying in IIT Bombay during Techfest.";

		$mes.="\r\n\r\n5. Please visit http://www.techfest.org/assistance/confirm.php?h={$md5} to submit your final team details. Note that this is mandatory for everybody, even if there is no change in the team. Once entered, no requests for changing team details shall be entertained. Please take care that the details (especially e-mail id) entered by you are correct.";

		$mes.="\r\n\r\n6. An accommodation fee of Rs.200/- and a refundable security deposit of Rs.50/- will be charged per head at the time of the fest. You will be required to pay Rs.200/- + Rs.50/- = Rs.250/- in cash at the time of check-in. ";
		
		$mes.="\r\n\r\n7. Accommodation will be provided on sharing basis.";
		
		$mes.="\r\n\r\n8. We shall provide you with mattresses and buckets. However, you are encouraged to carry your own blankets since it might be a little cold at night.";

		$mes.="\r\n\r\n9. For Yantriki, Laststraw, Udaan, Chemsplash, CRO 1.0 and Contraption participants, please note that all of you will be required to display your machine at the Competitions Desk, which will be located besides the Accommodation desk, in order to avail accommodation. ";
		
		$mes.="\r\n\r\n10. Those carrying their CPU, laptop or any other expensive electronic gadgets will have to get their 'Gate Pass' from the IIT Bombay Main Gate at the time of check-in.";
		
		$mes.="\r\n\r\nHow to get to IIT Bombay, Powai, Mumbai";
	
		$mes.="\r\n\r\n1. IIT buses will ply from Dadar station to IIT to escort the contingents at regular intervals on 27th and 28th January 2005.";
		
		$mes.="\r\n\r\n2. In case you don't get the IIT bus, you can catch the SLOW LOCAL of Central Railways from Dadar station and get down at Kanjurmarg station and then take an auto rickshaw which will charge around Rs.20/- to get you to IIT. While coming from Andheri you can take bus routes 396 or 496 from east of Andheri station, which will drop you right in front of IIT. Alternatively an auto-rickshaw will charge around Rs.60/- from Andheri(East).";
		
		$mes.="\r\n\r\nWe hope that this has cleared all your queries regarding accommodation. In case you have any doubts, please don't hesitate to contact us. We sincerely hope that you will have wonderful time learning, exploring and enjoying at Techfest 2005.";
		
		$mes.="\r\n\r\nWishing you all the best and looking forward to your visit at Techfest 2005.\r\n\r\nWarm Regards,\r\nPuneet Maheshwari\r\nManager, Assistance and Hospitality\r\nTechfest 2005";

		$query1="INSERT INTO finalaccolist VALUES ('{$regnum}', '{$md5}', 0 ,'{$_POST['num']}', '{$name[1]}','{$email[1]}','{$univ[1]}','{$year[1]}','{$name[2]}','{$email[2]}','{$univ[2]}','{$year[2]}','{$name[3]}','{$email[3]}','{$univ[3]}','{$year[3]}','{$name[4]}','{$email[4]}','{$univ[4]}','{$year[4]}','{$name[5]}','{$email[5]}','{$univ[5]}','{$year[5]}','{$name[6]}','{$email[6]}','{$univ[6]}','{$year[6]}','{$address}')";
		$result1=mysql_query($query1);
		
		$email1=$row[2];

		$h = mail($email1, $subject, $mes, $headers);
		if(($h == TRUE)&&($result1==TRUE)){
			echo " mail sent to $email1<br>";
		 }
		else
		 {
			print "Unable to send mail to ".$row[1]." due to either error in database or invalid email address<br>";
		 } 
	 }
 }
?>
