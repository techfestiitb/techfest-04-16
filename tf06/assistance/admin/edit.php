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
	<p>Check the record you want to edit and please do it one by one.</p>
	<form method="post" action="insertvalues.php">
	<input type="hidden" name="file" value="<? print $tab; ?>">
	<table>
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
	<tr><td><input type="checkbox" name="<? print "{$row[0]}";?>" value="y" ></td>
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
<input type="submit">
</form>

