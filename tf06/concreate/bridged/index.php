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

echo_content("side_bridged.txt");
echo_content("side_update.txt");

?>

<div id="content">

<a name="prob"></a>

<h1 id="toptext">Bridged</h1> 

<p>Tenders are invited for the construction of a bridge located at IIT Bombay, Powai Mumbai from reputed and experienced students registered in any science or engineering college.</p>
<p>Prizes worth <strong>Rs 15,000</strong> at stake.</p>

<a name="site"></a>

<h1>Site conditions</h1>

<p>The bridge has to be constructed on the site shown below:</p>

<table width="90%" border="0" cellpadding="10" cellspacing="0" style="border-collapse:collapse " >

<tr><td align="center"><img src="./img/site1.gif" border=0></td></tr>

<tr><td align="center">Isometric View</td></tr>

<tr><td align="center"><img src="./img/site2.gif" border=0 ></td></tr>

<tr><td align="center">Side View<br>(All dimensions in cm)</td></tr>

<tr><td align="center"><img src="./img/site3.gif"  border=0 ></td></tr>

<tr><td align="center">Side View<br>(All dimensions in cm)</td></tr>

</table>

<p><ul>

<li>There are two platforms of height 100 cm and 100x50 cm square cross-section.</li>

<li>There is a clear span of 2.5 m between these platforms.</li>

<li>There are two vertical plates of 15 cm thickness running across top and side face of the platform as shown in the figures above.</li>

<li>The center to center distance between these plates is 60 cm.</li>

<li>These plates will be made of standard 18 mm ply available in the market.</li>

<li>These plates have holes at regular interval which can be used to clamp the truss of the bridge.</li>

<li>The center to center distance between the holes is 10 cm except the hole A (as shown in the side view) which is at 7.5 center to center from its neighboring holes.</li>

<li>The diameter of these holes will be according to the nuts provided on site. </li>

</ul></p>

<a name="tools"></a>

<h1>Tools and Materials Available on Site</h1>

<p><ol type="1">

<li>Standard Aluminium pipes of ½ inch outer diameter and thickness 1 mm (length 12 feet).
<table width="90%" border="0" cellpadding="10" cellspacing="0" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/pipe.jpg" border=0></td></tr>
</table>
<li>Standard ¾ / ¾  inch aluminium angle of thickness 1.45 mm ( length 12 feet).</li>
<table width="90%" border="0" cellpadding="10" cellspacing="0" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/angle.jpg" border=0></td></tr>
</table>

<li>L-shaped aluminium joints of 1.5 / 1.5 inch, 1 inch width and thickness 1.65 mm.</li>
<table width="90%" border="0" cellpadding="10" cellspacing="0" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/joint.jpg" border=0></td></tr>
</table>
<li>Standard GI 1.4 mm diameter wire.</li>

<li>Standard GI 1-inch, 3-inch nut bolts of diameter 4.5 mm.</li>
<table width="90%" border="0" cellpadding="10" cellspacing="0" style="border-collapse:collapse " >
<tr><td align="center"><img src="./img/screw.jpg" border=0></td></tr>
</table>
<li>3mm ply of dimensions 60x250 cm to be fitted on the deck.</li>

<li>Screw Driver. </li>

<li>Spanner of required size</li>

<li>Wrench</li>

<li>Hacksaw</li>

<li>Hammer.</li></ol></p>

<p><ul>

<li>Aluminium pipes and angles will be provided in multiples of 12 feet length.</li>

<li>Teams will have to fabricate their bridge design using the above tools and materials only.</li>

<li>However, all the holes that are required to be drilled will be done by an expert.</li>
<li>The sample of all materials that will be provided is shown below</li>



</ul></p>





<a name="design"></a>

<h1>Design Constraints</h1>

<p><ul>

<li>A plane truss bridge has to be designed for the above site condition.</li>

<li>The bridge has to be designed for a load capacity 800 N/m with a safety factor of 1.5. </li>

<li>Design of bridge should be such that it could be fabricated using materials and tools provided on the site.</li>

<li>The deck of the bridge must be 60x250 cm in dimension.</li>

<li>The bridge has to be single span that is it will only be supported from the two end platforms shown in the above figures.</li>

<li>No part of the bridge should touch ground anywhere even when it is loaded.</li>

<li>Every member in the truss should be a two force member that is it should be hinged at two points only.</li>

<li>Maximum overlap between two members of the structure cannot be more than 3cm.</li>
<li>Minimum height of the deck from the ground should be 0.5 m.</li>
<li>Minimum clearence over the deck of the bridge should be 0.5 m.</li>


</ul></p>

<a name="require"></a>

<h1>Tender Requirements</h1>

<p>The detailed analysis of following aspect of the bridge design are required to be submitted in the form of sealed tender.</p>

<h3>1. Cost</h3>

<p>The cost of the bridge will be determined using following values</p>

<p><ul>

<li>Aluminium pipe 800 Rs/ft</li>

<li>Aluminium angle 1200 Rs/ft</li>

<li>wire 200 Rs/ft</li>

<li>Rs 200 per L joint </li>

<li>Rs 80/-  per 1-inch nut-bolt</li>
<li>Rs 160/- per 3-inch nut bolt</li>

<li>Rs 100/- per hole drilled </li>

</ul></p>

<h3>2. Deflection</h3>

<p><ul>

<li>Deflection from plane truss analysis is to be estimated for given 800 N/m loading at the center of the bridge span.</li>

<li>The above calculated deflection should be less that 2.5 cm.</li>

