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
echo_content("side_idp.txt");
echo_content("side_update.txt");
?>
 
<div id="content">
<h1 id="toptext">Industry Defined Problem</h1> 
<p>General Electric is familiar to everyone as the leading manufacturer of electrical components in the world with a history of pride. Techfest ’06 joins hands with <strong>GE</strong> and brings IDP – Industry Defined Problem. So, here is your chance to step ahead with a solution to our simple daily life problem on the practical front as dealt with by industrial professionals. The best solution attracts an incentive of nothing less than a Prize Money of Rs.25, 000 and an opportunity to work as an intern at General Electric's John F. Welch Technology Centre, Bangalore.</p>
<p><strong>UPDATE:</strong> The teams have been shortlisted for the final round on the basis of preliminary reports. Click <a href="results.php">here</a> to view the list of Shortlisted Teams.</p>
<p>Prizes worth <strong>Rs 25,000</strong> at stake.</p>

<a name="prob"></a>
<h1>Problem Statement</h1>
<p>Design an eco-friendly, energy efficient desalination device for household use.</p>
<a name="judge"></a>
<h1>Judging Criteria</h1>
<p><ul>
<li>Novelty of design</li>
<li>Ease of manufacture</li>
<li>Environmental compatibility</li>
<li>Energy utilization (alternate energy sources to drive the device would be a plus point)</li>
<li>Household utility</li>
</ul></p>
<p>Note that any additional features which are incorporated will be given due credit. A <strong>prototype of the solution</strong> may fetch you extra points.</p>
<a name="gnrules"></a>
<h1>General Rules</h1>
<p><ul>

<li>Every team has to submit a preliminary solution of the problem for the screening round. Kindly read all the instructions given on this page before sending your report (solution). In case the participants fail to submit the report by the last date, their registration shall stand cancelled. </li>
<li>The report must be mailed as an attachment to <strong>ayush@techfest.org</strong>, with the team’s registration number as the subject preferably in ‘doc’ or ‘pdf’ format.</li>
<li>About the report- The report should cover the essential features of the solution. It should be followed by a list of references - websites, books, etc which amply support the ideas or solutions implemented. There is no word limit on the report but it should be precise and to the point.</li>
<li>The report should reach us by <strong>December 28th, 2005</strong> and no entries will be entertained after this date. The shortlisted teams will be notified by <strong>January 10th, 2006</strong>.</li>
<li>Only the participants who qualify the screening round based on judging of the solutions shall be invited to Techfest ’06 for the final competition. General Electric John F Welch Technology Centre (JFWTC) will shortlist the finalists from the obtained entries. </li>
<li>The shortlisted teams can refine their solution before their final presentation to be made at Techfest ’06. The presentation along with the final report should reach us before <strong>20th January 2006, 2:00 PM IST</strong>. No changes can be made to the final report once it has been submitted.</li>
<li>The report should cover the details of each and every aspect of the solution.</li>
<li>The shortlisted teams should submit their hardware, software and other requirements needed at the time of competition by <strong>January 10th, 2006</strong>.</li>
<li>IDP is a test of your creativity and innovativeness. It is acknowledged that the Internet is a common source for information, but any design found to be directly lifted off the net would be disqualified. Judges decision shall be treated as final and binding on all.</li>
</ul></p>
<a name="second"></a>
<h1>Second Round Details</h1>
<p><ul>
<li>The shortlisted teams are required to submit a detailed <strong>REPORT </strong>covering each and every part of their solution. The shortlisted teams are also required to give a PRESENTATION for the second round, highlighting all the features of their device.</li>
<li>The final report along with the presentation should reach us before 20th January 2006, 10 AM IST. No changes can be made to the final report or to the presentation once it has been submitted.</li>
<li>The presentation should be brought in a CD. Please keep some backup of the presentation (e.g. in your mailbox), in case the CD doesn’t work.</li>
<li>Teams, which are bringing their working prototype should display their model and explain its working at the time of the presentation.</li>
<li>We will provide you with a Computer with Windows XP and Microsoft Office. No other software/ hardware will be provided. If any of the teams need any other software, please mail it to <strong>ayush@techfest.org</strong> latest by <strong>10thJanuary 2006</strong>, 11:59 PM IST.</li>
<li>Please bring a copy of the report and the presentation for yourself for reference.</li>

</ul></p>
<a name="sche"></a>
<h1>Schedule</h1>
<p>21st January '06<br>
9:00 AM – 1:00 PM, IRCC Auditorium</p>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institute are eligible to participate in ‘IDP’ at Techfest ’06.</p>
<a name="team"></a>
<h1>Team Size</h1>
<p>A team can consist of a maximum of two participants.</p>
<br>
For queries contact:<br><br>
Ayush Agrawal<br>
Manager, Smart Tech<br>
<a href="http://www.techfest.org/mail.php?email=ayush@techfest.org">ayush@techfest.org</a><br>
Ph. +91-98699 22308<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>


  
<?
echo_content("footer.txt");
?>