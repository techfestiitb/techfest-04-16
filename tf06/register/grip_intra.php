<?php
function echo_content($str)
{
	$l=fopen($str,"r");
	$arr=file($str);
	$num=count($arr);
	for($i=0;$i<$num;$i++)
	{
		echo $arr[$i];
	}
	return;
}

echo_content("header.txt");
echo_content("side_register.txt");
echo_content("side_update.txt");
if ($_POST['Submit']=="")
{
?>
<!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Register - G.R.I.P. Intra</h1> 
<p>This competition is strictly for students of IIT Bombay.</p>
<form name="form1" method="post" action="./grip_intra.php">
  <h3>Team Leader Details </h3>
  <table width="453" border="0">
    <tr>
      <td>Name</td>
      <td><input type="text" name="player1_name"></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input type="text" name="player1_mail"></td>
    </tr>
    <tr>
      <td>Year</td>
      <td><input type="text" name="player1_year"></td>
    </tr>
  </table>
  <h3>Second Team Member </h3>
  <table width="453" border="0">
    <tr>
      <td>Name</td>
      <td><input type="text" name="player2_name"></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input type="text" name="player2_mail"></td>
    </tr>
    
    <tr>
      <td>Year</td>
      <td><input type="text" name="player2_year"></td>
    </tr>
  </table>
  <h3>Third Team member</h3>
    <table width="453" border="0">
    <tr>
      <td>Name</td>
      <td><input type="text" name="player3_name"></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input type="text" name="player3_mail"></td>
    </tr>
    
    <tr>
      <td>Year</td>
      <td><input type="text" name="player3_year"></td>
    </tr>
  </table>
<h3>Fourth Team member</h3>
    <table width="453" border="0">
    <tr>
      <td>Name</td>
      <td><input type="text" name="player4_name"></td>
    </tr>
    <tr>
      <td>E-mail</td>
      <td><input type="text" name="player4_mail"></td>
    </tr>
    
    <tr>
      <td>Year</td>
      <td><input type="text" name="player4_year"></td>
    </tr>
  </table>

 
  <h3>Postal Address</h3>
  <table   width="453" border="0">
<tr>
<td>    
<textarea name="postaladdress"></textarea> 
</td>
</tr>  
</table>


  <p>    <input type="submit" name="Submit" value="Submit">
</p>
  <p>&nbsp;</p>
</form>

    </div>
    


<br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?
}
else if ($_POST['Submit']=="Submit")
{


?>

	 <div id="content">
     <h1 id="toptext">Register - G.R.I.P. Intra</h1>
	 <? 
	if(($_POST['player1_name']=="")||($_POST['player1_mail']=="")||($_POST['player1_year']==""))
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
	
		if(($_POST['player2_mail']=="")||($_POST['player2_year']==""))
 	 	{
		?><p>Player 2 information invalid. Please Resubmit your registration</p><?
			exit;
 	 	}

	}


	if($_POST['player3_name']!="")
 	{
	
		if(($_POST['player3_mail']=="")||($_POST['player3_year']==""))
 	 	{
		?><p>Player 3 information invalid. Please Resubmit your registration</p><?
			exit;
 		 }

	}
	if($_POST['player4_name']!="")
 	{
	
		if(($_POST['player4_mail']=="")||($_POST['player4_year']==""))
 	 	{
		?><p>Player 4 information invalid. Please Resubmit your registration</p><?
			exit;
 	 	}

	}

	$dbhost = 'techfest.techfest.org';
		$dbname = 'techfest';
		$dbuser = 'techfestiitb';
		$dbpasswd = 'tec45st';

	$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
	or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());

	
	$query="SELECT Regnum FROM grip_intra2k6";
	$r=mysql_query($query);
	$row=mysql_fetch_row($r);
	if (!$row)
 	{
		$regnum=101;
 	}
	else
 	{
		$regnum=$row[0];
		while($row=mysql_fetch_row($r))
 	 	{
			if($regnum<$row[0])
				$regnum=$row[0];
	 	}
		$regnum=$regnum+1;
 	}

	$query1 = "INSERT INTO grip_intra2k6 (Regnum,Name1,Email1,Year1,Name2,Email2,Year2,Name3,Email3,Year3,Name4,Email4,Year4,Address) VALUES ('$regnum','{$_POST['player1_name']}','{$_POST['player1_mail']}','{$_POST['player1_year']}','{$_POST['player2_name']}','{$_POST['player2_mail']}','{$_POST['player2_year']}','{$_POST['player3_name']}','{$_POST['player3_mail']}','{$_POST['player3_year']}','{$_POST['player4_name']}','{$_POST['player4_mail']}','{$_POST['player4_year']}','{$_POST['postaladdress']}')";
	$res=mysql_query($query1);
	$today = date("F j, Y, g:i a");
	$fh=fopen('grip_intra2k6.txt','a+');
	$str="Regnum: ".$regnum."\n";
	$str.="Date: ".$today."\n";
	$str.="Name1: ".$_POST['player1_name']."\n";
	$str.="Email1: ".$_POST['player1_mail']."\n";
	$str.="Univ1: ".$_POST['player1_univ']."\n";
	$str.="Year1: ".$_POST['player1_year']."\n";
	$str.="Name2: ".$_POST['player2_name']."\n";
	$str.="Email2: ".$_POST['player2_mail']."\n";
	$str.="Univ2: ".$_POST['player2_univ']."\n";
	$str.="Year2: ".$_POST['player2_year']."\n";
	$str.="Name3: ".$_POST['player3_name']."\n";
	$str.="Email3: ".$_POST['player3_mail']."\n";
	$str.="Univ3: ".$_POST['player3_univ']."\n";
	$str.="Year3: ".$_POST['player3_year']."\n";
	$str.="Name4: ".$_POST['player4_name']."\n";
	$str.="Email4: ".$_POST['player4_mail']."\n";
	$str.="Univ4: ".$_POST['player4_univ']."\n";
	$str.="Year4: ".$_POST['player4_year']."\n";
	$str.="Address: ".$_POST['postaladdress']."\n\n";
	fwrite($fh,$str);
	if ($res)
 	{
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: G.R.I.P. Intra at Techfest 2006 <grip@techfest.org>\r\n";
	$headers .= "Reply-To: grip@techfest.org\r\n";
	$sub = "Registration for G.R.I.P. - Intra ";
	$mes = "Dear ".$_POST['player1_name']."\r\n\r\n";
	$mes .= "Thank you for registering for the competition G.R.I.P. - Intra at Techfest-2006.\r\n\r\nYour team details are as follows:";
	$mes .= "\r\nTeam Leader: ".$_POST['player1_name']."\r\nEmail address:".$_POST['player1_mail'];
	$mes .= "\r\nTeam Members: ";
	if ( $_POST['player2_name'] != "" )
	$mes .= "\r\n".$_POST['player2_name'];
	if ( $_POST['player3_name'] != "" )
	$mes .= "\r\n".$_POST['player3_name'];
	if ( $_POST['player4_name'] != "" )
	$mes .= "\r\n".$_POST['player4_name'];

	$mes .= "\r\nYour team code is :GI06".$regnum;
	$mes .= "\r\nPlease make it a point to mention this team code in any future correspondence.	For any discrepancies in the above information, mail us at grip@techfest.org";
	$mes .= "\r\n\r\n
	Contact address:
	Techfest 2006,
	Student Gymkhana,
	IITB, Powai
	Mumbai
	India
	http://www.techfest.org";


?>
	<br><p>Thank you for registering for the competition <b>G.R.I.P. - Intra</b> at
	Techfest-2006.<br><br>
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
<?
print "Your team code is: <b>GI06".$regnum."</b>";
print "</font></b>&nbsp; &nbsp;<br>Please make it a point to mention this team code in any future correspondence.<br>";
print "For any discrepancies in the above information, mail us at ";
?>
<a href="http://www.techfest.org/mail.php?email=grip@techfest.org">grip@techfest.org</a><br>

<br>
For further queries, contact us at:<br>
<b>
TECHFEST 2006<br></b>
Students' Gymkhana<br>
IIT Bombay,Powai<br>
Mumbai- 400076<br>
Tel-91-22 25764045/8947<br>
Fax-91-22 25723480<br>
<a href="http://www.techfest.org/mail.php?email=info@techfest.org">info@techfest.org</a>

<?

$temp = "register.tf2k6@gmail.com";
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

<br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<?

}
echo_content("footer.txt");

?>