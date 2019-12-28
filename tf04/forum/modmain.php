<?
include("config.php");
?>

<? include("header.ini"); ?>


<?
$user=$HTTP_COOKIE_VARS["user"];
if($user=="administrator")
{
?>
<BR>
<?

$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);

if($act=="remove")
{
  $result = mysql_query("DELETE FROM messageboard WHERE zid=$rn");
  $result = mysql_query("DELETE FROM zcount WHERE zid=$rn");
  print "Message deleted<BR><BR>";
}


$que = "SELECT zid,zusername,ztitle,zmessage,zdate FROM messageboard ORDER BY zid";
$result = mysql_query($que);

while ( $row = mysql_fetch_array($result) ) {
$f1 = $row["ztitle"];
$f2 = $row["zusername"];
$f3 = $row["zdate"];
$f5 = $row["zid"];

print "<B>$f1</B><BR>";
print "<FONT COLOR=#999999><I>Message posted by $f2 on $f3</I></FONT><BR>";
print $row["zmessage"];
print "<BR>";
print "<a href=modmain.php?act=remove&rn=$f5>Click Here to remove it</a><BR><BR>";

}

?>

<?
}
else
{
?>
<B><CENTER><FONT FACE=Arial SIZE=-1>
Signin as administrator first!!
<?
}
?>
</B><? include("footer.ini"); ?>
</HTML>












