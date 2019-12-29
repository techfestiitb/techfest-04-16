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
echo_content("side_scitech.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="intro"></a>
<h1 id="toptext">SciTech: College Quiz Challenge</h1> 
<p>Think you know a lot about technology? Science & Technology is what you thrive on? Want to prove yourself to be the sharpest mind in the country? Then here's your chance for glory. In a totally revamped quiz structure, <strong>SciTech</strong> is not just for the nerdy or the geeky any more. Only the fastest and the sharpest minds can crack this challenge.</p>
<p>Techfest '06 present <strong> SciTech: College Quiz Challenge</strong>. An Inter Collegiate Science and Technology Quiz Challenge.</p>
<P>Prizes worth <strong>Rs 20,000</strong> at stake.</P>
<p><strong>UPDATE:</strong> Click <a href="results.php">here</a> for SciTech Online Elimination Results.</p>
<p>Click <a href="scitech_intra.pdf">here</a> for answers of SciTech INTRA.</p>
<br>
<a name="elig"></a>
<h1>Eligibility and Team</h1>
<p>All schools and colleges are allowed to participate in SciTech at Techfest ’06. Each institution can be represented by <strong>only one team</strong> consisting of 2 students each with a valid identity card of their respective educational institutes. This team will be the official entry at SciTech. Other than this multiple entries from the same institutions will be allowed as “On the Spot Wildcards”.</p>

<a name="select"></a>
<h1>Selection Process</h1>
<h3>Institute Representative Team</h3>
<p><ol type="1">
<li>The first stage was an <strong>Online Screening Stage</strong>. Each registered team first had to solve an online quiz. Top 9 teams have been be short listed for second stage at Techfest ’06.</li>
<li>The <strong>Second Stage</strong> of selection is a written test. This test will be 2 hour long paper which the teams will solve at Techfest ’06.</li>
<li>Top 4/5 teams will be selected from the second stage for Grand Finale.</li>
</ol></p>
<h3>On the Spot Wildcards</h3>
<p><ol type="1">
<li>Teams consisting of two students of the same institution can register on the spot and participate directly for the <strong>Second Stage</strong>.</li>
<li>Top 2/1 team/s from the second stage will be selected for the Grand Finale. </li>
</ol></p>


<a name="final"></a>
<h1>Format of the Grand Finale</h1>
<p>Top Six teams will reach the Grand Finale to be held on the final night of Techfest ’06. The number of rounds and marking scheme will be disclosed during SciTech Grand Finale. </p>

<a name="register"></a>
<h1>Registration</h1>
<p><strong>Institute Representative Team</strong> registrations are closed. Each registered team also has to fill <a href="./form.zip">this form </a>and Fax to: +91-22-25723480. This form must be signed and sealed by the Dean/HOD//Principal to be accepted for SciTech. </p>
<p>No prior registrations are required for <strong>On the Spot Wildcards</strong>.</p>

<a name="imp"></a>
<h1>Important dates</h1>
<p><ol type="1">
<li>Last date for Institute Representative Team registrations: <strong>20th December, 2005</strong>.</li>
<li>Online Screening Stage for Institute Representative Teams: <strong>30th December, 2005</strong>.</li>
<li>Declaration of Short listed Institute Representative Teams: <strong>1st January, 2006</strong>. </li>
</ol></p>

<br>
For queries see the <a href="./faq.php">FAQ</a> page or contact:<br>
Vamsi Krishna Peri<br>
Email: <a href="http://www.techfest.org/mail.php?email=scitech@techfest.org" target="_blank">scitech@techfest.org</a><br>
Ph. +91-98191 88890<br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>