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
echo_content("side_grey.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="intro"></a>
<h1 id="toptext">Grey Circuits</h1> 
<p><strong>UPDATE:</strong> The shortlist for the workshop can be viewed <a href="results.php">here</a>.</p>
<p>This workshop aims at introducing you to the most happening areas of Artificial Intelligence like Artificial Neural Networks, Fuzzy Logic etc. and then takes you through the application of these in various genres of engineering and implementation using MATLAB.</p>
<p>The workshop is spread over all three days of Techfest (20th-22nd January 2006). It will kick off with lecture sessions introducing you to the fundamentals followed by hands on sessions that will make you apply what you have learnt. See details below.</p>
<p><strong>UPDATE:</strong> The registration for this workshop has been <strong>closed</strong> and the <strong>Questionnare</strong> has been mailed to the registered participants at <strong>11:30 AM IST</strong> on <strong>25th Dec 2005</strong>. If you haven't received the questionnare's link as yet mail us at <strong>grey_circuits@techfest.org</strong> mentioning your registration number.</p>
<a name="details"></a>
<h1>Details of the Workshop</h1>
<p><ol type="1">
<li>This is a <strong>3 day workshop</strong> comprising of <strong>4 lecture sessions </strong>introducing you to the concepts followed by <strong>2 Hands on sessions</strong> on use of MATLAB toolboxes- <strong>Neural Network Toolbox</strong> and <strong>Fuzzy Logic Toolbox</strong> spread over all 3 days of Techfest (<strong>20th – 22nd 2006</strong>). </li>
<li><strong>Prerequisites</strong><br>
The workshop requires some elementary knowledge of MATLAB and an inquisitive mind!.</li>
<li>The registered candidates are required to fill and submit a questionnaire whose link will be mailed to them on <strong>25th December 2005</strong>, 11:30 AM IST. The last date of submitting the questionnaire is <strong>4th January 2005</strong>, 11:59 PM IST. The selections for attending the workshop will be purely based upon the score in the questionnaire. The list of the shortlisted candidates will be available on the website on <strong>6th January 2005</strong>, 8:00 AM IST. </li>
<li>There will be a <strong>fee</strong> for attending the workshop whose ammount will be specified later. </li>
</ol></p>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institute are eligible to participate in "Grey Circuits" at Techfest 2006</p>


For queries contact:<br><br>
Sumedh Risbud<br>
Manager, A.I.<br>
<a href="http://www.techfest.org/mail.php?email=srrisbud@techfest.org" target="_blank">srrisbud@techfest.org</a><br>
Ph. +91-98193 51759<br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>