<?php
include_once("./validate.php");
$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$tab=$_GET{'t'};
$fields = mysql_list_fields($dbname, $tab, $link);
$columns = mysql_num_fields($fields);
?>
<html>
<head><title>Iterations Answers</title></head>
<body style="background-color:#000000; color:#FFFFFF; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; line-height:20px; ">
<br><br><br><br><br>
<style type="text/css">
a {color:#FFFFFF; text-decoration:none; font-size:11px;}
a:link {color:#FFFFFF; text-decoration:none;}
a:visited {color:#FFFFFF; text-decoration:none;}
a:hover {color:#D0D0D0; text-decoration:underline;}
</style>
<center>
<form action="mail_short.php" method="post">
<table style="font-size:11px; " border="1" bordercolor="#FFFFFF" cellpadding="6px" cellspacing="0">
<tr>
<?
for ($i = 0; $i < $columns; $i++) {
?>
<td><?
   echo mysql_field_name($fields, $i);

?>
</td>
<?
}
?>
</tr>

<?
$query="SELECT * FROM {$tab}";
$res=mysql_query($query);

while($row=mysql_fetch_row($res))
 {
?>
	<tr>
<?
	for ($i = 0; $i < $columns; $i++) {
	?><td>
	<?echo "{$row[$i]}" ; ?>
	</td>
	<?
	}
?>
</tr>
<?

}


?>
</table>
</center>
<br>
<input type="hidden" name="tablename" value="<? print $tab;?>">
<input type="submit" value="send_mail_to_participants">
</form>
</body>
</html>
