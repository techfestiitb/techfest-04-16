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
echo_content("side_hover.txt");
echo_content("side_update.txt");
?>
 
 <div id="content">
 
 <h1 id="toptext">Hover Junior (for School students upto 10 + 2 Only)</h1> 
 <p><img src="./img/hover.gif" border="0" align="right" hspace="5" vspace="5">A battle royale is in store! Ride your hovercraft venturing out fearlessly in enemy territory with a mission at hand. With an ambush (probably awaiting) and rough terrain in store for you, take out the enemy base for earning the ultimate glory – “The Roll of Honour”. Conquering the toughest mission you’ve ever faced is vital, as the nation’s future hangs in the balance...</p>
 <p><strong>Note:</strong>Registrations open for <strong>Mumbai teams only</strong>. No <strong>accomodation</strong> will be provided for teams registering from now on. </p>
 <p>Prizes worth <strong>Rs 10,000</strong> at stake.</p><br><br>
 
 <a name="prob"></a>
 
 <h1>Problem Statement</h1>
 <p>Make a hovercraft (a vehicle or craft capable of moving over water or land on a cushion of air) that travels along the terrain provided, clears the pit and crosses over to the other side of the lake to reach the Pebble islands. Once there, it needs to knock down the enemy flags and return to the base.</p>
 <p>Click <a href="hovercraft.zip">here</a> to download instructions for making a hovercraft.</p>
 <a name="game"></a>
 <h1>Game</h1>
 <p>The hovercraft has to start from the starting base line, move on to the flat surface and descend down the slope (of around 5 degrees). It then has to arrive at the flat portion and then cross the pit. </p>
 <p> After overcoming the pit, the hovercraft then needs to move over the water surface and reach the enemy island as shown in the figure. Then as a part of destroying enemy posts, the hovercraft needs to knock down the three (loosely fixed) flags placed in their respective side of the arena and then come back to the starting position.</p>
 <a name="arena"></a>
 <h1>Arena</h1>
 <table border=0 align="center" width="90%">

<tr><td align="center"><a href="./arena.php"><img src="./img/topview.gif" border=0 align="center"></a></td></tr><tr><td align="center"><a href="./arena.php">Top View</a></td></tr>
<tr><td align="center"><a href="./arena.php"><img src="./img/side.gif" border=0 align="center"></a></td></tr><tr><td align="center">Side View</td></tr>

</table>
<br>
<p>Click <a href="./arena.php">here</a> for details of the arena.</p><br>
<a name="rules"></a>
 <h1>Rules of the game</h1>
 <p><ol type="1">
 <li>The tournament will be played on a knockout basis with two teams competing against each other at a time. The team which completes the task and comes back first will be declared as the winner. All the three flags have to be knocked down in order to be eligible as a winner.</li>
 <li>Team members can place the hovercraft in any orientation as desired at the start of the game.</li>
 <li>The path that hovercraft needs to travel during the game has been clearly shown in the figures with dimensions.</li>
 <li>In the case where both the teams fail to complete the mission, winner will be decided according to the following point structure.

	<table width="90%" cellpadding="0" cellspacing="5" border="0" >
	<tr><td align="left" width="5%">a. </td><td align="left" width="75%">Descending down the slope</td><td align="left" width="20%">100 pts</td></tr>
	<tr><td align="left" width="5%">b. </td><td align="left" width="75%">Crossing the pit</td><td align="left" width="20%">50 pts</td></tr>
	<tr><td align="left" width="5%">c. </td><td align="left" width="75%">Crossing the lake</td><td align="left" width="20%">200 pts</td></tr>
	<tr><td align="left" width="5%">d. </td><td align="left" width="75%">Knocking down the first flag </td><td align="left" width="20%">100 pts</td></tr>
	<tr><td align="left" width="5%">e. </td><td align="left" width="75%">Knocking down the second flag   </td><td align="left" width="20%">50 pts</td></tr>
	<tr><td align="left" width="5%">f. </td><td align="left" width="75%">Knocking down the third flag   </td><td align="left" width="20%">50 pts</td></tr>

	<tr><td colspan="3" align="left"><p>Further points will be awarded only if all the flags have been knocked down</p></td></tr>
	<tr><td colspan="3" align="left"></td></tr>
	
	<tr><td align="left" width="5%">g. </td><td align="left" width="75%">Crossing the lake on the journey back</td><td align="left" width="20%">200 pts</td></tr>
	<tr><td align="left" width="5%">h. </td><td align="left" width="75%">Crossing the pit on the journey back  </td><td align="left" width="20%">50 pts</td></tr>
	<tr><td align="left" width="5%">i. </td><td align="left" width="75%">Ascending up the slope </td><td align="left" width="20%">250 pts</td></tr>
	<tr><td colspan="3" align="left"><p>In a single game, points can be earned only once from any stage. The points for each stage will be added up to get the final score of the team and the team with more points will be declared as the winner. </p></td></tr>
	<tr><td colspan="3" align="left"><p>In case of a points tie, the time will be taken into account for scoring final points. The team scoring their final points in the least time will be declared as winner.</p></td></tr>
	</table>
	</li>
	<p>The point structure mentioned above is of no concern in the case where any one of the team completes the mission and gets back to the base after knocking down all the flags on island.</p></ol></p>
