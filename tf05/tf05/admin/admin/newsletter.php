<?php
include_once("./validate.php");
?>
<h1>Newsletter</h1>

<?php
if ($_POST['action']=="")
 {
?>

	<form name="form1" method="post" action="./newsletter.php">
	  Enter E-mail Address : <input type="text" name="email"><br>
	  <input type="submit" name="action" value="Delete">
	</form>

<?	
 }
elseif ($_POST['action']=="Delete")
 {
	$dbhost = '66.98.128.63';
	$dbname = 'techfest';
	$dbuser = 'techfest';
	$dbpasswd = 'tec45st';
	
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	if ($_POST['email']!="")
	 {
		$query="DELETE FROM newsletter2005 WHERE email LIKE '".$_POST['email']."_'";
		echo $query."<br>";
		mysql_query($query) or die("Query failed : " . mysql_error());
		echo mysql_error();
		echo "The email address was deleted successfully<br><br>";
?>
        <form name="form1" method="post" action="./newsletter.php">
          Enter E-mail Address : <input type="text" name="email"><br>
          <input type="submit" name="action" value="Delete">
        </form>

<?
	 }
 }
?>
