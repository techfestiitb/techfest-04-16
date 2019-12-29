<?php
$dbhost = '66.98.128.63';
$dbname = 'techfest';
$dbuser = 'techfest';
$dbpasswd = 'tec45st';

$link = mysql_connect($dbhost,$dbuser,$dbpasswd) or die("Could not connect : " . mysql_error());
mysql_select_db($dbname) or die("Query failed : " . mysql_error());


   if($_POST["name"] == "") {echo "Please enter Login Id"; exit;}
   if($_POST["passwd"] == "") {echo "Please enter Password"; exit;}
   else if($_POST["name"] != "puneet") {echo "INVALID ID "; exit;}
   else if($_POST["passwd"] != "assistance2k5") {echo "INVALID PASSWORD "; exit;}
 ?>

<li><a href="./links1.htm">Send Conformation Mail</a></li>
<br>
<li><a href="./links2.htm">Send Application of Accomodation</a></li><br>
<li><a href="./links3.htm">Send Reciept</a></li>
<br>
<li><a href="./links4.htm">Send Mail</a><br>

