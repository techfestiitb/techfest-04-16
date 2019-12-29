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

echo_content("side_grip.txt");
echo_content("side_update.txt");

?>

 <div id="content">

 



<a name="mspec"></a>

<h1>Machine Specifications</h1>

<ul>



 	<li>The machine should fit within a box of dimensions (400x300x400) mm at the start of the game. The external device which is used to control the machine manually is not included in the size constraint.</li>

	<li>The machine must use power converted from a source of electrical energy. Mechanical force/power should not be transferred to the machine from outside. Chemicals, compressed gas and rockets, fuels, combustion power methods, etc. are strictly prohibited. However commercial batteries like dry cells and lead acid cells are permitted.</li>

 	<li>The machine may or may not have an onboard source of power. External source of electrical power is allowed.</li>



</ul>

<a name="grules"></a>

<h1>Rules of the Game</h1>

<ul>

	<li>The teams are allowed to manually engage the machine to the frame at the starting zone shown in the figure.</li>

	<li>There is no restriction on the size of the machine after the machine has been checked for dimensions.</li>

 	<li>The match will start from just behind the green mark on the grid. The machine has to transverse the grid to reach the marked yellow area (Zone A).</li>

 	<li>The machine has to then pick up a cylindrical object of diameter 70 mm and height 70 mm. The weight of the cylindrical object will be around 300-350 gm.</li> 

 	<li>While picking up the cylinder the part of the machine which is in contact with the frame has to be contained in the Zone A marked as yellow, on the grid.</li> 

 	<li>The machine can use any mechanism whatsoever to pick up the object. However chemicals, compressed gas and rockets, fuels, combustion power methods are strictly prohibited. However commercial batteries like dry cells are allowed.</li>

 	<li>The machine has to then move forward carrying the cylinder and place the object in the hollow cylindrical container provided.</li>

 	<li>While placing the cylinder in the slot provided the part of the machine which is in contact with the grid has to be contained in Zone B marked as red, on the grid.</li>

 	<li>The machine is allowed to pick up the object again in case it drops the object before placing it in the slot but with certain penalty (refer point structure).</li>

 	<li>The clock will not be stopped at any instant of the game.</li>

 	<li>The time limit for each match is 15 minutes. The match will continue till both the machines complete the task or either of the machines is disqualified or the time limit of 15 minutes is reached. At the end of the match the machine which completes the task in minimum time, after taking into account the penalties is declared as the winner. If both the machines are not able to complete the task then the machines will be judged on the basis of points earned. But in case of equal points there will be rematch(es).</li>

 	<li>The machine should <strong>NOT</strong> be made using Lego parts, assemblies from toys etc. However, the remote control systems from toys can be used. Also, standard kits like the Basic Stamp kits may be used. Please note that readymade wheels and gearboxes may be used.</li>



</ul>

<a name="pstruc"></a>



<h1>Points Structure</h1>

<ul>

	<li>The tournament will be played on knockout basis. If any team is disqualified for any reason, the opponent team will get a walkover to the next round.</li>

 	<li>Crossing Intersection1 +100 points. Please note that crossing the intersection means the entire part of the machine which is in contact with the grid should cross the intersection. Judges’ discretion will be used in case of any ambiguity as to whether the machine has crossed the intersection or not.</li>

 	<li>Crossing Zone A with the cylinder + 200 points. Here crossing the zone means the entire part of the machine which is in contact with the grid should cross the zone. However there will be no points for crossing the zone without the cylinder</li>

 	<li>Crossing Intersection2 with the cylinder +150 points. </li>

 	<li>Reaching Zone B with the cylinder. +150 points. Here reaching the zone means the entire part of the machine which is in contact with the grid should be contained in that zone.</li>

 	<li>Placing the cylinder in the specified slot while the machine being in Zone B finishes the task. </li>

 	<li>Penalty for crossing the specified zone while picking up or placing the cylinder –50 points (if the machine doesn’t finish the task) or 5% of the total time taken (if the machine finishes the task).</li>

 	<li>In case the machine drops the cylinder :-

