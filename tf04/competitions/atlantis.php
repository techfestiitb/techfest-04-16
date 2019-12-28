<?php
include('http://www.techfest.org/box.php?text=ATLANTIS');
?><a name=back></a><br><font color=#293932><b>City Design Competition.</b></font><br>
<br>
<p><img src=competitions/atlantis_general.jpg border=0 vspace=20 
hspace=20 align=right>

Ever heard the legend about the lost city of Atlantis? For the uninitiated, this fabled city was mentioned by the Greek philosopher Plato in two of his dialogues 'Timaeus' and 'Critias'. The dialogues are conversations between Socrates, Hermocrates, Timaeus and Critias. The tale centers around Solon, a great Greek legislator and poet who travels to Egypt. While there, he hears the story of Atlantis from the priests. Legend has it that there existed an island nation in the middle of the Atlantic Ocean populated by a noble and powerful race the kings of which by virtue of its great wealth and flourishing trade and commerce held sway over many other continents in the world. The residents were peaceful and lead a simple, pious life. But, as is inevitable, greed, avarice and corruption sowed their seeds into the minds of these people. When the Gods saw their immorality and their vanity, they decided to punish the Atlanteans. One day and one night was all it took. A huge surge and they all disappeared --- no Atlanteans, no city, no civilization. <br>
<br>
But don't fret. The Gods have decided that the Atlanteans have suffered 
the retribution due to them and are considering a proposal to give them another chance. And, holy cow!! They've chosen Techfest 2004 at IITB in order to finalize plans about layout and construction of this new city. So, here's a golden opportunity for you to sort of ...err, with no offence to the omniscient Almighty... PLAY CREATOR!! Isn't that what you've always wanted to do?!! So, buck up and start to go earnestly through the problem statement given below and show that you can beat the Gods at their own game!!!
<br><br>
Yes, it is easy. You have to design a city with an economically optimized 
and efficient road network. You need some engineering 
intuition and a 
lot of common sense. But common sense is the rarest sense. Go ahead to create your own city! 
<br>Total Cash Prize of Rs. <b>12,000</b> to be won.</p>
<a href=#prob class=greylink>Problem Statement</a><br>
<a href=#rules class=greylink>General Rules</a><br>
<a href=#design class=greylink>Design Guidelines</a><br>
<a href=#data class=greylink>Useful Data</a><br>
<a href=#deliver class=greylink>Deliverables</a><br>
<a href=#judge class=greylink>Judging Criteria</a><br>
<a href=main.php?file=competitions/gravity.php class=greylink>Gravity Model</a><br>
<a href=main.php?file=competitions/atlantis_faq.php class=greylink>Some FAQ's</a><br>
<a href=main.php?file=competitions/atlantis/sample.php 
class=greylink>A Sample Solution</a><br>
<a href=#download class=greylink>Download Rules</a><br>
<a href=tell/mailto.php?to=vamsi@techfest.org 
class=greylink>Queries</a><br>
<a href=register/allregister1.php?comp=atl class=greylink>Register</a><br>
<br>
<br><p><strong><a name=prob><font color=#293932 ><b>PROBLEM STATEMENT</b></font></a></strong>
<br><br>The problem consists of two parts:
<ol>
<li>
Designing a city for a given population and geographical area, taking into account the physical features, terrains, density and  other relevant information provided underneath.</li>
<br><br>
<li>Constructing the road network in the city. You have to connect 
different zones in such a way, that the sum of construction cost and the 
user money cost (traveling cost) comes to a minimum.<br></li>
</ol><br></p>
<strong><a name=rules><font color=#293932 ><b>GENERAL RULES:</b></font></a></strong>
<br><br><ol>
<li>Students currently enrolled for up to an undergraduate/postgraduate program at their institute are eligible for the competition.
</li><br><br>
<li>This competition requires compulsory pre-registration. Each team has to <a 
href=register/allregister1.php?comp=atl class=greylink>register</a> online at our site when they start working on the 
problem. </li><br><br>
<li>Number of members per team should not exceed two.
</li></ol><br>

