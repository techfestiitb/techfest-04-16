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

	<img src="http://www.techfest.org/img/top_left.jpg"
usemap="#top_left" border=0>

<MAP NAME="top_left">
 <AREA SHAPE=RECT COORDS="120,3,242,35" HREF="http://www.iitb.ac.in"
ALT="IIT Bombay"  TARGET="_blank"  OnMouseOut="window.status='';
return true"  OnMouseOver="window.status=''; return true">
 <AREA SHAPE=RECT COORDS="247,3,339,71" HREF="http://www.ril.com"
ALT="Reliance"  TARGET="_blank"  OnMouseOut="window.status=''; return
true"  OnMouseOver="window.status=''; return true">
 <AREA SHAPE=RECT COORDS="345,2,522,69"
HREF="http://www.techfest.org/index1.html"  ALT="Techfest 2005"
OnMouseOut="window.status=''; return true"
OnMouseOver="window.status=''; return true">
</MAP>



	<div class="right"><a href=http://www.techfest.org/index1.html border=0><img src="./img/logodark.gif" border=0></a></div>
	</div>

             <div class="subHeader"> <a href="../events/index.html" >Events</a> 
    | <a href="../competitions/index.html">Competitions</a> | <a href="../workshops/index.html">Workshops</a> 
    | <a href="../sponsors/index.html">Sponsors</a> | <a href="../media/index.html">Media</a> 
    | <a href="../lookback/index.html">Lookback</a>| <a href="../register/index.html">Register</a> 
    | <a href="../assistance/index.html" >Assistance</a> </div>
    </div>

    </div>

    <!-- ##### Side Bar ##### -->

    <div id="side-bar">
  
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
	  <br>
	  
	  <div>
	<p class="sideBarTitle">&nbsp;Sponsors</p>  
		 <div >
		<script language="JavaScript1.2" type="text/javascript" src="http://www.techfest.org/javascript/sponsors.js">
		</script>

	</div>     
	</div> 
  </div>

    <!-- ##### Main Copy ##### -->

  <div id="main-copy">


<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

if ($_POST['action']=="")
 {
	if ($_GET['h']=="")
	 {
	 	echo "<p>Invalid Access. Get Out</p>";
		exit;
	 }
	$query="SELECT * FROM finalaccolist WHERE md5='{$_GET['h']}'";
	$result=mysql_query($query) or die ("Mysql error : ".mysql_error());
	$row=mysql_fetch_row($result);
	
	if (!$row)
	 {
		echo "<p>There seems to be a problem with you acco mail. Please send a mail at <a href=http://www.techfest.org/mail.php?email=info@techfest.org target=_blank>info@techfest.org</a></p>"; 
		exit;
	 }
	if ($row[2]!=0)
	 {
	 	echo "You have already edited the entry for your registration. Please contact <a href=http://www.techfest.org/mail.php?email=info@techfest.org target=_blank>info@techfest.org</a></p>"; 
		exit;
	 }
?>
	<form name="form1" method="post" action="./confirm.php">
	 <h3>Registration Code : <? echo "{$row[0]}"; ?></h3>
	 <input type=hidden name=regnum value=<? echo "{$row[0]}"; ?> >
	  <h3>Team Leader Details </h3>
	  <table width="453" border="0">
		<tr>
		  <td>Name</td>
		  <td><input type="text" name="player1_name" value="<? echo "{$row[4]}"; ?>"></td>
		</tr>
		<tr>
		  <td>E-mail</td>
		  <td><input type="text" name="player1_mail" value="<? echo "{$row[5]}"; ?>"></td>
		</tr>
		<tr>
		  <td>University</td>
		  <td><input type="text" name="player1_univ" value="<? echo "{$row[6]}"; ?>"></td>
		</tr>
		<tr>
		  <td>Year</td>
		  <td><input type="text" name="player1_year" value="<? echo "{$row[7]}"; ?>"></td>
		</tr>
	  </table>
	<?
	for ($i=2;$i<=$row[3];$i++)
	 {
	 ?>
	  <h3>Team Member Details </h3>
	  <table width="453" border="0">
		<tr>
		  <td>Name</td>
		  <td><input type="text" name="player<? echo $i;?>_name" value="<? $r=4*$i; echo "{$row[$r]}"; ?>"></td>
		</tr>
		<tr>
		  <td>E-mail</td>
		  <td><input type="text" name="player<? echo $i;?>_mail" value="<?  $r=4*$i+1; echo "{$row[$r]}"; ?>"></td>
		</tr>
		<tr>
		  <td>University</td>
		  <td><input type="text" name="player<? echo $i;?>_univ" value="<? $r=4*$i+2; echo "{$row[$r]}"; ?>"></td>
		</tr>
		<tr>
		  <td>Year</td>
		  <td><input type="text" name="player<? echo $i;?>_year" value="<? $r=4*$i+3; echo "{$row[$r]}"; ?>"></td>
		</tr>
	  </table>
	<?
	 }
	echo "<h3>Address</h3><br><textarea name=address>{$row[28]}</textarea>";
	?><br>
	<input type=submit name=action value=Submit!>
	</form>

<?
 }
elseif ($_POST['action']=="Submit!")
  {
		$query1="UPDATE finalaccolist SET flag=1 ,player1_name='{$_POST['player1_name']}' , player1_email='{$_POST['player1_mail']}' ,  player1_college='{$_POST['player1_univ']}' ,  player1_year='{$_POST['player1_year']}' , player2_name='{$_POST['player2_name']}' ,  player2_email='{$_POST['player2_mail']}' ,  player2_college='{$_POST['player2_univ']}' ,  player2_year='{$_POST['player2_year']}' ,  player3_name='{$_POST['player3_name']}' ,  player3_email='{$_POST['player3_mail']}' ,  player3_college='{$_POST['player3_univ']}' ,  player3_year='{$_POST['player3_year']}' ,  player4_name='{$_POST['player4_name']}' ,  player4_email='{$_POST['player4_mail']}' ,  player4_college='{$_POST['player4_univ']}' ,  player4_year='{$_POST['player4_year']}' ,  player5_name='{$_POST['player5_name']}' ,  player5_email='{$_POST['player5_mail']}' ,  player5_college='{$_POST['player5_univ']}' ,  player5_year='{$_POST['player5_year']}' ,  player6_name='{$_POST['player6_name']}' ,  player6_email='{$_POST['player6_mail']}' ,  player6_college='{$_POST['player6_univ']}' ,  player6_year='{$_POST['player6_year']}' ,  address='{$_POST['address']}' WHERE regnum='{$_POST['regnum']}'";
		$result=mysql_query($query1) or die ("Mysql Error : ".mysql_error());
		echo "<p>Your details were updated successfully</p>";
  }
?>
</div>
   <div id="footer">
		<div class="right">
			Web Hosting By<br>&nbsp;&nbsp;&nbsp;
			<a href="http://www.indialinks.com" target="_blank">Indialinks</a>
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
</html>
