<?
include("config.php");
?>

<? include("header.ini"); ?>

<?
include("signbox.php");
?>

<?
$user = $HTTP_COOKIE_VARS["user"];
if($user=="")
{
 echo("You are not signed in. In order to sign in, one must register and login.<BR><BR><A HREF=signup.php>Click Here</A> if you have not registered.<BR><A HREF=signin.php>Click Here</A> if you are not signed in.");
}
else
{

if($act=="yes")
{

$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);
$qdate=date("D M j G:i:s T Y");
$qr = "INSERT INTO modmessageboard(zusername,ztitle,zmessage,zdate) VALUES ('$user','$qtitle','$qmes','$qdate')";
$result1 = mysql_query($qr);
 if (!$result1) {
    echo("<P>Error performing query: " .
    mysql_error() . "</P>");
    exit();
    }
 print "Message Posted. <A HREF=readm.php>Click Here</A> to return to the message board.</A>";
}
else
{
?>

<FORM ACTION=writemes.php METHOD=post>
<INPUT TYPE=hidden NAME=act VALUE="yes">
Title: <INPUT TYPE=text NAME=qtitle VALUE="<? print $qtitle; ?>" SIZE=50><BR>
Message:<BR>
<TEXTAREA NAME=qmes ROWS=5 COLS=52 WRAP="virtua">
<? print $qmes; ?>
</TEXTAREA><BR>
<INPUT TYPE=submit VALUE="Submit">
</FORM>

<? } ?>

<? } ?>

<BR>

</B><? include("footer.ini"); ?>
</HTML>








