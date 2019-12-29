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
echo_content("side_fly.txt");
echo_content("side_update.txt");
?>
 
<div id="content">
<a name="prob"></a>
<h1 id="toptext">FlyHigh</h1> 
<p><img src="./img/air.gif" align="right" hspace="5" vspace="5" alt="">Make a wireless remote controlled flying machine that flies along the air-path provided, passes through three rectangular rings and returns to the starting point.</p>
<p>The machine has to start its flight from the starting line, pass through the ring R1 in Zone 1, then move onto Zone 2 and pass through ring R2. After crossing R2 the machine has to traverse above Zone 3 and Zone 4 and pass through ring R3. Now the machine has to fly above Zone 5, Zone 6 and Zone 1 (in sequence), on its journey back, to reach ring R1 and finally to the starting line after passing through R1. (Refer figures below)</p>
<p>Prizes worth <strong>Rs 15,000</strong> at stake.</p>
<p><strong>UPDATE: </strong>The registration for the competition has been <strong>closed</strong>.</p>
<p><strong>Hint:</strong> Try searching with the keywords "Blimps","Airship","LTA","Zeppelin". </p>
<a name="arena"></a>
<h1>Arena</h1>
<p>All dimensions are in meters.</p>
<table width="90%" border="0" cellpadding="6" cellspacing="0" style="border-collapse:collapse " >
<tr><td align="center"><a href="./img/arena1.gif"><img src="./img/arena5.gif" border=0></a></td></tr>
<tr><td align="center">Isometric View</td></tr>
<tr><td align="center"><img src="./img/arena2.gif"  border=0 ></td></tr>
<tr><td align="center">Top View</td></tr>
<tr><td align="center"><img src="./img/arena3.gif"  border=0 ></td></tr>
<tr><td align="center">Side View 1</td></tr>
<tr><td align="center"><img src="./img/arena4.gif"  border=0 ></td></tr>
<tr><td align="center">Side View 2</td></tr>

</table>
<a name="rules"></a>
<h1>Rules of the game</h1>
<p><ul>
<li>The path (in air) that the machine needs to traverse during the game has been clearly shown in the figures with dimensions (in meters). </li></li>
<li>The game will be played in an indoor arena with only one team flying their machine at a time. The team which completes the route in minimum time will be declared as the winner. In case when no team completes the route, the team with maximum no. of points will be declared as the winner.</li></li>

<li>Point Structure:<ol type="1">
<li>10 points for crossing each Zone.</li>
<li>20 points for successfully passing through each ring.</li>
<li>No points will be cut if the machine touches the rings.</li>
<li>Points will be awarded only once for crossing each zone and ring. Zone 1 and ring R1 will earn you points twice, once for crossing from Zone 1 to Zone 2 in the forward journey and once for crossing from Zone 6 to Zone 1 on its return journey.</li></ol></li>
<p>e.g. If a team completes the route successfully then they will have 150 points</p>
<p>20 x 4 = 80 for passing through the rings (ring R1 is being passed twice)</p>
<p>10 x 7 = 70 for crossing the Zones (Zone 1 is being crossed twice)</p>
<li>The machine has to necessarily pass through all the rings when traversing the specified path.</li>
<li>In case of a tie, a tie breaker run will be given to the teams.</li>
<li>The machine should not touch the ground once the game begins. The penalty for doing so is disqualification.</li>
<li>Team members can place their machine in any orientation as desired at the start of the game. </li>
<li>One member of the team is allowed to move with the machine during its flight.</li>
</ul></p>
<a name="mspecs"></a>
<h1>Machine Specifications</h1>
<p><ul>
<li>The machine has to be necessarily controlled by a wireless control mechanism throughout the competition. </li>
<li>You can use any type of remote control. As the competition is based on the best controlled flying machine and only one team will be flying their machine at a time, the participants need not worry about the remote control interference. All the remote control units of all the teams will be collected before the competition and will be given to only the teams to make their own run on the air-path. Appropriate practice time will be provided. </li>
<li>The machine must have an onboard source of power. External source of power is not allowed. </li>
<li>The power source of the control pad used by the operator can be external. 220 +/- 2% volt 50 Hz AC power supply will be provided at the arena. You should fetch your own eliminators/adaptors. No special demands shall be entertained.</li>
<li>The machine should not be made using Lego parts, assemblies from toys etc. However the remote control systems from toys can be used. </li>
<li>Upto a maximum of 5m<sup>3</sup> of <strong>Helium</strong> at atmospheric pressure will be provided to each team that make a <strong>Lighter Than Air</strong> craft.</li>
</ul></p>
<a name="gnrules"></a>
<h1>General Rules</h1>
<p><ul>

<li>The registration for the competition has been <strong>closed.</strong></li> 
<li>Team members are not permitted to touch either their machines or those of their opponents once the game begins. The penalty for doing so is disqualification. 
<li>Machines will have to be demonstrated to judges (who will evaluate the machines for other prizes) at a time and date specified in the schedule which will be put up. Any team that does not turn up at the specified time will not be considered for the above special prizes. 
<li>The teams must adhere to the spirit of healthy competition. The teams must not damage the opponent's machine in any way. Judges reserve the right to disqualify any team indulged in misbehavior. 
<li>The name of your machine must be prominently displayed on the machine. 
<li>The machines you build will be first checked for size and safety. The machine should not cause electrical power breakdowns. 
<li>The organizers reserve all rights to change any or all of the above rules as they deem fit. 
<li>Judges decision shall be treated as final and binding on all. </li>
</ul></p>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institutes are eligible to participate in FlyHigh at Techfest ‘06.</p>
<a name="tsize"></a>
<h1>Team Size</h1>
<p>A team can consist of a maximum of four students. Participants from different colleges can also form teams together.</p>	
	
	
<br><br>For queries contact:<br><br>
<table border="0" align="left" id="manag"  style="border-collapse:collapse; " width="100%">
<tr><td width="20%">Amardeep<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=amar@techfest.org" target="_blank">amar@techfest.org</a><br>
Ph. +91-98201 91213<br></td>
<td>Aditya Chaoji<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=aditya@techfest.org" target="_blank">aditya@techfest.org</a><br>
Ph. +91-98693 57291<br></td>
</tr>
</table>

<br><br>
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