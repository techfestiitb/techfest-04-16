<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

if(($_GET['t']=="")&&($_POST['action']==""))
 {
 	echo "Invalid Input.";
	exit;
 }
if ($_POST['action']=="")
 {
?>
<?
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$fields = mysql_list_fields($dbname, $_GET['t'], $link);
$columns = mysql_num_fields($fields);
if($_GET['t']=="Survivor") $columns--;
$c=($columns-2)/4;
?>
	<html>

	<head>
	<title>New Page 1</title>
	</head>

	<body>

	<form method="POST" ENCTYPE="multipart/form-data" action="./mailtable.php">
	<?php echo "<input type=hidden name=tablename value={$_GET['t']}>";?>
	<table>
   	 <tr>
    	  	<td width="50%">No of Participants per team:</td>
      	  	
      <td width="50%"><input type="text" name="num" size="20" 
value =<? echo "$c";?>></td>
    	</tr>
	
   	 <tr>
    	  	<td width="50%">Subject :</td>
      	  	<td width="50%"><input type="text" name="subject" size="20"></td>
    	</tr>
    	<tr>
      		<td width="50%">From (eg Competitions at Techfest 2005):</td>
      		<td width="50%"><input type="text" name="from" size="20"></td>
    	</tr>
    	<tr>
      		<td width="50%">E-Mail (eg competitions@techfest.org):</td>
      		<td width="50%"><input type="text" name="addr" size="20"></td>
    	</tr>

    	
	</table>
  	<textarea rows="9" name="mesg" cols="52"></textarea>
  	<p><input type="submit" value="Submit" name="action"></p>
	</form>

	</body>

	</html>
<?
 }
else
 {
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());


	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: ".$_POST['from']."<".$_POST['addr'].">\r\n";
	$headers .= "Reply-To: ".$_POST['addr']."\r\n";
	$str="Email1";
	for($i=2;$i<=$_POST['num'];$i++)
		$str .=", Email{$i}";
	$query="SELECT ".$str." FROM ".$_POST['tablename'];
	$result=mysql_query($query) or die ("Mysql Error: ".mysql_error());
	while($row=mysql_fetch_row($result))
	 {
		for ($i=0;$i<$_POST['num'];$i++)
		 {
			echo "{$row[$i]}<br>";
			$mes=stripslashes($_POST['mesg']);
			$h = mail($row[$i], $_POST['subject'], $mes, $headers);
			if($h == TRUE){
				echo " mail sent to {$row[$i]}<br>";
			 }
			else
			 {
				print "Unable to send mail to ".$row[$i]."<br>";
			 } 
		 }
	  }
 }
?>
