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
echo_content("side_char.txt");
echo_content("side_update.txt");
?>
 <div id="content">
<a name="prob"></a>
<h1 id="toptext">Character Recognition - Shortlisted Teams</h1> 
<p>Following teams have been shortlisted for final round at Techfest '06. All shortlisted teams refer to <a href="results.php#require">requirements</a> section</p>
<table border="0" cellpadding="0" cellspacing="4">
<tr><td><strong>CR06107</strong></td></tr><tr><td><strong>CR06109</strong></td></tr><tr><td><strong>CR06110</strong></td></tr><tr><td>
<strong>CR06119</strong></td></tr><tr><td><strong>CR06156</strong></td></tr><tr><td><strong>CR06160</strong></td></tr><tr><td>
<strong>CR06188</strong></td></tr><tr><td><strong>CR06189</strong></td></tr><tr><td><strong>CR06204</strong></td></tr><tr><td>
<strong>CR06205</strong></td></tr><tr><td><strong>CR06227</strong></td></tr><tr><td><strong>CR06248</strong></td></tr><tr><td>
<strong>CR06259</strong></td></tr><tr><td><strong>CR06264</strong></td></tr><tr><td><strong>CR06266</strong></td></tr><tr><td>
<strong>CR06278</strong></td></tr><tr><td><strong>CR06287</strong></td></tr><tr><td><strong>CR06291</strong></td></tr><tr><td>
<strong>CR06305</strong></td></tr><tr><td><strong>CR06329</strong></td></tr><tr><td><strong>CR06346</strong></td></tr><tr><td>
<strong>CR06350</strong></td></tr><tr><td><strong>CR06354</strong></td></tr><tr><td><strong>CR06356</strong></td></tr><tr><td>
<strong>CR06362</strong></td></tr>
</table>
<a name="require"></a>
<h3>Requirements</h3>
<p>
All shortlisted teams are required to following requirement details (if any) to <a href="http://www.techfest.org/mail.php?email=srrisbud@techfest.org" target="_blank">srrisbud@techfest.org</a></p>
<ol type="1"><li> Computer required. (if you require more than one machine, please
state, in detail, the reasons).</li>
<li> The Operation system required on the machine for your software to run.</li>
<li> Any other platform(compilers) or software essentials required on the machine.</li>
<li> Any other hardware requirements (ethernet card, modem etc.).</li>

<li> If your software requires Internet access, mention the purpose
clearly. Please refer to "Important Points" # 3 for more details on
this. Also, if possible, clarify if your software can go through a
HTTP proxy. If you require the use of protocols other that HTTP,
please mention this clearly.</li></ol>

<h3>Important points</h3>
<p><ol type="1"><li></p>
<li> Please note that, your luggage may go through strict checking for
possession of any computer hardware, so please inform us before hand
of anything of this sort,  that might ask for clearence.</li>

<li> In your requirement for any hardware/software essential/operating
system  mention version information and other specifcations very
clearly and in detail. We wont entertain any last minute requests at
all.</li>

<li> If you require Internet access, then please note that the network
we would provide is behind a Corporate firewall acting as an Http
proxy. So you won't be able to make connection on ports other than
port 80(accessing websites etc) and  port 22(ssh).</li></ol>

<h3>Deadline</h3>
<p>The last date of mailing this to us is 5th Jan 2006. No requests,
beyond that date shall be entertained.</p><br>
For queries contact:<br><br>
Sumedh Risbud<br>
Manager, A.I.<br>
<a href="http://www.techfest.org/mail.php?email=srrisbud@techfest.org" target="_blank">srrisbud@techfest.org</a><br>
Ph. +91 98193 51759<br>
<br><br><br><br><br><br><br>


</div>


<?
echo_content("footer.txt");
?>