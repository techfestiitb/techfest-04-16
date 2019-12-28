<html>
<?php 
$stripImages = "no";
$baseURL="http://www.techfest.org"; 

$startingpoint = "<!--startprint-->";
$endingpoint = "<!--stopprint-->";
error_reporting(0);
// $read = fopen($HTTP_REFERER, "rb") ... this line may work better if you're using NT, or even FreeBSD
if(is_readable($HTTP_REFERER)) echo "true";
$read = fopen($HTTP_REFERER, "r") or die("<br /><font face=\"Verdana\">Sorry! There is no access to this file directly. You must follow a link. <br /><br />Please click your browser's back button. </font><br><br>");
// let's turn errors back on so we can debug if necessary
error_reporting(1);
?>
<script>
function printWindow(){
   bV = parseInt(navigator.appVersion)
   if (bV >= 4) window.print()
}

</script>
<?php
$value = "";
while(!feof($read)){
$value .= fread($read, 1024); // reduce number to save server load
}
fclose($read);
$start= strpos($value, "$startingpoint"); 
$finish= strpos($value, "$endingpoint"); 
$length= $finish-$start;
$value=substr($value, $start, $length);

function i_denude($variable) {
return(eregi_replace("<img src=[^>]*>", "", $variable));
}
function i_denudef($variable) {
return(eregi_replace("<font[^>]*>", "", $variable));
}

$PHPrint = ("$value");
if ($stripImages == "yes") {
$PHPrint = i_denude("$PHPrint");
}

$PHPrint = i_denudef("$PHPrint");
$PHPrint = str_replace( "</font>", "", $PHPrint );
$PHPrint = stripslashes("$PHPrint"); 

echo "<base href=\"$baseURL\">";

echo $PHPrint; 
echo "<br/><br/>This page printed from: $HTTP_REFERER";
flush (); 
?>
<body onLoad="printWindow()">
</body>
</html>
