<?php

include_once("./validate.php");
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$tab=$_GET{'t'};

echo "<a href=./clear.php?t={$tab}>click here to clear shortlist</a>";
echo "<form name=form1 method=post action=delrecords.php>";

$fields=mysql_list_fields($dbname, $tab, $link);
$columns=mysql_num_fields($fields);
?>
<table>
<tr>
<td>
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
	<td>
	<input type="checkbox" name="<?echo "{$row[0]}";?>" value="1" >
	</td>
<?
	for ($i = 0; $i < $columns; $i++) {
	?>
	<td>
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
<input type="hidden" name="t" value="<? echo "{$tab}"; ?>">
<input type="submit" name="action" value="delete">
</form>





