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
echo_content("side_micromouse.txt");
echo_content("side_update.txt");
?>
 <div id="content">
     <h1 id="toptext">Micromouse - Masters of the Maze</h1> 

<p>In this contest the contestant or team of contestants design and build small self-contained robots (Micromice) to negotiate a maze in the shortest possible time.
</p>
<p>Micromouse is an autonomous vehicle designed to get to the centre of a maze in the shortest possible time. A Micromouse is a device with a chassis; a drive motor or motors to move it; a steering and turning method, sensors to detect the presence or absence of maze walls; sensors or control logic to oversee the action of the rest and keep the vehicle 'on track' or to solve the maze; batteries to provide power.
</p>
<p>Prizes worth <strong>$1000</strong> to be won.</p>
<p>Registration for this competition has been <strong>closed</strong>.</p>
<a name="spec"></a>
<h1 id="toptext">Maze Specifications</h1>
<ul>
    <li>The maze shall comprise 16 x 16 multiples of an 18 cm x 18 cm unit square. 
      The walls constituting the maze shall be 5 cm high and 1.2 cm thick. Passageways 
      between the walls shall be 16.8 cm wide. The outside wall shall enclose 
      the entire maze. </li>
    <li>The sides of the maze shall be white, and the top of the walls shall be 
      red. The floor of the maze shall be made of wood (plywood) and finished 
      with non-gloss black paint (black-board paint). (The brand and color numbers 
      of paints shall be declared). </li>
    <li>WARNING: Do not assume the walls are consistently white, or that the tops 
      of the walls are consistently red, or that the floor is consistently black. 
      Fading may occur. Parts from different mazes may be used. Do not assume 
      the floor provides a given amount of friction. It is simply painted plywood 
      and may be quite slick. </li>
    <li>The start of the maze shall be located at one of the four corners. The 
      starting square shall have walls on three sides. The starting square orientation 
      shall be such that when the open wall is to the "north", outside maze walls 
      are on the "west" and "south". At the center of the maze shall be a large 
      opening which is composed of 4 unit squares. This central square shall be 
      the destination. </li>
    <li>Small square posts, each 1.2 cm x 1.2 cm x 5 cm high, at the four corners 
      of each unit are called lattice points. The maze shall be constituted such 
      that there is at least one wall touching each lattice point, except for 
      the destination square. </li>
    <li>The dimensions of the maze shall be accurate to within 5% or 2 cm, whichever 
      is less. Assembly joints on the maze floor shall not involve steps greater 
      than 0.5 mm. The change of slope at an assembly joint shall not be greater 
      than 4. Gaps between the walls of adjacent squares shall not be greater 
      than 1 mm. </li>
    <li>Multiple paths to the destination square are allowed and are to be expected. 
    </li>
      </ul>
<a name="mspec"></a>
<h1>Mouse Specifications </h1>


<ul>
<li>A Micro Mouse shall be self contained. It shall not use an energy source employing a combustion process.
</li>


<li>Although the superstructure of the mice may 'bulge' above the top of the maze walls, mice must be subject to the following size constraints - width 25cm, length 25cm. There is no height limit. Mice must be completely self-contained and must receive no outside assistance.
</li>


<li>The method of wall sensing is at the discretion of the builder (contact, reflective etc). However, the mouse must not exert a force on any wall likely to cause damage (Judges can debar any machine if it is likely to cause damage to the maze in anyway). 
</li>


<li>The method of propulsion is at the discretion of the builder, provided that the power source is non-polluting. If the judges consider that a mouse has a high risk of damaging or sullying the maze they will not permit it to run. Nothing may be deposited in the maze.
</li>


<li>A Micro Mouse shall not leave anything behind while negotiating the maze. 
</li>


<li>A Micro Mouse shall not jump over, climb, scratch, damage, or destroy the walls of the maze. 
</li>
<li>The use of Lego kits in making the Micro Mouse is not allowed. </li>

</ul>


<a name="rules"></a>
<h1>Rules</h1>


<ul>

<li>Each team can have a maximum of four participants.</li>

<li>All contesting machines shall be kept in a cage before the maze is unveiled. 
</li>


<li>After the maze is unveiled, the mouse handler is given 1 minute, from the moment the mouse is taken out of the cage, to make any adjustments (if any) to the mouse Sensors. However, NO selection of strategies must be made and NO information on the maze configuration entered or captured into the memory.

</li>

<li>Each contesting MicroMouse is allocated a total of 10 minutes of access to the maze after the 1 minute sensor adjustment time. The maze-time clock will commence after the expiry of the 1 minute time limit even if the handler is still making adjustments to the sensors.

</li>

<li>Any time used to adjust a mouse between runs is included in the 10 minutes. Each run (from the start cell to the center zone) in which a mouse successfully reaches the destination square is given a run time. Each run shall be made from the starting square. The operator may abort a run at any time. If an operator touches the MicroMouse during a run, it is deemed aborted, and the mouse must be removed from the maze. If a mouse has already crossed the finish line, it may be removed at any time without affecting the run time of that run. If a mouse is placed back in the maze for another run, a Touch Penalty will be added. First prize goes to the mouse with the shortest official time which is calculated as:
<br>
Official Time = Run Time + Touch Penalty <br>
Touch Penalty = (N/5)*(Best Run Time)<br>
Where N = Number of touches prior to the best run. <br>

