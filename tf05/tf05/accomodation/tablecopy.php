<?php
if ($_POST['action']=="")
{

?>

	<html>
	<form method="post" action="tablecopy.php" ><br>
	Enter the database filename
	<input type="text" name="file" size="30">
	<input type="submit" name="action" value="Go">
	
	
	</form>
	</html>
<?
}
else if ($_POST['action']=="Go")
{
	$dbhost = '66.98.128.63';
	$dbname = 'techfest';
	$dbuser = 'techfest';
	$dbpasswd = 'tec45st';
	$link=mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Mysql Database Connect Failed : " . mysql_error());
	mysql_select_db($dbname) or die("Database select failed : " . mysql_error());
	$filename=$_POST['file'];
	echo "{$filename}";
	$fields=mysql_list_fields($dbname,$filename,$link);
	$columns=mysql_num_fields($fields);
	$textfile="./text/".$filename.".txt";
	echo "{$textfile}";
	$fh=fopen($textfile,'a');
	for ($i = 0; $i < $columns; $i++) 
	{
         	$str=mysql_field_name($fields, $i);
	  		fwrite($fh,$str."\t9234");
	 }
	  
	 fwrite($fh,"\n");
	 $query="SELECT * FROM {$filename}";
	 $result=mysql_query($query);
	 
	 while ($row=mysql_fetch_row($result))
	 {
	  		for ($i = 0; $i < $columns; $i++) 
			{
      		$str=str_replace("\n","",$row[$i]);
			//echo "{$str}";
	  		fwrite($fh,$str."\t9234");
	  		}
	  		fwrite($fh,"\n");
	}
	fclose($fh);
}
	  
	  
	  
