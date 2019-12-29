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

echo_content("side_asu.txt");
echo_content("side_update.txt");

?>

<div id="content">
<h1>Indian Air Force Exhibition</h1>
<p><img src="./img/img_01.jpg" align="right" border="0" hspace="5" vspace="5">The <strong>Indian Air Force </strong>– the guardians of our skies. They are the sentinels who ceaselessly protect us from any danger from above. Techfest ’06 brings you an exhibition by the IAF, which demonstrates how exactly they accomplish that.</p>
<p>On display will be the latest in the Air Defenses scenario, technology which is employed on a daily basis by the IAF. You will get to see the Indira radars and Pichora missile systems, which are the newest and most sophisticated systems in use by the IAF. On hand will be IAF personnel, who will take you to the next level, actually explaining the working of the various subsystems and performing mock acquisition exercises to give you an experience of how it feels to actually put the theories to practice.</p>
<p>And to round off the day, the elite skydiving team of the IAF, the <strong>Akash Ganga</strong> team will give you a display of their expertise. You will get to see, up close, why the <strong>Akash Ganga</strong> team is spoken of with bated breath, in parachuting circles all over the world.</p>

<table border="0" width="90%" cellpadding="5">
<tr><td align="center"><a href="./img/imgl_01.jpg" target="_blank"><img src="./img/img_01.jpg" border="0" alt=""></a></td><td align="center"><a href="./img/imgl_02.jpg" target="_blank"><img src="./img/img_02.jpg" border="0" alt=""></a></td><td align="center"><a href="./img/imgl_03.jpg" target="_blank"><img src="./img/img_03.jpg" border="0" alt=""></a></td></tr>
<tr><td align="center"><a href="./img/imgl_04.jpg" target="_blank"><img src="./img/img_04.jpg" border="0" alt=""></a></td><td align="center"><a href="./img/imgl_05.jpg" target="_blank"><img src="./img/img_05.jpg" border="0" alt=""></a></td><td align="center"><a href="./img/imgl_06.jpg" target="_blank"><img src="./img/img_06.jpg" border="0" alt=""></a></td></tr>
<tr><td align="center" colspan="3" valign="middle"><a href="./img/imgl_08.jpg" target="_blank"><img src="./img/img_08.jpg" border="0" alt=""></a></td></tr>


</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?

echo_content("footer.txt");

?>