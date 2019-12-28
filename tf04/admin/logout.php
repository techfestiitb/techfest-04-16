<?php
$user = $HTTP_COOKIE_VARS["user"];
setcookie("user", "fake", time()-604800);
echo "User <b>".$user."</b> successfully logged out";
echo "<br><a href=http://www.techfest.org/admin>Login Again</a>";
?>

