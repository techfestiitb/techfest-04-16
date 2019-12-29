<?php
	dbhost = '70.85.134.18';
	$dbname = 'techfest';
	$dbuser = 'techfest';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	
	$query="SELECT * FROM tempids";
	$result=mysql_query($query);
	echo mysql_error();
	while ($row=mysql_fetch_row($result)
	{
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: Techfest 2006 <info@techfest.org>\r\n";
		$headers .= "Reply-To: info@techfest.org\r\n";
		$sub = "Full THrottle at Techfest 2006: Update";
		$mes = "Hey\r\n\r\n";
		$mes .= "\r\n\r\nThanks for signing up for the newsletter. We will try to keep you updated about all events at Techfest 2006 through this newsletter.
		Kindly visit www.techfest.org for latest information on all events.";
	
		$mes.="\r\n\r\np.s. : This mail is being sent to you as a conformation that you have been added to the subscription list for Techfest 2006 newsletter on the website www.techfest.org . If that is not 
		the case, then please send a polite mail to info@techfest.org requesting 
		you to be taken off the mailing list. It shall be in effect from now 
		on.";
		$mes.="\r\n\r\nTechfest 2006 Team";
		
		$h = mail($row[0], $sub, $mes, $headers);
		if ($h)
		{
			echo "Mail sent to ".$row[0]."<br>";
		}
	}
	
	?>