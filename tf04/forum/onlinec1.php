<?
include("config.php");
?>
<html>
<head>
<TITLE>Online Competition II</TITLE>
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
Online Competition II</FONT></CENTER></TD>
</TR></TABLE></TD>

<TD WIDTH=70><IMG SRC="images/h_rig.gif"></TD>
</TR></TABLE>
 <font color="#000080">&nbsp; </font><b>
          <a href="http://www.techfest.org/isight.htm"><font
color="#000080">
          Online competition I Result </font></a></b><BR>
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
 $result2 = mysql_query("SELECT count(*) FROM onlinec where
comp='$comp'");
 $co = mysql_result($result2,0);
 $co=$co + 1;
 $qr = "INSERT INTO onlinec(zp1,ze1,zc1,zr1,ans1,ans2,ans3,ans4,ans5,comp) VALUES ('$zp1','$ze1','$zc1','$zr1','$ans1','$ans2','$ans3','$ans4','$ans5','$comp')";
 $result1 = mysql_query($qr);
 if (!$result1) {
    echo("<P>Error performing query: " .
    mysql_error() . "</P>");
    }
 $headers  = "MIME-Version: 1.0\r\n";
 $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
 $headers .= "From: Techfest Team <techfest@cc.iitb.ac.in>\r\n";
 $message = "Your competition entry has been accepted for Techfest 2003. Please note the following details:<BR><BR>Team Code:onlinec $co<BR><BR>Regards,<BR>Techfest 2003 Team<BR>";
 if($ze1!="") { mail($ze1,"Techfest 2003", $message, $headers); }
  print "Entry accepted for the competitions. Please note that your team code is:";
  print $comp;
  print " $co.";
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
<FORM ACTION=onlinec.php METHOD=post>
<INPUT TYPE=hidden NAME=act VALUE="yes">
<INPUT TYPE=hidden NAME=comp VALUE="pictures">
<B>Participant Details: </B><BR>
Name &nbsp;: <INPUT TYPE=text NAME=zp1 VALUE="<? print $zp1; ?>" SIZE=30><BR>
E-Mail : <INPUT TYPE=text NAME=ze1 VALUE="<? print $ze1; ?>" SIZE=30><BR>
College: <INPUT TYPE=text NAME=zc1 VALUE="<? print $zc1; ?>" SIZE=30><BR>
Roll No: <INPUT TYPE=text NAME=zr1 VALUE="<? print $zr1; ?>" SIZE=30><BR>
<BR>
<BR>
<B>Identify the following pictures :</b><BR>

<BR>
Question 1:What is shown in picture below<br>
<i>Hint: A type of mare.....</i><br><br>
<p><img border=0 width=408 height=312 src="onlineimage/image01.jpg" ></p>
              <p><br><br>

Answer 1: <INPUT TYPE=text NAME=ans1 VALUE="<? print $ans1; ?>" SIZE=30><BR><br><br>

Question 2:Recognise<br>
<p><img border=0 width=576 height=345 src="onlineimage/image02.jpg" ></p>
              <p><br>

a) Surveyor<br>
b) Viking Orbiter<br>
c) Viking Lander<br>
d) Skylab<br>
e) Voyager<br><br>

Answer 2: <INPUT TYPE=text NAME=ans2 VALUE="<? print $ans2; ?>" SIZE=30><BR><br><br>

Question 3:Recognize<br>
<p><img border=0 width=259 height=250 src="onlineimage/image03.jpg" ></p>
              <p><br>
a) Lunar orbiter<br>
b) Mariner 4<br>
c) Apollo Rover<br>
d) Magellan<br><br>

Answer 3: <INPUT TYPE=text NAME=ans3 VALUE="<? print $ans3; ?>" SIZE=30><BR><br><br>
Question 4:Recognize what are shown in the pics<br>

<p><img border=0 width=576 height=432 src="onlineimage/image04.jpg" ></p>
              <p><br>

Answer 4: <INPUT TYPE=text NAME=ans4 VALUE="<? print $ans4; ?>" SIZE=30><BR><br><br>
Question 5:Recognize<br>
<p><img border=0 width=576 height=395 src="onlineimage/image05.jpg" ></p>
              <p><br>
a) Cosmic Cloud<br>
b) Witch's broom Nebula<br>
c) Central Auringa<br>
d) Canes Venatici<br><br>

Answer 5: <INPUT TYPE=text NAME=ans5 VALUE="<? print $ans5; ?>" SIZE=30><BR><br><br>
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

