<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==''){
echo "INVALID ACCESS";
exit;
}
if ($action1=="")
{
echo "<form>";
echo "<br><br><INPUT TYPE=SUBMIT NAME=action1 VALUE=do>";
echo "</form>";
}
else if ($action1 == "do")
{
echo "<br><br>";
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());



$f='r1.txt';
$f1=fopen($f,'r');
while($temp=fgets($f1))
{
$temp=trim($temp);
if($temp=="")
$temp=trim(fgets($f1));
if($temp=="")
$temp=trim(fgets($f1));
if($temp=="")
$temp=trim(fgets($f1));
if($temp=="")
$temp=trim(fgets($f1));
if($temp=="")
$temp=trim(fgets($f1));
$temp1=fgets($f1);
$temp2=fgets($f1);
$temp3=fgets($f1);
$temp4=fgets($f1);
$temp5="";
while($temp5!="i")
{
$temp4 .=" ".$temp5;
$temp5=trim(fgets($f1));
}
$leader=explode(":",$temp1);
$leader1=explode(":",$temp2);
$leader2=explode(":",$temp3);
$use1="Insert into clf (Regnum,Name,Email,Univ,Year) values (";
$use1.="'";
$use1.=$temp;
$use1.="','";
$use1.=$leader[0];
$use1.="','";
$use1.=$leader[3];
$use1.="','";
$use1.=$leader[2];
$use1.="','";
$use1.=$leader[1];
$use1.="')";
$use2="Insert into clf (Regnum,Name,Email,Univ,Year) values ('".$temp."','".$leader1[0]."','".$leader1[3]."','".$leader1[2]."','".$leader1[1]."')";
$use3="Insert into clf (Regnum,Name,Email,Univ,Year) values ('".$temp."','".$leader2[0]."','".$leader2[3]."','".$leader2[2]."','".$leader2[1]."')";
$use4="Insert into clf_post (Regnum,Address) values ('".$temp."','".$temp4."')";
$result1=mysql_query($use1);
$result2=mysql_query($use2);
$result3=mysql_query($use3);
$result4=mysql_query($use4);
if((!result1)||(!result2)||(!result3)||(!result4))
 echo "some error please check ".$temp;

	if($temp=="endoffile")
		break;
echo "<br>";
}
fclose($f1);



mysql_close($link);
}//if else of action1 ends here
?>