<ol><li>In case the cylinder hits the flat face (top face) of the platform where it was initially placed, the participant will be allowed to place the cylinder at its initial position and the machine will be required to pick it up again. There will be no additional time/points penalty.</li>

	<li>In case the cylinder does not hit the platform, the participant will be allowed to manually engage the cylinder to the machine, with a penalty of –50 points (if the machine doesn’t finish the task) or 5% of the total time taken (if the machine finishes the task) for each time the cylinder falls. The machine will not be allowed to make any movement from the instant it drops the cylinder till the cylinder is engaged to it again. </li>

	<li>Please note in case the cylinder falls more than twice, the machine will be disqualified.</li></ol></li>

 	<li>If the machine falls from the grid, the participant will be allowed to engage the machine to the grid at the end of the previous intersection with a penalty  of  –100 points (if the machine doesn’t finish the task) or 10% of the total time taken (if the machine finishes the task) every time the machine falls.</li> 

 	<li>Please note in case the machine falls more than twice, the machine will be disqualified.</li>

 	<li>The total points could be negative.</li>

</ul>

<a name="gnrules"></a>

<h1>General Rules</h1>

<h3>Sensors and Electronics</h3>

<p>The teams can use sensors (if they so desire) to sense any physical parameters. Interference due to flash lights/arena lighting/daylight should be taken into consideration. For the autonomous robot machine, the participants may/may not use sensors and microprocessors. However, standard Lego gear box and kits like the Basic Stamp kits may be used.</p>

<h3>Power Supply</h3>

<p>Normal 220 ± 2% volt 50 Hz AC extension boards will be available at the venue. You should fetch your own eliminators/adaptors. No specialized demand should be made. Use of heavy equipment like compressors is banned. The power cords connecting a machine to the power supply must be slack at all times. Likewise the Control Cords must also be slack. Thus, please ensure that all cords are fairly long. Use of devices which can transfer manual power to machine directly is not permitted, for example use of clutch wires or brake wires is not permitted.</p>

<h3>Safety</h3>

<p>The machines you build will be first checked for size and safety. The machine should not cause electrical power breakdowns. The robots must not contain any combustible, corrosive, or otherwise dangerous materials. No explosive, compressive or expansive, either internal or external is permitted. There is a risk of compressed containers rupturing and creating shrapnel therefore they are not allowed. Any robot whose strategy or operation is considered dangerous can be disqualified by the judges at their discretion.</p>

<h3>Breakdowns/Timeouts</h3>

<p>There is no provision for breakdown or timeouts in a single match. Your machine must be sturdy enough to participate in several rounds, leading to the finals. </p>

<h3>Fouls/Penalties</h3>

<ul>

<li>Team members are not permitted to touch either their machines (except for the case when the participant is engaging the machine or the cylinder) or those of their opponents once the game begins. The penalty for doing so is disqualification on judges’ discretion. No addition or removal of any part(s) is allowed in any of the stages.</li>

<li>The robots are not allowed to leave part(s) on any part of the arena. In case some part of the machine falls on the arena, the penalty (including disqualification) will be based on judges’ discretion.</li>

<li>Machines damaging any part of the arena will be disqualified. Damaging does not include unintentional scratch(es) on the painted surface by the machine. Once again judges’ discretion will be used.</li>

<li>During the game run if a machine is static continuously for a minute then the machine is disqualified.</li>

</ul>

<a name="mnames"></a>

<h3>Machine Names</h3>

<p>The name of your machine must be prominently displayed on the machine.</p>

<h3>Sportive and Friendly Games</h3>

<p>Intentional damage to the opponent's machine is not allowed. Doing so will attract disqualification on judges’ discretion.</p>

<h3>Scratching a Team</h3>

<p>Any team that is not ready to play at the time specified will be scratched automatically. This applies to Eliminations, Prelims and Finals rounds. 15 minutes will be allowed for the final adjustments.</p>

