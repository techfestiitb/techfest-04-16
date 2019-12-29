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
echo_content("side_simple.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="motive"></a>
<h1 id="toptext">The Simple Life v1.1</h1> 
<p>They’re connected. You develop the solutions…</p>
<p>Rural India has been taken by storm with the onset of the ICT revolution. ICT, which stands for Information and Communication Technologies, has transformed the lives of many. Applications as diverse as Education, Agriculture, e-Governance, e-Medicine, Telephony, Commerce, amongst numerous others are being deployed and used by the villagers in the quest for a Modern Rural India. The change is inevitable…Will you be instrumental?</p>
<p>Prizes worth <strong>$1000</strong> to be won.</p>
<a href="./simple_life.zip">Click Here</a> to download pdf.<br>
<strong><p><strong>UPDATE:</strong> The Teams have been shortlisted and Project names have been put up.</p>
<p>Click <a href="./results.php">here</a> for the shortlisted teams.</p>
<p>The synopsis of the projects various teams are doing alongwith their contact details can be downloaded <a href="./Synopsis.pdf">here</a></p></strong>
<p>Please note that the teams who have less than 4 people are open to expansion until Techfest '06. This means that if the team desires, someone visiting this page and wishing to contribute in their existing project can contact the team and join in. This will be done only with the consent of the team concerned and he/she should get the due consent of the team members through the mail id's provided in the <a href="Synopsis.pdf">Synopsis</a> and notify us about the team expansions.Please provide explicitly the name(s) of the person(s) entering or leaving your team.The contribution should be like any other team-member; developing a module, add-on etc. This does not mean in anyway that the teams who have less than four members necessarily need to expand.</p>
<p>A brief Synopsis of each project will be put up soon for people interested in applying to a project with less than four team members. In case of any doubts or discrepancies, drop a mail at <a href="http://www.techfest.org/mail.php?email=avinavnigam@techfest.org" target="_blank">avinavnigam@techfest.org</a></p>
<p>Also note that the final software will be judged on the basis of the abstract submitted and shortcomings would be penalised, if any.</p>
<p>In case of technical difficulties relating to the software development or the village, write to the email address mentioned and your query will be resolved as soon as possible.</p>
<br>
<h1>The Motive</h1><br>
<p>To develop an open-source software which will be modelled upon a chosen rural scenario and developed by analysing the different scenarios given. The 'project' will undergo development to completion by interaction with the industry </p>
<p>The project will comprise of two main stages. The first stage is the calling for ideas, wherein a shortlist will be made, and the second will be the actual development period with assistance provided by industry. </p>
<br>
<h1  style="color:black; "></h1><br>
<p>Please go through the President's address to the nation and scroll down to the PURA mission and the ICT paragraphs: <a href="http://www.indianembassy.org/president/aug_14_03.html" target="_blank">http://www.indianembassy.org/president/aug_14_03.html</a></p>
<p>A good starting point for various searches related to Kiosk technology: <a href="http://www.ictrt.org.in" target="_blank">http://www.ictrt.org.in</a></p>
<p><a href="http://www.it.iitb.ac.in/~it625/?id=103" target="_blank">http://www.it.iitb.ac.in/~it625/?id=103</a><br>
At this site, you shall find enough information on what kinds of kiosks/devices/softwares are already developed. It is an excellent compilation and is a must-see (courtesy Prof. K Ramamritham, Media Labs Asia, IIT Bombay).</p>

<p>Kind of kiosks already in use in South India visit: <a href="http://www.itforchange.net/ict4d/south_india.html" target="_blank">http://www.itforchange.net/ict4d/south_india.html</a></p>

<p>An important article which describes the range of
technologies existing and the present reach: <a href="http://in3.org/articles/IIT.htm" target="_blank">http://in3.org/articles/IIT.htm</a></p>
<a name="concept"></a>
<h1>The Concept</h1>
<ol type="i">
<li>A set of villages will be given.</li>
<li>A detailed account of the villages will be given on the lines of the points mentioned below. </li>
<li>A kiosk is setup in all the given villages. (For more about kiosk technology and applications visit our <a href="./details.php">Competition Data section</a>) </li>
<li>The developers need to come up with ideas for an application software which can be installed in the Village Kiosk and is useful for that village after analysing its situation. Links to the kinds of applications already existing in the set of given villages, will be given (in the <a href="./details.php">Competition Data section</a>) and updated regularly.</li>
<li>After the ideas have been reviewed by our committee (a panel of experienced professionals) and have been found appropriate, they will be given the go-ahead as a "project". </li>
<li>Data given to the developers
	<ol>
		<li>Villager population with distribution</li>
		<li>Major Occupations of the village</li>
		<li>Scenario of the village (terrain, resources, weather conditions)</li>
		<li>Communication constraints (bandwidth, network)</li>
		<li>Level of literacy</li>
		<li>Business scope (commerce)</li>
		<li>Speciality of the village (skills, resource, culture)</li>
	</ol>

</li>
<li>Credit will be given on the basis of
<ol>
<li>Simplicity of Software</li>
<li>Ease of use</li>
<li>Graphical interface (to be adaptable to different languages/locations)</li>
<li>Interactivity with the end-user</li>
<li>Low bandwidth requirement for online software</li>
<li>Making sure it’s for the appropriate village (relevance after data analysis and reviewing ongoing work)</li>
</ol>
</li>
<li>The entries will be listed on the website under the name of the developer who plans to develop it.</li>
<li>A person visiting the website will have the chance to send in his/her idea for an add-on/module to an already existing entry and be part of the team, if the original team so desires. The maximum a team can comprise of is four (even after expansion). </li>
<li>The second stage of the project, which involves program development by the competitors alongwith assistance (technical/village-related) from our side, will be put up on the website after shortlisting the entries.</li>
<li>If possible, the software will be tested in the concerned villages for efficiency. The final points for the software will depend upon the testing done in Techfest 2006. </li>
</ol>
<a name="dates"></a>
<h1>The Dates</h1>
<ul>

<li>The Last Date for Registration and Submission of Abstracts - 12th November</li>
<li>Shortlisting and Project Commencement - 25th November </li>
<li>The Last Date for expansion - 20th December</li>
</ul>
<a name="rules"></a>
<h1>The Rules</h1>
<ul>
<li>Number of members per team should not exceed four, in any case. </li>
<li>In case a team has four members, it is not eligible for expansion after the ideas have been shortlisted (refer "The Concept" ix).  </li>
<li>Every team has to register online at our website for the competition. A registration number will be allocated to the team on registration which shall be used for future reference.<a href="http://www.techfest.org/register/simplelife.php">Click Here </a> to register. </li>
<li>An abstract has to be sent to us at <strong>abstract@techfest.org</strong>, detailing the idea behind the potential software to be developed - a format for which is given below. </li>
<li>In case the participants fail to submit the abstracts by the last date, their registration shall stand cancelled. </li>
<li>Only the participants who qualify in the screening round based on judging of the abstracts shall be eligible for submitting the final entries at Techfest 2005. </li>
<li>Participants who qualify after the screening round have to bring a soft copy of the software along with a well documented hard copy of the code for analysis by the judges. </li>
<li>Judges decision shall be treated as final and binding. </li>
<li>Further details about the submission of entries and display at Techfest 2006 shall be given after the shortlisting.</li>
<li>Note that at any point of time the latest information will be that on the site. The information provided in the pdf downloaded earlier may not be the latest. However , registered participants will be informed through mail about any changes on the site.</li>
</ul>

<a name="travel"></a>
<h1>Travel Reimbursement</h1>
<p>Travel reimbursement will only be given on one way fare(return).</p>
<h3>For Participants From Outside India</h3>
<ul>
<li>Travel Reimbursement for winners (1st position) will be given on economy fare air ticket starting from a minimum of Rs 20,000 per team to full fare subject to availability of funds.</li>
<li>Travel Reimbursement will be given to a maximum of 2 participants per team.</li>
</ul>
<h3>For Participants From Within India</h3>
<ul>
<li>Travel Reimbursement for winners (1st position) on one way fare will be given for train (3rd AC / 2nd Sleeper) or bus fare (AC / Non-Ac).</li>
<li>Travel Reimbursement will be given to a maximum of 3 participants per team.</li>
</ul>
<br><br>
For queries contact:<br>
Avinav Nigam<br>
Manager, e-Rustique<br>

<a href="http://www.techfest.org/mail.php?email=avinavnigam@techfest.org" target="_blank">avinavnigam@techfest.org</a><br>
Ph. +91-98673 86626<br>
<br><br><br><br><br><br><br><br><br>
 </div>
<?
echo_content("footer.txt");
?>
	 
	 
	 
	 
	