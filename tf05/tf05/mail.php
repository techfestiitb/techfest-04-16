<?php
if ($_POST['action']=="")
 {
?>
	<html>

	<head>
	<title>New Page 1</title>
	</head>

	<body>

	<form method="POST" ENCTYPE="multipart/form-data" action="./mail.php">
	<table>
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

    	<tr>
      		<td width="50%">To :</td>
      		<td width="50%"><? print "{$_GET['email']}"; ?></td>
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
	
	$h = mail($_POST['to'], $_POST['subject'], $_POST['mesg'], $headers);
	if($h == TRUE){
		echo " mail sent";
	 }
	else
	 {
		print "Unable to send mail to ".$_POST['to'];
	 } 
 }
?>