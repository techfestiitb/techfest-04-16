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
echo_content("side_prayaas.txt");
echo_content("side_update.txt");
?>
 <a name="intro"></a>
<div id="content">
     <h1 id="toptext">Prayaas</h1> 
	 <p><img src="./img/prayaas.jpg" border="0" alt="" hspace="5" vspace="5" align="right">Let us look around us where we find millions of people disabled physically in hundreds of ways-some blind, some deaf, some with limb handicaps. Each life disabled is an epic of agony, of troubles, and of frustrating helplessness. As brothers and sisters of these people, isn’t it our moral commitment to lighten their burdens, to brighten their lives in our own little way? Spreading this cause of bettering life for every person, Techfest ’06 brings forward an opportunity, an incentive for you to probe into and ponder about the hardships of the disabled and their solutions. It is now your turn to lend your arm not to help a man but to enable him to help himself. A whole fraternity of ours is waiting for your initiative to make them smile with the relief of a lifetime.</p>
	 <p>Techfest’06 in association with <strong>National Association for the Blind (NAB)</strong> and <strong>Happy Hours Centre (HHC)</strong> presents <strong>Prayaas</strong>.</p>
	 <p>Prizes worth <strong>Rs 20,000</strong> at stake.</p>
	 <p><strong>UPDATE:</strong> The teams have been shortlisted for the final round on the basis of abstracts. Click <a href="./results.php">here</a> to view the list of shortlisted teams.</p>
	 <p>Shortlisted and Waitlisted teams refer <a href="index.php#secondr">Second Round Details</a>.</p>
	  <a name="comp"></a>
	 <h1>The Competition</h1>
	 <p>Develop smart workable solutions for the disabled which can make their life simple, easier and comfortable.</p>
	 <p>The competition is formatted as an open contest. <strong>The participants are free to choose a problem statement either from the given sample list or any other conceived through their own research. </strong>The only constraint on the choice of the problem statement is that it should depict a difficulty in the life of a disabled person and the presented smart, innovative solution should aim at helping the suffering overcome the difficulty. ‘Disabled’ is anyone with a physical handicap or any person suffering with a disease that incapacitates free use of body organs. So, make a resolve, pour in your efforts and help our stride towards a better future reach farther.</p>

	  <a name="list"></a>
	 <h1>List of Problem Statements</h1>
	 <p><ol type="1">
	 <li>Develop/ Design a wheel chair that can easily climb up an incline without requiring much effort.</li>

<li>Design a device to facilitate long distance communication between deaf/dumb people.</li>

<li>Braille: The existing solution has limited applications & is expensive. A cheap & simple solution to replace the existing one can be thought of.</li>

<li>Imagine a physically handicapped person (without hands) operating a voice command controlled music system. Many such features can be added in daily use appliances like gas stove/ watches/ music systems/ telephones etc. to make them easy for use by the physically handicapped. Can you design such an appliance?</li>

<li>Meter Reading Problems: Blind people are not able to read the fare of an auto-rickshaw or taxi meter and are often forced to pay more than what the actual bill is. Similar is the problem with telephone bill. Can you develop some device which can solve this problem?</li>

<li>Blind people are trained to walk in a particular direction by making them move on a straight line. However, this method takes a lot of time and requires assistance. Come up with alternate solutions that are more efficient in terms of time, cost and assistance required. </li>

<li>How will a physically handicapped person (without hands) turn the pages of a book? </li>
</ol></p>
 <a name="judge"></a>
<h1>Judging Criteria</h1>
<p>The solution will be judged on the basis of the following parameters-</p>
<p><ul>
<li>Ease of use (easy training - requiring less man hours for learning to use it).</li>
<li>Cost effectiveness (The cost of the solution should not be prohibitive when produced at the small scale. There is no fixed acceptable cost, though. Different solutions would have different acceptable costs. ) </li>
<li>Technological feasibility (only idea is not what we expect. The solution must be practical and implementable. Clear technological details are sought for).</li>
<li>Ease of adaptability (in already existing scenarios and by all user groups)</li>
</ul>
</p>
<p>Open-ended problems will be judged along side the mainstream pre-defined problems. Just ensure your problem is well defined and all issues are methodically addressed in your report.</p> 
<p>Note that any additional functions which are incorporated will be given due credit. It is highly recommended that you come up with a working prototype of the designed device.</p>
 <a name="gnrules"></a>
<h1>General Rules</h1>
<p><ul>

<li>The last date for registration and sending the abstract is <strong>20th December 2005</strong> and no entries will be entertained after this date.</li>
<li>Pre-event abstracts need to be submitted for the competition for the screening round. Kindly read all the instructions given on this page before writing your abstract. </li>
<li>In case the participants fail to submit the abstracts by the last date, their registration shall stand cancelled. </li>
<li>Only the participants who qualify after the screening round based on judging of the abstracts shall be invited to Techfest’06 for the competition. </li>
<li>On a single chart paper, the team should explain their solution with figures, diagrams and relevant material. A detailed report in support of the design and highlighting the important aspects should also be brought. </li>
<li>The REPORT along with the chart paper will have to be submitted to the competition coordinator at the time of the competition. </li>
<li>Participants should submit their hardware, software and other requirements needed at the time of competition along with the abstract for the screening round. </li>
<li>Judges decision shall be treated as final and binding on all. </li>

