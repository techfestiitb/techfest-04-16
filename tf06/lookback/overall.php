<?php
		$dbhost = '70.85.134.18';
		$dbname = 'techfest';
		$dbuser = 'techfest';
		$dbpasswd = 'tec45st';
		$index=0;
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		$query="SELECT * FROM feedback";
		$result=mysql_query($query,$link);
		while ($row=mysql_fetch_row($result))
		{
?>
		<table border=0 width="100%" style="border-collapse:collapse ">
		<?
		echo "<tr><td>Name: ".$row[0]."</td></tr>";
		echo "<tr><td>Year: ".$row[1]."</td></tr>";
		echo "<tr><td>College: ".$row[2]."</td></tr>";
		
		if ($row[3]==4)
		{
		echo "<tr><td>Other reasons (to know abt Techfest: ".$row[4]."</td></tr>";
		}
		echo "<tr><td>Participated in: ".$row[8]."</td></tr>";
		echo "<tr><td>Impression: ".$row[9]."</td></tr>";
		echo "<tr><td>What kind of events u liked in Techfest?<br>Competitive:  ".$row[10]."<br>Non-competitive: ".$row[11]."</td></tr>";
		echo "<tr><td>Feedback for Accomodation: ".$row[12]."</td></tr>";
		echo "<tr><td>Suggestions : ".$row[13]."</td></tr>";
		
		
		
		echo "</table>";


	}
?>