<a name="mspecs"></a>	
 <h1>Machine Specifications</h1><p>
 <ol type="1">
	<li><p>The hovercraft should fit within a box of dimensions (40x30x30) cm at any and every given point of the game. The external wired/wireless remote which is used to control the hovercraft manually is not included in the size constraint.</p></li>
	
	<li><p>The hovercraft must use only mechanical power or mechanical power converted from a source of electrical energy. Only commercial batteries or eliminators can be used. Use of air blowing devices such as vacuum cleaners or hair dryers is not allowed.</p></li>
	  
	<li><p>The machine has to be necessarily controlled by some wired / wireless control mechanism at every stage.</p> </li>
	
	<li><p>The air cushion generated by the hovercraft <strong>must</strong> be strong enough to let it move upon the rough terrain like sand, small pebbles as well as water. While moving, it must always satisfy the basic concept of hovercraft which makes it a vehicle that is supported and propelled by a cushion of air. </p>
	<p>Participants can not use wheels or any other mechanism other than the basic mechanism used by hovercrafts.</p>
	<p>Any discrepancies in the above defined concept would be looked after and judges will reserve the right to disqualify the machine in question.    </p>
	</li>
	
	
	<li><p>The cords connecting the hovercraft to the wired remote <strong>must</strong> be slack at all times during the competition. Thus, please ensure that all cords are fairly long.</p></li>
	
	<li><p>Use of devices which can transfer manual power to machine directly is not allowed, for example use of clutch wires is not allowed.</p></li>
  </ol></p>
  <a name="gnrules"></a>	
 <h1>General Rules</h1>
 <p><ol type="1">
<li>Every team has to register online at our website for the competition. A registration number will be allocated to the team on registration which shall be used for future reference. Click <a href="http://www.techfest.org/register/hover_junior.php">here</a> to register.</li>
<li>Registrations are open for <strong>Mumbai teams only</strong>. No accomodation will be provided for teams registering from now on. The registration for Mumbai team closes on <strong>10<sup>th</sup> January, 2006</strong>.</li>
<li>POWER SUPPLY: Normal 230 V / 50 Hz extension boards will be available at the venue. You should fetch your own eliminators/adaptors. No specialized demand should be made.</li>

<li>Team members are not permitted to touch either their machines or those of their opponents once the game begins. The penalty for doing so is disqualification. </li>

<li>The structure of the qualification round and rest of the competition will be announced at a later date and mailed to the registered participants.</li>

<li>Machines will have to be demonstrated to judges (who will evaluate the machines for other prizes) at a time and date specified in the schedule which will be put up. Any team that does not turn up at the specified time will not be considered for the above special prizes.</li>

<li>The teams must adhere to the spirit of healthy competition. The teams must not damage the opponent's machine in any way. Judges reserve the right to disqualify any team indulged in misbehavior. </li>

<li>The name of your machine must be prominently displayed on the machine.</li>

<li>The machines you build will be first checked for size and safety. The machine should not cause electrical power breakdowns.</li>

<li>The organizers reserve all rights to change any or all of the above rules as they deem fit.</li>

<li>Judges decision shall be treated as final and binding on all. </li>

 
 
</ol>
 </p>
 <a name="elig"></a>	
 <h1>Eligibility</h1>
 <p>All students with a valid identity card of their respective Schools/Junior colleges are eligible to participate in ‘Hover Junior’ at Techfest ‘06.</p>
 <a name="team"></a>	
 <h1>Team</h1><p>
 <ul>
 	<li>Each team can have a maximum of 3 team members.</li>
	<li>We recommend, for this problem statement, the team of students be guided by their teacher for making the hovercraft. </li>
	<li>Students of different schools/junior colleges can come together and form the 3 member team.</li>
 </ul></p>
 <a name="imp"></a>	
 <h1>A few important links</h1><br>
 <a href="http://www.hovercraftmodels.com/How_a_Hovercraft_works.htm" target="_blank">http://www.hovercraftmodels.com/How_a_Hovercraft_works.htm</a><br>
 <a href="http://www.discoverhover.org/abouthovercraft/works.htm" target="_blank">http://www.discoverhover.org/abouthovercraft/works.htm</a><br>
 <a href="http://www.d155.org/cg/acad/tech_2.htm"target="_blank">http://www.d155.org/cg/acad/tech_2.htm</a><br>
 <a href="http://www.iit.edu/~smile/pl95m7.html" target="_blank">http://www.iit.edu/~smile/pl95m7.html</a><br>
 <a href="http://www.neoterichovercraft.com/general_info/historyof.htm" target="_blank">http://www.neoterichovercraft.com/general_info/historyof.htm</a><br>
 <a href="http://www.iit.edu/%7Esmile/pl95m7.html" target="_blank">http://www.iit.edu/%7Esmile/pl95m7.html</a><br>
 <a href="http://travel.howstuffworks.com/hoverboard1.htm"  target="_blank">http://travel.howstuffworks.com/hoverboard1.htm</a><br>
 <a href="http://www.britanica.com" target="_blank">http://www.britanica.com</a><br>
 <a href=" http://www.sciencemag.org/cgi/content/full/297/5581/503" target="_blank">http://www.sciencemag.org/cgi/content/full/297/5581/503</a><br>
 
	
	
	
	
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
