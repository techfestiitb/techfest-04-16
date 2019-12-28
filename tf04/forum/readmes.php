<?
if(!$pno)$pno = 1;
$sofi = 1;
include("config.php");
?>

<? include("header.ini"); ?>


<?
include("signbox.php");
?>
<BR>
<?
$nr = 5;

$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);
$tot = mysql_query("SELECT MAX(zid) FROM messageboard");
$soft = mysql_result($tot,0);

$soft = $soft - $sofi + 1;
$stoi = 1;
$tpage = intval($soft/$nr) + 1;
$acpno = $pno;
$pno = $tpage-$pno+1;

if($pno!=$tpage){$stoi = $sofi + ($pno-1)*$nr; $etoi = $sofi+($pno*$nr)-1;}
else {$stoi = (($tpage-1) * $nr) + $sofi; $etoi = $sofi+$soft-1;}

$que = "SELECT zid,zusername,ztitle,zmessage,zdate FROM messageboard WHERE (zid>=$stoi AND zid<=$etoi) ORDER BY zid DESC";
$result = mysql_query($que);

while ( $row = mysql_fetch_array($result) ) {
$f1 = $row["ztitle"];
$f2 = $row["zusername"];
$f3 = $row["zdate"];
$f4 = $row["zmessage"];

print "<B>$f1</B><BR>";
print "<FONT COLOR=#999999><I>Message posted by $f2 on $f3</I></FONT><BR>";
print "$f4<BR><BR>";

}

if($tpage!=1)
{
?>

<BR>
Other pages: 
<?
for($i=1;$i<=$tpage;$i++)
{
 if($i!=$acpno)print "<A HREF='readmes.php?pno=$i'>$i</A> &nbsp";
}
?>


<? } ?>

</B><? include("footer.ini"); ?>
</HTML>









