<?
if(!$pno)$pno = 1;
include("config.php");
?>

<? include("header.ini"); ?>


<?
include("signbox.php");
?>
<BR><BR>
<?
$nr = 5;

$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);

$tot1 = mysql_query("SELECT COUNT(*) FROM zcount");
$t = mysql_result($tot1,0);

$tot = mysql_query("SELECT zid FROM zcount ORDER BY zid DESC");

$st = (($pno-1) * $nr) + 1;
$en = $pno*$nr;
if($en>$t)$en = $t;
$tpage = intval($t/$nr) + 1;
$cn = 0;

while ( $r = mysql_fetch_array($tot) ) {
$cn++;
if($cn>=$st && $cn<=$en)
{
  $wo = $r["zid"];
  $que = "SELECT zid,zusername,ztitle,zmessage,zdate FROM messageboard WHERE (zid=$wo)";
  $result = mysql_query($que);
  $row = mysql_fetch_array($result);
  $f1 = $row["ztitle"];
  $f2 = $row["zusername"];
  $f3 = $row["zdate"];
  $f4 = $row["zmessage"];
  print "<B>$f1</B><BR>";
  print "$wo<FONT COLOR=#555555><I>Message posted by $f2 on $f3</I></FONT><BR>";
  print "$f4<BR><BR><BR>";
}
}

if($tpage!=1)
{
?>

<BR>
Other pages: 
<?
for($i=1;$i<=$tpage;$i++)
{
 if($i!=$pno)print "<A HREF='readm.php?pno=$i'>$i</A> &nbsp";
}
?>


<? } ?>

</B><? include("footer.ini"); ?>
</HTML>










