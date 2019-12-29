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
echo_content("side_online.txt");
echo_content("side_update.txt");
?>
<!-- ##### Main Copy ##### -->

<div id="content">

<h1>Core War</h1>
<p>"They will gather intelligence, lay false trails and strike at their opponents suddenly and with determination." </p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-	A. K. Dewdney</p>
<p>Write a code in an assembly language called Redcode that battles with other codes, eats their resources and  kills them to stay on the hill. The fittest that survives, will be crowned <strong>"The King of The Hill"</strong>.<a href="http://www.techfest.org/ai/core_war/index.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<h1>Future Flight</h1>
<p>Ever imagined a life without the perennial traffic jams that cramp us every time we set foot on the roads? Ever thought of any way out? Well, how about a network of some kind of personalized flying cars! Just need to strap your seatbelts and zoom through the space to have a hassle free journey ahead...sounds interesting, doesn’t it?</p>
<p>So, here we are to provide you the platform you need to launch your flying ideas. Just speak out your mind about how would you like to design the flying cars of the future - the technology used in the making, the design concept as well as how would you regulate the flow of these wonder cars through the skies and some other aspect you want to mention on your own.</p>
<p>And don’t forget to supplement your ideas with scientific feasibility; discussing the practicality of the solution sought.<a href="http://www.techfest.org/sixth_gear/future_flight/index.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<h1>Mission Moon 2030</h1>
<p>Techfest gives you the chance to help realize the biggest dream of mankind since its evolution. The future of the moon is in your hands. You have the entire resources of the earth. Embark upon the biggest venture in the history and the future of space. Plan and build a human settlement on the moon.<a href="http://www.techfest.org/cosmos/mission_moon/" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<h1>Connecting...</h1>
<p>Design a cost efficient bridge using the software West Point Bridge which is able to with stand a simulated load test.<a href="http://www.techfest.org/concreate/connecting/index.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<br>
<br><br><br><br><br><br><br><br>
</div>

<?
echo_content("footer.txt");
?>