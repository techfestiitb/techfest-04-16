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
<body bgcolor="#6699FF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" text="#FFFFFF" link="#333333" vlink="#333333" background="../images/back.gif" bgproperties="fixed" onLoad="l(imgLeft);AssImg(assistant);">
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
Techpreneurs' Meet</TD>
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
 if($zevent=="")$err=3;
  if($err==0)
  { 

$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);
 $result2 = mysql_query("SELECT count(*) FROM events where zevent='$zevent'");
 $co = mysql_result($result2,0);
 $co=$co + 1;
 $qr = "INSERT INTO alumni1 (zn1,za1,zpr1,zpo1,zcp1,zem1,zd1,zb1,zcomp,zemployee,zwebsite,zevent) VALUES ('$zn1','$za1','$zpr1','$zpo1','$zcp1','$zem1','$zd1','$zb1','$zcomp','$zemployee','$zwebsite','$zevent')";
 $result1 = mysql_query($qr);
 if (!$result1) {
    echo("<P>Error performing query: " .
    mysql_error() . "</P>");
    }
 $headers  = "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: Techfest Team <techfest@cc.iitb.ac.in>\r\n";
 $ws = "Business Meet";
 if($zevent=="bdm")$ws = "Business Day Meet";

 $message = "You have been registered for Techfest 2003. Please note the following details:<BR><BR>Event:$ws <BR><BR>Regards,<BR>Techfest 2003 Team<BR>";
 if($zem1!="") { mail($zem1,"Techfest 2003", $message, $headers); }
 print "Registration for the $ws completed successfully";
print "<BR>";
// print "Registration Completed. Please note that your team code
// is: $zevent $co.";
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
if($err==3) print "<FONT COLOR=#FF0000 SIZE=-2>* No event chosen. Please
choose one.</FONT>"
?>
<b><font color="#FF0000"> </b></font>
<FORM ACTION=alumni.php METHOD=post>
<INPUT TYPE=hidden NAME=act VALUE="yes">
Choose event<BR>
<SELECT NAME=zevent>
<OPTION VALUE=bdm>Techpreneurs' Meet</OPTION>

</SELECT>
<BR><BR>
<B>Participant Details: </B><BR>
Name &nbsp;: <INPUT TYPE=text NAME=zn1 VALUE="<? print
$zn1; ?>" SIZE=30><BR>
Address : <INPUT TYPE=text NAME=za1 VALUE="<? print
$za1; ?>" SIZE=30><BR>
Phone Res: <INPUT TYPE=text NAME=zpr1 VALUE="<? print
$zpr1; ?>" SIZE=30><BR>
Phone Off: <INPUT TYPE=text NAME=zpo1 VALUE="<? print
$zpo1; ?>" SIZE=30><BR>
Cell Phone: <INPUT TYPE=text NAME=zcp1 VALUE="<? print
$zcp1; ?>" SIZE=30><BR>
Email: <INPUT TYPE=text NAME=zem1 VALUE="<? print $zem1; ?>" SIZE=30><BR>
Company: <INPUT TYPE=text NAME=zcomp VALUE="<? print $zcomp; ?>" SIZE=30><BR>
No. of Employees: <INPUT TYPE=text NAME=zemployee VALUE="<? print $zemployee; ?>" SIZE=30><BR>
Website: <INPUT TYPE=text NAME=zwebsite VALUE="<? print $zwebsite; ?>" SIZE=30><BR>

Course undertaken at IITB: <INPUT TYPE=text NAME=zd1 VALUE="<? print
$zd1; ?>" SIZE=30><BR>

Batch: <INPUT TYPE=text NAME=zb1 VALUE="<? print $zb1; ?>" SIZE=30><BR>
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
<B>ęCopyright Techfest 2003</B>
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

