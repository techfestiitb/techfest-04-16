<?
if ($_POST['submit']=="")
{
?>
		<form action="" method="post">
		<table cellpadding="10" cellspacing="10" border="0" width="100%" >
		<tr><td width="30%"><p>Enter the <strong>Subject</strong> of the mail here </p></td><td><input type="text" size="25" name="sub"></td></tr>
		<tr><td width="30%"><p>Enter the email id <strong>From</strong> which this mail should go</p></td><td><input type="text" size="25" name="from"></td></tr>
		<tr><td width="30%"><p>Enter an email id here. Before the mail is sent to the participants a test mail is sent to the email id entered here.</p></td><td><input type="text" name="id" size="25"></td></tr>
		<tr><td width="30%"><p>The text of the mail</p></td><td><textarea rows="15" cols="25" name="text"></textarea></td></tr>
		<tr><td align="center"><input type="submit" name="submit" value="submit" ></td><td><input type="reset"></td></tr>
		</table>
		
</form>
<?
}
else if ($_POST['submit']=="submit")
{
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: Techfest 2006<".$_POST['from'].">\r\n";
		$headers .= "Reply-To: ".$_POST['from']."\r\n";
		$sub = $_POST['sub'];
		$text=$_POST['text'];
		$text=stripslashes($text);
		echo $text."before<br>";
		$h=mail($_POST['id'],$sub,$text,$headers);
		if ($h)
		{
			echo "mail sent";
		}
	


}
?>