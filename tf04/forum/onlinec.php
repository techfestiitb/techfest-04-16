<?
include("config.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- saved from url=(0041)http://www.techfest.org/forum/onlinec.php -->
<HTML
xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns="http://www.w3.org/TR/REC-html40"><HEAD><TITLE>Online
Competition III</TITLE>
<META content="text/html; charset=iso-8859-1" http-equiv=Content-Type>
<META content="(c) 2000 TQ Team C001414" name=copyright>
<META content="TQ 2000 Team C001414" name=author>
<META content="1 day" name=revisit-after>
<META content=ALL,FOLLOW,INDEX name=robots>
<META content=General name=rating>
<META content=home name=Description><LINK 
href="images/custom.css" rel=stylesheet type=text/css>
<SCRIPT language=JavaScript 
src="images/default.js"></SCRIPT>

<SCRIPT 
language=javascript>
    imgLeft = 'home';
    assistant = false;
</SCRIPT>

<STYLE type=text/css>BODY {
	COLOR: #000000; FONT-FAMILY: Verdana
}
P {
	COLOR: #000000; FONT-FAMILY: Verdana
}
TABLE {
	COLOR: #000000; FONT-FAMILY: Verdana
}
TR {
	COLOR: #000000; FONT-FAMILY: Verdana
}
TD {
	COLOR: #000000; FONT-FAMILY: Verdana
}
A {
	COLOR: #000000; FONT-FAMILY: Verdana
}
.inf {
	COLOR: #000000; FONT-FAMILY: Verdana
}
UL {
	COLOR: #000000; FONT-FAMILY: Verdana
}
OL {
	COLOR: #000000; FONT-FAMILY: Verdana
}
.dis {
	COLOR: #000000; FONT-FAMILY: Verdana
}
.ts {
	FONT-SIZE: 8pt
}
.duk {
	FONT-SIZE: 8pt
}
.inf {
	align: justify
}
.blacklink {
	COLOR: #333333; FONT-SIZE: 8pt; TEXT-DECORATION: none
}
.blacklink:hover {
	COLOR: #000000; TEXT-DECORATION: underline
}
.sidebar {
	COLOR: #cccccc; FONT-SIZE: 10px; TEXT-DECORATION: none
}
.sidebar:hover {
	COLOR: #ffffff; TEXT-DECORATION: none
}
A:hover {
	COLOR: #0f588b; TEXT-DECORATION: underline
}
.copyright {
	COLOR: #cccccc; FONT-SIZE: 8pt; TEXT-DECORATION: none
}
.inf {
	align: justify
}
 table.MsoNormalTable
	{mso-style-parent:"";
	font-size:10.0pt;
	font-family:"Times New Roman"}
</STYLE>

<SCRIPT language=javascript>
re = /\/assistant\//;
if (document.layers && document.location.href.search(re) != -1)
{ document.location.href = '/C001414/noassistant.phtml'; }
function coolError(msg,url,line)
{ return true; }
window.onerror = coolError;
</SCRIPT>

<META content="Microsoft FrontPage 5.0" name=GENERATOR>
<link rel="File-List" href="filelist.xml">
<!--[if !mso]>
<style>
v\:*         { behavior: url(#default#VML) }
o\:*         { behavior: url(#default#VML) }
.shape       { behavior: url(#default#VML) }
span.bodytext1
	{font-family:Times;
	color:black}
</style>
<![endif]--><!--[if gte mso 9]>
<xml><o:shapedefaults v:ext="edit" spidmax="1027"/>
</xml><![endif]-->
</HEAD>
<BODY background="images/back.gif" bgColor=#6699ff 
bgProperties=fixed leftMargin=0 link=#333333 
onload=l(imgLeft);AssImg(assistant); text=#ffffff topMargin=0
vLink=#333333 
marginheight="0" marginwidth="0">
<TABLE align=center border=0 cellPadding=0 cellSpacing=0 width="100%">
  <TBODY>
  <TR>
    <TD bgColor=#000000 width=2>&nbsp;</TD>
    <TD height=2></TD></TR>
  <TR>
    <TD bgColor=#000000 height=405 vAlign=center width=2>
      <DIV align=left></DIV></TD>
    <TD height=405 vAlign=top>
      <TABLE align=center border=0 cellPadding=0 cellSpacing=3
width="100%">
        <TBODY>
        <TR>
          <TD vAlign=top><SPAN class=tn>
            <TABLE border=0 cellPadding=0 cellSpacing=0 height=52
width=700>
              <TBODY>
              <TR>
                <TD width=72>
                <IMG 
                src="images/h_lef.gif" width="75" height="52"></TD>
                <TD background="images/h_back.gif">
                  <TABLE border=0 cellPadding=0 cellSpacing=0
width="100%">
                    <TBODY>
                    <TR height=17>
                      <TD></TD></TR>
                    <TR>
                      <TD>
                        <CENTER><FONT color=#ffffff face=Impact
size=+1>Online 
                        Competition
III</FONT></CENTER></TD></TR></TBODY></TABLE></TD>
                <TD width=70>
                <IMG 

src="images/h_rig.gif" width="70" height="52"></TD></TR></TBODY></TABLE><FONT 
            color=#000080>&nbsp; </FONT><B><A 
            href="http://www.techfest.org/isight.htm"><FONT
color=#000080>Results 
          of Previous Online Competitions (Along with
solution) </FONT></A></B>
<?
$err = 0;

if($act=="yes")
{
  if($err==0)
  { 
print "<BR><BR>";
$db = mysql_connect($lhost,$un,$pass);
mysql_select_db($dbas);
 $result2 = mysql_query("SELECT count(*) FROM onlinec1 where zcomp='$comp'");
 $co = mysql_result($result2,0);
 $co=$co + 1;
 $qr = "INSERT INTO onlinec1(zp1,ze1,zc1,zr1,ans1,ans2,ans3,ans4,ans5,ans6,ans7,zcomp) VALUES ('$zp1','$ze1','$zc1','$zr1','$ans1','$ans2','$ans3','$ans4','$ans5','$ans6','$ans7','$comp')";
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
          <p><BR>
            </p>
            <CENTER>
            <TABLE border=0 width=684>
              <TBODY>
              <TR>
                <TD width="929">
                  <P align=justify><FONT size=2><BR><BR>
                  <FORM action=onlinec.php method=post><INPUT name=act 
                  type=hidden value=yes> <INPUT name=comp type=hidden 
                  value=pictures> <B>

This competition will close on the 2nd of February 2003.<BR><BR>

Participant Details: </B><BR>Name
&nbsp;: 
                  <INPUT name=zp1 size=30><BR>E-Mail : <INPUT name=ze1 
                  size=30><BR>College: <INPUT name=zc1 size=30><BR>Roll
No: 
                  <INPUT name=zr1 size=30><BR><BR><BR><B>Identify the
following 
                  pictures :</B><BR><BR>Question 1:This pictures shows
very 
                    famous fish, can you tell its name?<BR>
                  <P>
                  <img
border="0" src="images/coelacanth].jpg" width="373" height="332"></P>
                  <P><BR><BR>Answer 1: <INPUT name=ans1 
                  size=30><BR><BR><BR>Question 2:</FONT></SPAN><span
class="bodytext1"><FONT style="font-size: 9pt">These </FONT>
                  </span><SPAN class=tn>
                  <FONT size=2><span class="bodytext1">
                  <span style="font-size: 9.0pt">otherworldly
chimneys</span></span> 
                  act as oasis to support dense communities of
organisms. These 
                  organism rely on peculiar method to extract energy. What
is 
                  it?<BR>
                  <P>
                  <img
border="0" src="images/feature6_1.jpg" width="545" height="290"><BR><BR>Answer
2: <INPUT 
                  name=ans2 size=30><BR><BR><BR>Question 3<BR>
                    <table
class="MsoNormalTable" border="0" cellpadding="0" width="655" style="width: 491.25pt">
                      <tr>
                        <td valign="top" style="padding: .75pt">
                        <p class="MsoNormal">
                        <span
style="font-size: 10.0pt; font-family: Arial; color: black">
                        Fill each cell with any digit (0-9) so that for
the 
                        seven multidigit numbers formed across and down,
one is 
                        a perfect cube (already filled in for you) and the
rest 
                        are perfect squares. Numbers do not begin with the
digit 
                        0.<br>
                        <b>Answer key:</b> Enter the three missing
horizontal 
                        numbers (include comma or space between each
row)</span></td>
                        <td style="padding: .75pt">
                        <table
class="MsoNormalTable" border="1" cellspacing="0" cellpadding="0" width="160" style="width: 120.0pt; border: 1.5pt
outset">
                          <tr>
                            <td
width="40" style="width: 30.0pt; padding: 0in">
                            <p
class="MsoNormal" align="center" style="text-align: center">
                            <span style="color: black">3</span></td>
                            <td
width="40" style="width: 30.0pt; padding: 0in">
                            <p
class="MsoNormal" align="center" style="text-align: center">
                            <span style="color: black">4</span></td>
                            <td
width="40" style="width: 30.0pt; padding: 0in">
                            <p
class="MsoNormal" align="center" style="text-align: center">
                            <span style="color: black">3</span></td>
                            <td
width="40" style="width: 30.0pt; padding: 0in; background: black">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                          </tr>
                          <tr>
                            <td style="padding: 0in">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                            <td style="padding: 0in">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                            <td style="padding: 0in">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                            <td style="padding: 0in">
                            <p
class="MsoNormal" align="center" style="text-align: center">
                            <span style="color: white">&nbsp;</span></td>
                          </tr>
                          <tr>
                            <td style="padding: 0in">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                            <td style="padding: 0in">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                            <td style="padding: 0in">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                            <td style="padding: 0in; background: black">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                          </tr>
                          <tr>
                            <td style="padding: 0in">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                            <td style="padding: 0in">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                            <td style="padding: 0in">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                            <td style="padding: 0in; background: black">
                            <p class="MsoNormal"><span
style="color: black">&nbsp;</span></td>
                          </tr>
                        </table>
                        <p class="MsoNormal">&nbsp;</td>
                      </tr>
                    </table>
                  <P><BR><BR>Answer 3: <INPUT name=ans3 
                  size=30><BR><BR><BR>Question 4:<span
style="font-family: Verdana">In 
                  the 1920s, while working at the Mt. Wilson Observatory 
                  (Techfest 2003 will be showing live pictures through
it!!!) 
                  with the most advanced technology of the time, He showed
that 
                  some of the numerous distant, faint clouds of light in
the 
                  universe were actually entire galaxies.much like our own
Milky 
                  Way. The realization that the Milky Way is only one of
many 
                  galaxies forever changed the way astronomers viewed our
place 
                  in the universe.Recognise.</span><P><BR>
                  <P><img
border="0" src="images/hub.bmp" width="258" height="324"></P>
                  <P><BR>Answer 4: <INPUT name=ans4
size=30><BR><BR><BR>Question 
                  5:<span
style="font-size: 10.0pt; font-family: Arial; color: black">The 
                  six panels in this cartoon (A-F) have been mixed up. Put
them 
                  back in their logical order.<br>
                  <b>Answer key:</b> List the six letters in
order. </span>
                    <div align="center">
                      <table
class="MsoNormalTable" border="0" cellpadding="0">
                        <tr>
                          <td valign="top" style="padding: .75pt">
                          <p class="MsoNormal"><b><span
style="color: black">A.</span></b></td>
                          <td style="padding: .75pt">
                          <p class="MsoNormal"><span
style="color: black"><!--[if gte vml 1]><v:shapetype id="_x0000_t75"

coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
 filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape
id="_x0000_s1025" type="#_x0000_t75" alt="" style='width:279pt;
 height:225pt'>
 <v:imagedata src="images/image001.gif" o:href=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=372 height=300
src="images/image001.gif" v:shapes="_x0000_s1025"><![endif]></span></td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding: .75pt">
                          <p class="MsoNormal"><b><span
style="color: black">B.</span></b></td>
                          <td style="padding: .75pt">
                          <p class="MsoNormal"><span
style="color: black"><!--[if gte vml 1]><v:shape

id="_x0000_s1026" type="#_x0000_t75" alt="" style='width:270.75pt;height:225pt'>
 <v:imagedata src="images/image002.gif" o:href=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=361 height=300
src="images/image002.gif" v:shapes="_x0000_s1026"><![endif]></span></td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding: .75pt">
                          <p class="MsoNormal"><b><span
style="color: black">C.</span></b></td>
                          <td style="padding: .75pt">
                          <p class="MsoNormal"><span
style="color: black"><!--[if gte vml 1]><v:shape

id="_x0000_s1027" type="#_x0000_t75" alt="" style='width:270pt;height:225pt'>
 <v:imagedata src="images/image003.gif" o:href=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=360 height=300
src="images/image003.gif" v:shapes="_x0000_s1027"><![endif]></span></td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding: .75pt">
                          <p class="MsoNormal"><b><span
style="color: black">D.</span></b></td>
                          <td style="padding: .75pt">
                          <p class="MsoNormal"><span
style="color: black"><!--[if gte vml 1]><v:shape

id="_x0000_s1028" type="#_x0000_t75" alt="" style='width:272.25pt;height:225pt'>
 <v:imagedata src="images/image004.gif" o:href=""/>
</v:shape><![endif]--><![if !vml]><img border=0 width=363 height=300
src="images/image004.gif" v:shapes="_x0000_s1028"><![endif]></span></td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding: .75pt">
                          <p class="MsoNormal"><b><span
style="color: black">E.</span></b></td>
                          <td style="padding: .75pt">
                          <p class="MsoNormal"><span
style="color: black"><!--[if gte vml 1]><v:shape

id="_x0000_s1029" type="#_x0000_t75" alt="" style='width:277.5pt;height:225pt'>
 <v:imagedata src="images/image005.gif" o:href="www.techfest.org"/>
</v:shape><![endif]--><![if !vml]><img border=0 width=370 height=300
src="images/image005.gif" v:shapes="_x0000_s1029"><![endif]></span></td>
                        </tr>
                        <tr>
                          <td valign="top" style="padding: .75pt">
                          <p class="MsoNormal"><b><span
style="color: black">F.</span></b></td>
                          <td style="padding: .75pt">
                          <p class="MsoNormal"><span
style="color: black"><!--[if gte vml 1]><v:shape

id="_x0000_s1030" type="#_x0000_t75" alt="" style='width:282.75pt;height:225pt'>
 <v:imagedata src="images/image006.gif" o:href="www.techfest.org"/>
</v:shape><![endif]--><![if !vml]><img border=0 width=377 height=300
src="images/image006.gif" v:shapes="_x0000_s1030"><![endif]></span></td>
                        </tr>
                      </table>
                    </div>
                  <P><BR><BR>Answer 5: <INPUT 
                  name=ans5 size=30><BR><BR><BR>Question 6:<p
class="MsoNormal" style="text-indent: -.25in; margin-left: 18.75pt">
                    <b>
                    <span
style="font-size: 10.0pt; font-family: Verdana; color: #666666">
                    1.<span
style="font-style: normal; font-variant: normal; font-weight: normal; font-size: 7.0pt; font-family: Times
New
Roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </span></span>
                    <span
style="font-style: normal; font-variant: normal; font-weight: normal; font-family: Verdana">
                    What is </span></b>unique peanut-shaped cocoon of
dust, 
                    called?????</p>
                    <p class="MsoNormal" style="margin-left: .5in">
                    <span
style="font-size: 10.0pt; font-family: Verdana; color: black">
                    Info: There are&nbsp; hot stars are inside the double 
                    bubble. Picture captures the brilliant blue-white
colors of 
                    these stars. The very bright star at the top of the
picture, 
                    called Henize S22, illuminates the dusty cocoon like a 
                    flashlight shining on smoke particles. This searing 
                    supergiant star is only 25 light-years from the N30B
nebula. 
                    Viewed from N30B, the brilliant star would appear 250
times 
                    brighter than the planet Venus does in our
sky.</span></p>
                  <P>&nbsp;<div align="center">
                      <table
class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td style="padding: 0in">
                          <p class="MsoNormal">
                          <span
style="font-size: 10.0pt; font-family: Verdana; color: black">
                          <span
style="color: #CC0000; text-decoration: none"><!--[if gte vml 1]><v:shape
 id="_x0000_s1031" type="#_x0000_t75" alt="Techfest 2003"
 style='width:161.25pt;height:262.5pt' o:button="t">
 <v:imagedata src="images/image007.jpg" o:href="www.techfest.org"/>
</v:shape><![endif]--><![if !vml]><img border=0 width=215 height=350
src="images/image007.jpg"
alt="Hubble Photographs 'Double Bubble' in Neighboring
Galaxy" v:shapes="_x0000_s1031"><![endif]></span></a></span></td>
                        </tr>
                      </table>
                    </div>
                  <P>&nbsp;<P><SPAN class=tn>
                    Answer 6: <INPUT 
                  name=ans6 size=30><BR>&nbsp;</SPAN><P>Question 7:<p
class="MsoNormal">
                    <span
style="font-size: 10.0pt; font-family: Arial; color: black">
                    Place the numbers from 1 to 9 in the blanks to make
the 
                    equation correct. Each digit will be used exactly
once. 
                    Operations are to be performed <i>strictly</i> from
left to 
                    right. All intermediate results are whole numbers.<br>
                    <b>Answer key:</b> Enter the digits in order from left
to 
                    right. </span></p>
                    <p
class="MsoNormal" align="center" style="text-align: center">
                    <b>
                    <span
style="font-size: 13.5pt; font-family: Arial; color: black">
                    __ - __ / __ + __ / __ + __ / __ x __ - __ =
72</span></b><span style="color: black">
                    </span></p>
                  <P>&nbsp;<P><SPAN class=tn>
                    Answer 7: <INPUT 
                  name=ans7 size=30><BR><BR><BR><BR><INPUT type=submit
value=Submit> </SPAN>

<P>&nbsp;</FORM></B></P></FONT></TD></TR></TBODY></TABLE>
            <P align=justify>&nbsp;</P>
            <P align=justify>&nbsp;</P>
            <P align=justify>&nbsp;</P>
            <P align=justify>&nbsp;</P>
            <P align=justify>&nbsp;</P></SPAN>
            <TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
              <TBODY>
              <TR bgColor=#000000>
                <TD height=1><IMG height=1
src="" width=1></TD></TR></TBODY></TABLE>
            <P align=justify><FONT size=1>
            <P align=center style="FONT-SIZE: 10px"><B>©Copyright Techfest 
            2003</B> <BR>For any queries relating to the website contact
the 
            webmaster<BR>Hosting courtesy <B>Indialinks</B> </P></FONT>
            <P></P></CENTER></TD>
          <TD vAlign=top width=2>
            <DIV align=right><IMG align=bottom height=1
src="" width=1></DIV></TD>
          <TD bgColor=#000000 width=1>
            <DIV align=right><IMG align=bottom height=1
src="" width=1></DIV></TD>
          <TD style="COLOR: #000000" vAlign=top width=120><!--- DUK -
Start --->
            <DIV align=center class=duk><B></B></DIV><BR>
            <P align=justify class=duk></P>
            <P>&nbsp;</P>
            <P>&nbsp;</P></TD></TR></TBODY></TABLE></TD></TR>
<? } ?>
  <TR>
    <TD bgColor=#000000 height=2 width=2></TD>
    <TD height=2></TD></TR></TBODY></TABLE></BODY></HTML>
