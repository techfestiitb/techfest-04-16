<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==''){
echo "INVALID ACCESS";
exit;
}
echo "Welcome <b>".$user."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
include('header.php');

if($action1=="" && $action2 ==""){
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
<br><br><form method="POST" action="del.php">
<br><br><h4>Select the Competition :</h4>
Please be sure what you are doing....I am not taking any backup...Changes once done are lost for ever...no undo 
available 
here.
<?
echo "<table><tr><td>";
while($myrow=mysql_fetch_row($result)){
echo "<input type=radio value=".$myrow[1]." unchecked name=category>"."<b>".$myrow[0]."<br>";
 }//while end
echo "</td><td>";
?>
<input type=radio value=Machine unchecked name=what><b>Machine Name<br>
<input type=radio value=Name unchecked name=what><b>Name<br>
<input type=radio value=Email unchecked name=what><b>email<br>
<input type=radio value=Univ unchecked name=what><b>Univ<br>
<input type=radio value=Year unchecked name=what><b>Year<br>
<input type=radio value=Dept unchecked name=what><b>Dept.<br>
</td></tr></table>
<?
echo "<br><br><INPUT TYPE=SUBMIT NAME=action1 VALUE=Change>";
echo "</form>";
echo "helloby";
echo "yes";
mysql_close($link);
}

else if ($action1 == "Change" && $action2 == "")
{
echo "<br><br>";
echo "yes";
if ($category == "" || $what =="")
{
echo "please fill both the details";
exit;
}
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result = mysql_query("Select * from comp_data where comp_code='".$category."'");
$myrow = mysql_fetch_row($result);

if ($myrow[2] == "n" && $what == "Machine")
{
echo "wrong usage";
exit;
}
mysql_close($link);

echo "hello";
if ($action2 == "")
{

?>
Please Take care of the case(capital or small, and the blank spaces). To be frank, just copy and pastthe details from 
the page wherer you get the list of users.
<form method="POST" action="del.php">
Registration Number: <input type=text size=10 name=num>
OLD NAME : <input type=text size=20 name=previous><br>
Old <? echo $what; ?> : <input type=text size=10 name=old> 
New <? echo $what; ?> : <input type=text size=10 name=new>
<INPUT TYPE=hidden NAME=category VALUE= <? echo $category?> >
<INPUT TYPE=hidden NAME=what VALUE= <? echo $what?> >
<br><br><INPUT TYPE=SUBMIT NAME=action2 VALUE=Change></form>

<?
}
}
if ($action1 == "" && $action2 =="Change")
{
echo "<br><br>";
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result2 = mysql_query("Select * from ".$category." where Regnum='".$num."' and ".$what."='".$old."' and Name='".$previous."'");
$myrow1 = mysql_fetch_row($result2);
$reg = $num;
$num1 = mysql_num_rows($result2);
if ($num1!=1)
{
echo "The entered values are not correct...sorry rahega";
exit;
}
echo "Changing ".$what."<br>";
echo "Old Value =".$old."<br>";
echo "New Value =".$new."<br>";
echo " If this is not correct contact me iommediately<br><br>";
$result = mysql_query("Update ".$category." set ".$what."='".$new."' where Regnum='".$reg."' and ".$what."='".$old."' and Name='".$previous."'");
mysql_close($link);


$from = $REMOTE_ADDR;
$ip = $HTTP_X_FORWARDED_FOR;
if(ip != ""){
list($ip1,$ip2) = split(",",$ip);
}
else
$ip1 = "";
$f='changes.txt';
$f1=fopen($f,'a+');
$temp=$ip1."  ".$ip2."  ".$what." ".$reg."  ".$old." ".$new."\r\n";;
fwrite($f1,$temp);
fclose($f1);



}//if else of action ends here
?>
