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

echo_content("side_iclean.txt");
echo_content("side_update.txt");

?>

 

<div id="content">

<a name="prob"></a>

<h1 id="toptext">iClean</h1> 

<p><img src="./img/iclean.gif" border="0" alt="" hspace="5" vspace="5" align="right">Build an autonomous machine that can collect a specific amount of material-puffed rice (murmure) and dump it into a specified zone of the arena.</p>
<p>Prizes worth <strong>Rs 18,000</strong> at stake.</p>
<p><strong>The registration for the competition has been closed.</strong></p>
<br><br><br><br><br>
<a name="arena"></a>

<h1>Game Arena</h1>

<ol>

<li>The arena will consist of three zones (marked A, B and C in the figure provided). Zone A and zone B will be identical and both of them will be connected to zone C in a symmetrical fashion as shown in figure 1. <a href="./img1.php" target="_blank">Click Here</a> for an isometric view of the arena.</li>

<p>All dimensions are in millimeters</p>

<table border=0 align="center" width="90%">

<tr><td align="center"><a href="./img1.php" target="_blank"><img src="./img/topview.gif" border=0 ></a></td></tr><tr><td align="center">Figure 1: Top View</td></tr>

</table>



<li>Description of Zone A/B</li>

<ul>

	<li>Outer dimensions: 1800 mm x 1200 mm.</li>

<li>Base color: black, Surface: wooden.</li>

<li>Outer boundaries are walls of 50 mm high, 12 mm thick and black in color, except the places where the machine will enter and leave the zone. Please refer figure 2 for more details.</li>

<li>Each zone will be divided into 24 cells nearly equal in size and marked with a white line of width 20 mm. The side of a cell may vary from 280 mm to 290 mm.</li>

<li>Each zone will be connected to zone C through a gate of width 400mm.</li>

<li>Each zone will house some obstacles, the details of which are provided in the section titled “Description of Obstacles” (Game Arena, point 4).</li>

<li>The entry to zone C through the gates will be marked by a line of width 20mm extending from zone A/B.</li>

<li>150 gm (approx) puffed rice (murmure) will be scattered in a roughly uniform fashion in each zone. Puffed rice (murmure) may be scattered on white lines also. <a href="./img2.php" target="_blank"> Click Here</a> to view a sample photograph of puffed rice (murmure).</li>

</ul>

<li>Description of Zone C</li>

<ul>

	<li>Outer dimensions: 1200mm x 1200mm.</li>

	<li>Base Color: black, Surface: wooden.</li>

	

<table border=0 align="center" width="90%">

<tr><td align="center"><img src="./img/pit.gif" border=0 ></td></tr><tr><td align="center">Figure 2: Side View</td></tr>

</table>

	<li> Outer Boundaries are walls 50 mm in height and black in color.</li>

	<li>Zone C will be divided into two equal parts by a wall of height 50 mm and black in color. Each part will consist of a dumping pit of outer dimensions (150 x 150) mm and depth 150 mm as shown in figure 3.</li>

	<table border=0 align="center" width="90%">

<tr><td align="center"><img src="./img/zonec.gif" border=0 ></td></tr><tr><td align="center">Figure 3: Top View of Zone C</td></tr>

</table>

	<li>Pit identification: The periphery of the pit will be marked by a white line of width 20 mm at a distance of 20 mm from the edge of the pit.</li>

	<li>Each pit will be connected to the respective gate through a line that will extend from the corresponding zone (A or B).</li>

</ul>

<li>Description of Obstacles</li>

<ul>

	<li>There will be three to five obstacles placed randomly in each zone (zone A and zone B). However the arrangement of obstacles will be identical in both the zones.</li>

	<li>The maximum dimensions of the obstacles will be (400x400x400) mm.</li>

	<li>The obstacles may be solid/hollow.</li>

	<li>The obstacles can be things from day-to-day life like bottles of common beverages, furniture etc.</li>

</ul>







</ol>

<a name="mspecs"></a>

<h1>Machine Specifications</h1>

<ul>

<li>The machine should fit within a box of dimensions (250x250x350) mm (350 mm being the maximum height) at the start and end of the game.</li>

<li>The machine must use power converted from a source of electrical energy. Commercial batteries like dry cells and lead acid cells are permitted. Chemicals, compressed gas and rockets, fuels, combustion power methods are strictly prohibited.</li>

