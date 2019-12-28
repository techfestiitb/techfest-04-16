<?php
$user = $HTTP_COOKIE_VARS["user"];
if($user==""){
echo "Illegal access";
exit;
}
if($user!="events"&&$user!="workshops"&&$user!="techfest"&&$user!="laststraw")
{
echo "Get lost from here";
exit;
}
