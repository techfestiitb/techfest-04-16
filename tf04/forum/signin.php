<?
include("config.php");
?>
<?
$sho = 0;
$tw = 0;
$trw = "";
$err = 0;
if($act=="yes")
{
  $db = mysql_connect($lhost,$un,$pass);
  mysql_select_db($dbas);
  $result = mysql_query("SELECT zusername,zemail,zpassword FROM userinfo");
  if (!$result) {
      $tw = 1;
      $trw = "Error performing query: " . mysql_error() . ".";
      exit();
      }
  $ok = 0;
  while ( $row = mysql_fetch_array($result) ) {
      if($qlogin==$row["zusername"] && $qpass==$row["zpassword"]){$ok=1;}
      }
  if($ok==0)$err=3;
  else {
         $tw = 1;
         $trw = "$qlogin has been logged in. Please choose one of the above options to continue."; 
	 $sho = 1;
         $spg="login";
         setcookie("user", $qlogin, time()+604800);
       }
}
else
{
  $act = "go";
}

?>

<? include("header.ini"); ?>


<?
if($tw==1)echo($trw);
if($act=="go" || $err!=0)
{
?>
<BR><BR>
<FORM ACTION=signin.php METHOD=post>
<INPUT TYPE=hidden NAME=act VALUE="yes">
<? if($err==3)print "<FONT COLOR=#FF0000 NAME=Verdana SIZE=-2><B>* Invalid username or password. <A HREF=forgot.php>Click Here</A> if you have forgotten your password.</B></FONT><BR>"; ?>
LoginID: <INPUT TYPE=text NAME=qlogin VALUE="<? print $qlogin; ?>" SIZE=30><BR>
Password: <INPUT TYPE=password NAME=qpass VALUE="<? print $qpass; ?>" SIZE=30><BR>
<INPUT TYPE=submit VALUE="Submit">
</FORM>

<? } ?>


</B><? include("footer.ini"); ?>
</HTML>

