<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==""){
echo "Illegal Access";
exit;
}
include('testuser.php');
echo "Welcome <b>".$user."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
$todo = $HTTP_GET_VARS['act'];
if($todo =="") $todo = "null";
include('header.php');
if($todo == "null"){
  ?>
 <br><br><br>Select links from above ......
<?php
}

if($todo == "broken"){
$file = fopen("../tell/brokenlink-log.txt","r");
if(!file) {
print "unable to read file,either file does not exist or it can't be read";
exit;
}
print "<br><br><b>BROKEN LINKS :<br><br>";
$num = 1;
do{
$line = fgets($file,1024);
if($line!=""){
//print $line;
list($l1,$l2,$time) = split("@",$line);
print '<table border="1" cellpadding="10" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="60%" align=center><tr><td width="100%">';
print "<b>Broken Link ".$num." : </b>".$l1."<br>";
print "<b>Basic Link on : </b>".$l2."<br>";
print "<b>Date : </b>".$time."<br>";
print "</td></tr></table>";
print "<br>";
$num += 1;
 }
}while(!feof($file));

} // act broken finish 


if($todo == "urllog"){
$file = fopen("../tell/url-log.txt","r");
if(!file) {
print "unable to read file,either file does not exist or it can't be read";
exit;
}
print "<br><br><b>Emailed Pages :<br><br>";
$num = 1;
do{
$line = fgets($file,1024);
if($line!=""){
//print $line;
list($l1,$l2,$l3,$l4) = explode("|",$line);
print '<table border="1" cellpadding="10" cellspacing="1" style="border-collapse: collapse" bordercolor="#111111" width="60%" align=center><tr><td width="100%">';
print "<b>Page #".$num." : </b>".$l1."<br>";
print "<b>Send by : </b>".$l2."<br>";
print "<b>Send to : </b>".$l3."<br>";
print "</td></tr></table>";
print "<br>";
$num += 1;
 }
}while(!feof($file));

} // act urllog finish 

if($todo == "viewreg"){

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result = mysql_query("SELECT fname,sname,email,ip1,ip2 FROM updates_reg");
?>
<br><br>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="98%" id="AutoNumber1">
  <tr>
    <td><b>S. No.</b></td>
    <td><b>First Name</b></td>
    <td><b>Second Name</b></td>
    <td><b>Email </b></td>
    <td><b>IP</b></td>
    <td><b>Real IP</b></td>
</tr>
<?
$i=1;
while ($myrow = mysql_fetch_row($result)){
print "<tr><td>$i</td><td>".$myrow[0]."</td><td>".$myrow[1]."</td><td>".$myrow[2]."</td><td>".$myrow[3]."</td><td>".$myrow[4]."</td></tr>";
$i=$i+1;
}
echo "</table>";
mysql_close($link);
} // act comment finish


