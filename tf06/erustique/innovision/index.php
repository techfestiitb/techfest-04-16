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
<h1 id="toptext">Innovision</h1> 
<p><img src="./img/innovision.jpg" border="0" alt="" hspace="5" vspace="5" align="right">Getting down to the core of Rural India, we pose at you, the difficulties, the problems they face in a manner which appeals. Technology is penetrating slowly but surely, down from the urban to the rural areas and this is where ingenuity is most sought. To apply urban technologies in rural scenarios is an art worth acclaim. To be able to adapt the innovation is taking it even closer to excellence.</p>
<p>We exemplify to you the kinds of problems you could possibly tackle, and leave it unto you to <strong>choose one of these </strong>or <strong>something else as relevant </strong>
(if not more) under these topics. The list of problems mentioned will be continually updated. Keep looking back for more!</p>
<p>Prizes worth <strong>Rs 20,000</strong> at stake.</p>
<p>The shortlist of teams selected for coming to Techfest has been declared. Please click <a href="./results.php">here</a> to view the shortlist.</p>
<a name="rules"></a>
<h1>Rules for Submission of Entries</h1>
<p>The Solution has to be submitted keeping the following salient points in mind:</p>
<p><ul>
<li>The <strong>problem for which the solution</strong> is being provided. </li>
<li>The <strong>relevance of the problem</strong> justifying why you came up with a solution for it. Explanation of the existence of the problem which you’ve taken up or taken from the ones mentioned. (Without relevance, its just a waste of effort!)</li>
<li>How <strong>innovative the idea</strong> is, and whether some solution already exists. If some solution exists (or even if it doesn’t) then <strong>explain the value addition</strong> which your solution provides. (It is not always important to develop something uniquely new, improvisation is as important!)</li>
<li>The <strong>extent to which</strong> the <strong>actual implementation</strong> is possible. Make sure you explain with relevant facts and figures, the way your solution is practical and applicable. Also, here you will have to consider the <strong>Cost Effectiveness</strong> of the solution to make sure it can be implemented. (Researching on the possible solutions would be helpful, so that you’re not stuck when the judges ask you questions!)</li>
<li>The entire write-up must not exceed <strong>Five A4 pages on MS-Word (Times New Roman font, size 12, with single spacing</strong>).</li>
<li>Along with the Write-up you need to come up with a <strong>working solution</strong> / <strong>prototype</strong> / <strong>model</strong> / <strong>poster presentation</strong> which explains your concept with clarity (It is obvious that the best use you make of this, the more credit you shall be awarded). This must be brought to Techfest ’06 at IIT Bombay to be displayed to the judges as well as being part of an exhibition after the team has qualified.</li>
</ul></p>
<a name="cat"></a>
<h1>The Categories</h1>
<script language="javascript1.2">
function change(divid)
{
var x= document.getElementById(divid);
x.style.display = (x.style.display == 'none') ? 'block' : 'none';

}
</script>
<div style="line-height:24px; font-size:12px; text-decoration:none; margin-top:6px;">
		<a onClick="change('one');" style="cursor:pointer; text-decoration:underline;" >Alternate Energy Sources for Alternate Uses</a>
		<div id="one" style="display:none; ">
		<h3>Alternate Energy Sources for Alternate Uses</h3>
		<p>Electricity has been created time and again from renewable sources of energy. Do you have the spark of innovation in you and devise a mechanism to convert these energy forms to a more sustainable, efficient and applicable solution? </p>
		<p><ul>
		<li><em>Wind energy to produce refrigeration </em>– How about coming up with a wind based solution which achieves refrigeration or (at least) cools a warehouse to a cool, constant temperature wherein vegetables or other perishable goods can be stored. This is for the rural agricultural industry which suffers huge losses in storage, say when a bumper harvest is produced and the produce goes waste. Even if the shelf life can be enhanced by a couple of days, the benefits are aplenty.</li>
		<li><em>Solar Energy for cooling solutions</em> –Solar energy has been used over and over again for generating electricity or for heating / drying. If a process is suggested which can probably use the abundant solar energy this country gets and convert it using simple conversion steps to a cooling solution, it could alleviate the plight of millions.</li>
		<li><em>Wind energy for irrigation</em> – Windmills coupled with an effective irrigation system can greatly improve efficiency on a farmland, especially in windy areas. Devise a series of steps which lead to this end, making it efficient and well-planned. </li>
		<li><em>Tidal Energy on Small boats</em> – During long fishing escapades by daily fishermen, they have a hard time coming back on shore if they get lost or there is rain. How about developing devices which can aid them in the dark/rain driven by tidal energy? Another application of this technology could be to <em>Drive</em> (or <em>Supplement Energy Produced on</em>) <em>Offshore Oil-Rigs</em>.</li>
		<li><em>Refrigerator waste energy Using attachment</em> – A normal fridge produces enough heat and so do other electrical devices around the house. Could an attachment to these electrical devices which uses their waste energy for other purposes / energy generation work and how?<br></li>
		</ul></p>
		</div><br>


		<a onClick="change('two');" style="cursor:pointer; text-decoration:underline;">Rural innovations for a Better living</a><br>
			<div id="two" style="display:none; ">
			<h3>Rural innovations for a Better living</h3>
			<p>Can technology as we know it, be incorporated in Rural households, come into their daily lives, by simple cost-effective means? Could the transfer of utility be done efficiently? There is a need to solve problems which are very specific to particular areas in villages. These problems require basic concepts of engineering and probably a lot of thinking is involved. Tackling these with an engineering point of view will be interesting as well as a test of your mettle, we believe. The Govt of India every year recognizes these innovations and the National Innovation Foundation (NIF) awards are given every year to a list of Unique Inventions. We have an understanding with the NIF this year, and hope to recognize the Best Innovators at these prestigious awards. </p>
			<p><ul>
			<li><em>Amla plucker machines</em> – One problem which has been there throughout has been the harvesting of trees, when the fruit has become ripe. For tall trees, it is often dangerous to go and pluck them off the insanely high branches. Also, the branches are harvested and not the fruits themselves, which leads to lesser fruit next time. What if a machine or a device which aids in climbing could be developed which makes it safer/easier to climb?</li>
			<li><em>Load carrying Wheelbarrow</em> – An urgent design need is to come up with a wheelbarrow of some sort, which could help the womenfolk in villages who fetch fuelwood from the hilly regions. Descending the steep slopes with heavy loads on their head is extremely demanding on their calf muscles. A similar design problem could be for carrying <em>Water carrying bags</em>.</li>
			<li><em>Extracting Oil out of Non-edible Seeds</em> – Selling seeds in the market which could be converted into oil, gives the tribal people a much lesser income than what they could have gotten by using a <em>Low-cost Press Mills</em>. Could a design for a setup like this be done? How about a similar setup for <em>Extraction of Herbs without using Power</em>?</li>
			<li><em>Low-cost Design for Vending machines</em> – Numerous provisions are produces in villages or gotten from other places, and there aren’t proper shops present in villages which can distribute these goods. A low cost vending machine could probably be designed which can cater to this need, and thus, prosper the village and its inhabitants.</li>
			<li><em>Electricity generation by a Cheap, Small generator from low velocity streams</em> – Regions with a lot of rain and rivers nearby have a huge potential to be used for electricity production on a small scale. The generator must be able to generate adequate amounts for regular use and be sustainable. These low-velocity streams can also be found in Canals or Irrigation Channels or even Sewerage Lines and should in turn be easy to maintain.<br></li>
			</ul></p>
			</div>
		<a onClick="change('three');" style="cursor:pointer; text-decoration:underline;">Rural Structures and Housing</a><br>
			<div id="three" style="display:none; ">
			<h3>Rural Structures and Housing</h3>
			<p>To brave the storms, heat and hail, are modest structures built in the most inhospitable of terrain. Simple, yet efficient, look at the common rural structures and suggest changes, which would render them sturdier or superior in some other way. These would include dams (or <em>bundhs</em>), bridges, houses and other buildings. </p>
			<p>Civil and Material Engineers ahoy! Conceptualize structures which could possibly overhaul the present day ad-hoc structures. </p>
			<p><ul>
			<li><em>Check-Dams to conserve water </em>– Water conservation is a major problem in almost the entirety of our country. Construction of <em>bundhs</em> for conserving water has been done time and again, but the problem still lingers on. The perfect design has not yet been achieved and there is an urgent need for one. Can you come up with the perfect design?</li>
			<li><em>Efficient Materials for stronger structures</em> – Houses in the rural areas are built of different materials – mud, straws, wood, bricks etc. Could the binding be done stronger with other commonplace materials, or could the materials themselves be replaced with something more inherently stronger? Apply basic concepts to change the way these dainty houses are built. </li>
			<li><em>Building techniques</em> – These structures are usually built in a crude way. The procedure involved has come down from generations of tradition and there is immense scope to improve. Change the ways in which they’re built and prove your way is better!<br></li>
			</ul></p>
			</div>
		<a onClick="change('four');" style="cursor:pointer; text-decoration:underline;">Animal Resources</a><br>
			<div id="four" style="display:none; ">
			<h3>Animal Resources</h3>
			<p>The average villager has some animal stock, which he rears for various uses. Couldn’t the animal’s mechanical power be used to drive devices possibly making life easier? The resources they provide could be utilized more efficiently, and not just as providers of food and beasts of burden. <br></p>
			</div><br>