<a name=design><font color=#293932><b>DESIGN GUIDELINES</b></font>
<br><br>
Designing a city will include demarcation of the area into zones - residential, commercial, agricultural and industrial. The maximum numbers of zones permissible in each type are listed below -<ul type=disc>
<li>Residential zones - R1, R2, R3 ... max 7 zones</li><br>
<li>Commercial zones - C1, C2, C3 ... max 5 zones</li><br>
<li>Agricultural zones - A1, A2, A3 ... max 5 zones</li><br>
<li>Industrial zones - I1, I2, I3 ... max 5 zones</li><br>
</ul>
However you can make lesser number of zones in each. Airport and Railway Station are already been marked in the map.<br><br>
Designing the Road Network for the city will include the following - 
<br><ol><li>
The network designed must be a 'Spanning Tree Network' i.e. there is only 
one way / path to travel from one zone to another and there is no loop / alternative path to traverse to the other zones. 
<br><br></li>
<li>All roads should start from and terminate at the center of the zones. 
(Minor roads within the zone can be neglected and need not be shown in the design).Center of the zone can be taken out using geometry for symmetrical shapes or by calculating the center of the largest inscribed circle in that zone. It should be noted that concave shape of the zones are not allowed.
<br><br></li>
<li>A bridge may have to be constructed for crossing over the river while 
tunnels have to be constructed to enable passage through the mountains. 
<br><br></li>
<li>In constructing the road over the railway line or an already laid 
road, an extra cost will be added to the construction cost (as explained 
underneath).</li></ol>

<br>

<br>
<strong><a name=data><font color=#293932 ><b>USEFUL DATA & 
MAPS:</b></font></a></strong><br><br>
The following figure shows the physical features of the city:<br><center>
<a href=competitions/atlantis.jpg target=_blank><img border=0 src=competitions/atlantis_small.jpg hspace=10 vspace=10 
align=center></a><br>
Download the above map in <a href=competitions/atlantis.dwg target=_blank 
class=greylink>AutoCAD format</a>.</center>
</ul>

<ol><li>North direction is in the upward direction.<br></li>
<li>River originates at the hills and bifurcates further down.<br></li>
<li>Wind blows in the north-west direction.<br></li></ol>


Total Population of the city is 10,000 and its area is of 100 square 
km.<br><br>

Initially the population density of the Residential Zone is 500 people per
square km when all the people are there. Then as the day progresses people
go to different areas where the population densities become as given
underneath:  <ul>
<li>Industrial Area       250 people per square km</li><br>
<li>Commercial Area   600 people per square km.</li><br>
<li>Agricultural Area   30 people per square km.</li></ul>
Occupation distribution of the population
<ul><li>30% work in industrial zone</li><br>
<li>12% work (go for shopping) in commercial zone</li><br>
<li>4.5% work in agriculture zone</li><br>
<li>5% going to Railway Station</li><br>
<li>0.5% people going to Airport</li></ul>
Cost of the road network
<ol><li>
Construction money: It is the cost of constructing the roads. Please see the table below for the exact costs of tunnels, 
bridges, road over rail and road over road.<br>
<ul type=disc><li>Simple 2 lane road costs Rs. 2 crores per km.</li><br>
<li>Additional cost of making bridge over the river is Rs. 1 crore per km. </li><br>
<li>For making tunnel across the mountains the additional cost will be Rs.10 crores per km.</li><br>
<li>In case of road over rail/road the additional cost is Rs  0.25 
crore.</li></ul><br><br>
</li><li> User money: It is cost that comes into account every time you 
travel on 
the road (per day basis). User money includes all factors like time of 
travel, congestion, pollution, traffic et all. This is the most important 
factor for the long term betterment of society. It can be taken as 6 
Rupees per km. per person.  Consider movement of population only from 
Residential zones to Commercial, Agricultural Industrial zones, Airport 
and Railway Station and the return journey back to the Residential zones. 
Movement between Commercial, Industrial, Agricultural 
zones, Airport and Railway Station need not be considered. To obtain the 
User Money refer the <a href=main.php?file=competitions/gravity.php 
class=greylink><b>Gravity Model</b>.</a><br><br>
The total cost incurred on road network for 10 years will be calculated 
as:
<br><center>
Cost = Construction Cost + User Money x 365 x 10</center>
<br><br></li></ol>


