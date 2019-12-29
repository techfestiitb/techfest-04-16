<?
$var=$_GET['t'];
?>
<form method="POST" action="atlantis.php">

<table>
<tr>
<td>Point</td>
<td>Type</td>
<td>x</td>
<td>y</td>
<td>fraction of population</td>
</tr>
<?for($i=1;$i<=$var;$i++)
 {
	echo "<tr><td>";
?>
<input type= "text" name="point<?echo "$i";?>">
</td>
<td>
<input type= "text" name="type<?echo "$i";?>">
</td>
<td>
<input type= "text" name="x<?echo "$i";?>">
</td>
<td>
<input type= "text" name="y<?echo "$i";?>">
</td>
<td>
<input type= "text" name="ratio<?echo "$i";?>">
</td></tr>
<?

}

?>
<input type="hidden" name="varc" value="<?echo $var;?>">
<br>
<input type="submit" value="submit" name="submit">
</form>

