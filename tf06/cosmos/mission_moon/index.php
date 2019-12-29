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
echo_content("side_mission.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="intro"></a>
<h1 id="toptext">Mission Moon 2030</h1> 
<p>Its your chance to help realize the biggest dream of mankind since its evolution. The future of the moon is in your hands. You have the entire resources of the earth. Embark upon the biggest venture in the history and the future of space. Plan and build a human settlement on the moon. </p>
<p>Prizes worth <strong>Rs 3000</strong> at stake.</p>
<p><strong>UPDATE:</strong> Click <a href="results.php">here</a> for results.</p>
<a name="task"></a>
<h1>The Task</h1>
<p>To establish a large scale, permanent human settlement on the Moon within the next 25 years.</p>
<p>Write a detailed step by step report on how you would establish a permanent and self sustained human settlement on the lunar surface. </p>
<a name="comp"></a>
<h1>Competition structure</h1>
<p><ol type="1">
<li>The last date for registration was <strong>25th December, 2005</strong>. The registration has been closed now </li>
<li>This is an online competition and strictly individual affair. The papers should be mailed at missionmoon@techfest.org latest by <strong>15th January, 2006</strong> 11:59 PM, with the subject as your registration number. Use of PDFs is highly encouraged. </li>
<li>No entries will be entertained after the deadline mentioned above. </li>
</ol></p>
<a name="format"></a>
<h1>Format of the report</h1>
<p><ul>
<li>Your report should essentially cover (but not limit to) the following:
<ol type="1">
<li>How the settlement shall be built initially - in terms of materials, manpower, the essential conditions for survival like oxygen, food, water, gravity etc.</li>
<li>The number of people on the settlement, how to select them in case of a large number of interested people etc</li>
<li>How people shall be transported to the moon.</li>
<li>Methods to make the settlement self sustainable( oxygen, water, fuel etc)</li>
<li>The social, cultural and economic aspects of the settlement – their possible dependency on the earth.</li>
<li>Possible threats/crisis (e.g. comet strike)  and the corresponding crisis management system(s)  </li>
</ol></li>
<li>Your write-up should be well supported by scientific explanation quoting the present day research in that area and the subsequent advancements till 25 years according to you. (Do mention the referred links/text material) There is no need to take into account the money involved. Assume yourself to be a multi billionaire! </li>
<li>The report should be contained in a maximum of six A4 pages (excluding the title page, index and bibliography / references). </li>
<li>Report should be written in 10 pt Arial font, with 1.5 line spacing. </li>
<li>A clear cut index of the chapters or topics covered should be provided at the beginning after the title page.</li>
<li>The title page should bear the Name and Institute of the author, registration number of the author.</li>
<li>Any report found copied directly from any site/text etc shall be disqualified.</li>
</ul></p>
<a name="judge"></a>
<h1>Judging Criteria </h1>
<p>The following points scheme shall be used:</p>
<p><ol type="1">
<li>Coverage of all the aspects mentioned – 40%</li>
<li>Additional aspects(in addition to those mentioned) covered – 10%</li>
<li>Scientific justification of techniques/ideas involved with the help of present day research and the advancements – 25%</li>
<li>Feasibility of the ideas/techniques involved –10%</li>
<li>Incorporation of some totally new techniques/processes based on contemporary technology –15%  </li>
</ol></p>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective educational institutes are eligible to participate in Mission Moon 2030 at Techfest '06.</p>

For queries contact:<br>
<table border="0" width="100%" style="border-collapse:collapse; ">
<tr><td width="20%">Nitish Garg<br>
Manager, Cosmos<br>
<a href="http://www.techfest.org/mail.php?email=nitish@techfest.org" target="_blank">nitish@techfest.org</a><br>
Ph. +91-98695 30638<br></td>
<td>Akshay Mehra<br>
Manager, Cosmos<br>
<a href="http://www.techfest.org/mail.php?email=akshay@techfest.org" target="_blank">akshay@techfest.org</a><br>
Ph. +91-98696 18239<br></td>
</tr>
</table>
<br><br><br><br><br><br><br>
</div>
  
  
<?
echo_content("footer.txt");
?>