if($todo == "westpoint"){
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

if($view != ""){
$result = mysql_query("SELECT * FROM fileup_wp where Regnum='".$view."' ORDER BY category");
$num = mysql_num_rows($result);
$result1 = mysql_query("SELECT * FROM westpoint_reg where Regnum='".$view."'");
echo "<br>";
while($myrow = mysql_fetch_row($result1)){
echo "<br><b>Name :</b> ".$myrow[0]."<br>";
echo "<b>Email :</b> ".$myrow[3]."<br>";
echo "<b>College :</b> ".$myrow[4]."<br>";
}
//echo "<b>Files uploaded :</b> ".$num;

if($num==0){
echo "<br><br><b>No</b> Files uploaded by this user";
exit;
}else{
echo "<br><b>Files uploaded :</b> ".$num;
}
/*
$result1 = mysql_query("SELECT * FROM westpoint_reg where Regnum='".$view."'");
$myrow = mysql_fetch_row($result1);
echo "<br><br><b>Name :</b> ".$myrow[0]."<br>";
echo "<b>Email :</b> ".$myrow[3]."<br>";
echo "<b>College :</b> ".$myrow[4]."<br>";
echo "<b>Files uploaded :</b> ".$num."<br>";
*/
?><BR><br><b>Note: </b> Once you click on the link for download,that file will be supposed to be downloaded,so please download it if you need it.Once it is downloaded it is your responsibility as after some time downloaded files will be deleted.<BR><br>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="98%" id="AutoNumber1">
  <tr>
    <td><b>File</b></td>
    <td><b>Category</b></td>
    <td><b>Uploaded on</b></td>
    <td><b>Status</b></td>
</tr>

<?
while ($myrow1 = mysql_fetch_row($result)){
 $filename = $myrow1[1];
 if(file_exists("../laststraw/software/".$filename))
$linkoffile = "<a href='http://www.techfest.org/laststraw/westpoint/down.php?f=".$filename."' target=_blank>".$filename."</a>"; 
else
$linkoffile="File <b>DELETED</b>/Not Found with File name <b>".$filename."</b>";

switch ($myrow1[3]){
  case 'SST':
    $fullname = 'Single Span Truss (44 met)';
    break;
  case 'TST':
    $fullname = 'Two Span Truss (48 met)';
    break;
  case 'AT':
    $fullname = 'Arch Truss (36 met)';
    break;
  case 'SSA':
    $fullname = 'Single Span with Anchorages (48 met)';
    break;
  case 'TSA':
    $fullname = 'Two Span with Anchorages (56 met)';
    break;
}
if($myrow1[2]=='no')
$status='<b><font color=red>New</font></b>';
else
$status='Downloaded'."(".$myrow1[4].")";
if(file_exists("../laststraw/software/".$filename))
$dateofc = " (".date("F j, Y, g:i a",filemtime("../laststraw/software/".$filename)).")";
else{
$dateofc = "";
$status = "";
$fullname = "";
}
print "<tr><td>".$linkoffile."</td><td>".$fullname."</td><td>".$dateofc."</td><td>".$status."</td></tr>";

  }
mysql_close($link);
exit;
  }

?>
<br><br>List of all the users,click on the registration number link to have a detailed view<br>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="98%" id="AutoNumber1">
  <tr>
    <td><b>Reg. Num</b></td>
    <td><b>Name</b></td>
    <td><b>Email </b></td>
    <td><b>College</b></td>
    <td><b>No. File</b></td>  
</tr>
<?
$result1 = mysql_query("SELECT * FROM westpoint_reg ORDER BY Regnum");
$result4 = mysql_query("SELECT min(Regnum) from westpoint_reg");
$lastreg = mysql_fetch_row($result4);
while ($myrow1 = mysql_fetch_row($result1)){
$reg = $myrow1[1];
$result3 = mysql_query("SELECT * FROM westpoint_reg WHERE Regnum='".$reg."'");
$noofpart = mysql_num_rows($result3);
$regnum = "<a href=in.php?act=westpoint&view=".$reg.">".$reg."</a>";
$result = mysql_query("SELECT File FROM fileup_wp where Regnum='".$reg."'");
//$myrow = mysql_fetch_row($result);
$num = mysql_num_rows($result); 
if($num > 0){
$result2 = mysql_query("SELECT ifDown FROM fileup_wp where Regnum='".$reg."' AND ifDown='no'");
$new = mysql_num_rows($result2);
$msg = $num."(<font         color=red>".$new." new)";
}else
$msg = $num;
if($noofpart==1){
print "<tr><td>".$regnum."</td><td>".$myrow1[0]."</td><td>".$myrow1[3]."</td><td>".$myrow1[4]."</td><td>".$msg."</td></tr>";
}
if($noofpart==2){
//echo "This is ".$myrow1[0]." -->".$ignore."<br>";
if($reg!=$lastreg){
print "<tr><td>".$regnum."</td><td>".$myrow1[0]."</td><td>".$myrow1[3]."</td><td>".$myrow1[4]."</td><td>".$msg."</td></tr>";
 }
if($reg==$lastreg){
//print $myrow1[0]." hgfgsdhgsdfgsdjfgsdjgfsjdg";
print "<tr><td>"." "."</td><td>".$myrow1[0]."</td><td>".$myrow1[3]."</td><td>"." "."</td><td>"." "."</td></tr>";
}
}

$lastreg = $reg;
}
echo "</table>";


mysql_close($link);

}



if($todo == 'newsletter'){

if($action == ""){
?>
<h4>Please note that this action can not be undo,so if you are perfectly sure then only press Submit button,interface will not confirm again.</h4>
Also if you are sending plain text message please be sure for newline and carriage return characters
<form method="POST" action="<?php echo $PHP_SELF."?act=newsletter"; ?>">
  <p>
  <textarea rows="20" cols="66" name="matter"></textarea></p>
  <p>&nbsp;</p>
  <p><input type="submit" value="Submit" name="action"><input type="reset" value="Reset" name="B2"></p>
</form>
<?
}
if($action=="Submit"){
if($matter == "") {
echo "<br><br>No Matter Given ...dude :)  ";
exit;
}
echo "<br><br>Sending mail,<b>Note:</b>This process may take time so please wait...<br><br>";
echo "<b>Note</b>Email adress in green color means email is send,while in red means that mail is not send to them";
echo "<pre>$matter</pre>";

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result = mysql_query("SELECT fname,sname,email FROM test");

$emailfrom = "Techfest at IIT Bombay <info@techfest.org>";
$subject = "Updates Newsletter";
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text; charset=iso-8859-1\r\n";
$headers .= "From : ".$emailfrom."\r\n";
$headers .= "Reply-To :".$emailfrom."\r\n";

while ($myrow = mysql_fetch_row($result)){
if($myrow[0]!=""){
//print $line;
$l3 = strtolower($myrow[2]);
$fullname = $myrow[0]." ".$myrow[1];
$tosend = $l1.$l2."\r\n";
//$h = mail($l3, $subject, $matter, $headers);
if($h==TRUE)
echo "<font color='green'>".$l3."</font><br>";
else
echo "<font color='red'>".$l3."</font><br>";
  } //if finished
 }
}
}


