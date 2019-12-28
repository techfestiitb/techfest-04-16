<?
include("config.php");
?>
<html>
<head>
<title>Techfest 2003</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="copyright" content="(c) 2000 TQ Team C001414">
<meta name="author" content="TQ 2000 Team C001414">
<meta name="revisit-after" content="1 day">
<meta name="robots" content="ALL,FOLLOW,INDEX">
<meta name="rating" content="General">
<meta NAME="Description" CONTENT="home">
<link rel="stylesheet" href="style/custom.css" type="text/css">
<SCRIPT language="JavaScript" src="scripts/default.js"></SCRIPT>
<script language="javascript">
    imgLeft = 'home';
    assistant = false;
</script>
<style type="text/css">
body, p, table, tr, td, a, .inf, ul, ol, .dis
{
	font-family: Verdana;
	color: #000000;
}
.ts, .duk { font-Size: 8pt; }
.inf { align: justify; }
.blacklink { font-Size: 8pt; color: #333333; text-decoration: none }
.blacklink:hover { color: #000000; text-decoration: underline }
.sidebar { font-size: 10px; color: #CCCCCC; text-decoration: none }
.sidebar:hover { color: #FFFFFF; text-decoration: none }
a:hover{color:#0F588B; text-decoration: underline};
.copyright { font-Size: 8pt; color: #CCCCCC; text-decoration: none }
.inf { align: justify; }
</style>
<script language="javascript">
re = /\/assistant\//;
if (document.layers && document.location.href.search(re) != -1)
{ document.location.href = '/C001414/noassistant.phtml'; }
function coolError(msg,url,line)
{ return true; }
window.onerror = coolError;
</script>
</head>
<body bgcolor="#6699FF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" text="#FFFFFF" link="#333333" vlink="#333333" background="images/back.gif" bgproperties="fixed" onLoad="l(imgLeft);AssImg(assistant);">
<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td  bgcolor=#000000 width="2"></td>
    <td height="2"></td>
  </tr>
  <tr>
    <td  bgcolor=#000000 width="2" valign="middle" height="405"> 
      <div align="left"></div>
    </td>
    <td valign="top" height="405"> 
      <table width="100%" border="0" cellspacing="3" cellpadding="0" align="center">
        <tr> 
          <td valign="top"> <span class="tn"> 

<table width=700 BORDER=0 CELLPADDING=0 CELLSPACING=0 HEIGHT=52>
<TR><TD WIDTH=72><IMG SRC="images/h_lef.gif"></TD>
<TD BACKGROUND="images/h_back.gif"><TABLE WIDTH=100% BORDER=0 CELLPADDING=0 CELLSPACING=0><TR HEIGHT=17><TD></TD></TR><TR><TD><CENTER><FONT FACE=Impact SIZE=+1 COLOR=#FFFFFF>
Accomodation</TD>
</TR></TABLE></TD>
<TD WIDTH=70><IMG SRC="images/h_rig.gif"></TD>
</TR></TABLE>
<BR>            <br>
<CENTER>
<TABLE WIDTH=500 BORDER=0><TR><TD>
  <p align="justify"> <font size="2">
<?
$err = 0;

if($act=="yes")
{
  if($err==0)
  { 

$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);
 $qr = "INSERT INTO accom(zins,zlead,zemail,zvis,zp1,zs1,zp2,zs2,zp3,zs3,zp4,zs4,zp5,zs5) VALUES ('$zins','$zlead','$zemail','$zvis','$zp1','$zs1','$zp2','$zs2','$zp3','$zs3','$zp4','$zs4','$zp5','$zs5')";
 $result1 = mysql_query($qr);
 if (!$result1) {
    echo("<P>Error performing query: " .
    mysql_error() . "</P>");
    }
 $headers  = "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: Techfest Team <techfest@cc.iitb.ac.in>\r\n";
// $message = "You have been registered for Techfest 2003. Please note the
// following details:<BR><BR>Team Code:$zevent $co
// <BR><BR>Regards,<BR>Techfest 2003 Team<BR>";
// if($zemail!="") { mail($ze1,"Techfest 2003", $message, $headers); }
 
 print "Registration Completed. You will recieve a confirmation shortly.";
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
<?
if($err==3) print "<FONT COLOR=#FF0000 SIZE=-2>* No competition event chosen. Please choose one.</FONT>"
?>
<FORM ACTION=accom.php METHOD=post>
<INPUT TYPE=hidden NAME=act VALUE="yes">
Name of insitute : 
<INPUT TYPE=text NAME=zins VALUE="<? print $zins; ?>" SIZE=30><BR>
Name of contingent leader : 
<INPUT TYPE=text NAME=zlead VALUE="<? print $zlead; ?>" SIZE=30><BR>
Him Email Id : 
<INPUT TYPE=text NAME=zemail VALUE="<? print $zemail; ?>" SIZE=30><BR>
No. of visitors : 
<INPUT TYPE=text NAME=zvis VALUE="<? print $zvis; ?>" SIZE=30><BR>
<BR><BR>
Names of visitors:<BR><BR>
Name &nbsp;: <INPUT TYPE=text NAME=zp1 VALUE="<? print $zp1; ?>" SIZE=30>
Sex : 
<SELECT NAME=zs1>
<OPTION VALUE=m>Male</OPTION>
<OPTION VALUE=f>Female</OPTION>
</SELECT>
<BR><BR>

Name &nbsp;: <INPUT TYPE=text NAME=zp2 VALUE="<? print $zp2; ?>" SIZE=30>
Sex : 
<SELECT NAME=zs2>
<OPTION VALUE=m>Male</OPTION>
<OPTION VALUE=f>Female</OPTION>
</SELECT>
<BR><BR>

Name &nbsp;: <INPUT TYPE=text NAME=zp3 VALUE="<? print $zp3; ?>" SIZE=30>
Sex : 
<SELECT NAME=zs3>
<OPTION VALUE=m>Male</OPTION>
<OPTION VALUE=f>Female</OPTION>
</SELECT>
<BR><BR>

Name &nbsp;: <INPUT TYPE=text NAME=zp4 VALUE="<? print $zp4; ?>" SIZE=30>
Sex : 
<SELECT NAME=zs4>
<OPTION VALUE=m>Male</OPTION>
<OPTION VALUE=f>Female</OPTION>
</SELECT>
<BR><BR>

Name &nbsp;: <INPUT TYPE=text NAME=zp5 VALUE="<? print $zp5; ?>" SIZE=30>
Sex : 
<SELECT NAME=zs5>
<OPTION VALUE=m>Male</OPTION>
<OPTION VALUE=f>Female</OPTION>
</SELECT>
<BR><BR>

<BR>
<INPUT TYPE=submit VALUE="Submit">
</FORM>

<? } ?>

</B>
</TD></TR></TABLE>
            <p align="justify">&nbsp;</p>
            <p align="justify">&nbsp;</p>
            <p align="justify">&nbsp;</p>
            <p align="justify">&nbsp;</p>
            <p align="justify">&nbsp;</p>
            </span> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr bgcolor="#000000"> 
                <td height="1"><img src="/C001414/images/line.gif" width="1" height="1"></td>
              </tr>
            </table>
            <p align="justify"><font size="1">
<p style="font-size:10px;" align="center">
<B>©Copyright Techfest 2003</B>
<BR>
For any queries relating to the website contact the webmaster<BR>
Hosting courtesy <B>Indialinks</B>
</p>

 </font></p>
            </td>
          <td valign="top" width="2"> 
            <div align="right"><img height=1
      src="../images/single.gif" width=1 align="bottom"></div>
          </td>
          <td width="1" bgcolor="#000000"> 
            <div align="right"><img height=1
      src="../images/line.gif" width=1 align="bottom"></div>
          </td>
          <td valign="top" width="120" style="color:#000000"> <!--- DUK - Start --->

<div class="duk" align="center"> <b></b> </div>
<br>

<p align="justify" class="duk">

</p>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td bgcolor=#000000 width="2" height="2"></td>
    <td height="2"></td>
  </tr>
</table>
</body>
</html>

