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
  $result = mysql_query("SELECT zp1,ze1,zc1,ans1,ans2,ans3,ans4,ans5,ans6,ans7,zcomp FROM onlinec1");
  if (!$result) {
      $tw = 1;
      print "Error performing query: " . mysql_error() . ".";
      exit();
      }
  $ok = 0;
  while ( $row = mysql_fetch_array($result) ) {
      print "<B>";    
print $row["comp"];
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
      print "Answer 1:";
      print $row["ans1"];
      print "<BR>";
      print "Answer 2:";
      print $row["ans2"];
      print "<BR>";
      print "Answer 3:";
      print $row["ans3"];
      print "<BR>";
      print "Answer 4:";
      print $row["ans4"];
      print "<BR>";
      print "Answer 5:";
      print $row["ans5"];
      print "<BR>";
      print "Answer 6:";
      print $row["ans6"];
      print "<BR>";
      print "Answer 7:";
      print $row["ans7"];
      print "<BR>";

}
      print "<BR>";  
      }
}

else { print "<B>Signin as administrator first</B>"; }
?>

</BODY>
</HTML>

