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
echo_content("side_crux.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="prob"></a>
<h1 id="toptext">Crux - Shortlist</h1> 
<p>Following teams have been shortlisted for Crux at Techfest '06</p>
<table width="60%" border="0" cellpadding="1px" style="margin:0px 20px 0px 20px; font-weight:bold; ">
<tr><td>CX06216</td></tr>
<tr><td>CX06289</td></tr>
<tr><td>CX06302</td></tr>
<tr><td>CX06339</td></tr>
<tr><td>CX06393</td></tr>
<tr><td>CX06411</td></tr>
<tr><td>CX06479</td></tr>
<tr><td>CX06483</td></tr>
<tr><td>CX06543</td></tr>
<tr><td>CX06547</td></tr>
</table>

<br>
For queries contact:<br><br>
Sumedh Risbud<br>
Manager, A.I.<br>
<a href="http://www.techfest.org/mail.php?email=srrisbud@techfest.org" target="_blank">srrisbud@techfest.org</a><br>
Ph. +91-98193 51759<br>

<br><br><br><br><br><br><br><br><br>
 </div>
<?
echo_content("footer.txt");
?>
	 
	 
	 
	 
	
