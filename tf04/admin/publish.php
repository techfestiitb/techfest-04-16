<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==''){
echo "INVALID ACCESS";
exit;
}
echo "Welcome <b>".$user."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ";
include('header.php');
if($action=="Select Category"){
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd)
or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());

//echo "select Regnum,".$category." from westpoint_score where ".$category.">0 AND ".$category."_f='nc'";
$result1 = mysql_query("select Regnum,".$category." from westpoint_score where ".$category.">0 AND ".$category."_f='nc'");
//echo $category;
if(mysql_num_rows($result1)==0){
print "<br><br>No Unchecked Files in this category by any User";
exit;
mysql_close($link);
}

?>
<FORM ACTION="process.php" METHOD="POST">
<center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="90%" id="AutoNumber1">
    <tr>
      <td><b>Registration Number</b></td>
      <td><b>Last File Uploaded</b></td>
      <td><b>Status</b></td>
      <td><b>Score</b></td>
    </tr>

<?
$i = 1;
while($myrow = mysql_fetch_row($result1)){
$regnum = $myrow[0];
$num_cat = $myrow[1];
$file = $regnum.$category.$num_cat.".bdc";
$r = mysql_query("SELECT ifDown,IP FROM fileup_wp WHERE File='$file'");
$re = mysql_fetch_row($r);
if($re[0] != "no"){
$status = "Downloaded"."(".$re[1].")";
$field = "<td><input type=text name=score[".$regnum."] size=20></td>";
}else{
$status = "<font color=red><b>New</b></font>";
$field ="<td><b>You Have not Checked this file Now.</b></td>";
}
$linkoffile = "<a href=../laststraw/westpoint/down.php?f=".$file.">".$file."</a>";
print "<tr><td>".$regnum."</td>";
print "<td>".$linkoffile."</td>";
print "<td>".$status."</td>";
print $field;
print "<input type=hidden name=reg[".$i."] value=".$regnum.">";
$i = $i+1;
}//while closed
?>
</table>
<BR><br></center>
<? echo "<input type=hidden name=category value=".$category.">"; ?>
<INPUT TYPE="SUBMIT" NAME="Submit" VALUE="Publish Result">
</form>
<?
mysql_close($link);
}//if finished
?>
