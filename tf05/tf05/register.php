<?php
?>
<html >

  <head>


		<script language="JavaScript1.2" type="text/javascript" src="http://www.techfest.org/javascript/countdown.js">
		</script>


    <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
    <meta name="author" content="Techfest">
    
<link rel="stylesheet" type="text/css" href=http://www.techfest.org/css/screen.css media="screen" title="Sinorca (screen)" />
    <link rel="stylesheet" type="text/css" href=http://www.techfest.org/css/print.css media="print" />

    <title>Techfest 2005</title>



  </head>

  <body>

    <!-- For non-visual user agents: -->
      <div id="top">
	<div id ="clock">
		<script type="text/javascript">
			countdown_clock(05, 01, 28, 09, 00, 1);
		</script>

	<div id="fader">
		<script language="JavaScript1.2" type="text/javascript" src="http://www.techfest.org/javascript/updates.js">
		</script>
	</div>     
 	</div>
        <div class="midHeader">

	<a href=http://www.techfest.org/index1.html border=0><img src="./img/top_left.jpg" border=0></a>


	<div class="right"><a href=http://www.techfest.org/index1.html border=0><img src="./img/logodark.gif" border=0></a></div>
	</div>
      <div class="subHeader">
         <a href="./index1.html" >Home</a> |
        <a href="./events/index.html" >Events</a> |
        <a href="./competitions/index.html">Competitions</a> |
        <a href="./workshops/index.html">Workshops</a> |
        <a href="./sponsors/index.html">Sponsors</a> |
        <a href="./media/index.html">Media</a> |
        <a href="./lookback/index.html">Lookback</a>
      </div>
    </div>

    <!-- ##### Side Bar ##### -->

    <div id="side-bar">

  <div>
        <p class="sideBarTitle">&nbsp;Survivor</p>
	<ul>
		<li>&rsaquo; <a href="./survivor.html">Introduction</a></li>
		<li>&rsaquo; <a href="./survivor.html#statement">Prob. Statement</a></li>
		<li>&rsaquo; <a href="./survivor.html#eligibility">Eligibility</a></li>
		<li>&rsaquo; <a href="./survivor.html#size">Team Size</a></li>
		<li>&rsaquo; <a href="./arena.html">Game Arena</a></li>
		<li>&rsaquo; <a href="./rules.html">Machine Specs</a></li>
		<li>&rsaquo; <a href="./rules.html#rules">Game Rules</a></li>
		<li>&rsaquo; <a href="./rules.html#points">Points Structure</a></li>
		<li>&rsaquo; <a 
href="./rules.html#gen">General Rules</a></li>
		<li>&rsaquo; <a href="./rules.html#structure">Comp. Structure</a></li>
		<li>&rsaquo; <a href="./rules.html#qualify">Qualifying Round</a></li>
		<li>&rsaquo; <a href="./rules.html#dates">Imp. Dates</a></li>
		<li>&rsaquo; <a href="./rules.html#prizes">Prizes</a></li>
		<li>&rsaquo; <a href="./rules.html#contact">Contact</a></li>
		<li>&rsaquo; <a href="./register.html">Register</a></li>
		<li>&rsaquo; <a href="./survivorfaq.html">FAQ</a></li> 

	</ul>
      </div>
<br>
     <div>
	<p class="sideBarTitle">&nbsp;Newsletter</p>  
	<form method="POST" action="./subscribe.php">
	  <table width="150">
		<tr>
		<td width="70">E-mail :</td>
	 	<td width="80"><input type="text" name="email" size="10"></td>		
	 	</tr>	
 	</table>
		<center>
	 <input type="submit" value="Go!" name="action">
	 </center>
	</form>
      </div>
  </div>

    <!-- ##### Main Copy ##### -->

    <div id="main-copy">
<h1>Register - Survivor</h1>
<?php
if(($_POST['player1_name']=="")||($_POST['player1_mail']=="")||($_POST['player1_univ']=="")||($_POST['player1_year']==""))
 {
	?><p>Team Leader information invalid. Please Resubmit your registration</p><?
	exit;
 }

