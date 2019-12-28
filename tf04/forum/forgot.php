<?
include("config.php");
?>
<? include("header.ini"); ?>

<?
$err = 0;
if($act=="yes")
{
  $db = mysql_connect($lhost,$un,$pass);
  mysql_select_db($dbas);
  $result = mysql_query("SELECT zusername,zpassword,zemail FROM userinfo");
  if (!$result) {
      echo("<P>Error performing query: " .
      mysql_error() . "</P>");
      exit();
      }
  $ok = 0;$f="";$m="";
  while ( $row = mysql_fetch_array($result) ) {
      if($qlogin==$row["zusername"] && $qemail==$row["zemail"]){$m=$qlogin; $f=$row["zpassword"];$ok=1;}
      }
  if($ok==0)$err=3;
  else {
         echo("The password has been mailed to address provided during registration ($m)!!"); 
	 $headers  = "MIME-Version: 1.0\r\n";
	 $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
	 $headers .= "From: Techfest Team <techfest@cc.iitb.ac.in>\r\n";
	 $message = "The details of your account are:<BR><BR>LoginID:$m <BR>Password:$f<BR><BR>Regards,<BR>Techfest 2003 Team<BR>";
         mail($qemail,"Techfest 2003", $message, $headers);
       }
}
else
{
  $act = "go";
}

if($act=="go" || $err!=0)
{
?>

<FORM ACTION=forgot.php METHOD=post>
<INPUT TYPE=hidden NAME=act VALUE="yes">
<? if($err==3)print "<FONT COLOR=#FF0000 NAME=Verdana SIZE=-2><B>* This username does not exist or E-Mail address is mismatched.</B></FONT><BR>"; ?>
LognID: <INPUT TYPE=text NAME=qlogin VALUE="<? print $qlogin; ?>" SIZE=50><BR>
E-Mail: <INPUT TYPE=text NAME=qemail VALUE="<? print $qemail; ?>" SIZE=50><BR>
<INPUT TYPE=submit VALUE="Submit">
</FORM>

<? } ?>

</B><? include("footer.ini"); ?>
</HTML>






