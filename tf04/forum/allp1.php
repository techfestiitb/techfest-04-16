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
  $result = mysql_query("SELECT zp1,ze1,zc1,zr1,zp2,ze2,zc2,zr2,zp3,ze3,zc3,zr3,zp4,ze4,zc4,zr4,zp5,ze5,zc5,zr5,zp6,ze6,zc6,zr6,zevent FROM events order by zevent");
  if (!$result) {
      $tw = 1;
      print "Error performing query: " . mysql_error() . ".";
      exit();
      }
  $ok = 0;
  while ( $row = mysql_fetch_array($result) ) {
      print "<B>";    
print "<FONT SIZE=+2>";
if($row["zevent"]=="chemecar" && $class!="chemecar"){print "Chem-E-Car"; $class="chemecar";
$tn = 0;
}
if($row["zevent"]=="opensoft" && $class!="opensoft"){print "Open Software"; $class="opensoft";
$tn = 0;
}
if($row["zevent"]=="openhard" && $class!="openhard"){print "Open Hardware";$class="openhard";
$tn = 0;
}
if($row["zevent"]=="contraption" && $class!="contraption"){print "Contraption";$class="contraption";
$tn = 0;
}
if($row["zevent"]=="idp" && $class!="idp"){print "Mastek's IDP";$class="idp";
$tn = 0;
}
if($row["zevent"]=="tidp1" && $class!="tidp1"){print "Tata's IDP 1";$class="tidp1";
$tn = 0;
}
if($row["zevent"]=="tidp2" && $class!="tidp2"){print "Tata's IDP 2";$class="tidp2";
$tn = 0;
}

if($row["zevent"]=="bp" && $class!="bp"){print "Blue Planet";$class="bp";
$tn = 0;
}
if($row["zevent"]=="sc" && $class!="sc"){print "Sim City";$class="sc";
$tn = 0;
}
if($row["zevent"]=="to" && $class!="to"){print "Technum Opus";$class="to";
$tn = 0;
}
if($row["zevent"]=="chemisoft" && $class!="chemisoft"){print "Chemisoft";$class="chemisoft";
$tn = 0;
}
if($row["zevent"]=="wr" && $class!="wr"){print "Water Rockets";$class="wr";
$tn = 0;
}
if($row["zevent"]=="ex" && $class!="ex"){print "ExhibX";$class="ex";
$tn = 0;
}
if($row["zevent"]=="cls" && $class!="cls"){print "Chemsplash
Lecture Series";$class="cls";
$tn = 0;
}

if($row["zevent"]=="treb" && $class!="treb"){print "Trebuchets";$class="treb";
$tn = 0;
}
if($row["zevent"]=="workastro" && $class!="workastro"){print "Astronomy Workshop";$class="workastro";
$tn = 0;
}
if($row["zevent"]=="workarch" && $class!="workarch"){print "Archaeology Workshop";$class="workarch";
$tn = 0;
}
if($row["zevent"]=="worknetwork" && $class!="worknetwork"){print "Wireless Networking Workshop";$class="worknetwork";
$tn = 0;
}
if($row["zevent"]=="workcrypto" && $class!="workcrypto"){print "Cryptology Workshop";$class="workcrypto";
$tn = 0;
}
if($row["zevent"]=="workcape" && $class!="workcape"){print "CAPE Workshop";$class="workcape";
$tn = 0;
}
if($row["zevent"]=="krazieidea" && $class!="krazieidea"){print "Krazie Idea";$class="krazieidea";
$tn = 0;
}
print "</FONT>";
$tn = $tn+1;
	print "</B><BR>";
print "Team code <B>$class $tn</B><BR>";
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

