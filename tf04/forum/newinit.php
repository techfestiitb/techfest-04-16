
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

$queryDatabase = mysql_query("CREATE TABLE onlinec1 (   
zp1 varchar(50),
ze1 varchar(20),
zc1 varchar(50),
zr1 varchar(20),
ans1 varchar(100),
ans2 varchar(100),
ans3 varchar(100),
ans4 varchar(100),
ans5 varchar(100),
ans6 varchar(100),
ans7 varchar(100),
zcomp varchar(50)
)");
print $queryDatabase;

mysql_close();
?>

</B><? include("footer.ini"); ?>
</HTML>