NOTE, again, that the 10-minute timer continues even between runs. Mice that do not enter the center square will be ranked by the maximum number of cells they consecutively transverse without being touched & the discretion of the Judges. All mice that enter the center square within their 10 minute allotment are ranked higher than those who do not enter the center square.
</li>


<li>The starting procedure of the mouse shall be simple and must not offer a choice of strategies to the handler. For example, a decision to make a fast run to the centre as time runs out must be made by the Micromouse itself. The starting procedure shall be submitted to the judges when the mouse is registered on the day of the contest.
</li>
<li>If a mouse 'gets into trouble' the handlers can ask the judge for permission to abandon the run and restart the mouse at the beginning (Touch penalty shall be added in this case). A mouse may not be re-started merely because it has taken a wrong turn - the judges' decision is final.
</li>
<li>After the maze is disclosed, the operator shall not feed ANY information on the maze into the MicroMouse.

</li>

<li>Do not make any assumptions about the amount of sunlight, incandescent light, or fluorescent light that may be present at the contest site.

</li>

<li>If no successful run has been made, the judge will make a qualitative assessment of the Micromouse's performance, based on distance achieved, 'purposefulness' versus random behavior and quality of control.

</li>

<li>The run timer will start when front edge of the mouse crosses the startline and stops when the front edge of the mouse crosses thefinish line. The start line is at the boundary between the starting unit square and the next unit square. The finish line is at the entrance to the destination square.

</li>

<li>Every time the mouse leaves the start square, a new run begins. If the mouse has not entered the destination square, the previous run is aborted. For example, if a mouse re-enters the start square (before entering the destination square) on a run, that run is aborted, and a new run will be deemed begun, with a new time that starts when the starting square is exited.

</li>

<li>The mouse may, after reaching the destination square, continue to navigate the maze, for as long as their total maze time allows.

</li>

<li>If a mouse continues to navigate the maze after reaching the destination square, the time taken will not count toward any run. Of course, the 10-minute timer continues to run. When the mouse next leaves the start square, a new run will start. Thus, for better "Run time", a mouse may make several runs without being touched by the operator. It should make its own way back to the beginning to do so.

</li>

<li>The judges reserve the right to ask the operator for an explanation of the MicroMouse. The judges also reserve the right to stop a run, declare disqualification, or give instructions as appropriate (e.g., if the structure of the maze is jeopardized by continuing operation of the mouse).
</li>


<li>A contestant may not feed information on the maze to the MicroMouse. Therefore, changing ROMs or downloading programs is NOT allowed once the maze is revealed. However, contestants are allowed to:
<ol>
<li>Replace batteries between runs 
<li>Adjust sensors (gain, position etc.)
<li>Change speed settings 
<li>Make repairs 
</ol>


<br>However, a contestant may not alter a mouse in a manner that alters its weight (e.g. removal of a bulky sensor array or switching to lighter batteries to get better speed after mapping the maze is declared is not allowed). The judges shall arbitrate.
</li>
<li>Feeding information about the maze in at anytime anyway after the maze is unveiled shall result in disqualification of the machine.

</li>

<li>The contestants should be prepared with the circuit diagrams, algorithms and code listings to convince the judges that any alteration they do in the total 11 minute span does not add topological information about the maze to the mouse.

</li>

<li>Color specs: white, black (black board paint) and red (P.O.RED), all Asian paints.
</li>

</ul>


<a name="elim"></a>

<h1>Elimination</h1>


<p>To qualify for the main competition your mouse should be able to navigate the given maze, this should be demonstrated by the ability of the Micromouse to cover at least 16 cells and make at least two turns. The total time given will be 3 minutes. All the Micromice have to clear the elimination round to participate in the competition. Other than this, the performance in the elimination round is of no significance to the contest.</p>






<h3>Important Announcements</h3> 

<p>USE OF COMPUTERS FOR CONTROLLING THE MICROMOUSE IS NOT ALLOWED. IT IS CLEARLY MENTIONED IN THE RULES THAT THE MICROMOUSE SHOULD ENTIRELY BE SELF CONTAINED, AUTONOMOUS AND SHOULD NOT RECEIVE ANY OUTSIDE ASSISTANCE. THIS IS BEING ANNOUNCED TO CLEAR ANY REMAINING DOUBTS. </p>
<a name="travel"></a>
<h1>Travel Reimbursement</h1>
<p>Travel reimbursement will only be given on one way fare(return).</p>
<h3>For Participants From Outside India</h3>
<ul>
<li>Travel Reimbursement for winners (1st position) will be given on economy fare air ticket starting from a minimum of Rs 20,000 per team to full fare subject to availability of funds.</li>
<li>Travel Reimbursement will be given to a maximum of 2 participants per team.</li>
</ul>
<h3>For Participants From Within India</h3>
<ul>
<li>Travel Reimbursement for winners (1st position) on one way fare will be given for train (3rd AC / 2nd Sleeper) or bus fare (AC / Non-Ac).</li>
<li>Travel Reimbursement will be given to a maximum of 3 participants per team.</li>
</ul>


For queries contact:<br><br>
Sumedh Risbud<br>
Manager, A.I.<br>
<a href="http://www.techfest.org/mail.php?email=srrisbud@techfest.org" target="_blank">srrisbud@techfest.org</a><br>
Ph. +91-98193 51759<br>
<br><br><br><br><br><br><br>
</div>




<?
echo_content("footer.txt");
?>