else if ($_POST['postaladdress']=="")
 {
	?><p>Please enter a Valid Postal address</p><?
	exit;
 }

if($_POST['player2_name']!="")
 {
	
	if(($_POST['player2_mail']=="")||($_POST['player2_univ']=="")||($_POST['player2_year']==""))
 	 {
	?><p>Player 2 information invalid. Please Resubmit your registration</p><?
		exit;
 	 }

}


if($_POST['player3_name']!="")
 {
	
	if(($_POST['player3_mail']=="")||($_POST['player3_univ']=="")||($_POST['player3_year']==""))
 	 {
	?><p>Player 3 information invalid. Please Resubmit your registration</p><?
		exit;
 	 }

}
if($_POST['player4_name']!="")
 {
	
	if(($_POST['player4_mail']=="")||($_POST['player4_univ']=="")||($_POST['player4_year']==""))
 	 {
	?><p>Player 4 information invalid. Please Resubmit your registration</p><?
		exit;
 	 }

}

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

//$query = "CREATE TABLE survivor( Regnum varchar(10),Name1 varchar(30),Email1 varchar(30),Univ1 varchar(30),Year1 //varchar(15),Name2 varchar(30),Email2 varchar(30),Univ2 varchar(30),Year2 varchar(15),Name3 varchar(30),Email3 //varchar(30),Univ3 varchar(30),Year3 varchar(15),Name4 varchar(30),Email4 varchar(30),Univ4 varchar(30),Year4 varchar(15), //Address varchar(255), category varchar(5) )";
//mysql_query($query);

$query="SELECT Regnum FROM survivor";
$r=mysql_query($query);
$row=mysql_fetch_row($r);
if (!$row)
 {
	$regnum=111;
 }
else
 {
	$regnum=0;
	while($row=mysql_fetch_row($r))
 	 {
		if($regnum<$row[0])
			$regnum=$row[0];
	 }
	$regnum=$regnum+1;
 }