<h3>Demonstration to Judges</h3>

<p>Machines will have to be demonstrated to judges (who will evaluate the machines for other prizes) at a time and date specified in the schedule which will be put up. Any team that does not turn up at the specified time will not be considered for the above special prizes.</p>

<h3>Demonstration of Machines at Final</h3>

<p>The Finals will be conducted in front of a large audience. Teams which have lost in the Prelims will be required to demonstrate their machines (one minute per machine) to the audience at that time. The date, time and venue will be specified at the time of competition.</p>





<a name="cstruc"></a>

<h1>Structure of Competition</h1>

<p>This will be stated at a later date. Registered participants will be notified by email.</p>

<a name="qround"></a>

<h1>Qualifying Round</h1>

<ul>



 	<li>The contest will comprise of a qualifying round based on video eliminations for the finals to be held at IIT Bombay, Mumbai, India. </li>

 	<li>For the video eliminations, the teams must send a parcel containing the following to the address mentioned below. Contents of the parcel to be sent: 

	<ol>
		<li>The name of the machine, names of team members as well as the name of the institution.</li>

		<li>An abstract of not more than two A4 sheets (one side) covering essentially the principle used by the machine, the approximate time taken to complete the task and the projected final cost of the machine. </li>

		<li>A Compact Disc (C.D.)/ D.V.D containing the video of the machine in action. It should essentially contain the following: 

		<ul>

			<li><p>A portion of this tape must be an uninterrupted, shot in one angle and unedited recording and showing the machine first moving for at least 600 mm on arena shown below and then crossing an intersection as shown below.</p>

			<table border=0 align="center" width="100%">

<tr><td align="center"><img src="./img/path.gif" border=0 align="center"></td></tr>

</table>

			<p> The pipes used should be standard GI pipes of nominal diameter 0.75 inch and external diameter 26.5 ± 1 mm. For convenience the participants can use cross.</p>

			<table border=0 align="center" width="100%">

<tr><td align="center"><img src="./img/pipe1.gif" border=0 align="center"></td></tr>

</table>

			</li>

			<li>A detailed look at and explanation of the machine, including close-up shots and shots from various directions. </li>

			<li>Participants are essentially required to have a narration (in English/Hindi) also along with the video. </li>


		</ul>

		</li>

		<li>A signed letter from the Dean/Head of your institute granting permission for you to participate in G.R.I.P. at Techfest-2006.<br>

		Address:<br>

		Techfest 2006,<br>

		Student Gymkhana, <br>

		IIT Bombay, Powai,<br>

		Mumbai 400076<br>

		INDIA<br>

		Tel-91-22-2576 4045, 91-22-98202 54064<br>

		Fax-91-22-2572 3480<br>

		</li>	

	

	</ol>

	</li>

	<li>The criterion for selection in qualifying round shall include completion of the tasks as stated above, approximate time taken to do the same as well as uniqueness and design of the machine.</li>

 	<li>The contents of the parcels (the description of your machine and the video) would be kept strictly confidential.</li>

 	<li>The last date for receipt of parcels from outside India is <strong>10th December, 2005</strong>,              

            while that from within India is <strong>25th December, 2005</strong>.</li>  
	<li> 	The teams will not be allowed to participate if the parcels are not received in time. We shall not be responsible for any postal delay or any irregularity resulting in non-delivery of the parcels.</li>      

 	
 	<li>The results of the qualifying round will have no contribution towards the final competition to be held from 20th – 22nd January 2006. </li>

	 	<li>The organizers will not provide any system like microprocessor kits, computers etc. at the venue.</li>

 	<li>The organizers reserve all rights to change any or all of the above rules as they deem fit. Change in any rule, if any will be highlighted on the website. </li>

 	<li>The decision of the judges and the organizers will be final and binding.</li>

 	<li>E submissions are acceptable on special request.</li>





</ul>















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