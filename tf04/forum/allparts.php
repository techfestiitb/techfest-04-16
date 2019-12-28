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
if($row["zevent"]=="chemecar" && $class!="chemecar"){print "Chem-E-Car"; $class="chemecar";}
if($row["zevent"]=="opensoft" && $class!="opensoft"){print "Open Software"; $class="opensoft";}
if($row["zevent"]=="openhard" && $class!="openhard"){print "Open Hardware";$class="openhard";}
if($row["zevent"]=="contraption" && $class!="contraption"){print "Contraption";$class="contraption";}
if($row["zevent"]=="idp" && $class!="idp"){print "IDP";$class="idp";}
if($row["zevent"]=="bp" && $class!="bp"){print "Blue Planet";$class="bp";}
if($row["zevent"]=="sc" && $class!="sc"){print "Sim City";$class="sc";}
if($row["zevent"]=="to" && $class!="to"){print "Technum Opus";$class="to";}
if($row["zevent"]=="chemisoft" && $class!="chemisoft"){print "Chemisoft";$class="chemisoft";}
if($row["zevent"]=="cls" && $class!="cls"){print"Chemsplash Lecture Series";$class="cls";}
if($row["zevent"]=="wr" && $class!="wr"){print "Water Rockets";$class="wr";}
if($row["zevent"]=="ex" && $class!="ex"){print "ExhibX";$class="ex";}
if($row["zevent"]=="treb" && $class!="treb"){print "Trebuchets";$class="treb";}
if($row["zevent"]=="workastro" && $class!="workastro"){print "Astronomy Workshop";$class="workastro";}
if($row["zevent"]=="workarch" && $class!="workarch"){print "Archaeology Workshop";$class="workarch";}
if($row["zevent"]=="worknetwork" && $class!="worknetwork"){print "Wireless Networking Workshop";$class="worknetwork";}
if($row["zevent"]=="workcrypto" && $class!="workcrypto"){print "Cryptology Workshop";$class="workcrypto";}
if($row["zevent"]=="workcape" && $class!="workcape"){print "CAPE Workshop";$class="workcape";}
if($row["zevent"]=="krazieidea" && $class!="krazieidea"){print "Krazie Idea";$class="krazieidea";}

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

