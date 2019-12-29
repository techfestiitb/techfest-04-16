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
echo_content("side_leverage.txt");
?>
<div id="content">
<a name="prob"></a>
<h1 id="toptext">Leverage - The Intra IIT event</h1> 
<p>Construct a cantilever beam with a column support. The strength of the beam will be determined by measuring the maximum moment it can withstand. </p>
<a name="spec"></a>
<h1>Plot Specifications</h1>
<p>The Structure will be clamped and tested on the board shown below:</p>
<table width="90%" border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/board.gif" border=0></td></tr>
<tr><td align="center">Isometric View</td></tr>
<tr><td align="center"><img src="./img/top.gif" border=0></td></tr>
<tr><td align="center">Top View</td></tr>
<tr><td align="center"><img src="./img/side.gif" border=0></td></tr>
<tr><td align="center">Side View</td></tr>
<tr><td align="center"> </td></tr>
<tr><td align="center"><strong>All Dimension in cm</strong></td></tr>
</table>
<a name="const"></a>
<h1>Constraints</h1>
<p><ul>
<li>The structure will be clamped and tested on the board shown in the figures above.</li>
<li>The four slots are at the corner of a 10 X 10 cm square as shown in the top view and can be used to clamp the structure. </li>
<li>There is no constraint on the height of the column.</li>
<li>The structure will be tested by applying load on the cantilever beam at a particular point to be specified by the team. <strong>This point should at least be 60 cm away (measured horizontally) from the line AB shown in the top view and be such that the load can be suspended from it.</strong></li>
<li>The Red Board of height 25 cm shown in the figures is at a distance of 7.5 cm from the center of the nearest slots as shown in the top view and <strong>it is on the same side as that of cantilever beam</strong>. No part of the structure should touch this board.</li>
<li>The maximum weight of the structure can be <strong>700 grams</strong>. </li>
</ul></p>
<p>A typical structure that can be built is shown below :-</p>
<table width="90%" border="0" cellpadding="5" cellspacing="5" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/beam3.gif" border=0><img src="./img/beam2.gif" border=0></td></tr>
<tr><td align="center"><img src="./img/beamside.gif" border=0></td></tr>
</table>
<a name="mat"></a>
<h1>Building Material </h1>
<p><ul>
<li>Popsicle sticks, threads and standard adhesives can only be used to build the structure.</li>
<li>The Popsicle sticks and the threads to be used will be provided by us after registration and a registration fee for the same is Rs 50.</li>
<li>Threads can only be used as a structural member and not to reinforce other members.</li>
<li>Structures built using any material except those mentioned above will be disqualified.</li>
</ul></p>
<a name="test"></a>
<h1>Testing</h1>
<p><ul>
<li>Structure will be tested by hanging load at the point on the cantilever specified by the team which satisfies the given constraints. </li>
<li>The maximum load which the structure bears without failing will be taken as the load borne by the structure and will be used to calculate the final score.</li></ul></p>
<a name="fail"></a>
<h1>Definition of Failure</h1>
<p><ul>
<li>If the structure fails to satisfy any of the constraints elicited above, it shall immediately be disqualified.</li>
<li>The load which will be suspended is 45 cm long, and if load touches the floor due to deflection of beam during the testing, the structure would be considered to have failed.</li>
<li>If any part of structure touches the red wall shown in the figures during the testing it would be considered to have failed.</li>
</ul></p>
<a name="win"></a>
<h1>Winning Criterion</h1>
<p>Strength of the structure will be determined from the formula</p>
<p><strong>Strength = (Length of Cantilever Beam * Load Applied) / (Weight of Structure)<sup>2</sup></strong></p>
<p>Length of the Beam will be calculated as the horizontal distance between the line AB shown in top view to the point of suspension of load. </p>
<p>The entry with the maximum strength will be declared the winner.</p>
<a name="reg"></a>
<h1>Registration and Important dates</h1>
<p><ol type="1">
<li>Each team has to register by depositing a registration fee of Rs 50/- and collect popsicle sticks and strings to be used for constructing the structure. </li>
<li>Last date of registration for teams is 14th Oct' 2005.</li>
<li>Register and collect popsicle sticks from:<br>
Alakh hostel-2 room 237<br>
Simit hostel-3 room 269<br>
Ritika hostel-10 room 131<br>
Arpit hostel-4 room 151<br>
Atul hostel-13 room B-319 </li>
</ol></p>
<a name="sch"></a>
<h1>Schedule</h1>

<p>The competition will be held on 16th of Oct '05 Sunday. </p>
<br>
<a name="tsize"></a>
<h1>Team Size</h1>
<p>A team can consist of a maximum of three students.</p><br>
<a name="elig"></a>
<h1>Eligibility</h1>

<p>All students with a valid student  identity card of  IIT Bombay  are eligible to participate in the competition. </p>
<br><br>
For queries contact:<br><br>
Aditya Vikram Singh<br>
Manager, Concreate<br>
<a href="http://www.techfest.org/mail.php?email=adityavikram@techfest.org" target="_blank">adityavikram@techfest.org</a><br>
Ph. +91-98207 54704<br>
<br><br><br><br><br><br><br>
</div>
  
<?
echo_content("footer.txt");
?>