<?php
if ($_POST['submit']=="")
{
?>

	<form action="" method="post">
	<p>Enter the table name</p>
	<input type="text" name="filename" size="25">
	<input type="submit" name="submit" value="submit">
	</form>
<?

}

else if ($_POST['submit']=="submit")
{
	include_once("./validate.php");
	$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$t=$_POST['filename'];
	$query="SELECT * FROM {$t}";
	$result=mysql_query($query);
	$fields = mysql_num_fields($result);
	for ($i=0; $i < $fields; $i++)
	{
		$type  = mysql_field_type($result, $i);
		$name  = mysql_field_name($result, $i);
		$len  = mysql_field_len($result, $i);
		$flags = mysql_field_flags($result, $i);
		echo $type . " " . $name . " " . $len . " " . $flags . "<br>";
	}
	mysql_free_result($result);
	mysql_close();
		
	
	
}

?>

