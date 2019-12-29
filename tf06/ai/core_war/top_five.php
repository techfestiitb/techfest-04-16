<?php
function echo_content($str)
{
	$l=fopen($str,"r");
	$arr=file($str);
	$num=count($arr);
	for($i=0;$i<$num;$i++)
	{
		echo $arr[$i];
	}
	return;
}

echo_content("header.txt");
echo_content("side_core.txt");
echo_content("side_update.txt");
?>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
</style>

<div id="content">
<h1 id="toptext">Core War - Warriors on the Hill</h1> 
<p>Following are the final postions on the hill after all the battles. They are in the order of their position on the hill starting from the one on the top.</p>

<table border="0" cellpadding="6" cellspacing="">

<tr><td align="center"><strong>Position on the Hill</strong></td><td align="center"><strong>Name of the Warrior</strong></td><td align="center"><strong>Registration no.</strong></td><td align="center"><strong>Author</strong></td></tr>
<tr>
  <td align="center">1</td>
  <td align="center">Storm4</td>
  <td align="center">    KT06289 </td>
  <td align="center">Advane Harshal </td>
</tr>
<tr>
  <td align="center">2</td>
  <td align="center">Timepass</td>
  <td align="center"> KT06118 </td>
  <td align="center">Ayan Majumdar </td>
</tr>
<tr>
  <td align="center">3</td>
  <td align="center">Engine</td>
  <td align="center"> KT06227</td>
  <td align="center">Amay Pandey </td>
</tr>
<tr>
  <td align="center">4</td>
  <td align="center">Samurai 21</td>
  <td align="center"> KT06118 </td>
  <td align="center">Ayan Majumdar </td>
</tr>
<tr>
  <td align="center">5</td>
  <td align="center">Samurai 19 </td>
  <td align="center"> KT06118 </td>
  <td align="center">Ayan Majumdar </td>
</tr>
</table>

The warrior <strong>Storm-4</strong> is crowned as "The King of The Hill" and will receive a cash prize of Rs 1500. The winner is required to drop a mail at <strong>siddharth@techfest.org</strong>. 
<p><br>
</p>
<p><br>
    For queries contact:<br>
    <br>
    Siddharth Joshi<br>
    Manager,Web<br>
    <a href="http://www.techfest.org/mail.php?email=siddharth@techfest.org" target="_blank">siddharth@techfest.org</a><br>
    Ph. +91-98196 85375<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</p>
</div>
<?
echo_content("footer.txt");
?>