if($act=='addcomp'){

if($action==""){
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

echo "<br><br>Competitions defined so far<br><br>";
?>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="98%" 
id="Auto Number1">
  <tr>
    <td><b>S. no.</b></td>
    <td><b>Comp. Name</b></td>
    <td><b>Comp. Code</b></td>
    <td><b>if_mac</b></td>
    <td><b>if_post</b></td>
    <td><b>no_part</b></td>
    <td><b>Email</b></td>
    <td><b>if_abstract</b></td>
</tr>
<?
$result = mysql_query("SELECT * FROM comp_data");
$i=1;
while($myrow=mysql_fetch_row($result)){
print "<tr><td>".$i."</td><td>".$myrow[0]."</td><td>".$myrow[1]."</td><td>".$myrow[2]."</td><td>".$myrow[3]."</td><td>".$myrow[4]."</td><td>".$myrow[5]."</td><td>".$myrow[7]."</td></tr>";
$i+=1;
}
$result = mysql_query("SELECT * FROM comp_data");
while($myrow=mysql_fetch_row($result)){
echo "insert into comp_data(comp_name,comp_code,if_mac,if_post,no_part,email,address,if_abstract,comp_id,content,content1)";
echo " values('$myrow[0]','$myrow[1]','$myrow[2]','$myrow[3]','$myrow[4]','$myrow[5]','$myrow[7]','$myrow[6]','$myrow[8]','$myrow[9]','$myrow[10]');";
echo "<br>";
}
echo "<hr>";
echo "</table><br><br><b>Define a new Competition ....</b><br><br>";
?>
<form method=POST action='in.php?act=addcomp'>
Competition Name : <INPUT TYPE=text name=c_name size=20><br>
Competition Code(<b>Unique and exactly 3 "small" characters</b>):<INPUT TYPE=text name=c_code size=20><br>
If Machine Name(<b>y/n</b>):<INPUT TYPE=text name=if_mac size=2><br>
If Postal Address(<b>y/n</b>):<INPUT TYPE=text name=if_post size=2><br>
No of Max participant :<INPUT TYPE=text name=no_part size=2><br>
Email Address for queries :<INPUT TYPE=text name=email size=25><br>
If Abstract(<b>y/n</b>):<input type=text name=if_abstract size=2><br>
Address for rules page:<INPUT TYPE=text name=address size=45><br>
Unique registration number strarting(<b>1-4 characters</b>)<input type=text name=comp_id size=4><br>
Some text to be printed at the time after registration divide into two(for abstract purpose)<textarea name=content 
cols=100></textarea>
<textarea name=content1 cols=100></textarea>
<br><br><br><br>
<INPUT TYPE=submit name=action value=Create>&nbsp;&nbsp;&nbsp;&nbsp;
<INPUT TYPE=reset name=res value=Reset>
</form>
<?
mysql_close($link);
}//if action null finished
if($action!=""){

if($c_name=="" || $c_code=="" || $if_mac=="" || $if_post=="" || $no_part=="" || $email=="" || $address=="" || $if_abstract=="" || $comp_id=="" ){
echo "<br><br>form to bhar de yaar theek se ... :)";
exit;
}
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

$query = "CREATE TABLE ".$c_code."( Regnum varchar(10),Name varchar(30),Email varchar(30),Univ varchar(30),Year varchar(15),Dept varchar(30)";
if($if_mac=="y"){
$query = $query.",Machine varchar(30)";
}
$query = $query.")";
echo "<br><br>".$query;
mysql_query($query);
if($if_post=="y"){
$query2 = "CREATE TABLE ".$c_code."_post ( Regnum varchar(8),Address varchar(255) )";
echo "<BR>".$query2;
mysql_query($query2);
}
$query1 = "INSERT INTO comp_data (comp_name,comp_code,if_mac,if_post,no_part,email,address,if_abstract,comp_id,content,content1) VALUES ('$c_name','$c_code','$if_mac','$if_post','$no_part','$email','$address','$if_abstract','$comp_id','$content','$content1')";
echo "<br><br>".$query1;
mysql_query($query1);
echo "<br><h2>Done...</h2>";
mysql_close($link);
}//action finished
}//if act finished



?>

