<HTML>
	<HEAD>
		<TITLE>Techfest 2005</TITLE>
		<META http-equiv=Content-Type content="text/html; charset=iso-8859-1">
		<LINK media=all href="./css/style.css" type=text/css rel=stylesheet>
		<LINK media=print href="./css/printlayout.css" type=text/css rel=stylesheet>
		<LINK media=screen href="./css/3-column.css" type=text/css rel=stylesheet>
	</HEAD>
	<BODY>
		<DIV class=title>
			<H1>Techfest Communities</H1>
		</DIV>
<?php
	$dbhost ="10.13.213.19";
	$dbuser="techfest";
	$dbpasswd="enigma";
	$dbname="techfest";
	$l=mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Mysql Database Connect Failed : " . mysql_error());
	mysql_select_db($dbname) or die("Database select failed : " . mysql_error());

	if ($_COOKIE['user']=="")
	 {
?>
	<BODY>
		<DIV class=contentText>
			<P>This page has expired. Please Login to continue</P>
			<center>
		<form name="form1" method="post" action="./index.php">
			<table width="30%" border="0">
			  <tr>
				<td>Login</td>
				<td><input type="text" name="user"></td>
			  </tr>
			  <tr>
				<td>Password</td>
				<td><input type="password" name="passwd"></td>
			  </tr>
			</table>
			
    <p> 
      <input type="submit" name="action" value="Login">
    </p>
    <p>New User <a href=./adduser.php>Sign Up!</a></p>
		  </form>
		</center>
		</DIV>
	</BODY>
</HTML>
<?
	 	exit;
	 }
	$query="SELECT * FROM userdetails WHERE user='{$_COOKIE['user']}'";
	$result=mysql_query($query) or die("Mysql Error : ".mysql_error());
	$count=0;
	while($row=mysql_fetch_row($result)) 
		$count++;
	if ($count!=1)
	 {
?>
			<DIV class=contentText>
				<P>Invalid Access of Page. Please Login to continue</P>
<center>
		<form name="form1" method="post" action="./index.php">
			<table width="30%" border="0">
			  <tr>
				<td>Login</td>
				<td><input type="text" name="user"></td>
			  </tr>
			  <tr>
				<td>Password</td>
				<td><input type="password" name="passwd"></td>
			  </tr>
			</table>
			
    <p> 
      <input type="submit" name="action" value="Login">
    </p>
    <p>New User <a href=./adduser.php>Sign Up!</a></p>
		  </form>
</center>
			</DIV>
		</DIV>
	</BODY>
</HTML>
<?
	 	exit;
	 }
	$query="SELECT * FROM userdetails WHERE user='{$_COOKIE['user']}'";
	$result=mysql_query($query) or die("Mysql Error : ".mysql_error());
	$userdetails=mysql_fetch_row($result);
		
?>
	<div id=menubar>
		<a href="./main.php">Home</a>
		<a href="./groups.php">Groups</a>
		<a href="./friends.php">Friends</a>
		<a href="./communities.php">Communities</a>
		<a href="./search.php">Search</a>
		<a href="./logout.php">Logout</a>
	</div>
