<?
include("config.php");
?>

<? include("header.ini"); ?>


<BR>
<?
$user=$HTTP_COOKIE_VARS["user"];
if($user=="administrator")
{
$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);

if($act=="add" || $act=="addremove")
{
  $result = mysql_query("SELECT zid,zusername,ztitle,zmessage,zdate FROM modmessageboard WHERE zid=$rn");
  $row = mysql_fetch_array($result);
  $f1 = $row["ztitle"];
  $f2 = $row["zusername"];
  $f3 = $row["zdate"];
  $f4 = $row["zmessage"];
  $f1 = addslashes($f1);
  $f4 = addslashes($f4);
  $qr = "INSERT INTO messageboard(zusername,ztitle,zmessage,zdate) VALUES ('$f2','$f1','$f4','$f3')";
  $result1 = mysql_query($qr);
  if (!$result1) {
    echo("<P>Error performing query: " .
    mysql_error() . "</P>");
    exit();
    }
  $t1 = mysql_query("SELECT MAX(zid) FROM messageboard");
  $m=mysql_result($t1,0);
  $q = mysql_query("INSERT INTO zcount(zid) VALUES('$m')");
  print "Message Posted<BR><BR>";
}

if($act=="remove" || $act=="addremove")
{
  $result = mysql_query("DELETE FROM modmessageboard WHERE zid=$rn");
  print "Message deleted<BR><BR>";
}


$que = "SELECT zid,zusername,ztitle,zmessage,zdate FROM modmessageboard ORDER BY zid";
$result = mysql_query($que);

while ( $row = mysql_fetch_array($result) ) {
$f1 = $row["ztitle"];
$f2 = $row["zusername"];
$f3 = $row["zdate"];
$f4 = $row["zmessage"];
$f5 = $row["zid"];

print "<B>$f1</B><BR>";
print "<FONT COLOR=#999999><I>Message posted by $f2 on $f3</I></FONT><BR>";
print "$f4<BR>";
print "<a href=moderate.php?act=addremove&rn=$f5>Click Here to Post It</a><BR>";
print "<BR>";
/*
print "<a href=moderate.php?act=add&rn=$f5>Click Here to add it</a><BR>";
print "<a href=moderate.php?act=remove&rn=$f5>Click Here to remove it</a><BR><BR>";
*/
}
?>

<? } 
else {
?>

<FORM ACTION=signin.php METHOD=post>
<INPUT TYPE=hidden NAME=act VALUE=yes>
Username:<INPUT TYPE=text NAME=qlogin VALUE=administrator>
Password:<INPUT TYPE=password NAME=qpass><BR>
<INPUT TYPE=Submit NAME=subm VALUE="Submit">
</FORM>
<? } ?>
</B><? include("footer.ini"); ?>
</HTML>












