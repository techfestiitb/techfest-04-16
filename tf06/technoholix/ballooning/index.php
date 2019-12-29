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
echo_content("side_techno.txt");
echo_content("side_update.txt");

?>
<!-- ##### Main Copy ##### -->

<div id="content">
<h1 id="toptext">AAW Ballooning Display</h1> 
<p>Before there were aircraft, man thought that the only way to fly was to make craft which were lighter than air. Thus, hot air balloons were born. The principle involved was simple, and the utility, immense. Even today, when heavier-than-air craft rule the skies, hot air balloons still find use in weather prediction, adventure activities, and various other more exotic purposes. The Indian Army, in particular, uses them in several occasions where other craft would not suffice.</p>
<p>Techfest ’06 brings you an opportunity to get closer to these mammoth crafts, with a spectacular display of hot air ballooning by a professional team from the Indian Army’s Adventure Wing. You will be able to see these huge vehicles operated by the Army’s foremost experts, and learn more about their inner working. How does one navigate without wings and a rudder and a propeller? Learn the answers to these questions and more as you are given an in-depth view of the usage of a hot air balloon, the problems associated with them, the ingenious solutions man has evolved, and the advantages and disadvantages of using such a craft. All the action will take place right inside IIT Bombay, in the huge Gymkhana grounds, from where you will be able to observe an actual takeoff, flight and landing and flight of one of these massive craft.</p>




<br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?
echo_content("footer.txt");
?>