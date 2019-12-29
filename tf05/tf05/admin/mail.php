<?php
if($_GET['r']=="")
 {
 	echo "Invalid Input.";
	exit;
 }
if ($_POST['action']=="")
 {
?>
	<html>

	<head>
	<title>New Page 1</title>
	</head>

	<body>

	<form method="POST" ENCTYPE="multipart/form-data" action="./mail.php">
	<?php echo "<input type=hidden name=tablename value={$_GET['r']}>";?>
	<table>
   	 <tr>
    	  	<td width="50%">Enter No of Participants :</td>
      	  	<td width="50%"><input type="text" name="num" size="20"></td>
    	</tr>
	
   	 <tr>
    	  	<td width="50%">Subject :</td>
      	  	<td width="50%"><input type="text" name="subject" size="20"></td>
    	</tr>
    	<tr>
      		<td width="50%">From :</td>
      		<td width="50%"><input type="text" name="from" size="20"></td>
    	</tr>
    	<tr>
      		<td width="50%">E-Mail :</td>
      		<td width="50%"><input type="text" name="addr" size="20"></td>
    	</tr>

    	
	</table>
<input type="hidden" name ="to"  value=<? print "{$_GET['email']}"; ?>>
  	<textarea rows="9" name="mesg" cols="52"></textarea>
  	<p><input type="submit" value="Submit" name="action"></p>
	</form>

	</body>

	</html>
<?
 }
else
 {
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: ".$_POST['from']."<".$_POST['addr'].">\r\n";
	$headers .= "Reply-To: ".$_POST['addr']."\r\n";
	$str="Email1";
	for($i=2;$i<=$_POST['num'];$i++)
		$str .=", Email{$i}";
	$query="SELECT ".$str." FROM ".$_POST['tablename'];
	$result=mysql_query($query);
	while($row=mysql_fetch_row($result))
	 {
		for ($i=1;$i<=$_POST['num'];$i++)
		 {
			echo "{$row[$i]}<br>";
		/*	$h = mail($row[$i], $_POST['subject'], 
$_POST['mesg'], $headers);
			if($h == TRUE){
				echo " mail sent to {$row[$i]}<br>";
			 }
			else
			 {
				print "Unable to send mail to ".$row[$i]."<br>;
			 } */
		 }
	 }
 }
?>
