<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==""){
echo "Illegal Access";
exit;
}
echo "Welcome 
<b>".$user."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&n
bsp;&nbsp;&nbsp;&nbsp; ";

include('header.php');
if ($check=="")
{
?>
<form method=POST action=mail_harki.php>
<br><center><centre>
Name: <input type=text name=name><br>
Password: <input type=password name=password><br>
<input type=submit name=check value=sure>
</form>
<?
}
if(($check!="")&&($action=="")){
if(($name=="mailman_harki")&&($password=="TecHfest"))
{			
$check="yes";
}
else 
$check="";

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result1 = mysql_query("Select w_name,w_code from w_data");
$num1 = mysql_num_rows($result1);
$result = mysql_query("Select comp_name,comp_code from comp_data");
$num = mysql_num_rows($result);
if(($num==0)&&($num1==0)){
echo "<br><br>No Competitions / Workshops yet,Add first";
exit;
}
?>
<br><br><form method="POST" action="mail_harki.php">
<br><br><h4>Select the Competition :</h4>
<?
echo "<b>Competitions</b><br>";
while($myrow=mysql_fetch_row($result)){
echo "<input type=radio value=".$myrow[1]." unchecked name=category>"."<b>".$myrow[0]."<br>";
 }//while end
echo "<br><br><INPUT TYPE=SUBMIT NAME=action VALUE=SUBMIT>";
echo "<input type=hidden name=check value=".$check.">";
echo "</form>";
mysql_close($link);
}
else if(($check!="")&&($action=="SUBMIT"))
{
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result = mysql_query("Select * from comp_data where comp_code='".$category."'");
$num = mysql_num_rows($result);
$result1 = mysql_query("Select * from w_data where w_code='".$category."'");
$num1 = mysql_num_rows($result1);
if(($num==0)&&($num1==0)){
echo "ERROR,No Such Competition/Workshop Exists";
exit;
}
if($num1!=0)
	$what='workshop';
if($num!=0)
	$what='competitions';
?>
<h4>Please note that this action can not be undo,so if you are perfectly 
sure then only press Submit button,interface will not confirm again.</h4>
Also if you are sending plain text message please be sure for newline and 
carriage return characters.
<br><br>
<b> I strongly recomment you to first send a mail to all users of 
temporary Competition. There you can see how your mail will look like. Pls 
be very careful before pressing SEND</b>.
In case of queries you can contact me.
<br><br>

  <b>SEND ING MAIL FOR <? echo $category?><br>
<form method="POST" action="<?php echo $PHP_SELF ?>">
  <p>
  Starting Registration number:<input type=text name=start><br>
  <b>All mails with registration number greater than or equal to this registration number will be sent.
<br></b>
  End Registration number:<input type=text name=end><br>
<b>Now its cumpolsory to enter the registration numbers.<br></b>
<b>NOTE: You need to enter only three digit number eg.110 or 103 or anything like that...no need to mention the 
starting</b><br><br>
  Subject:<input type=text name=subject><br>Matter(Ist part):<br>
  <textarea rows="20" cols="66" name="matter"></textarea></p>
  After this there will be matter like 
<br> Your team details are as under:
Name, etc
<br>Matter Second Part<br>
<textarea rows="20" cols="66" name="matter1"></textarea></p>

  <p>&nbsp;</p>
  <p><input type="submit" value="Send" name="action">
<input type=hidden name=category value="<? echo $category ?> " >
<input type=hidden name=what value="<? echo $what ?>">
<input type=hidden name=check value=yes>
<input type="reset" value="Reset" name="B2"></p>
</form>
<?
}
else if(($action=="Send")&&($check!="")){
if($matter == "") {
echo "<br><br>No Matter Given ...dude :)  ";
exit;
}
echo "<br><br>Sending mail,<b>Note:</b>This process may take time so 
please wait...<br><br>";
echo "<b>Note</b>Email adress in green color means email is send,while in 
red means that mail is not send to them";


$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
if($what=='competitions')
{
$result = "Select comp_name, email, comp_id from comp_data where  comp_code='".$category."'";
$result = mysql_query($result);
$myrow3 = mysql_fetch_row($result);
$from = $myrow3[0];
$code=$myrow3[2];
$emailf = $myrow3[1];
}
$emailfrom = "Techfest 2004 <info@techfest.org>";
if($subject=="")
$subject = "Information Newsletter";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From : ".$emailfrom."\r\n";
$headers .= "Reply-To :".$emailfrom."\r\n";

if($start=="")
{
$start=101;
}

$regnumber=$code.$start;
$result3 = "SELECT Name, Univ, Email  from ".$category." where Regnum='".$regnumber."'";
$result2 = "SELECT * from ".$category."_post where Regnum='".$regnumber."'";
$result_2 = mysql_query($result2);
echo "starting ".$regnumber;

while ($myrow = mysql_fetch_row($result_2)){
$result4 = mysql_query($result3);
$num_members = mysql_num_rows($result4);
$myrow_members=mysql_fetch_row($result4);
$fullname=strtoupper($myrow_members[0]);
$tosend= "Dear ".$fullname.",\r\n\r\n".$matter;
$middle = "\r\n\r\nYour details are as under:\r\n";
$middle .= "Competition: ".strtoupper($from)."\r\n";
$middle .= "Registration Number: ".$regnumber."\r\n";
$to=$myrow_members[2];
$middle.= "Team Leader: ".strtoupper($myrow_members[0]);
$leadername=$myrow_numbers[0];
$middle.= "\r\nCollege/University: ".strtoupper($myrow_members[1]);
if ($num_members>=2)
{
$middle.= "\r\nOther Team Members: ";
$myrow_members=mysql_fetch_row($result4);
$middle.= strtoupper($myrow_members[0]);
} 
if($num_members>=3)
{
$myrow_members=mysql_fetch_row($result4);
$middle.= ", ".strtoupper($myrow_members[0]);
}
if($num_members>=4)
{
$myrow_members=mysql_fetch_row($result4);
$middle.= ", ".strtoupper($myrow_members[0]);
}
if($num_members==5)
{
$myrow_members=mysql_fetch_row($result4);
$middle.= ", ".strtoupper($myrow_members[0]);
}
$middle.= "\r\n";
$bottom="\r\n\r\n--\r\n";
$bottom.="You are receiving this mail because you are registered ";
$bottom.="for ".$from." with registration number ".$reg;
$tosend.=$middle."\r\n".$matter1;

$h = mail($to, $subject, $tosend, $headers);
if($h==TRUE)
	echo "<font color='green'>".$to."</font><br>";
else
	echo "<font color='red'>".$to."</font><br>";
if ($start==$end)
	break;
$start++;
$regnumber=$code.$start;
$result3 = "SELECT Name, Univ, Email  from ".$category." where Regnum='".$regnumber."'";
$result2 = "SELECT * from ".$category."_post where Regnum='".$regnumber."'";
$result_2 = mysql_query($result2);
	
}
mysql_close($link);
}