</ul></p>
<a name="format"></a>
<h1>Abstract Format</h1>
<p>First sheet of the abstract should only contain title of the project, team registration number, names of the team members and their respective institutes. The abstract should cover the following points:</p>
<p><ol type="1">
<li>Proper Addressing of the Problem/ Need & Motivation of the Problem: The participants are suppose to define the problem (for which they are developing the solution) as clearly as possible. The relevancy of the problem should also be highlighted.</li>
<li>Proposed Solution: The abstract should cover the details of each part of the solution (including the implementation) in brief. Technical aspects and full details of any analysis carried out on the design should be mentioned. Figures/ Detailed diagrams should be attached.</li>
<li>Idea about existing solution(s): The abstract should cover the merits/ demerits of the devised solution over the existing solution(s) and your contribution/ approach /innovation to the same.</li>
</ol></p>
<p>The abstract should be followed by a list of references.</p>
<p>BULLETED POINTS WILL BE APPRECIATED OVER LONG PARAGRAPHS.</p>
 <a name="instruc"></a>
<h1>Instructions</h1>
<p><ul>
<li>The abstract must be mailed as an attachment to <strong>ayush@techfest.org</strong>, with the team’s registration number as the subject preferably in ‘doc’ or ‘pdf’ format.</li>
<li>The abstract should be concise and to the point and should not exceed three A4 sheets of text with a font size of 12 excluding the first sheet containing the title. </li>
<li>First sheet should only contain title of the project, team registration number, names of the team members and their respective institutes.</li>
<li>The abstract may be supported by a maximum of five descriptive figures/graphs. Diagrams should be on additional sheets (graphic representation of the project is encouraged). </li>
<li>The abstract should be followed by a list of references - websites, books, etc which amply support the ideas or solutions implemented. The list of references shall not be taken into account for the word limit mentioned.</li>
<li>It is recommended that vital aspects of the project that require special focus are mentioned as points.</li>
<li>A section on <strong>Second Round Details</strong> has been updated. Keep visiting this section for furthur details. </li>
</ul></p>
<a name="secondr"></a>
<h1>Second Round Details</h1>
<h3>For Shortlisted Team & Waitlist Teams</h3>
<ul><li>Only shortlisted participants are allowed to take part in Second round. However, we are going to promote some teams from Waitlist to Shortlist if we find their work impressive.
<li>For the second and final round of Prayaas, the participants will display their working prototypes/posters at the venue here in IIT Bombay. You are also required to submit a detailed report covering each and every aspect of the solution. The hard copy of the report should reach us by January 20th, before 10 AM IST. Please bring a copy for yourself for reference. You can also bring posters etc. for displaying in the exhibition.</li>
<li>The aim of Prayaas is to develop workable aids for the disabled. So it becomes very important that the designed solution is feasible and easy to implement. For the same, you are required to make a working prototype of the designed device. A scanned photographed of the designed device to as much extent as possible should be mailed to ayush@techfest.org with the subject as "Prayaas PR06XXX" (XXX being the reg no) latest by January 8th, 2005. In case you are unable to develop a prototype by January 8th, please mail me the detailed steps that you will follow to develop the solution as soon as possible. In case you fail to do any of these you wont be allowed to display/ present your idea in the exhibition.</li>
<li>In case any of the shortlisted teams doesn’t submit a photograph or the steps, the team wouldn’t be allowed to display its entry in the competition. However the entry will be considered for judging.</li>
<li>For Waitlist teams- If we find your steps (or photograph) satisfactory, then you will be promoted to the shortlist of Prayaas (and allowed to take part in Second Round). In case you fail to do any of these, we won't consider your entry any further and you will remain in wait list only.</li>
<li>For the first time at Techfest, we give you a mentor for a competition. For any technical, implementation details related queries of your device, please contact Mr. Rohit Nalwade, CEO & Product Architect, ConVis Technologies, an IITB incubated company. You can contact him at <strong>rohit@convistech.com</strong> for any help.</li>
</ul>
 <a name="guide"></a>
<h1>Guidelines</h1>
<p><ul>
<li>Devices for individual (personal) use should be small, light.</li>
<li>Getting actual test data from uninterested third parties describing whether the solution works for them is encouraged.</li>
<li>The training cost and time required for learning the use of the solution must not be high.</li>
<li>Information on using the solution must be easily accessible.</li>
<li>End result should make the person independent and not need sighted help for even small things connected with the gadget or solution. </li>
<li>You may improve up on an existing solution & also the solution should not pose a new problem.</li>
<li>You may yourself identify some problems faced by the disabled, and work upon the solution for the same. In case you have any doubts about the importance and/or relevance of the problem on which you are working, you may contact us to clarify them. </li>
</ul></p>
<a name="sche"></a>
<h1>Schedule</h1>
<p>Prayaas Exhibition is scheduled in SOM Foyer, IIT Bombay on 21st January '06 from 9:00 AM – 4:00 PM. This will be followed by the prize distribution ceremony and ' Meet with the Judges' in IRCC Auditorium.</p>
 <a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institute are eligible to participate in ‘Prayaas’ at Techfest’06.</p>
 <a name="tsize"></a>
<h1>Team Size</h1>
<p>A team can consist of a maximum of three participants.</p>
	
	
	
	
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




</div>
  
<?
echo_content("footer.txt");
?>