<br>
<p><strong><a name=deliver><font color=#293932 ><b>DELIVERABLES:</b></font></a></strong>
<br><br>
<ol>
<li>AutoCAD file showing in the design of the city. The AutoCAD file must contain atleast the following layers:
<br>

<ul type=disc><li>
Layer 1: All Physical features (use the file provided by us).</li>
<li>Layer 2: Residential Zones </li>
<li>Layer 3: Industrial Zone</li>
<li> Layer 4: Commercial Zones</li>
<li> Layer 5: Road Network (with names L<sub>1</sub>, L<sub>2</sub> ... 
L<sub>N</sub>)</li>
<li> Layer 6: All the Dimensions of the road links (in meters)</li>
</ul><br></li>
<li>
Worked out solution showing relevant calculations and working out of the 
infrastructure required, data assumed and any other footnotes in a maximum of 7 A4 sheets. All junctions, bridges, Road over Rail (RoR), etc. should also be explained in your scheme.

</li><br><br>

<li>
PowerPoint presentation highlighting the salient features of the design and the motivation behind it in maximum of 15 slides.
</li><br>
</ol>

It is preferable that the participants also make PDF back-up of their 
AutoCAD and PowerPoint files. All the Deliverables must be written on a CD. 
<br>

<br>
<i>Note:</i> <font color=red>The Powerpoint presentation is to be brought 
for the second 
stage participants only.</font><br><br> 
<i>Note:</i> <font color=red>For first stage submissions, deliverables can 
be mailed as an 
attachment
 to 
vamsi@techfest.org</font>.
<br><br><br>
<strong><a name=judge><font color="#293932"><b>JUDGING CRITERIA:</b></font></a></strong>
<br><br>
<ol>
<li>
All participants will have to submit the above deliverables (the AutoCAD file and a brief worked out solution) before
10th January. The elimination will be done on the basis of the city design and on the cost incurred in designing the
network. </li><br><br> 
<li> The list of the short
listed candidates would be made available at our website, latest by 15th January, 2004. The short listed entries can
also improve upon their solution which they have sent for the elimination round. </li><br><br> <li>The short listed
entries will have to give a presentation during Techfest 2004 (24<sup>th</sup> - 26<sup>th</sup> January, 2004) before
the panel of judges.</li><br><br> <li> The judging of the selected entries will be on the basis of the their 
<ul type=disc> <li>Design of the City</li><br> <li>Road Network and its cost</li><br> <li>Presentation of the solution</li></ul> Emphasis will 
also be on creativity, aesthetic sense and 
rationality
of the idea along with the design.</li></ol> <br> <br> 
<a name=download><font color=#293932><b>DOWNLOADS:</b></font></a><br><ul><li>
<a class=greylink href=competitions/atlantis.pdf target=_blank>Download Rules</a>&nbsp;<img src=media/pdficonsm.gif alt="Adobe Icon"></li><li>
<a class=greylink href=competitions/atlantis.dwg target=_blank>Map in Autocad format</a></li><li>
<a class=greylink href=competitions/atlantis.jpg target=_blank>Map in jpeg format</a></li></ul>


<br><font color=#293932><b>IN CASE OF QUERIES, CONTACT:</b></font>:<br>
  <br>
  P. Vamsi Krishna<br>
  Manager, Techfest<br>
  <a 
href=tell/mailto.php?to=vamsi@techfest.org>vamsi@techfest.org</a></p>

<table width=100%><tr><td width=50% align=left>
<a href=#back class=greylink><b>Back to Top</b></a></td><td align=right
width=50%>
<a href=main.php?file=competitions/competitions.php
class=greylink><b>Other Competitions</b></a></td></tr></table>








