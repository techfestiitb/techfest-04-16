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
  $result = mysql_query("SELECT zusername,zemail,zpassword,college,rollno FROM userinfo");
  if (!$result) {
      $tw = 1;
      $trw = "Error performing query: " . mysql_error() . ".";
      exit();
      }
  $ok = 0;
  while ( $row = mysql_fetch_array($result) ) {
      print $row["zusername"];
      print ",";  
      print $row["zpassword"];
      print ",";  
      print $row["zemail"];
      print ",";  
      print $row["college"];
      print ",";  
      print $row["rollno"];
      print "<BR><BR>";  
      }
}
else { print "<B>Signin as administrator first</B>"; }
?>

</BODY>
</HTML>

