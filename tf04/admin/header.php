<?php
$user=$HTTP_COOKIE_VARS["user"];
if($user==""){
exit;
}
include('testuser.php');
if($user=='techfest'){
?>
<a href="in.php?act=broken">View Broken Link</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="in.php?act=urllog">View Mail Log</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="in.php?act=viewreg">View Registered Users</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="in.php?act=addcomp">Add a competiton</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="add_workshop.php?act=add">Add a Workshop</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<a href='foresult.php'>Edit Files</a><br>
<br>

<!--<a href=in.php?act=newsletter>Mail Newsletter</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
<?
}
if($user=='techfest' || $user=='laststraw'){
?>
<a href=in.php?act=westpoint>West Point Files</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href=result.php>Publish Result</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?
}
if($user=='events' || $user=='techfest'){
?>
<a href="view.php">Users for competitions</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="del.php">Edit  Users for  competitions</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="add.php">Add a user for competition</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mail.php">Mail users</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="mail_harki.php">For Use by acco</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<a href="mail_harki_space.php">For Use by acco(registration number separated by space)</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<a href="mail_space.php">Mail users (Registration number separated by space)</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

<?
}
if($user=='techfest' || $user=='workshops')
{
?>
<a href="add_workshop.php?act=view">View Registered Users for 
workshops</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<a href="mail.php">Mail users</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<a href="mail_space.php">Mail users (Registration number separated by space)</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>

<?
}
?>
<a href="logout.php">Logout</a>
<br><br>