<li>The machine should have an onboard source of power. External source of power is not allowed.</li>

<li>The name of the machine should be prominently displayed on the machine.</li>

<li>Use of computers for controlling the machine is not allowed. The machine should be completely autonomous, self contained and should not receive any outside assistance.</li>
<li>THE MACHINE SHOULD IN ITSELF BE ABLE TO MEASURE THE WEIGHT OF THE ENCLOSED CONTENTS. ALL PARTICIPANTS PLEASE NOTE THAT THEY HAVE TO BUILD/USE A MECHANISM TO WEIGH THE CONTENTS OF THE SAMPLE INSIDE THE MACHINE.</li>
</ul>

<a name="grules"></a>

<h1>Rules of the Game</h1>

<ul>

<li>The tournament will be played on a knockout basis with two teams competing at a time.</li>

<li>At the beginning of the game, teams have to place their machine in their respective starting stations of dimensions 400mm x 400mm.</li>

<li>The machine is required to collect the puffed rice (murmure) randomly scattered in its zone and then move to zone C through the gate and dump the contents in its pit.</li>

<li>The machine which dumps 75gm puffed rice (murmure) first will be declared the winner. </li>

<li>It is not necessary for the machine to collect the requisite amount of material and dump it in one attempt. The machine is allowed to transit multiple times.</li>

<li>After completing the dumping process, the machine should return to its respective zone (zone A/B) and give a beep sound to indicate the completion of the task. The rear part of the machine should lie inside its zone (zone A/B) at the time of beeping. Please note that once a beep sound is produced the machine should come to halt within 10 seconds.</li>

<li>The machines will be given 7 minutes to complete the task and both the machines should stop within 10 seconds after the given time. Judges reserve the right to disqualify any machine violating this rule.</li>

<li>In case, none of the machines deposits 75gm, the machine dumping a larger amount of puffed rice (murmure) will be declared the winner. However, any machine dumping less than 25gm puffed rice (murmure) will be disqualified.</li>

<li>In case, none of the machines deposit 25gm, both will be disqualified.</li>

<li>Please note that only the puffed rice (murmure) dumped inside the pit will be taken into account while weighing and the contents inside the machine will not be considered.</li>

<li>Adding weight (salt, water etc.) to contents-puffed rice (murmure) is not allowed. Any machine doing so will be disqualified.</li>

<li>The machine can be repositioned to the starting zone by one team member at any point of time but only once in a game. The handling time is also included in the total match time and no extra time will be allocated.</li>

</li>



</ul>

<a name="gnrules"></a>

<h1>General Rules</h1>

<ul>

<li>The registration for the competition has been <strong>closed.</strong></li>

<li>Team members are not permitted to touch either their machines or those of their opponents once the game begins, except for the clause as described in  “Rules of the Game (12)”.  The penalty for doing so is disqualification.</li>

<li>Breakdowns/Timeouts: There is no provision for breakdown or timeouts in a single match. Your machine must be sturdy enough to participate in several rounds, leading to the finals.

<li>The machines are not allowed to dismember themselves or leave parts on any part of the arena. The decision in such cases will be taken by the judges.</li></li>

<li>The machine must not damage the board or obstacles or any other part of the arena.</li>

<li>The machine is not allowed to move the obstacles. Judges reserve the right to disqualify any team doing such behavior.</li>

<li>Any team that is not ready to play at the time specified will be scratched automatically.</li>

<li>The organizers will not provide any system like microprocessor kits, computers etc. at the venue.</li>

<li>The organizers reserve all rights to change any or all of the above rules as they deem fit. The decision of the judges and the organizers will be final and binding.

</li>



</ul>

<a name="elig"></a>

<h1>Eligibility</h1>	

<p>All students with a valid identity card of their respective institutes are eligible to participate in ‘iClean’ at Techfest’06.</p> 

<a name="tsize"></a>

<h1>Team Size</h1>

<p>A team can consist of a maximum of three students.</p>

For queries contact:<br><br>

Ayush Agrawal<br>

Manager, Smart Tech<br>

<a href="http://www.techfest.org/mail.php?email=ayush@techfest.org" target="_blank">ayush@techfest.org</a><br>

Ph. +91-98699 22308<br>

<br><br>

</div>

  

<?

echo_content("footer.txt");

?>