<?
include("config.php");
?>
<? include("header.ini"); ?>

<?
$err = 0;

if($act=="yes")
{
 $qemail=trim($qemail);
 $qlogin=trim($qlogin);
 if(strlen($qlogin)<3)$err=2;
 if(strlen($qpass)==0)$err=4;
 if($qemail=="")$err=3;
  if($err==0)
  { 

$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);

$result = mysql_query("SELECT zusername FROM userinfo");
if (!$result) {
    echo("<P>Error performing query: " .
    mysql_error() . "</P>");
    exit();
    }
$ok = 0;
while ( $row = mysql_fetch_array($result) ) {
    if($qlogin==$row["zusername"])$ok=1;
    }
if($ok==1)$err=3;
else
{
 $gpass = ""; 
 $gpass = generatepassword();
 $gpass=$qpass;
 $qr = "INSERT INTO userinfo(zusername,zpassword,zemail,college,rollno) VALUES ('$qlogin','$gpass','$qemail','$qcollege','$qrollno')";
 $result1 = mysql_query($qr);
 if (!$result1) {
    echo("<P>Error performing query: " .
    mysql_error() . "</P>");
    exit();
    }
 $headers  = "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: Techfest Team <techfest@cc.iitb.ac.in>\r\n";
 $message = "You have been registered in Techfest 2003 forum with the following details:<BR><BR>LoginID:$qlogin <BR>Password:$gpass <BR><BR>Through this forum, you may post any comment regarding Techfest 2003 or get any query clarified by the Techfest 2003 organisational team.<BR><BR>Regards,<BR>Techfest 2003 Team<BR>";
 mail($qemail,"Techfest 2003", $message, $headers);
 print "Registration Completed. Please check your email for the password, and Terms and Conditions for the service.";
}   
  } 
}
else
{
  $act = "go";
}
if($act=="go" || $err!=0)
{
?>
<BR><BR>
<FORM ACTION=signup.php METHOD=post>
<INPUT TYPE=hidden NAME=act VALUE="yes">
<? if($err==2)print "<FONT COLOR=#FF0000 NAME=Verdana SIZE=-2><B>* Username must be atleast 3 characters long. Please type another one.</B></FONT><BR>"; ?>
<? if($err==3)print "<FONT COLOR=#FF0000 NAME=Verdana SIZE=-2><B>* This username has already been taken. Please type another one.</B></FONT><BR>"; ?>
LognID: <INPUT TYPE=text NAME=qlogin VALUE="<? print $qlogin; ?>" SIZE=30><BR>
<? if($err==4)print "<FONT COLOR=#FF0000 NAME=Verdana SIZE=-2><B>* Password was not specified</B></FONT><BR>"; ?>
Password: <INPUT TYPE=password NAME=qpass VALUE="<? print $qpass; ?>" SIZE=30><BR>
<? if($err==1)print "<FONT COLOR=#FF0000 NAME=Verdana SIZE=-2><B>* Email was not specified</B></FONT><BR>"; ?>
E-Mail: <INPUT TYPE=text NAME=qemail VALUE="<? print $qemail; ?>" SIZE=30><BR>
College: <INPUT TYPE=text NAME=qcollege VALUE="<? print $qcollege; ?>" SIZE=30><BR>
Roll No: <INPUT TYPE=text NAME=qrollno VALUE="<? print $qrollno; ?>" SIZE=30><BR>
<INPUT TYPE=submit VALUE="Submit">
</FORM>

<? } ?>

</B><? include("footer.ini"); ?>
</HTML>

