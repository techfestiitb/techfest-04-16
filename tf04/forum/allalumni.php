<?
include("config.php");
?>
<HTML>
<BODY>
<?
$user=$HTTP_COOKIE_VARS["user"];
$class="";
$tn = 0;
if($user=="administrator")
{
  $db = mysql_connect($lhost,$un,$pass);
  mysql_select_db($dbas);
  $result = mysql_query("SELECT zn1,za1,zpr1,zpo1,zcp1,zem1,zd1,zb1,zcomp,zemployee,zwebsite,zevent FROM alumni1");
  if (!$result) {
      $tw = 1;
      print "Error performing query: " . mysql_error() . ".";
      exit();
      }
  $ok = 0;
  while ( $row = mysql_fetch_array($result) ) {
      print "<B>";    
print "<FONT SIZE=+2>";
print "</FONT>";
$tn = $tn+1;
	print "</B><BR>";
	print "Team code <B>$class $tn</B><BR>";
	if($row["zn1"]!="") {
      print $row["zn1"];
      print ", ";
      print $row["za1"];
      print ", ";
      print $row["zpr1"];
      print ", ";
      print $row["zpo1"];
 print ", ";
      print $row["zcp1"];
 print ", ";
      print $row["zem1"];
 print ", ";
      print $row["zcomp"];
 print ", ";
      print $row["zemployee"];
 print ", ";
      print $row["zwebsite"];
 print ", ";
      print $row["zd1"];
 print ", ";
      print $row["zb1"];

      print "<BR>";
}

      print "<BR>";  
      }
}

else { print "<B>Signin as administrator first</B>"; }
?>

</BODY>
</HTML>

