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
echo_content("side_innovision.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="prob"></a>
<h1 id="toptext">Innovision - Shortlist</h1> 
<p>Following teams have been shortlisted for Innovision at Techfest '06</p>
<table width="60%" border="0" cellpadding="1px" style="margin:0px 20px 0px 20px; font-weight:bold; ">
<tr><td>IN06170</td></tr><tr><td>
IN06173</td></tr><tr><td>
IN06244</td></tr><tr><td>
IN06249</td></tr><tr><td>
IN06272</td></tr><tr><td>
IN06164</td></tr><tr><td>
IN06181</td></tr><tr><td>
IN06182</td></tr><tr><td>
IN06247</td></tr><tr><td>
IN06154</td></tr><tr><td>
IN06178</td></tr><tr><td>
IN06183</td></tr><tr><td>
IN06155</td></tr><tr><td>
IN06222</td></tr><tr><td>
IN06226</td></tr><tr><td>
IN06234</td></tr><tr><td>
IN06255</td></tr><tr><td>
IN06264</td></tr><tr><td>
IN06275</td></tr></table>

<br>
For queries contact:<br><br>
Avinav Nigam<br>
Manager, e-Rustique<br>

<a href="http://www.techfest.org/mail.php?email=avinavnigam@techfest.org" target="_blank">avinavnigam@techfest.org</a><br>
Ph. +91-98673 86626<br>
<br><br><br><br><br><br><br><br><br>
 </div>
<?
echo_content("footer.txt");
?>
	 
	 
	 
	 
	
