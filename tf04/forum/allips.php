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
  $result = mysql_query("SELECT ip FROM userips");
  if (!$result) {
      $tw = 1;
      $trw = "Error performing query: " . mysql_error() . ".";
      exit();
      }
  $ok = 0;
  while ( $row = mysql_fetch_array($result) ) {
      print $row["ip"];
      print "<BR>";  
      }
}
else { print "<B>Signin as administrator first</B>"; }
?>

</BODY>
</HTML>

