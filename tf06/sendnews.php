<?php
if ($_POST['submit']=="")
{
?>
	<form method="post" action="" >
	<p>What is the table name?</p>	<input type="text" size="20" name="filename">
	<input type="submit" name="submit" value="Submit">
	</form>
<?
}
else if ($_POST['submit']=="Submit")
{
	$dbhost = '70.85.134.18';
	$dbname = 'techfest';
	$dbuser = 'techfest';
	$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$query="CREATE TABLE tempids (Email varchar(255))";
	$result1=mysql_query($query);
	echo mysql_error();
	
	$file=$_POST['filename'];
	$query1="SELECT * FROM {$file}";
	$result1=mysql_query($query1);
	echo mysql_error();
	while($row1=mysql_fetch_row($result1))
	{	
			$query2="SELECT * FROM tempids WHERE Email LIKE '".$row1[0]."'";
			$result2=mysql_query($query2);
			echo mysql_error();
			$n=mysql_num_rows($result2);
			echo mysql_error();
			if ($n==0)
			{
				$query3="INSERT INTO tempids VALUES('{$row1[0]}')";
				$result3=mysql_query($query3);
				echo mysql_error();
			}
			
			
	}
		$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
$headers .= "From: Techfest 2006<info@techfest.org>\r\n";
$headers .= "Reply-To: info@techfest.org\r\n";
$sub = "Techfest 2006 - Last few dates of Registration ";
$mes= 'Hi there!';
$mes .="\r\n\r\nSince Techfest '06 is soon approaching it has become necessary for us to
stop registrations on Dec 10th for many competitions. Do make sure
you have registered online in the Competitions/Workshops/Events which you
plan to come to Techfest this year for. We also have online competitions
on the website which might interest you. Visit http://www.techfest.org/imp_dates.php for
 more information regarding above.";
$mes .= "\r\n\r\nPlease note that the last date for accomodation application is Dec 25th.
After this no applications will be entertained.";
$mes .="\r\n\r\nIt is always a pleasure for us welcoming participants to Techfest, as it
isnt at all possible without you guys!
";
$mes .="\r\n\r\nHope to see you at Techfest this year. Have an awesome New Year!";
$mes .="\r\n\r\nCheers,";
$mes .="\r\n\r\nPS - For queries you want to be addressed promptly, try the Techfest forum
at http://gymkhana.iitb.ac.in/~techfest";
$mes .="\r\n\r\nIt is a storehouse of information on Techfest events this year and also
has numerous queries answered.";


		
		$h = mail("mailsiddj@gmail.com", $sub, $mes, $headers);
	if ($h)
	{
	?>
	<html>
			<HEAD><SCRIPT LANGUAGE="JavaScript">
			redirTime = "1";
			redirURL = "./confirm.php";
			function redirTimer() { self.setTimeout("self.location.href = redirURL;",redirTime); }
			</script>
			<BODY onLoad="redirTimer()">
			</body>
			</html>
			<?
		}
	
}
?>


