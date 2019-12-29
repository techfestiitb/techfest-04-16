<?php

	$dbhost = 'techfest.techfest.org';
	$dbname = 'techfest';
	$dbuser = 'techfestiitb';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	
	$query="SELECT * FROM main_scitech";
	$result=mysql_query($query);
	echo mysql_error();
	$count=0;
	while ($row=mysql_fetch_row($result))
	{	
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
		$headers .= "From: Techfest '06<scitech@techfest.org>\r\n";
		$headers .= "Reply-To: scitech@techfest.org\r\n";
		$sub = "SciTech Online Elimination";
		$mes= "Hi there!";
		$mes .= "\r\n\r\nThank you for registering for SciTech - College Quiz Challenge. SciTech online elims starts off on 0030 hrs, 30th December 2005.";
		$mes .= "\r\nMake sure you have read and understood the rules and regulations.";
		$mes .= "\r\nPlease visit for all information regarding SciTech Online Elims http://www.techfest.org/scitech/scitech_online.php";
		$mes .= "\r\n\r\nEach team will require a username and password to be able to access the questions and answer them. Here are your details :";
		
		$mes .= "\r\n\r\nTeam code: ".$row[6];
		$mes .= "\r\nInstitute/college/University: ".$row[1];
		$mes .= "\r\nTeam Member 1: ".$row[2];
		$mes .= "\r\nTeam Member 2: ".$row[4];
		$mes .= "\r\nUsername: ".$row[6];
		$mes .= "\r\nPassword: ".$row[7];
		$mes .= "\r\n\r\nBest of luck! Hope to see you at Techfest '06.";
		$mes .= "\r\n\r\nTechfest Team";
		$h1 = mail($row[3], $sub, $mes, $headers);
		if ($h1)
		echo "dropped mail to ".$row[2]." <br>";
		$h2 = mail($row[5], $sub, $mes, $headers);
		if ($h2)
		echo "dropped mail to ".$row[4]." <br>";
		$count++;
		if ($count==25)
		{
			$count=0;
			sleep(1);
			
		}
		
	
	
	}
