<?
include("config.php");
?>
<HTML>
<BODY>
<?
$user=$HTTP_COOKIE_VARS["user"];
$class="";
if($user=="administrator")
{
  $db = mysql_connect($lhost,$un,$pass);
  mysql_select_db($dbas);
  $result = mysql_query("SELECT zp1,ze1,zc1,zr1,zp2,ze2,zc2,zr2,zp3,ze3,zc3,zr3,zp4,ze4,zc4,zr4,zp5,ze5,zc5,zr5,zp6,ze6,zc6,zr6,zevent FROM events order by zevent");
  if (!$result) {
      $tw = 1;
      print "Error performing query: " . mysql_error() . ".";
      exit();
      }
  $ok = 0;
  while ( $row = mysql_fetch_array($result) ) {
      print "<B>";    
if($row["zevent"]!="opensoft"){
continue;
} 
$co=$co + 1;
print $row["zevent"];
print "$co";

	print "</B><BR>";
if($row["zp1"]!="") {
      print $row["zp1"];
      print ", ";
      print $row["ze1"];
      print ", ";
      print $row["zc1"];
      print ", ";
      print $row["zr1"];
      print "<BR>";
}
if($row["zp2"]!="") {
      print $row["zp2"];
      print ", ";
      print $row["ze2"];
      print ", ";
      print $row["zc2"];
      print ", ";
      print $row["zr2"];
      print "<BR>";
}
if($row["zp3"]!="") {
      print $row["zp3"];
      print ", ";
      print $row["ze3"];
      print ", ";
      print $row["zc3"];
      print ", ";
      print $row["zr3"];
      print "<BR>";
}
if($row["zp4"]!="") {
      print $row["zp4"];
      print ", ";
      print $row["ze4"];
      print ", ";
      print $row["zc4"];
      print ", ";
      print $row["zr4"];
      print "<BR>";
}
if($row["zp5"]!="") {
      print $row["zp5"];
      print ", ";
      print $row["ze5"];
      print ", ";
      print $row["zc5"];
      print ", ";
      print $row["zr5"];
      print "<BR>";
}
if($row["zp6"]!="") {
      print $row["zp6"];
      print ", ";
      print $row["ze6"];
      print ", ";
      print $row["zc6"];
      print ", ";
      print $row["zr6"];
      print "<BR>";
}

      print "<BR>";  
      }


}
else { print "<B>Signin as administrator first</B>"; }

?>

</BODY>
</HTML>