$query1 = "INSERT INTO survivor (Regnum,Name1,Email1,Univ1,Year1,Name2,Email2,Univ2,Year2,Name3,Email3,Univ3,Year3,Name4,Email4,Univ4,Year4,Address,category) VALUES ('$regnum','{$_POST['player1_name']}','{$_POST['player1_mail']}','{$_POST['player1_univ']}','{$_POST['player1_year']}','{$_POST['player2_name']}','{$_POST['player2_mail']}','{$_POST['player2_univ']}','{$_POST['player2_year']}','{$_POST['player3_name']}','{$_POST['player3_mail']}','{$_POST['player3_univ']}','{$_POST['player3_year']}','{$_POST['player4_name']}','{$_POST['player4_mail']}','{$_POST['player4_univ']}','{$_POST['player4_year']}','{$_POST['postaladdress']}','{$_POST['category']}')";
$res=mysql_query($query1);
if ($res)
 {
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From: Survivor at Techfest2005<survivor@techfest.org>\r\n";
$headers .= "Reply-To: survivor@techfest.org\r\n";
$sub = "Registration for Survivor ";
$mes = "Dear ".$_POST['player1_name']."\r\n\r\n";
$mes .= "Thank you for registering for the competition SURVIVOR at
Techfest-2005.\r\n\r\nYour team details are as follows:";
$mes .= "\r\nTeam Leader: ".$_POST['player1_name']."\r\nEmail address:
".$_POST['player1_mail'];
$mes .= "\r\nTeam Members: ";
if ( $_POST['player2_name'] != "" )
$mes .= "\r\n".$_POST['player2_name'];
if ( $_POST['player3_name'] != "" )
$mes .= "\r\n".$_POST['player3_name'];
if ( $_POST['player4_name'] != "" )
$mes .= "\r\n".$_POST['player4_name'];
$mes .= "\r\nCategory: ";
if ( $_POST['category'] == "1" )
$mes .= "India";
else
$mes .= "Rest of the World";

$mes .= "\r\nYour team code is :IC05".$regnum;
$mes .= "\r\nPlease make it a point to mention this team code in any
future correspondence.
For any discrepancies in the above information, mail us at
survivor@techfest.org


Kindly note that this is not a Confirmation to participate at Techfest,
but only the registration. You are required to send a packet with the
contents as mentioned in the competition rules at
www.techfest.org/survivor.html";
if($_POST['category']=="1")
{
$mes .= " All the short-listed teams will then receive a mail confirming
your participation. Please get a print out of that confirmation mail
signed by the Dean/Head of your institute to apply for accommodation
and send it to us to avail accommodation.";
}
$mes .= "\r\n\r\n
Contact address:
Techfest 2005,
Student Gymkhana,
IITB, Powai
Mumbai
India
http://www.techfest.org/survivor.html";


?>
<br><p>Thank you for registering for the competition <b>SURVIVOR</b> at
Techfest-2005.<br><br>
Your team details are as follows:
<br>
Team Leader:

<?php

print "<br>Name :<b>".$_POST['player1_name']."</b>";
print "<br>Email  : <b>".$_POST['player1_mail']."</b>";
print "<br>Team Members:";
if ( $_POST['player2_name'] != "" )
print "<br><b>{$_POST['player2_name']}</b>";
if ( $_POST['player3_name'] != "" )
print "<br><b>{$_POST['player3_name']}</b>";
if ( $_POST['player4_name'] != "" )
print "<br><b>{$_POST['player4_name']}</b>";

?>
<br>
Category :
<?php
if ( $_POST['category'] == 1 )
print "<b>India</b>";
else
print "<b>Rest of the World</b>";
print "<br>";
print "Your team code is: <b>IC05".$regnum."</b>";
print "</font></b>&nbsp; &nbsp;<br>Please make it a point to mention
this team code in any future correspondence.";
print "<br>For any discrepancies in the above information, mail us at ";?>
<a href="mailto:survivor@techfest.org">survivor@techfest.org</a><br>

<br>
Entry deadline for participants from Rest of the World: 10th December 2004<br>
Entry deadline for participants from India: 20th December 2004<br>
<br><br>
Kindly note that this is not a Confirmation to
participate at Techfest, but only the
registration. You are
required to send a packet with the contents as mentioned in the
competition rules at <br>
<a href="http://www.techfest.org/rules.html#qualify">http://www.techfest.org/rules.html</a><br>
<?
if($_POST['category']=="1")
{
?>
All
the
short-listed teams will then receive a mail confirming your
participation. Please get a print out of this signed by the
Dean/Head of your institute to apply for accommodation and send it to us
to avail accommodation. 
<?
}
?>
<br><br><br>
For further queries, contact us at:<br>
<b>
TECHFEST 2005<br></b>
Students' Gymkhana<br>
IIT Bombay,Powai<br>
Mumbai- 400076<br>
Tel-91-22 25764045/8947<br>
Fax-91-22 25723480<br>
<a href="mailto:info@techfest.org">info@techfest.org</a>










<?

$temp = "techfest@cc.iitb.ac.in";
$h = mail($_POST['player1_mail'], $sub, $mes, $headers);
if($h == TRUE){
$h1 = mail($temp, $sub, $mes, $headers);
}
else
{
print "Unable to send mail to ".$_POST['player1_mail'];
}

}
else
{
die('Query failed : '.mysql_error());
mysql_close($link);
exit;
}
?>
    </div>
    
    <!-- ##### Footer ##### -->

    <div id="footer">
<div class="right">
			Web Hosting By<br>&nbsp;&nbsp;&nbsp;
			<a href="http://www.indialinks.com">Indialinks</a>
		</div>	
                <div class="center">
        	<a href="./faq.html">FAQ</a>|
        	<a href="./sitemap.html">Sitemap</a>|
        	<a href="./Contact.html">Contact Us</a>
	<br>
	&copy; Techfest 2005
            </div>	   
    </div>
  </body>





