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
echo_content("side_h.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="prob"></a>
<h1 id="toptext"><img src="./img/h.gif" border="0"></h1> 
<p>Design a Helipad using Popsicle sticks (ice-cream sticks) and threads satisfying the understated constraints.</p>
<p>Prizes worth <strong>Rs 8,000</strong> at stake.</p>
<p>&nbsp;</p>
<p><strong>UPDATE:</strong> All teams that have been confirmed for accomodation can be found <a href="http://www.techfest.org/concreate/h/accolist.php">here</a> </p>
<p><strong>Update:</strong> All teams registered for the event need to submit their structures at CONCREaTE venue on the 20th of January, 06 between 1PM to 5PM, failing which their entries will not remain eligible for entering the competition.</p>
<p><strong>UPDATE:</strong> Registration open for teams from IIT Bombay. Click <a href="http://www.techfest.org/register/h.php">here</a> to register.</p>
<p>Teams form IIT Bombay collect popsicle sticks from: </p>
<table border="0" cellspacing="5">
<tr><td>Ritika</td><td> H-10</td><td>131</td></tr>
<tr><td>Rajat</td><td> H13 </td><td>B-318</td></tr>
<tr><td>Amol </td><td>  H5</td><td>138</td></tr>

</table>
 <p><strong>Update:</strong> Here are some of the photographs covering various views of the
'H' baseboard, on which your structure will be tested in Techfest'06. Note
that the outer rings are a addition to the board plan given on the site,
but have been constructed outside the 70*70 cms periphery and will not
effect in clamping of your structure in any way.</p>
<table width="90%" border="0" cellpadding="6" cellspacing="10" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/board1.jpg"  border=0></td></tr>
<tr><td align="center"><img src="./img/board2.jpg"  border=0></td></tr>
<tr><td align="center"><img src="./img/board3.jpg"  border=0></td></tr>
</table><br>
<a name="spec"></a>
<h1>Plot Specifications</h1>
<p>The Helipad will be clamped and tested on the board shown below</p>
<table width="90%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/pad.gif" width="400px" border=0></td></tr>
<tr><td align="center">3D - Isometric<br>(All Dimensions in cm)</td></tr>
<tr><td align="center"><img src="./img/padtop.gif" width="430px" border=0 ></td></tr>
<tr><td align="center">Top View</td></tr>
<tr><td align="center"><img src="./img/dim.gif" width="400px" border=0 ></td></tr>
<tr><td align="center">Side View</td></tr>
</table>

<ul>
<li>There are four columns of height 30 cm and 7x7 cm base at the corner of a square of 60x60 cm. The columns are placed such that center of their base coincide with the corner of the 60x60 square.</li>
<li>There is a slot of depth 5 cm and 2x2 cm cross-section on each of the columns which can be used to clamp the structure.</li>
<li>The structure can only be supported by the green area on the columns; no part of structure should touch red area on the columns.</li>
<li>No part of the structure should touch the board any where else except the green coloured area shown in the figure above.</li>
</ul>
<a name="cons"></a>
<h1>Design constraints</h1>
<ul>
<li>The structure must have a flat, horizontal and continuous surface on the top.</li>
<li>The minimum height of this flat surface should be 25 cm above the top surface of the four columns shown in figure.</li>
<li>Projection of the above mentioned surface on the base of the board should at least enclose the above shown circular area (H) of diameter 25 cm.</li>
<li>The structure must be able to fit within a cuboid of 70x70 cm base and 40 cm height.</li>
</ul>
<a name="mat"></a>
<h1>Materials to be used</h1>
<ul>
<li>Popsicle sticks, threads and standard adhesives can only be used to build the structure.</li>
<li>Adhesive can only be used to join Popsicle sticks together; however
adhesives cannot be applied on the free surface of a member made of
Popsicle sticks to increase its strength (Adhesives such as m-seal are not
allowed).</li>
<li>The maximum diameter of a string member that can be used is 1 mm. To verify this constraint every team must bring a 1 m long sample of the string used by them.</li>
<li>Strings can only be used as a structural member and cannot be used to reinforce other members. Metal wires are not allowed.</li>
<li>Structures build using any other materials except those mentioned above will be disqualified.</li>
<table width="90%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/sample.gif" border=0></td></tr>
<tr><td align="center">Sample of Popsicle Stick</td></tr>
</table>
</ul>
<a name="gnrules"></a>
<h1>General Rules</h1>
<ul>
<li>Shape - Structure could be of absolutely any shape satisfying the above constraints. </li>
<li>Once the Structure is weighed, you are not allowed to modify your structure in any way.</li>
<li>If the structure fails to satisfy any of the above constraints then it will be summarily rejected.</li>
</ul>
<a name="test"></a>
<h1>Testing</h1>
<ul>
<li>Teams will be given 5 minutes to make final changes in their structure before the testing, and once the changes are done structure will be weighed, after weighing is done no changes can be made in the structure. </li> 
<li>Teams will be allowed to clamp their structure on the board, once the structure is clamped a weight of 30 kgs will be kept on the helipad (flat surface) by the team members themselves.</li>
<li>Structure must be able to stand the load of 30 kg without failing for at least 30 seconds.  </li>
<li>Standard hexagonal weights of longest diagonal 18cm and height 9 cm of 10 kg each, as shown below, will be used to load Helipad. </li>
</ul>
<table width="90%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/weight.jpg" border=0></td></tr>
</table>
<a name="fail"></a>
<h1>Definition of Failure</h1>
<p>The Helipad will be assumed to have failed if anything of the following happens</p>
<ul>
<li> Structure fails to satisfy any of the constraints specified above.</li> 
<li> Structure touches the red area on the columns.</li> 
<li> Any part of the Structure touches any point on the board except the green area marked over the columns during the course of testing.</li> 
<li> Structure actually fails and is not in a condition to carry the load over its Deck.</li> 
</ul>
<a name="win"></a>
<h1>Winning Criteria</h1>
<p>The lightest structure which is able to support 30 kgs of weight over the Helipad for least 30 seconds will be declared winner.</p>
<h1>Registration and Important dates</h1>
<ul>

<li>The registration are open for teams from <strong>IIT Bombay Only</strong>. Any outsation team that registers now wont be provided accomodation. Click <a href="http://www.techfest.org/register/h.php">here</a> to register.</li>
<li>All changes that will be made in the problem statement at any later stage shall be intimated to the participants through e-mail. Please keep yourself updated regularly.</li>
</ul>
<a name="elig"></a>
<h1>Eligibility</h1>
<p>All students with a valid identity card of their respective institutes are eligible to participate in this competition.</p>
<a name="tsize"></a>
<h1>Team Size</h1>
<p>A team can consist of a maximum of two students.</p>


<br><br>
<br>

For queries see <a href="http://www.techfest.org/concreate/h/faq.php">FAQ's</a> or contact:<br><br>
Aditya Vikram Singh<br>
Manager, CONCREaTE<br>
<a href="http://www.techfest.org/mail.php?email=adityavikram@techfest.org" target="_blank">adityavikram@techfest.org</a><br>
Ph. +91-98207 54704<br>
<br><br><br><br><br><br><br>
</div>
  
<?
echo_content("footer.txt");
?>
