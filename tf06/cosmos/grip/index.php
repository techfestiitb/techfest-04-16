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
 <h1 id="toptext">G.R.I.P.</h1> 
 <p><strong>UPDATE:</strong> Shotlist coming out on <strong>3rd Jan 2006</strong>.</p>
<i><p><img src="./img/grip.gif" border="0" hspace=10 vspace=5 align="right">One of the most ambitious projects ever conceived by humans in their quest for space exploration is the International Space Station. Being the joint effort of sixteen countries, The International Space Station will establish an unprecedented state-of-the-art laboratory complex in orbit, more than four times the size and with almost 60 times the electrical power for experiments — critical for research capability — of Russia's Mir. </p>
<p>The International Space Station is so big that being in orbit 400 km above earth, it is still visible to the naked eye from most parts of the earth. Construction of this wonder of science and technology began in December 1998 and is expected to end by 2010. Once fully assembled, it will cover an area equal to that of a Canadian football field (108 meters long) and will weigh 450 metric tons.</p>
<p>The space station is being built by assembling the various modules which are built on earth and then transported to the station. One of the major modules is the Mobile Base System. The Mobile Base System supports a robotic arm and moves along rails attached to the ISS's aluminum framework. It also houses batteries, radiators, antennas and gyros. The System is designed to reduce the time it will take to assemble, service, supply and run the Station and to increase safety by reducing the number of spacewalks required to get those jobs done.</p>
<p>In 2009, the ISS is on the verge of completion. Days away from achieving optimized functioning, a small meteor collides into the ISS. All systems are up and running within hours, except that the major fuel cell from the power chamber of the station has been knocked away. It is situated beyond the reach of a human space walk. With emergency backup on, there is not much time left to restore the power supply. Time is of priceless importance, and emergency is declared before the space station loses its orbit and dashes itself and the hopes and efforts of many nations on earth.</p>
<p>The G.R.I.P – the Galactic Recovery Instrumental Probe is dispatched by the station and it moves on a network of rails to recover the cell and hopefully restore the station back to main power before catastrophe strikes...</p></i>
<p><strong>The registration for the competition has been closed</strong></p>
<a name="prob"></a>
<h1 id="toptext">Problem Statement</h1>
<p>Make a wired/wireless remote controlled machine, which can traverse a grid 1250 mm high, collect a cylindrical object located at a specific point below the grid, and then place the cylinder in the hollow cylindrical container provided. The machine which completes the task first is declared as the winner.</p>
<p>Prizes worth <strong>$1000</strong> to be won.</p>



<a name="elig"></a>
<h1 id="toptext">Eligibility</h1> 
<p>All students with a valid identity card of their respective educational institutes are eligible to participate in G.R.I.P. at Techfest '06.</p> 
<a name="tsize"></a>
<h1 id="toptext">Team Size</h1> 
<p>A team can consist of a maximum of four students.</p>
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