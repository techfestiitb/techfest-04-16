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
echo_content("side_agrobot.txt");
echo_content("side_update.txt");
?>

<div id="content">
<a name="prob"></a>
<h1 id="toptext">AgroBot</h1> 
<p><img src="./img/agrobot.gif" hspace="5" vspace="5" align="right">Devise a wired remote controlled machine which can dig holes in mud and plant saplings. The aim is to plant a given number of saplings in the minimum time. The fastest machine wins!! </p>
<p><i>“As you sow, so shall you reap” </i></p>
<p>Prizes worth <strong>Rs 15,000</strong> at stake.</p>
<p><strong>Updates</strong>: Some FAQ's answered mentioned below.</p>
<p><strong>The registration for the competition has been closed.</strong></p>
<br><br>
<a name="mspecs"></a>
<h1>Machine Specifications</h1>
<p><ol type="1">
<li>The machine(s) of each team must fit within a given box of dimensions (50cm x 40cm x 40cm) at the start of the competition. The wires and extras for power (eliminators) are not included in this constraint. </li>
<li>The machine(s) must have a place to pre-load the saplings before the start of the round, and the teams will be asked to do so. </li>
<li>The machine must use power converted from a source of electrical energy. Each team will be provided a 220V power supply. They can use their own eliminators for conversion of the supply. In case, a team has more than one machine, both of them should be powered by the same source. </li>
<li>Each machine must have only one remote. This will hold even for a team with multiple machines. </li>
<li>Mechanical force/power should not be transferred to the machine from outside. Chemicals, compressed gas and rockets, fuels, combustion power methods, etc. are strictly prohibited. </li>
<li>The wire controlling the machine must have no tension at any time nor should they be used to give direction / apply force of any kind. </li>
<li>The machine should NOT be made using Lego parts, assemblies from toys etc. However, the remote control systems from Lego kits can be used. Also, standard kits like the Basic Stamp kits may be used. Please note that readymade wheels and gearboxes may be used.</li>
</ol></p>
<a name="rules"></a>
<h1>Rules </h1>
<p><ol type="1">
<li>Two teams will compete against each other. Each team is given 15 saplings which will be pre-loaded on the machine(s). The goal is to <strong>plant 10 saplings</strong> in the <strong>designated 10 pits</strong>. (Refer Figure). There will also be a Bonus Pit at the end of the stretch, where the first team to plant a sapling gets Bonus Points. </li>
<li>For <strong>every valid plantation</strong>, the team <strong>will get 10 points</strong>. Total of this is the <strong>Base Score</strong>. </li>
<li>The first team to plant in the <strong>Bonus pit gets 20 points</strong>. The Bonus pit can only be attempted <strong>after the team has done 5 valid plantations</strong>. If the team has attempted the Bonus pit and it is found that the plantations weren’t valid, Bonus points will not be added. </li>
<li>For time saved, the teams will be given extra credit. The <strong>time (rounded in minutes) saved</strong> by the team will be <strong>multiplied to the number of Valid plantations</strong> and added to the score. (<i>eg. A time of 3:50 is actually 4 minutes and time saved is 6 minutes. So, Bonus time = 6 x Valid Plantations</i>) </li>
<li>Straying outside the track will attract negatives. For every time a machine strays outside its track, <strong>5 points will be deducted</strong> for that team. </li>
<li>The final score of the teams = Base Score + Bonus points + Bonus Time – Negatives </li>
<li>The clock will not be stopped from the time it is started until 10 minutes are over. </li>
<li>The holes have to be dug in the pits provided (any mechanism is allowed), subject to the condition that the diameter at ground level must be <strong>less than 5 cm</strong>. </li>
<li>The team members are not supposed to touch the machine once the game begins. Doing so will lead to disqualification from the competition. </li>
<li>Before the beginning of the round, both machines must be behind the starting line. If any machine jumpstarts twice, then that team will be disqualified.</li>
</ol></p>
<a name="plant"></a>
<h1>Valid Plantation</h1>
<p><ul>
<li>A cardboard cutout (of 1cm inner diameter and 5 cm outer diameter) will be used to check the straw so that at least half of the straw must be inside the ground <strong>(7.5cm)</strong>. The mark on each straw (at 7.5cm) must not be seen above the cardboard cutout. </li>
<li>The size of the hole must be less than the outside diameter and the cardboard cutout must not fall inside the hole.</li>
<table border="0" cellpadding="10" cellspacing="10" width="90%" style="border-collapse:collapse; margin:10px 0px 0px 0px; ">
 <tr><td align="center"><img border="0" src="./img/img1.gif"></td></tr>
  <tr><td align="center"><img border="0" src="./img/img2.gif"></td></tr>
 <tr><td align="center"><img border="0" src="./img/img3.gif"></td></tr>
  
  
</ul></p>
<a name="arena"></a>
<h1>Arena </h1>
<p><ul>
<li>The arena will be a track <strong>(of width 2 meter)</strong>, with two separate regions for the competing teams <strong>(of 1 m width each)</strong>. </li>
<li>Each pit will be at a <strong>distance of 0.5 m</strong> from the previous (center to center) and will be a cylindrical of 15 cm diameter and 15 cm depth. </li>
<li>The two regions of the track of 1 m width each will be separated by a firm partition. (Refer Figure)] </li>
<li>The Bonus pit is a distance of 50 cm from the last pit for both teams, and on the center line. The partition is only upto the last pit, as shown in the figure. </li>
</ul></p>
<table width="90%" border="0" cellpadding="10" cellspacing="0" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/arena1.gif"  border=0></td></tr>
<tr><td align="center">Top View</td></tr>
<tr><td align="center"><img src="./img/arena2.gif"  border=0 ></td></tr>
<tr><td align="center">Isometric View</td></tr>
<tr><td align="center"><img src="./img/arena3.gif" border=0 ></td></tr>
<tr><td align="center">Side View</td></tr>
</table>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>Anyone with a valid I-Card of their respective colleges can take part in Agrobot. </p>
<a name="gnrules"></a>
<h1>General Rules</h1>
<p><ol type="1">
<li>Team size is restricted to a maximum of 3 members. </li>
<li>The teams are expected to be on time for the start of their round. Not doing so will lead to disqualification. </li>
<li>The decision of the judges will be final and binding. </li>
<li>The organizers reserve the right to change any or all of the rules mentioned above, at any point during or before the competition. If any rule is changed, the participants will be intimated via email. 
</li>
</ol></p>
<a name="faq"></a>
<h1>FAQ's Answered</h1>
<p><ol type="a">
<li>The saplings will be modeled by straws, which means the machine
has to plant drinking straws in the holes which it will be digging.</li>

<li>The mud will be garden soil with a little moisture which has been
upturned to make it consistent. The wet mud will not be a slurry of
water and mud. The moisture level cannot be told for certain. In case it
is standardised, you will be notifiied via email once you register and
appear on the website when it is done.</li>

<li>The machine has to dig a hole of the specified dimensions. This
will count as a valid plantation and you do not need to fill up the hole
after this has been achieved.</li>

<li>The valid plantation will be judged with the aid of a cardboard
cutout which has been shown. The size of the hole will be decided by the
outside diameter and if the cutout falls into the hole, its not valid.
The height of the straw is decided by placing of the cutout through the
straw and on the ground (above hole). If the red mark is seen over the
cutout, then it is not a valid plantation. (Refer Figures)</li>
</ol></p>
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
	 
	 
	 
	 
	