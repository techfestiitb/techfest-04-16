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
echo_content("side_no.txt");
echo_content("side_update.txt");

?>
<!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">O-Zone</h1> 
<p>O-Zone, the <strong>On the Spot Zone</strong> the place where fun and prizes are. There are no online registrations. Some of the On the Spot events in O-Zone are</p>
<h3>1.	CrazyBots</h3>
<p>How different can robots get? Build the most innovative robot from a given kit of components and if your robot is adjudged the most creative you could walk away with loads of prizes.</p>

<h3>2.	Besieged</h3>
<p>Go back to the middle ages and build the ultimate siege weapon. Teams will be provided with all the required material at the time of the event.</p>

<h3>3.	Gear Up</h3>
<p>Piece together a mechanical device using the different components. The fastest correct assembly will be declared the winner.</p>

<h3>4.	Out of the Box</h3>
<p>There is no fixed way to tackle a given problem. Let your imagination run wild and suggest creative solutions. Remember the whackier, the better!!!</p>

<h3>5.	ReporTech</h3>
<p>3 days and 3 nights, packed with a gamut of events. Give us the best low-down on the what, where and how of Techfest ’06 and you will be crowned the in-house reporter.</p>

<h3>6.	inQUIZitive</h3>
<p>Enthusiastic about quizzes and other brain-teasers? Come test your knowledge and win attractive prizes.</p>

<h3>7.	Treasure Hunt</h3>
<p>In teams of four, find your way around the campus by deciphering and decoding clues. Attractive prizes at stake</p>

<h3>8.	PIXcellent</h3>
<p>Our lives are filled with memorable moments which we cherish and the same applies to Techfest. Capture the moments of Techfest ’06 – of joy, sadness, frustration, anticipation and every emotion on display during the fest with your camera.</p>
<p>Participants will be provided with data card reader/Bluetooth port BUT must get their own digital/cellular cameras ( and data cable if their cameras/cells don’t have data cards/blue tooth) </p>
</p>

<br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?
echo_content("footer.txt");
?>