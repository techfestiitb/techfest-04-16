
<? include("header.ini"); ?>
<HEAD>
<TITLE>Signup</TITLE>
</HEAD>
<BODY BGCOLOR=#FFFFFF>
<FONT FACE=Arial SIZE=-1>
<?
include("config.php");
?>
<? 
mysql_connect($lhost, $un, $pass); 
mysql_select_db($dbas);

$queryDatabase = mysql_query("CREATE TABLE userinfo (   
zusername varchar(25),
zpassword varchar(25),
zemail varchar(100)
)");
print $queryDatabase;

$queryDatabase = mysql_query("CREATE TABLE zcount (   
zid smallint(6)
)");
print $queryDatabase;

$queryDatabase = mysql_query("CREATE TABLE modmessageboard (   
zid smallint(6) NOT NULL auto_increment PRIMARY KEY,
zusername varchar(25),
ztitle varchar(100),
zmessage varchar(255),
zdate varchar(50)
)");
print $queryDatabase;

$queryDatabase = mysql_query("CREATE TABLE messageboard (   
zid smallint(6) NOT NULL auto_increment PRIMARY KEY,
zusername varchar(25),
ztitle varchar(100),
zmessage varchar(255),
zdate varchar(50)
)");
print $queryDatabase;

mysql_close();
?>


</B><? include("footer.ini"); ?>
</HTML>








