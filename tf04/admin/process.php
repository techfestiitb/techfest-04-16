<?
$user=$HTTP_COOKIE_VARS["user"];
if($user==''){
echo "INVALID ACCESS";
exit;
}
echo "Welcome <b>".$user."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
include('header.php');
if($Submit=="Publish Result"){
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());
//print_r($score);
//print_r($reg);
//print $category;

print "<br>";
$i = 1;
while($reg[$i]!=""){
if($score[$reg[$i]]!="" && $score[$reg[$i]]>0){
$query = "UPDATE westpoint_s SET ".$category."_s = '".$score[$reg[$i]]."' WHERE Regnum='".$reg[$i]."'";
echo $query."<br>";
mysql_query($query);
echo "UPDATE westpoint_score SET ".$category."_f = 'cc' WHERE Regnum='".$reg[$i]."'";
mysql_query("UPDATE westpoint_score SET ".$category."_f = 'cc' WHERE Regnum='".$reg[$i]."'");
}else{
print "<br>Updation failed ,No Score given for Registration number ".$reg[$i];
exit;
}
$i = $i + 1;
}

print "<h4>Published the Reult for ".$category;
mysql_close($link);
}//if closed
?>

