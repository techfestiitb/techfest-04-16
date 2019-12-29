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
echo_content("side_bridged.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="prob"></a>
<h1 id="toptext">Connecting...</h1> 
<p>Design a cost efficient bridge using the software provided (West Point Bridge) which is able to with stand a simulated load test.</p>
<p><strong>UPDATE:</strong> To view top five scores click <a href="./top_five.php">here</a>.</p>
<a name="guide"></a>
<h1>Guidelines</h1>
<p><ul>
<li>Design has to be done using the software provided.</li>
<li>Design has to be done for the site conditions shown below</li>
<table width="90%" border="0">
<tr align="center"><td align="center"><img src="site.gif" border="0" alt=""></td></tr>
</table>
<li>Download Load West Point Bridge from <a href="./setup.zip">here</a>.</li>
</ul></p>
<a name="sub"></a>
<h1>Submission</h1>
<p><ul>
<li>This competition is an individual affair and all submissions are online (no accommodation will be provided to participants of this competition during Techfest).</li>
<li>Participants can submit any number of entries.</li>
<li>Last date of submission <strong>15th January 06</strong>.</li>
<li>Cost of top 5 entries of the competition will be available on the site and will be updated at an interval of 2 days. Click <a href="./top_five.php">here </a> to view top five scores so far.</li>
<li>Every participant has to register on our site. Upon registration a registration number will be provided to the participant which shall be used for further correspondence and uploading files.</li>
<li>Participants must name file in the following format:<br>
Registration Number#number of entries submitted.<br>
For example: if your registration number is CB06100 and you are submitting your first entry then it should be named CB06100#1.bdc </li>
</ul></p>
<a name="win"></a>
<h1>Winning Criteria</h1>
<p>The Bridge design with minimum cost as evaluated by the software will be declared winner.</p>
<a name="imp"></a>
<h1>Registration and Important dates</h1>
<p><ul>
<li>Every participant has to register on our site. Upon registration a registration number will be provided to the participant which shall be used for further correspondence and uploading files. Click here to register.</li>
<li>You must choose a password during registration, which you will require along with your e-mail for uploading your design. </li>
<li>Last date of registration for outstation teams is 10th January 2006.</li>
<li>All changes that will be made in the problem statement at any later stage shall be intimated to the participants through e-mail. Please keep yourself updated regularly.</li></ul></p>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institutes are eligible to participate in this competition.
</p>
For queries contact:<br><br>
Aditya Vikram Singh<br>
Manager, Concreate<br>
<a href="http://www.techfest.org/mail.php?email=adityavikram@techfest.org" target="_blank">adityavikram@techfest.org</a><br>
Ph. +91-98207 54704<br>
<br><br><br><br><br><br><br>
</div>
  
<?
echo_content("footer.txt");
?>