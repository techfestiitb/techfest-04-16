<?
if ($_POST['confirm']=="")
{
$tab=$_POST['tablecreated'];
echo "table in first part is ".$tab."<br>";
?>
		<form action="" method="post">
		<input type="hidden" name="t" value="<? print $tab;?>">
		<table cellpadding="10" cellspacing="10" border="0" width="100%" >
		<tr><td width="30%"><p>Enter the <strong>Subject</strong> of the mail here </p></td><td><input type="text" size="25" name="sub"></td></tr>
		<tr><td width="30%"><p>Enter the email id <strong>From</strong> which this mail should go</p></td><td><input type="text" size="25" name="from"></td></tr>
		<tr><td width="30%"><p>Enter an email id here. Before the mail is sent to the participants a test mail is sent to the email id entered here.</p></td><td><input type="text" name="testmailid" size="25"></td></tr>
		<tr><td width="30%"><p>The text of the mail</p></td><td><textarea rows="15" cols="25" name="text"></textarea></td></tr>
		<tr><td align="center"><input type="submit" name="confirm" value="confirm" ></td><td><input type="reset"></td></tr>
		</table>
		
		</form>
<?
}
else if ($_POST['confirm']=='confirm')
{
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: Techfest 2006<".$_POST['from'].">\r\n";
		$headers .= "Reply-To: ".$_POST['from']."\r\n";
		$sub = $_POST['sub'];
		$text=$_POST['text'];
?>

<?
		$text=stripslashes($text);
		echo $text."before<br>";
		$h=mail($_POST['testmailid'],$sub,$text,$headers);
		echo "<br><br><br><br> table in 2nd part is".$_POST['t'];
		
?>
	<p><strong>Check your mail and see if the copy of the mail sent to u is fine. If it is then go ahead and confirm. If not do not proceed and contact Siddharth.</strong></p>
	<form method="post" action="">
	<textarea rows="15" cols="25" name="mes"><? print $_POST['text']; ?> </textarea>
	<input type="hidden" name="headers" value="<? print $headers;?>">
	<input type="hidden" name="sub" value="<? print $sub;?>">
	<input type="hidden" name="f" value="<? print $_POST['t'];?>"><br>
	<input type="submit" name="confirm" value="go">
	</form>
		
<?
}
else if ($_POST['confirm']=="go")
{

		$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
		$mes=stripslashes($_POST['mes']);
		$sub=$_POST['sub'];
		$headers=$_POST['headers'];
		$t=$_POST['f'];						
		echo "table is ".$t;
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
		or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		
		$query="SELECT * FROM {$t}";
		$result=mysql_query($query);
		echo mysql_error();
		$fh=fopen("mail.txt",'a+');
		$str="Headers: ".$headers."\nSub: ".$sub."\nMail: ".$mes."\n";
		fwrite($fh,$str);
		$count=0;
		while($row=mysql_fetch_row($result))
		{	
			$h = mail($row[0], $sub, $mes, $headers);
			if($h)
			{
				echo "Sending mail to ".$row[0]." .....<br>";
				$stre="Sent mail to ".$row[0]."\n";
				fwrite($fh,$stre);
				
				
			}
			if ($count==50)
			{
			$count=0;
			sleep(1);
			}
		}
		fwrite($fh,"\n\n\n\n\n\n\n\n\n");
		fclose($fh);
		$query="DROP TABLE {$t}";
		$result=mysql_query($query);
		echo "Table dropped";
		
}

