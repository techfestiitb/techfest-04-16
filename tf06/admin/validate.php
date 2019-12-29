<?php
print_r($_COOKIE);
if ($_COOKIE['Cookie']!="admin")
 { 	
 	echo "Invalid Access. Get Out!!!!";
	exit;
 }
?>
