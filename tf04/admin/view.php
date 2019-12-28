<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==''){
echo "INVALID ACCESS";
exit;
}
echo "Welcome <b>".$user."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
include('header.php');
if($action==""){
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
<br><br><form method="POST" action="view.php">
<br><br><h4>Select the Competition :</h4>
<?
while($myrow=mysql_fetch_row($result)){
echo "<input type=radio value=".$myrow[1]." unchecked name=category>"."<b>".$myrow[0]."<br>";
 }//while end
echo "<br><br><INPUT TYPE=SUBMIT NAME=action VALUE=View>";
echo "</form>";
mysql_close($link);

}else{
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
$result = mysql_query("Select * from comp_data where comp_code='".$category."'");
$num = mysql_num_rows($result);
if($num==0){
echo "ERROR,No Such Competition Exists";
exit;
}
if($num==1){
$myrow = mysql_fetch_row($result);
$c_name = $myrow[0];
$if_mac = $myrow[2];
}

?>
<b><font color=#IF3d55 size=+1><strong>
<?php
echo "<br><br>Registered Users For ".$c_name;
?></strong></font><br><br>
</b>
<?
$link12 = "<a href=download.php?comp=".$category."&p1=y target=_blank>";
echo $link12;
?>
 Download in excel format with addresses</a><br><br>
<?
$link12 = "<a href=download.php?comp=".$category."&p1=n target=_blank>";
echo $link12;
?>

Download in excel format without addresses</a>

<br><br>List of all the users<br>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="98%" id="Aut
oNumber1">
  <tr>
    <td><b>Reg. Num</b></td>
<?php if($if_mac=="y") echo "<td><b>Machine Name</b></td>"; ?>
    <td><b>Name</b></td>
    <td><b>Email</b></td>
    <td><b>College/University</b></td>
    <td><b>Year</b></td>
    <td><b>University</b></td>
  </tr>
<?
$result1 = mysql_query("SELECT * FROM ".$category." ORDER BY Regnum");
$result4 = mysql_query("SELECT min(Regnum) from ".$category);
$lastreg = mysql_fetch_row($result4);
while ($myrow1 = mysql_fetch_row($result1)){
$reg=$myrow1[0];
$result3 = mysql_query("SELECT * FROM ".$category." WHERE Regnum='".$reg."'");
$noofpart = mysql_num_rows($result3);
if($reg!=$lastreg){
if($if_mac=="y")
print "<tr><td><b><i><font color=red>".$myrow1[0]."</font></i></b></td><td><u>".$myrow1[6]."</u></td><td>".$myrow1[1]."</td><td>".$myrow1[2]."</td><td>".$myrow1[3]."</td><td>".$myrow1[4]."</td><td>".$myrow1[5]."</td></tr>";
else
print "<tr><td><b><i><font color=red>".$myrow1[0]."</font></i></b></td><td>".$myrow1[1]."</td><td>".$myrow1[2]."</td><td>".$myrow1[3]."</td><td>".$myrow1[4]."</td><td>".$myrow1[5]."</td></tr>";
 }else{
if($if_mac=="y")
print "<tr><td><b><i><font color=red>"." "."</font></i></b></td><td>"." "."</td><td>".$myrow1[1]."</td><td>".$myrow1[2]."</td><td>".$myrow1[3]."</td><td>".$myrow1[4]."</td><td>".$myrow1[5]."</td></tr>";
else
print "<tr><td><b><i>"." "."</i></b></td><td>".$myrow1[1]."</td><td>".$myrow1[2]."</td><td>".$myrow1[3]."</td><td>".$myrow1[4]."</td><td>".$myrow1[5]."</td></tr>";
}
$lastreg = $reg;
}
echo "</table>";
mysql_close($link);

}

?>
