<?php
if ($_POST['action']=="")
{

?>

	<html>
	<form method="post" action="text1.php" ><br>
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
	$table=explode(".txt",$filename);
	echo "{$table[0]}";
	$table[0]=$table[0]."s";
	echo "{$filename}";
	$filename="./text/".$filename;
	$fh=fopen($filename,"r");
	$lines=file($filename);
	$count=count($lines);
	
	
	$query="CREATE TABLE {$table[0]} (Regnum int,Name1 varchar(40),Email1 varchar(40),Univ1 varchar(40),Year1 varchar(40),address varchar(255))";
	$result=mysql_query($query);
	echo mysql_error();
	for($i=1;$i<=$count;$i++)
	{
	
		//print_r($lines[$i]);
		$fields=explode("\t9234",$lines[$i]);
		//print_r($fields);
		
		$query="INSERT INTO {$table[0]} VALUES ({$fields[0]},'{$fields[1]}','{$fields[2]}','{$fields[3]}','{$fields[4]}','{$fields[5]}')";
		$result=mysql_query($query);
		//echo "<br>{$query}";
		echo mysql_error();
				
	}
	
	fclose($fh);
}
	
	
	
	


