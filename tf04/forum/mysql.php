<?
include("config.php");
?>
<? include("header.ini"); ?>

<?
if($act=="query")
{
$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);

$result = mysql_query(stripslashes($quer));
if (!$result) {
    echo("<P>Error performing query: " .
    mysql_error() . "</P>");
    exit();
    }
}
?>
<BR><BR>
<FORM ACTION=mysql.php METHOD=post>
<INPUT TYPE=hidden NAME=act VALUE="query">
Query: <INPUT TYPE=text NAME=quer VALUE="<? print $quer; ?>" SIZE=30><BR>
<INPUT TYPE=submit VALUE="Submit">
</FORM>


</B><? include("footer.ini"); ?>
</HTML>