</div>







<a name="4"></a>

<a name="gnrules"></a>
<h1>General Rules</h1>
<p><ol type="1">
<li>The participating entries must be in a team of a maximum of two people.</li>
<li>Only people with valid ID cards of their respective educational institutes are allowed to participate at “Innovision”.</li>
<li>Every team has to register online at our website for the competition. A registration number will be allocated to the team on registration which shall be used for future reference. Click <a href="http://www.techfest.org/register/innovision.php">here</a> to register.</li>
<li>The write-ups should be mailed to <strong>abstract@techfest.org</strong> with the subject '<strong>Innovision</strong>’ write-up Reg. No. -------. Do not forget to mention the registration number.</li>
<li>Only the participants who qualify in the screening round based on judging of the writeups shall be eligible for the finals at Techfest ‘06.</li>
<li>Teams will be given only one hour prior to the competition to set up their model/design at the venue for judging.</li>
<li>Judges decision shall be treated as final and binding on all.</li>
<li>Kindly mention if there are any Intellectual Property Rights issues related to your project.</li>
<li>The last date for registration and submitting the write-ups is <strong>15<sup>th</sup> December 2005</strong>. The shortlist for the fianl round will be available on the site on <strong>20<sup>th</sup> Dec. 2005</strong>.</li>
</ol></p>
<a name="instruc"></a>
<h1>Instructions for Write-up</h1>
<p><ol type="1">
<li>It is recommended that vital aspects of the project that require special focus are mentioned as points.</li>
<li>First sheet should only contain title of the project, team registration number, names of the team members and their respective institutes.</li>
<li>Diagrams should be on additional sheets (not included in 5). (Graphical representation of content is encouraged)</li>

</ol></p>
<a name="other"></a>
<h1>Other Requirements</h1>
<p>We would provide computers if and only if required. Participants are required to bring stuff like adapters, batteries, extension cords etc by themselves. The required software for design demonstrations (if required) must be told before coming to Techfest ‘06 as compatibility problems may arise at the last moment. All the participants should communicate these requirements along with the Writeups for the screening round.</p>
<a name="elig"></a>
<h1>Eligibility </h1>
<p>Anyone with a valid I-Card of their respective colleges can take part in Innovision. </p>
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
	 
	 
	 
	 
	