<li>The Bridge will be tested by applying 80 kg of static load in the central 1 m span of the bridge.</li>

<li>The deflection at the central line of the deck for the above loading must also be estimated with the same plane truss analysis method.</li>
<li>The modulus of rigidity of aluminium is to be taken as 69,000 MPa for above calculations.</li>
<li>The density of alumminium is to be taken as 2.7 g/cc for self weight calculations.</li>
<li>Assume following data for the calculations.<br>
Tensile Strength of Aluminium: 120 MPa.<br>
Tensile Strength of GI screws: 290 MPa.<br>
Shear Strength of GI Screws  : 260 Mpa
</li>
</ul></p>

<h3>3. Labour and time of construction</h3>

<p>An estimation of Labour and time required for constructing the bridge on the site is also required and this will be added as labour cost to your material cost estimation to calculate the final cost of the bridge. The total time required for the fabrication of bridge should not exceed 8 hours.</p>

<p>Cost of labour must be taken as 400 Rs/hour per labour for cost calculation.</p>

<h3>4. Detailed Drawing of the Bridge Design</h3>

<p>A detailed hand drawn drawing showing various cross-section of the bridge must also be included in the tender. The drawing can be scanned and attached with the tender.</p>

<p>The tenders including all the above details must be submitted to <strong>adityavikram@techfest.org</strong> by <strong>31st December '05</strong>.</p>

<a name="grules"></a>

<h1>General Rules</h1>

<p><ul>

<li>Teams short listed on the basis of their tenders submitted will give a power point presentation of their design to judges during Techfest ’06.</li>

<li>Teams short listed from this presentation round will be provided with the above mentioned materials and teams would have to fabricate their design in the estimated time given by them in their tenders.</li>

</ul></p>

<a name="test"></a>

<h1>Testing</h1>

<p><ul>

<li>The fabricated bridge will be tested for its deflection at the center line of the deck by applying static load in the center 1 m span of the bridge.</li>

<li>A total of 80 kg of static load will be applied in given 1 m span of the bridge. </li>

<li>Teams must note that the loading due to such arrangement will not be uniform thus teams must also give an estimate of deflection of the center point of the deck under such loading in their tenders. </li>

</ul></p>

<a name="judge"></a>

<h1>Judging Criteria</h1>

<p>The final score of a team will be calculated based on following:</p>

<br>

<p><strong>50%</strong> weightage is for the <strong>tender specification</strong> and this score will be calculated in the following way :</p>

<h3>1. Material cost score</h3>

<p>Lets say M(min):- is the minimum material cost among all tenders shortlisted finally </p>

<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;M(max):- is the maximum material cost among all tenders shortlisted finally</p>

<p>And M :- is the material cost in your tender. </p>

<p>Then this score of your team will be calculated as:</p>

<p>M.C.S. = [1- (M – M(min) / M(max) – M(min)) ]50</p>



<h3>2. Labour cost score</h3>

<p>Lets say L(min):- is the minimum labour cost among all tenders short listed finally </p>

<p>                   L(max):- is the maximum labour cost among all tenders short listed finally</p>

<p>           And L          :- is the labour cost in your tender. </p>

<p>   Then this score of your team will be calculated as:</p>

<p>   L.C.S. = [1- (L – L(min) / L(max) – L(min)) ]50</p>

<h3>3. Estimated Deflection Score</h3>

<p>Lets say D(min):- is the minimum estimated deflection among all tenders shortlisted finally.</p>

<p>D(max):- is the maximum estimated deflection among all tenders shortlisted finally.</p>

<p>And D          :- is the estimated deflection in your tender.</p>

<p>The deflection corresponding to uniform static loading 800 N/m will be used here.</p>

<p>Then this score of your team will be calculated as:</p>

<p>D.S. = [1- (D – D(min) / D(max) – D(min)) ]50</p>

<p>The final Tender score = [M.C.S. + L.C.S. + D.S.] / 3</p>

<br>

<p><strong>50%</strong> weightage will be based on the actual <strong>bridge fabricated</strong> on the site by the team. These points will be given by the judges on the basis of following:</p>

<p><ul>

<li>The deflection of the bridge in the actual testing.( please refer <a href="./index.php#test">Testing</a> for details)</li>

<li>Degree of similarity between the design quoted in the tender and actual bridge fabricated.</li>

<li>Overall strength and aesthetics of the bridge.</li>

<li>Actual time taken for the final fabrication of the bridge.</li>

<li>Serviceability of the bridge.</li>

</ul></p>

<a name="win"></a>

<h1>Wining Criteria</h1>

<p>The team with the maximum final score will be declared winner.</p>

<a name="imp"></a>

<h1>Registration and Important dates</h1>

<p><ul>


<li>The registration to this competition has been <strong>closed</strong>.</li>

<li>All changes that will be made in the problem statement at any later stage shall be intimated to the participants through e-mail. Please keep yourself updated regularly.</li>

</ul></p>

<a name="elig"></a>

<h1>Eligibility</h1>

<p>All students with a valid identity card of their respective institutes are eligible to participate in "Bridged" at Techfest '06.</p>

<br>

<a name="team"></a>

<h1>Team Size</h1>

<p>A team can consist of a maximum of five students.</p>

<br>

For queries contact:<br>

Aditya Vikram Singh<br>

Manager, Concreate<br>

<a href="http://www.techfest.org/mail.php?email=adityavikram@techfest.org" target="_blank">adityavikram@techfest.org</a><br>

Ph. +91-98207 54704<br>

<br><br><br><br><br><br><br>

</div>

  

<?

echo_content("footer.txt");

?>