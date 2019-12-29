<?php

$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

if ($_POST["competition"]=="")
{ echo "Please Enter the Competition.";
exit;
}

if ($_POST["regnum"]=="")
{ echo "Please Enter the Registration Number.";
exit;
}

else if ($_POST['enter']=="ENTER") 
 { 
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$tab=$_POST['competition'];
//	$tabname="ZZ";
	if($tab=="IC") {$tabname="survivor"; $comp="Survivor";}
	else if($tab=="YM") {$tabname="micromouse2k5";$comp="Micromouse";}
	else if($tab=="YJ") {$tabname="junior2k5";$comp="Junior";}
	else if($tab=="OH") {$tabname="openhardware2k5";$comp="Open Hardware";}
	else if($tab=="YR") {$tabname="rescue2k5";$comp="Rescue";}
	else if($tab=="OS") {$tabname="opensoftware2k5";$comp="Open Software";}
	else if($tab=="OD") {$tabname="opendesign2k5";$comp="Open Design";}
	else if($tab=="LU") {$tabname="underconstruction2k5";$comp="Under Construction";}
	else if($tab=="DR") {$tabname="drishti2k5";$comp="Drishti";}
	else if($tab=="CR") {$tabname="cro2k5";$comp="Cro 1.0";}
	else if($tab=="XG") {$tabname="xgesis2k5";$comp="Xgesis";}
	else if($tab=="CG") {$tabname="chuckgliders2k5";$comp="Chuck Gliders";}
	else if($tab=="HR") {$tabname="hotnrising2k5";$comp="Hot & Rising";}
	else if($tab=="UT") {$tabname="uturn2k5";$comp="U Turn";}
	else if($tab=="YR")  {$tabname="powerboats2k5";$comp="Power Boats";}
	else if($tab=="F1")  {$tabname="fdp12k5";$comp="Faculty Defined Problem 1";}
	else if($tab=="F2")  {$tabname="fdp22k5";$comp="Faculty Defined Problem 2";}
	else if($tab=="CC")  {$tabname="contraption2k5";$comp="Contraption";}
	else if($tab=="LS")  {$tabname="skyline2k5";$comp="Skyline";}
	else if($tab=="VM")  {$tabname="viscometer2k5";$comp="Viscometer";}
	else if($tab=="CD")  {$tabname="decathalon2k5";$comp="Decathalon";}
	else if($tab=="GT")  {$tabname="gametantra2k5";$comp="Game Tantra";}
	else if($tab=="WD")  {$tabname="techfest workshops";$comp="Usercentric Design";}
	else if($tab=="WS")  {$tabname="techfest workshops";$comp="Secure coding";}
	else if($tab=="WA")  {$tabname="techfest workshops";$comp="Animation";}
	else if($tab=="WC")  {$tabname="techfest workshops";$comp="Digital Certificates";}
	else if($tab=="WF")   {$tabname="techfest workshops";$comp="Firewalls";}
	else 
	{echo "Code does not exist"; 
	exit;}
	}
	$fields = mysql_list_fields($dbname, $tabname, $link);
	$columns = mysql_num_fields($fields);
	$query="SELECT * FROM {$tabname} WHERE (Regnum LIKE '{$_POST['regnum']}')";
	$result=mysql_query($query) or die ("Mysql Error : ".mysql_error());
	$row=mysql_fetch_row($result);
	if (!$row)
	 {
		echo "Regnum does not exist";
		exit;
	 }
//	else echo $row;
?>

<?php echo		"<center><table>";?>
<tr><td><b><?php echo "Competition : $comp \n\n";?></td></tr></b>
<tr><td><b><?php echo "Regnum : $row[0] \n \n";?> </td></tr></b>
<tr><td><?php echo "Contingent Leader : $row[1] \n \n";?></td></tr>
<tr><td><?php echo "Email : $row[2] \n \n";?> </td></tr>
<tr><td><?php echo "University : $row[3] \n \n";?>
<tr><td><b><?php echo "\nTeam Members :";?></b></td></tr> 


<?php	for ($i=5;$i<$columns;$i+=4)
	 {
		$str=mysql_field_name($fields,$i);
	//	$var=$row[$i];
	//	echo "$var\n";
		?>
		<tr><td><b>
		<?php if($str=="Address")  echo "{$str}";?>
		</td></tr></b>
		<tr><td>
		<?php echo "$row[$i]"; ?>
		</td></tr>

<?php	 } ?>
<tr><td><?php// echo "Address : $row[17] \n \n";?> </td></tr>


<?php	echo "</table></center>" ; ?>
		
	<br><br>			
	
<?php


/*
echo "Contact address:<br>
Techfest 2005,<br>
Student Gymkhana,<br>
IITB, Powai<br>
Mumbai<br>
India<br>
http://www.techfest.org";*/
?>
