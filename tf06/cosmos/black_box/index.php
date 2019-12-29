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
echo_content("side_black.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="prob"></a>
<h1 id="toptext">Black Box</h1> 
<p>Design a box which fits into dimensions (30x30x30) cm which
can expand/stretch to get into any shape which has
the maximum projected area on the ground. The box
should expand upon the application of a single
mec hanical/electrical impulse.
</p>
<p>Prizes worth <strong>Rs 15,000</strong> at stake.</p>
<a name="arena"></a>
<h1>Game Arena</h1>
<p>There is a wooden board of dimensions (40 x 40) cm at a height of 120 cm from the
ground. The board is 1.25 cm (1/2 inch) thick and had four holes of diameter 1.25 cm
(1/2 inch) as shown in the figure.</p>
<p>This wooden platform is kept at the center of a black area of (600 x 600) cm.
</p>
<table border=0 align="center" width="90%" style="border-collapse:collapse; margin:0; " cellpadding="10">
<tr><td align="center"><img src="./img/arena1.gif" border="0" align="center"></a></td></tr>
<tr><td align="center"><img src="./img/arena2.gif" border="0" align="center"></a></td></tr>
<tr><td align="center"><img src="./img/arena3.gif" border="0" align="center"></a></td></tr>
<tr><td align="center"><img src="./img/arena4.gif" border="0" align="center"></a></td></tr>
</table>
<a name="model"></a>
<h1>Model Specifications</h1>
<p><ol type="1">
<li>The maximum dimensions of the box could be (30 x 30 x 30 cm) at the start
of the game. The devices which are used to clamp the box to the platform as
well as the devices which are used to initiate the expansion (remote control etc)
are not included in this size constraint.
</li>
<li>The maximum weight of the box should not be more than 5 kg.</li>
<li> Any source of power used should be inside the box. Power cannot be transferred
to the box from outside in any manner.
</li>
</ol></p>
<a name="rules"></a>
<h1>Rules of the game</h1>
<p><ol type="1">
<li>The participants can clamp the box to the platform using the holes provided or
the remaining area on the platform (in addition to the 30 cm x 30 cm area at the
center) at the start of the game.</li>
<li>The box should expand to project the maximum area upon receiving a single
mechanical or electrical impulse. The impulse should be just to trigger the
expansion or initiate some release mechanism. The impulse should not transmit
any force directly in the direction of expansion i.e. the impulse should only initiate
the mechanism.Judges discretion would be used in case of any ambiguity.</li>
<li>The box should not expand to a height of more than 120 cm from the platform and
after expansion no part of the sail should touch the ground. Any violation of this
rule shall attract disqualification.</li>
<li>The box which upon expansion has the maximum projected area in a plane
parallel to the plane of the ground shall be declared as the winner. However the
sail should lie within the black area. The area of any portion of sail outside the
black area shall not be counted.</li>
<li>The projected area can have any shape.</li>
<li>The time limit for the expansion is 10 minutes.</li>
<li>There can be no external support to the box even after expansion except from the platform.</li>
<li>Any mechanism and any material whatsoever can be used to make and expand the
box. However use of explosives is prohibited.
</li>
</ol></p>
<a name="judge"></a>
<h1>Judging</h1>
<p>The sole criterion for winning would be the projected area in a plane parallel to
the plane of the ground. The box having the maximum projected surface area
upon expansion wins.
</p>
<p>The surface area shall be calculated as follows:</p>
<p>There shall be a camera at a height of 25-30 feet from the platform and approximately
above the center of the platform. Upon expansion a bmp image shall be taken
and the number of black pixels counted. The projected area from the box shall be considered
as directly proportional to <strong>(N<sub>tot</sub> – N<sub>b</sub>)</strong>, where <strong>N<sub>tot</sub></strong> = the total number of pixels in the
image and Nb = the number of black pixels.
</p>
<a name="mat"></a>
<h1>Materials</h1>
<p><ol type="1">
<li>Use of any shiny or reflecting material which interferes with the image taking process
of the camera is strictly prohibited.</li>
<li>It is strongly advised not to use any material of black color in your mechanism as it
shall not count towards the projected area of the sail.</li>
<li>There is no other restriction on the materials to be used.</li>

</ol></p>
<a name="gnrules"></a>
<h1>General Rules</h1>
<p><ol type="1">
<li>All teams have to register their machines at www.techfest.org. Upon registration each
team will be provided with a registration number. Please quote your registration
number in case of any future correspondence. The last date for registration is <strong>31st
December, 2005.</strong></li>
<li>The organizers reserve all rights to change any or all of the above rules as they
deem fit. Change in any rule, if any will be highlighted on the website.</li>
<li>The decision of the judges and the organizers will be final and binding.</li>
</ol></p>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective educational institutes are eligible to participate in Black Box at Techfest '06.</p>
<a name="tsize"></a>
<h1>Team Size</h1>
<p>A team can consist of a maximum of three students.</p>

For queries contact:<br>
<table border="0" width="100%" style="border-collapse:collapse; ">
<tr><td width="20%">Nitish Garg<br>
Manager, Cosmos<br>
<a href="http://www.techfest.org/mail.php?email=nitish@techfest.org" target="_blank">nitish@techfest.org</a><br>
Ph. +91-98695 30638<br></td>
<td>Akshay Mehra<br>
Manager, Cosmos<br>
<a href="http://www.techfest.org/mail.php?email=akshay@techfest.org" target="_blank">akshay@techfest.org</a><br>
Ph. +91-98696 18239<br></td>
</tr>
</table>
<br><br><br><br><br><br><br>
</div>
  
  
<?
echo_content("footer.txt");
?>