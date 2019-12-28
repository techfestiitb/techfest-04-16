<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==''){
echo "INVALID ACCESS";
exit;
}
echo "Welcome <b>".$user."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
include('header.php');
if ($action=="" && $action1==""){
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result = mysql_query("Select comp_name,comp_code from comp_data");
$num = mysql_num_rows($result);
if($num==0){
echo "<br><br>No Competitions yet,Add first";
exit;
}
?>
<br><br><form method="POST" action="add.php">
<br><br><h4>Select the Competition :</h4>
<?
while($myrow=mysql_fetch_row($result)){
echo "<input type=radio value=".$myrow[1]." unchecked name=category>"."<b>".$myrow[0]."<br>";
 }//while end
echo "<br><br><INPUT TYPE=SUBMIT NAME=action VALUE=Add>";
echo "</form>";
mysql_close($link);

}else if($action=="Add" && $action1=="")
{
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result3 = "Select * from comp_data where comp_code='".$category."'";
$result = mysql_query($result3);
$num = mysql_num_rows($result);
if($num==0){
echo "ERROR,No Such Competition Exists";
exit;
}
if($num==1){
$myrow = mysql_fetch_row($result);
$c_name = $myrow[0];
$number = $myrow[4];
}
mysql_close($link);
?>
<b><font color=#IF3d55 size=+1><strong>
<?
echo "<br><br>Adding User For ".$c_name;
?>
</strong></font><br><br>
<form method=post action=add.php>
Registration number:<input type=text name=num><br>
Name:<input type=text name=name><br>
Email:<input type=text name=email><br>
Univ:<input type=text name=univ><br>
Year:<input type=text name=year><br>
Dept:<input type=text name=dep><br>
<INPUT TYPE=SUBMIT NAME=action1 VALUE=Add>
<?
echo "<Input type=hidden name=category value=".$category.">";
echo "<Input type=hidden name=number value=".$number.">";
echo "</form>";
}
else if($action=="" && $action1 =="Add")
{
if($num=="")
{
echo "Please at least eneter ythe registration number";
exit;
}
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result3 = "Select * from ".$category." where Regnum='".$num."'";
$result = mysql_query($result3);
$already=mysql_num_rows($result);
if($already == 0)
{
echo "No such registratiohns";
exit;
}
if($already == $number)
{
echo "There are already ".$number." users for this competition";
exit;
}
$result2="Insert into ".$category." (Regnum, Name, Email, Univ, Year, Dept) Values ('".$num."','".$name."','".$email."','".$univ."','".$year."','".$dep."')";
mysql_query($result2);
echo "<br>Please recheck in users for competition";
}


