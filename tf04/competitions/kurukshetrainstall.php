<?php
include('http://www.techfest.org/box.php?text=Installation%20Help');
?>
<br><br>  <br>After unzipping the downloaded file and storing them in a 
directory, follow the instructions mentioned here to run the game:
<br><br><font color=#1f3d55><b>
  For Linux users:</font></b> </p>
<ol>
  <li>Set the environment variable JDK_HOME to the directory where java is installed 
    on your machine<br>
  </li>
  <li> Set the environment variable INSTALL to the directory the software is downloaded.<br></li>

<li>Now you ar ready to run the Kurkukshetra. Just execute run.sh from the bash prompt<br></li></ol>
To learn how to make your first robot <a href=main.php?file=competitions/kurukshetrascoring.php 
class=greylink> click here</a>. After making your robot, you can compile and run by following the instructions 
given below:<li>
Compile your robots:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run compile.sh &lt;package name of the robot&gt; from the bash prompt.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note: Package must be created under the directory robots.<br></li><li>
Run:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run run.sh &lt;map file&gt; &lt;robot list file&gt; &lt;screen width&gt; &lt;screen 
height&gt; 
&lt;number of 
rounds&gt; from the bash 
prompt.<br></li>
You can edit the run.sh file to change the map, robot list,
screen size, or number of rounds.
<br>
<br>You can edit the run.sh file to change the map, robot list, screen size, or number of rounds. 
You 
are supposed to submit a jar file containing your robot class files.  In order to make the jar 
file just use the script provided 'makejar.sh' by typing -
./makejar.sh <packageName> <RobotClassName>
 <br><br>
<br>
<font color=#1f3d55><B>For windows users:</b></font><br>

<ol>
<li>
Make sure that java is in the environment variable PATH.
 You can set PATH using:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;       set PATH=&lt;directory where java is installed&gt;\bin;%PATH%
       at the command prompt.<br></li>
<li>Execute run.bat from the dos prompt to see Kurukshetra 
running.<br></li></ol>
See the <a href=main.php?file=competitions/kurukshetrascoring.php class=greylink> instructions given</a> to make your 
first robot. You can compile and run the robot made by you as follows:<li>
Compile your robots:<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run complile.bat &lt;package name of the robot&gt; from the command prompt<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note: Package must be created under the directory robots.<br></li>
<li>Running your robot: <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Execute run.bat from the command prompt.</li>
You can edit the run.bat file to change the map, robot list,
screen size, or number of rounds.
<br><br>You are supposed to submit a jar file containing your robot class files. In order to make 
the jar file just use the script provided by typing -
makejar.bat <packageName> <RobotClassName>
<p align=right><a href=
<?
echo $HTTP_REFERER; 
?>
 class=greylink><b>Back to Kurukshetra</b></a></p>
