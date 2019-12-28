<a name=create><font color=#1f3d55><b>CREATING YOUR FIRST ROBOT:</b></font></a><br><br>
To create your own Robots, you need to perform the following steps:<br>

<ol>
<li>Create a java file with the name of your Robot (say BasicRobot)
using any text editor.<br><br></li>

<li>Now write a class BasicRobot which extends the basic Robot class.
Your java file at this stage would look something like this:<pre>
	File BasicRobot:
    	class BasicRobot extends Robot {
    	}</pre>
<br><br></li>

<li>Now you need to over ride the method execute of the Robot class.
In this method you can write the logic of your robot. This method would be 
called when your robot is first instantiated (created). You will have to call the update method of class Robot periodically, without which your 
robot won't move. The Robot dies when the execute method exits. So the snapshot of the file BasicRobot now would be:<pre>
	File BasicRobot :
	class BasicRobot extends Robot {
		public void execute () {
			while (true) {
				/*
				 * do something here
				 * for example find out the visible robots 
				 * and fire a bullet at them
				 */
				update();
			}
		}
	}</pre>
<br><br></li>

<li>Now you have to provide a package name which would distiguish your robot from the 
other robot in the arena. It is recommend that you use your Registration Id for the package name.
You are free to choose any package name but for submission, the package name should be your Registration ID. 
This directory is to be created under the robots directory.<br><br>

These are the steps for creating a package. Say you want to create a package called "samples".<br><ul>
<li>Create a directory with the name "samples"</li>
<li>Add the line "package samples" to the file BasicRobot.java (Note : This has to be the first line in the file)</li>
<li>Save the file BasicRobot.java in this directory.</li>
<li>This directory "samples" should be created in the directory robots.</li></ul><br><br></li>


<li>Now for the file to compile you have to import the robowars package shipped to you.
	So add the folowing line to the code:<pre>
		import robowars.*;
</pre>
So the snapshot of the file BasicRobot now would be:<pre>
	File BasicRobot :
	package samples
	import robowars.*;
	
	class BasicRobot extends Robot {
	public void execute () {
			while (true) {
				/*
				 * do something here
			 	 * for example find out the visible robots 
				 * and fire a bullet at them
			 	 */
				update();
			}
		}
	}</pre>
	<br><br></li>
<li>Having done this you are now to ready to launch your first Robot. 
Just write the package qualified name of your robot in the robolist.txt file and execute run.sh(for Linux users) or 
run.bat(for windows users).<br><br></li><li>
<a name=map>
Changing the Map:</a><br>
The user has flexibility to change the map. Infact the strategies developed are supposed to be independent of the map 
file,
since for the competition, map would be dynamically generated. To change the map open the map.txt file. This file 
contains a matrix 
with the numbers of rows and columns specified at the top. The number of rows(or columns) indicate the total number of cells that the 
arena is divide into. A single wall cell will be of the dimensions of this cell. A "one" in the matrix indicates the presence of a wall at 
that point in the arena. A "zero" indicated the absence and a "two" indicates the point where your Robot would be 
initially placed.
<br><br>
Note :<ol><li>All the boundary entries in the map file are supposed to "one" since those indicate the boundary of the arena. 
You can change the number of rows and columns. Doing this changes the cell size. </li>

<li>If the number of rows/columns are increased above a certain threshold
then an error is indicated. In such a case, you should reduce the number of rows/columns or you can increase the arena size.</li>

<li>At the beginning of every new round, the state of the robot's motion is preserved. For example, if you have given
ahead(30) in the onDeath event handler, the motion is carried over to the next round (the orientation and position
of the robot may change however). The same applies for turnGun and turn.</li>
</ol></ol><br><br>
<a name=scoring><font color=#1f3d55><b>GAME RULES & SCORING STRATEGY:</b></font></a><br><br>





Every Round starts with an initial HEALTH of both the Robots as  INITIAL_HEALTH. The one with the maximum SCORE at the end of 3 Rounds wins the battle.
The robot can perform the following tasks:<ul>
<li> Move in different directions</li>
	<li> Rotate in the its plane</li>
	<li> fire bullets</li>
