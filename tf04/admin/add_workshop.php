<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==""){
echo "Illegal Access";
exit;
}
echo "Welcome <b>".$user."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
$todo = $HTTP_GET_VARS['act'];
if($todo =="") $todo = "null";
include('header.php');
if($todo == "null"){
  ?>
 <br><br><br>Select links from above ......
<?php
}

if($todo == "add"){

if($action==""){
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

echo "<br><br>Workshops defined so far<br><br>";
?>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="98%" 
id="Auto Number1">
  <tr>
    <td><b>S. no.</b></td>
    <td><b>Workshop Name</b></td>
    <td><b>Workshop Code</b></td>
    <td><b>workshoip_id</b></td>
    <td><b>text file</b></td>
    <td><b>address</b></td>
    <td><b>emailfrom</b></td>
    <td><b>other1</b></td>
    <td><b>other2</b></td>
</tr>
<?
$result = mysql_query("SELECT * FROM w_data");
$i=1;
while($myrow=mysql_fetch_row($result)){
print "<tr><td>".$i."</td><td>".$myrow[0]."</td><td>".$myrow[1]."</td><td>".$myrow[2]."</td><td>".$myrow[3]."</td><td>".$myrow[4]."</td><td>".$myrow[5]."</td><td>".$myrow[7]."</td></tr>";
}
echo "</table><br><br><b>Define a new Workshop ....</b><br><br>";
?>
helo
<form method=POST action='add_workshop.php?act=add'>
Workshop Name : <INPUT TYPE=text name=w_name size=20><br>
workshop Code(<b>Unique and exactly 3 "small" characters</b>):<INPUT TYPE=text name=w_code size=20><br>
Workshop Id<b>(for registration number and stuff)</b>:<input type=text name=w_id size=20><br>
File to be printed in starting<input type=text name=w_file size=50><br>
Location of page<input type=text name=address size=50><br>
Email Address??<input type=text name=email size=50><br>
<br><br><br><br>
<INPUT TYPE=submit name=action value=Create>&nbsp;&nbsp;&nbsp;&nbsp;
<INPUT TYPE=reset name=res value=Reset>
</form>
<?
mysql_close($link);
}//if action null finished

if($action!=""){
if($w_name=="" || $w_code=="" || $w_id =="" || $w_file=="" ||$address==""){
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

$query = "CREATE TABLE ".$w_code."( Regnum varchar(10),Name varchar(30),Email varchar(30),Univ varchar(30),Year varchar(15),Dept varchar(30),Address 
varchar(255))";
mysql_query($query);
echo $query;
$query1 = "INSERT INTO w_data (w_name,w_code,w_id,w_file,address,email) VALUES ('$w_name','$w_code','$w_id','$w_file','$address','$email')";
echo $query1;
mysql_query($query1);
echo "<br><h2>Done...</h2>";
mysql_close($link);
}//action finished
}//if act finished

else if($todo=="view")
{

if($action==""){
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result = mysql_query("Select w_name,w_code from w_data");
$num = mysql_num_rows($result);
if($num==0){
echo "<br><br>No Workshops yet,Add first";
exit;
}
?>
<br><br><form method="POST" action="add_workshop.php?act=view">
<br><br><h4>Select the Workshop :</h4>
<?
while($myrow=mysql_fetch_row($result)){
echo "<input type=radio value=".$myrow[1]." unchecked name=category>"."<b>".$myrow[0]."<br>";
 }//while end
echo "<br><br><INPUT TYPE=SUBMIT NAME=action VALUE=View>";
echo "</form>";
mysql_close($link);

}
else{
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());



$result = mysql_query("Select * from w_data where w_code='".$category."'");
$num = mysql_num_rows($result);
if($num==0){
echo "ERROR,No Such Workshop Exists";
exit;
}
$w_name=$result[0];
?>

<b>

<font color=#IF3d55 size=+1><strong>
<?php
echo "<br><br>Registered Users For ".$w_name;
?>
</strong></font><br><br>
</b>
<br>
<?
echo "<a href=w_download.php?workshop=".$category.">";
?>
Download in excel format</a><br>
<br><br>List of all the users<br>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: 
collapse" bordercolor="#111111" width="98%" id="Aut
oNumber1">
  <tr>
    <td><b>Reg. Num</b></td>
    <td><b>Name</b></td>
    <td><b>Email</b></td>
    <td><b>College/University</b></td>
    <td><b>Year</b></td>
    <td><b>University</b></td>
  </tr>
<?
$result1 = mysql_query("SELECT * FROM ".$category." ");
$result4 = mysql_query("SELECT min(Regnum) from ".$category);
$lastreg = mysql_fetch_row($result4);
while ($myrow1 = mysql_fetch_row($result1)){
print "<tr><td><b><i><font color=red>".$myrow1[0]."</font></i></b></td><td>".$myrow1[1]."</td><td>".$myrow1[2]."</td><td>".$myrow1[3];
print "</td><td>".$myrow1[4]."</td><td>".$myrow1[5]."</td></tr>";
 }
echo "</table>";
mysql_close($link);
}

}//$todo ends here



?>

