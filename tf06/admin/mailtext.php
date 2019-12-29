<?php
include_once("./validate.php");
if ($_POST["submit"]=="")
{	
	$dbhost="localhost";
	$dbname="teamtech_techfest";
	$dbuser="teamtech_techfes";
	$dbpasswd="tec45st";
	$file=$_GET['t'];
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$time=time();
	$time="lsss".$time;
	echo $time."<br>";
	$query="CREATE TABLE {$time} (Email varchar(255))";
	$result=mysql_query($query);
	echo mysql_error();
	$query0="SELECT * FROM events2k6 WHERE Tablename LIKE '{$file}'";
	$result0=mysql_query($query0);
	echo mysql_error();
	$row0=mysql_fetch_row($result0);
	$num=$row0[3];
	$query1="SELECT * FROM {$file}";
	$result1=mysql_query($query1);
	echo mysql_error();
	while($row1=mysql_fetch_row($result1))
	{	
		$j=2;
		
		for($i=0;$i<$num;$i++)
		{
			$query2="SELECT * FROM {$time} WHERE Email LIKE '".$row1[$j]."'";
			$result2=mysql_query($query2);
			echo mysql_error();
			$n=mysql_num_rows($result2);
			echo mysql_error();
			if ($n==0)
			{
				$query3="INSERT INTO {$time} VALUES('{$row1[$j]}')";
				$result3=mysql_query($query3);
				echo mysql_error();
			}
			$j=$j+4;
		}
			
	}
	
?>
		<form action="" method="post">
		<input type="hidden" name="t" value="<? print $time;?>">
		<table cellpadding="10" cellspacing="10" border="0" width="100%" >
		<tr><td width="30%"><p>Enter the <strong>Subject</strong> of the mail here </p></td><td><input type="text" size="25" name="sub"></td></tr>
		<tr><td width="30%"><p>Enter the email id <strong>From</strong> which this mail should go</p></td><td><input type="text" size="25" name="from"></td></tr>
		<tr><td width="30%"><p>Enter an email id here. Before the mail is sent to the participants a test mail is sent to the email id entered here.</p></td><td><input type="text" name="testmailid" size="25"></td></tr>
		<tr><td width="30%"><p>The text of the mail</p></td><td><textarea rows="15" cols="25" name="text"></textarea></td></tr>
		<tr><td align="center"><input type="submit" name="submit" value="submit" ></td><td><input type="reset"></td></tr>
		</table>
		
	</form>
<?
}
else if ($_POST["submit"]=="submit")
{
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
		$headers .= "From: Techfest 2007<".$_POST['from'].">\r\n";
		$headers .= "Reply-To: ".$_POST['from']."\r\n";
		$sub = $_POST['sub'];
		$text=$_POST['text'];
		$text1=stripslashes($text);
		echo $text."before<br>";
		$h=mail($_POST['testmailid'],$sub,$text1,$headers);
?>
	<p>Check your mail and see if the copy of the mail sent to u is fine. If it is then go ahead and confirm. If not do not proceed and contact Siddharth.</p>
	<form method="post" action="">
	<input type="hidden" name="headers" value="<? print $headers;?>">
	<textarea rows="15" cols="25" name="mes"><? print $_POST['text']; ?> </textarea>
	<input type="hidden" name="sub" value="<? print $sub;?>">
	<input type="hidden" name="f" value="<? print $_POST['t'];?>"><br>
	<input type="submit" name="submit" value="confirm">
	</form>
	
	
<?
}
else if ($_POST['submit']=="confirm")
{

	$dbhost="localhost";
	$dbname="teamtech_techfest";
	$dbuser="teamtech_techfes";
	$dbpasswd="tec45st";
		$mes=stripslashes($_POST['mes']);
		$sub=$_POST['sub'];
		$headers=$_POST['headers'];
		$t=$_POST['f'];						
		$link = mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Could not connect : " . mysql_error());
		mysql_select_db($dbname) or die("Query failed : " . mysql_error());
		$fh=fopen("mail.txt",'a+');
		$str="Headers: ".$headers."\nSub: ".$sub."\nMail: ".$mes."\n";
		fwrite($fh,$str);
		$query="SELECT * FROM {$t}";
		$result=mysql_query($query);
		$count=0;
		while($row=mysql_fetch_row($result))
		{	
			$h = mail($row[0], $sub, $mes, $headers);
			if($h)
			{
				$count++;
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





?>