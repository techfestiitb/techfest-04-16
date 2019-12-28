<?
include("config.php");
?>
<HTML>
<BODY>
<?
$user=$HTTP_COOKIE_VARS["user"];
if($user=="administrator")
{
  $db = mysql_connect($lhost,$un,$pass);
  mysql_select_db($dbas);
  $result = mysql_query("SELECT zins,zlead,zemail,zvis,zp1,zs1,zp2,zs2,zp3,zs3,zp4,zs4,zp5,zs5 FROM accom");
  if (!$result) {
      $tw = 1;
      print "Error performing query: " . mysql_error() . ".";
      exit();
      }
  $ok = 0;
  while ( $row = mysql_fetch_array($result) ) {
      print "<B>";    
      print $row["zins"];
      print "<BR>";
      print $row["zlead"];
      print "<BR>";
      print $row["zemail"];
      print "<BR>";
      print $row["zvis"];
      print "</B><BR>";
if($row["zp1"]!="") {
      print $row["zp1"];
      print ", ";
      print $row["zs1"];
      print "<BR>";
}
if($row["zp2"]!="") {
      print $row["zp2"];
      print ", ";
      print $row["zs2"];
      print "<BR>";
}
if($row["zp3"]!="") {
      print $row["zp3"];
      print ", ";
      print $row["zs3"];
      print "<BR>";
}
if($row["zp4"]!="") {
      print $row["zp4"];
      print ", ";
      print $row["zs4"];
      print "<BR>";
}
if($row["zp5"]!="") {
      print $row["zp5"];
      print ", ";
      print $row["zs5"];
      print "<BR>";
}

      print "<BR>";  
      }
}
else { print "<B>Signin as administrator first</B>"; }
?>

</BODY>
</HTML>

