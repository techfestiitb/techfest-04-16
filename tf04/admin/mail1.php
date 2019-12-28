

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
<form method=POST action=mail1.php>
<br><center><centre>
Name: <input type=text name=name><br>
Password: <input type=password name=password><br>
<input type=submit name=check value=sure>
</form>
<?
}
if(($check!="")&&($action=="")){
if(($name=="mailman")&&($password=="TecHfest"))
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
<br><br><form method="POST" action="mail1.php">
<br><br><h4>Select the Competition :</h4>
<?
echo "<b>Competitions</b><br>";
while($myrow=mysql_fetch_row($result)){
echo "<input type=radio value=".$myrow[1]." unchecked name=category>"."<b>".$myrow[0]."<br>";
 }//while end
echo "<br><br><b>Workshops</b><br><br>";
while($myrow=mysql_fetch_row($result1)){
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
temporary Competition. There you can see how your wmail will look like. Pls 
be very careful before pressing SEND</b>.
In case of queries you can contact me.
<br><br>


<form method="POST" action="<?php echo $PHP_SELF ?>">
  <p>
<input type=radio name=harki value=yes unchecked>
<br>Pls dont check this button...nahi to email address galat aa 
jaaeyga<br>
<p>  
Start Registration Number:<input type=text name=start><br>
  End Registration Number:<input type=text name=end><br>
  <b> You are supposed to enter the start and end registration number in 
exact format,eg if u wish to send from KUR110 to KUR113, just enter 
start=110 and end=113

This numbers are cumpolsory to be entered.
<!-- here i am -->
  Subject:<input type=text name=subject><br>Matter:<br>
  <textarea rows="20" cols="66" name="matter"></textarea></p>
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
if($start == "" || $end=="") {
echo "<br><br>No Start/End Given ...dude :)  ";
exit;
}
echo "<br><br>Sending mail,<b>Note:</b>This process may take time so 
please wait...<br><br>";
echo "<b>Note</b>Email adress in green color means email is send,while in 
red means that mail is not send to them";

echo "<pre>$matter</pre>";

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
if($what=='workshop')
{
$result=mysql_query("Select w_name, email, w_id  from w_data where w_code='".$category."'");
$myrow3=mysql_fetch_row($result);
$from = $myrow3[0];
$emailf = $myrow3[1];
$code = $myrow3[2];
}

if($what=='competitions')
{
$result = "Select comp_name, email, comp_id from comp_data where comp_code='".$category."'";
$result= mysql_query($result);
$myrow3 = mysql_fetch_row($result);
$from = $myrow3[0];
$emailf = $myrow3[1];
$code = $myrow3[2];
}
$emailfrom = $from." <".$emailf.">";
if($harki=="yes")
$emailfrom = "Techfest 2004 <info@techfest.org>";
if($subject=="")
$subject = "Information Newsletter";

  $uid = strtoupper(md5(uniqid(time())));

$attachment="submit.zip"; //change here plz make sure that the file size 
//less than 100 kb
	if( $fp = fopen($attachment, "rb"))
	 echo "yes"."\n";
	$data = fread($fp, filesize($attachment));
//echo $data;
	$data = chunk_split(base64_encode($data));
	fclose($fp);


$headers = "From : ".$emailfrom."\r\n";
$headers .= "Reply-To :".$emailfrom."\r\n";
//$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=$uid\n";
/* $headers .= "Content-Transfer-Encoding: 7bit\n";
$headers .= "--$uid\n";
$headers .= "Content-Type: image/jpeg; name=zendlogo.jpg\n";
$headers .= "Content-Transfer-Encoding: base64\n";
$headers .= "Content-Disposition: attachment\n";
$headers .= $data."\r\r\n\n\n";;
$headers .= "Content-Description: An image\n";
$headers .= "--$uid\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "Content-Transfer-Encoding: 7bit\n";
*/
$end++;


for($i=$start;$i<$end;$i++)
{
$regnumber=$code.$i;
$result1 = "SELECT Name, Email, Regnum from ".$category." where Regnum='".$regnumber."'";
echo $result1;
$result1 = mysql_query($result1);
while ($myrow = mysql_fetch_row($result1)){
if($myrow[1]!=""){
//print $line;
$l3 = strtolower($myrow[1]);
$fullname = $myrow[0];
$fullname = strtoupper($fullname);
$reg=$myrow[2];
$tosend= "Dear ".$fullname.",\r\n\r\n".$matter;
$bottom="\r\n\r\n-------------------------------------------------------\r\n";
$bottom.="You are receiving this mail because you are registered \r\n";
$bottom.="for ".$from." with registration number ".$myrow[2];
$bottom.="\r\n-------------------------------------------------------\r\n";
$tosend.=$bottom;
// $headers .= "--$uid--";
//echo $headers;
$boundary=$uid;

$tosend="--$boundary
Content-type: text/plain; charset=iso-8859-1
Content-transfer-encoding: 8bit

$tosend

--$boundary
Content-type: application/zip; name=".$attachment." //change here
Content-disposition: attachment; filename=".$attachment."
Content-transfer-encoding: base64

$data

--$boundary--";

$h = mail($l3, $subject, $tosend, $headers);
if($h==TRUE)
	echo "<font color='green'>".$l3."</font><br>";
else
	echo "<font color='red'>".$l3."</font><br>";
}
}
}
mysql_close($link);
}
