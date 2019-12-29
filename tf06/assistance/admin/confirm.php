<?php
if ($_POST['submit']=="")
{
	?>
	<form method="post" action="">
	<input type="submit" name="submit" value="submit">
	</form>
	<?
}
else if ($_POST['submit']=="submit")
{

		$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
						
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: Techfest 2006<hover.junior@techfest.org>\r\n";
		$headers .= "Reply-To: hover.junior@techfest.org\r\n";
		$sub = "Techfest 2006 - Important regarding Hover Junior ";
		$mes .= "\r\nHello there,";
		$mes .= "\r\n\r\nThis mail is being sent to u since our databases show that you have registered for the competition Hover Junior at Techfest 2006.";
		$mes .= "\r\n\r\nThis competition (as the name suggests) is for those students studying in schools or junior colleges for classes upto 10+2 only. As per the information filled in by you in the registration form, you are a college student and thus are not elligible for the competition. For the same reason your registration has been suspended. If thats not the case kindly drop a polite mail to hover.junior@techfest.org verifying your elligibilty. ";
		$mes .= "\r\n\r\nFor queries contact:
Amardeep
Manager, Sixth Gear
amar@techfest.org
Ph. +91-98201 91213

Aditya Chaoji
Manager, Sixth Gear
aditya@techfest.org
Ph. +91-98693 57291";
		
		$query="SELECT * FROM tempids";
		$result=mysql_query($query);
		while($row=mysql_fetch_row($result))
		{	
			$h = mail($row[0], $sub, $mes, $headers);
			if($h)
			{
				echo "Sending mail to ".$row[0]." .....<br>";
			}
			
		}
$query="DROP TABLE tempids";
$result=mysql_query($query);
echo "Table dropped";
		
}





?>