<li>  Handle generarted events</li></ul>
The <a href=competitions/kurukshetra/index.html target=_blank class=greylink>documentation provided </a>gives the syntax 
of the api's for performing the above tasks.<br><br>


   A Round finishes either at the Death of at least one of the Robots or in the other case it extends till ROUNDTIME i.e. the maximum GAMETIME of any Round. ( GAMETIME is the unit which measures time with respect to frames changing rate.)
   In any Round, the SCORE and the HEALTH  follow the trends
    given below: (please refer to the <a href=competitions/kurukshetra/index.html class=greylink>Documentation 
provided</a>, for the detailed meaning of 
the terms in the text below)

<ol><li>If a Robot hits a wall, it looses (HIT_WALL_HEALTH_PENALTY ) HEALTH points and (HIT_WALL_SCORE_PENALTY) SCORE points. Just after this Event   its velocities and angular Velocities are set to zero, but its orientation remains the same.

<br><br></li>
<li>If a Robot hits the other robot, both the Robots loose HIT_ROBOT_SCORE_PENALTY and HIT_ROBOT_HEALTH_PENALTY each. Here again, their velocities would be set to zero, but the orientation would remain the same.<br><br></li>
<li>On firing a bullet, the Robot's HEALTH decreases by value equal to the "power" of the bullet . Another bullet can be fired only after a time gap which is equal to the cooling period of the gun.
The following equations govern the relationship between the bullet power, velocity of the bullet and gun heat:<ul><li>gun heat=Constants.GUN_HEAT_FACTOR*power+Constants.CONSTANT_GUN_HEAT_FACTOR
</li><li>Gun heat decreases at GUN_COOLING_RATE per gameTime second. The robot can fire the next bullet only when the gun heat reduces to zero. 
<br><br>
</li></ul>
<li>When a bullet hits a robot, the Robot looses HEALTH as:<br>
decrease in HEALTH = HIT_BY_BULLET_HEALTH_PENALTY*BULLET_POWER<sup>2</sup>+ HIT_BULLET_CONST_FACTOR<br><br>

 while his opponent will gain a score as:<br>
increase in SCORE= HIT_BULLET_SCORE_BONUS*BULLET_POWER<sup>2</sup>+ HIT_BULLET_CONST_FACTOR<br><br>

 The hitting robot gains the HEALTH points equal to the "power" of the bullet, if the bullet hits the opponent.<br><br>
</li>


<li>A Robot gets bonus points on winning of a round according to the rules mentioned underneath:<ol type="i"><li>When a Robot dies in a round and the other Robot is alive, the alive Robot gets a SCORE bonus of ROUND_WIN_BONUS</li>
<li>  When both Robots are alive till ROUNDTIME, the one with the lesser HEALTH would die, which would automatically call upon a SCORE bonus of ROUND_WIN_BONUS for the alive Robot.</li>
  <li>If both the Robots die simulataenously before ROUNDTIME no one gets any BONUS.</li>
  <li>If both the Robots are alive at the end of ROUNDTIME and they have same HEALTH points then both of them get a gain in their SCORE (s) by ROUND_WIN_BONUS each.</li>
</ol><br></li>


<li>The SCORE of each round would be added to get the net score, which will decide who the winner of the battle is, unlike health, which starts from an initial health(INITIAL_HEALTH) value at the start of every new round.
If at the end of the three Rounds the  SCORE(s) of both the Robots are same then the battle is declared DRAW.<br><br></li></ol>

Kindly 	 read <a href=competitions/kurukshetra/index.html class=greylink target=_blank>documentation</a> of the class 
Constants to extract more information about the 
other aspects like the velocity range of the bullet,  "power" range of the bullet, and the relation between them etc.
<br><br>

Some other important points/constraints to be taken care in the competition:<br>
<ol><li>You are not supposed to use any of the System calls.<br><br></li><li>
If your submitted code uses System calls then it might lead to your disqualification. This sole discretion of judgement resides with the organisers. A list of System command which you might use will be put up shortly. For example using System.out.println would be
allowed.<br><br></li><li>
In the code you can instantiate only one new thread, that makes a maximum of two threads (one is the thread that runs the execute method)<br><br></li><li>
In the competition, if the code is found to be delibrately tampering with the Server other than the provided interface 
like if trying to crash the battle, the code will be disqualified.<br><br></li></ol>

NOTE : The current version is not shipped with the security policies so your code would work even if you are using any System calls.

