<?php
include_once("./validate.php");
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';
if ($_POST['action']=="")
 {
	if ($_GET['t']=="")
	 {
	 	echo "Invalid input";
		exit;
	 } 
?>
	<form name="form1" method="post" action="./edittable.php">
	  Enter Registration no (Eg if regno:IC05101 then enter 101) <input type="text" name="regnum">
		<input type="submit" name="action" value="Go">
		<input type=hidden name=tab value=<? echo $_GET['t'];?> >
	</form>
 	 
<?php	 
 }
else if ($_POST['action']=="Go") 
 { 
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$tab=$_POST['tab'];
	$fields = mysql_list_fields($dbname, $tab, $link);
	$columns = mysql_num_fields($fields);
	$query="SELECT * FROM {$tab} WHERE (Regnum LIKE '{$_POST['regnum']}')";
//	$query1="SELECT * FROM ($tab) WHERE Name1=$row[1]";
//	$result1=mysql_query($query1);	
	$result=mysql_query($query) or die ("Mysql Error : ".mysql_error());
//	$row1=mysql_fetch_row($result1);
	$row=mysql_fetch_row($result);
	if (!$row)
	 {
		echo "Regnum does not exist";
		exit;
	 }
?>
	<form name="form1" method="post" action="./edittable.php">

		Registration Code (eg IC05<input type=text name=regcode size=20>
	<center><table>

<?php	

for ($i=0;$i<$columns;$i++)
	 {
		$str=mysql_field_name($fields,$i);
	//	$var=$row[$i];
	//	echo "$var\n";
		?>
		<tr><td>
		<?php echo "{$str}";?>
		</td><td>

		<input type=text name=<? echo "{$str}"; ?>  value="<?php echo $row[$i]; ?>" >

		</td></tr>

<?php	 } ?>

	</table>
		<input type="submit" name="action" value="Update">
		<input type=hidden name=tab value=<? echo $tab;?> >
		<input type=hidden name=reg value=<? echo "{$_POST['regnum']}";?> >
		
	</form>
<?
 }
else if ($_POST['action']=="Update") 
 { 
	$link = mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Could not connect : " . mysql_error());
	mysql_select_db($dbname) or die("Query failed : " . mysql_error());
	$tab=$_POST['tab'];
	$regnum=$_POST['regnum'];
	$query="UPDATE {$tab} SET Regnum='{$_POST['Regnum']}'";
	$fields = mysql_list_fields($dbname, $tab, $link);
	$columns = mysql_num_fields($fields);
	for ($i=1;$i<$columns;$i++)
	 {
	 	$str=mysql_field_name($fields, $i);
		$query .= " , {$str}='{$_POST[$str]}'";
	 }
	$query .=" WHERE Regnum LIKE '{$_POST['reg']}'";
	echo $query;
	mysql_query($query) or die("Mysql Error : ".mysql_error());
	echo "Updation Successful";
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
	$headers .= "From: Webmaster at Techfest 2005<webmaster@techfest.org>\r\n";
	$headers .= "Reply-To: webmaster@techfest.org\r\n";
	$sub="Correction in Registration";
	$mes="Hi\r\n\r\nYour registration information has been modified. The new registration details are : ";
	$mes.="\r\nReg No : ".$_POST['regcode'].$_POST['Regnum'];
	$mes .= "\r\nName: ".$_POST['Name1']."\r\nEmail address:
	".$_POST['Email1'];
	for ($i=2;$i<=(($columns-2)/4);$i++)
		if ( $_POST['Name'.$i] != "" )
		 {
			$mes .= "\r\n".$_POST['Name'.$i];
			$mes .= "\r\n".$_POST['Email'.$i];
			$mes .= "\r\n".$_POST['Univ'.$i];
			$mes .= "\r\n".$_POST['Year'.$i];
		 }
	$mes .= "\r\n".$_POST['Address'];
	$mes .="\r\n\r\n For any discrepancies, please contact us at";
	$mes .= "\r\n\r\n
Contact address:
Techfest 2005,
Student Gymkhana,
IITB, Powai
Mumbai
India
http://www.techfest.org";

$temp = "techfest@cc.iitb.ac.in";
for ($i=1;$i<=(($columns-2)/4);$i++)
 {
	$mes=stripslashes($mes);
	$h = mail($_POST['Email'.$i], $sub, $mes, $headers);
	if($h == TRUE)
	 {
		$h1 = mail($temp, $sub, $mes, $headers);
		echo "<br>Mail successfully sent to {$_POST['Name'.$i]} at {$_POST['Email'.$i]}";
	 }
	else
		print "Unable to send mail to ".$_POST['Name'.$i];
 }


 }
?>
