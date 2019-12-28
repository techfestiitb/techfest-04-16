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
  $result = mysql_query("SELECT zp1,ze1,zc1,zr1,zp2,ze2,zc2,zr2,zp3,ze3,zc3,zr3,zp4,ze4,zc4,zr4,zp5,ze5,zc5,zr5,zp6,ze6,zc6,zr6,zevent FROM events");
  if (!$result) {
      $tw = 1;
      print "Error performing query: " . mysql_error() . ".";
      exit();
      }
  $ok = 0;
  while ( $row = mysql_fetch_array($result) ) {
      print "<B>";    
if($row["zevent"]=="chemecar")print "";
if($row["zevent"]=="opensoft")print "";
if($row["zevent"]=="openhard")print "";
if($row["zevent"]=="contraption")print "";
if($row["zevent"]=="idp")print "";
if($row["zevent"]=="treb")print "";

if($row["zevent"]=="wr")print "";
if($row["zevent"]=="ex")print "";
if($row["zevent"]=="treb")print "";




if($row["zevent"]=="workastro")print "";
if($row["zevent"]=="workarch")print "";
if($row["zevent"]=="worknetwork")print "";
if($row["zevent"]=="workcrypto")print "";
if($row["zevent"]=="krazieidea")print "";

	print "</B>";
if($row["zp1"]!="") {
      print $row["ze1"];
 print ", ";

      print "<BR>";

}
if($row["zp2"]!="") {
      print $row["ze2"];
 print ", ";

      print "<BR>";
}
if($row["zp3"]!="") {
      print $row["ze3"];
 print ", ";

      print "<BR>";
}
if($row["zp4"]!="") {
      print $row["ze4"];
 print ", ";

      print "<BR>";
}
if($row["zp5"]!="") {
      print $row["ze5"];
 print ", ";

      print "<BR>";
}
if($row["zp6"]!="") {
      print $row["ze6"];
 print ", ";

}

      }
}

else { print "<B>Signin as administrator first</B>"; }
?>

</BODY>
</HTML>

