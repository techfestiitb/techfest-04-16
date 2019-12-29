<?php

$t=setcookie("admin","abchahaha",time()-3600);
if ($t)
	echo "You have logged out successfully.  <a href=./index.php>Click Here</a> to log back in";
?>