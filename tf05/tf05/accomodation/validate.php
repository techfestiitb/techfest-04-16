<?php
if ($_COOKIE["acoo"]!="Acoo")
 {
 	echo "Invalid Access. Get Out!!!!";
	exit;
 }
 else 
 {
 echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
 echo "<html><a href=./logout.php>Logout</a>";
 echo "</html>";
 }
?>
