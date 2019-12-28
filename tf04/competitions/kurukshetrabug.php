<?php
?>
<font color=#1f3d55><b>Report bug in Kurukshetra</b></font>
<br><br>
<?
if ($action=="")
{
?>
<form method=POST action=competitions/kurukshetrabug.php>

<table>
<tr><td width=40%>
Name:</td><td> <input type=text name=name1></td></tr>
<tr><td width=40%>
Email:</td><td> <input type=text name=email1></td></tr>
<tr><td colspan=2><br>
Explain the details about the problems you encountered in the 
environment.<br> 
<textarea type=text name=bug></textarea></td></tr></table>
<center>
<input type=submit name=action value=Report>
<input type=Reset name=Reset action=Reset>
</input>	
<?
}
else
{
$f2="bug.txt";
$f1=fopen($f2,"a+");
$name1 .= "\r\n";
$email1 .= "\r\n";
$bug .= "\r\n";
fwrite($f1,$name1);
fwrite($f1,$email1);
fwrite($f1,$bug);
fclose($f1);
?>
<br>Thank You for reporting the problems in our environment. We will try 
to solve the problem and get back to you very soon.
<br><br>
<p align=right><a href=../main1.php?file=competitions/kurukshetra.php 
class=greylink>Back to Game Rules</a></p>

<?
}
?>
