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
echo_content("side_alive.txt");
echo_content("side_update.txt");
?>
 
<div id="content">
<h1 id="toptext">Home Alive</h1> 
<p>You’ve always dreamt of designing your very own smart home. This is your chance to make it happen!</p>
<p>Security systems that will keep away even the smartest of burglars. Emergency systems that ensure your safety in the most critical of conditions. Add to that, hi-fi equipments and gadgets which will ease your life to a point you could not imagine.</p>
<p>Techfest’06 gives you a chance to design and present your own smart home. Contest against the best and prove your home to be the smartest of all.</p> 
<p>Prizes worth <strong>Rs 6,000</strong> at stake.</p>
<a name="comp"></a>
<h1>The Competition</h1>
<p>Design a “Smart Home” on the layout given, incorporating the systems mentioned and give a presentation highlighting its salient features.</p>
<p>Clich <a href="home_alive.zip">here</a> to download pdf.</p>
<p><strong>UPDATE:</strong> The teams have been shortlisted for the final round on the basis of abstracts. All shortlisted teams please visit <a href="http://www.techfest.org/smart_tech/home_alive/index.php#pres">Presentation Details</a> section.

<p>Click <a href="results.php">here</a> to view the list of shortlisted teams.</p>
</p>
<br>
<a name="struc"></a>
<h1>Competition Structure</h1>
<p><ul>
<li>The competition consists of two rounds: the qualifying round and the final round. In the qualifying round, the participating teams are required to submit a write-up on “Smart Security Solutions” latest by 10th December 2005. Refer the section “Write-up Details” for more details.</li>
<li>The teams that qualify, on the basis of the write-ups, will be required to give a 30 minute presentation in the final round to be held at Techfest‘06. Topics for the presentation along with other details are provided in the section: “Presentation Details”.</li>
</ul></p>
<a name="write"></a>
<h1>Write-Up Details</h1>
<p><ul>
<li>The topic for the write-up is: “Smart security solutions”.</li>
<li>The write-up will be judged on the basis of the following points:
<ol type="1">
<li>Improvisation of present technology in existing appliances based on research/study underway.</li>
<li>Innovation in including technologies which may not be directly perceived as applicable.</li>
<li>Ease of adaptation of the technologies mentioned.</li>
<li>Constraints/drawbacks of the technologies mentioned.</li>
<li>Safety concerns.</li></ol></li>
<li>The teams are required to implement their ideas for the aforesaid topic in an apartment whose layout plan is given in Fig.1</li>
<li>Only existent technologies must be incorporated. Imaginative or fictitious technologies must not be used. </li>
<li>The write-up must be mailed as an attachment to abstract@techfest.org, with the team’s registration number as the subject preferably in ‘doc’ or ‘pdf’ format.</li>
<li>The write-up should not exceed 1500 words with a font size of 12 (font: Times New Roman) and 1.5 line spacing.</li>
<table width="90%" border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/layout.gif" border=0></td></tr>
<tr><td align="center">Fig. 1</td></tr>
</table>
<li>The write-up may be supported by a maximum of five descriptive figures/graphs.</li>
<li>The information in the write-up should be very descriptive and not vague.</li>
<li>The write-ups should be followed by a list of references - websites, books, etc which amply support the ideas or solutions implemented. The list of references shall not be taken into account for the word limit mentioned.</li>
<li>The last date for sending the write-up is <strong>10th December 2005</strong> and no entries will be entertained after this date.</li>
</ul></p>
<a name="pres"></a>
<h1>Presentation Details</h1>
<p><ul>
<li>The teams which qualify for the final round will be required to give a comprehensive presentation, covering the following topics :
<ol type="1">
<li>Smart lighting solutions </li>   
<li>Smart safety and security solutions</li>
<li>Gadgets for comfort/convenience</li>
<li>Smart entertainment systems.</li></ol></li>
<li>The presentation must not exceed 20 minutes under any circumstances, and points will be deducted for exceeding the time limit. This will be followed by a brief Q&A by the judges and the audience.</li>
<li>The outlay plan of the apartment (where the teams are required to implement their smart solutions) will remain same for the final presentation round.</li>
<li>The shortlisted teams have to also submit a detailed report with the presentation. The report should cover the details of each and every aspect of the topic(s).</li>
<li>The presentation along with the final report should reach us before <strong>20th January 2006, 10:00 AM IST</strong>. No changes can be made to the final report or to the presentation once it has been submitted.</li>
<li>The decision of the judges will be final and binding. </li>
</ul></p>
<a name="gnrules"></a>
<h1>General Rules</h1>
<p><ul><li>Every team has to register online at our website for the competition. A registration number will be allocated to the team on registration which shall be used for future reference. Click <a href="http://www.techfest.org/register/home_alive.php">here</a> to register.</li>
<li>The last date for registration is <strong>10th December 2005</strong>.</li>
<li>The scores for the qualifying round will not be disclosed to any team under any circumstances. Any request for the same will not be entertained.</li>
<li>The participants can use audio and visual aids for the presentation. We will provide you with a blackboard, a computer with MS- Office, an LCD projector and/or an OHP. In case the teams require special software/hardware, the application for the same must be mailed to<strong> ayush@techfest.org</strong> latest by <strong>25th December 2005</strong>. No requirements will be entertained thereafter. </li>
<li>The organizers reserve all rights to change any or all of the above rules at any time, as they deem fit.</li>
</ul></p>
<a name="sche"></a>
<h1>Schedule</h1>
<p>Home Alive is scheduled in Chemical Engineering Department, IIT Bombay on 22nd January '06 from 9:00 AM – 1:00 PM.</p>
<br>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institute are eligible to participate in “Home Alive” at Techfest’06.</p>
<a name="tsize"></a>
<h1>Team Size</h1>
<p>A team can consist of a maximum of two participants.</p>
<br>
For queries contact:<br><br>
Ayush Agrawal<br>
Manager, Smart Tech<br>
<a href="http://www.techfest.org/mail.php?email=ayush@techfest.org" target="_blank">ayush@techfest.org</a><br>
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



  
<?
echo_content("footer.txt");
?>