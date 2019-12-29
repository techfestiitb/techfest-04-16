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
echo_content("side_lectures.txt");
echo_content("side_update.txt");
?>
 
 <!-- ##### Main Copy ##### -->

<div id="content">
<h1>Dr. Amar G Bose</h1>
<p><img src="./img/amar_bose.jpg" alt="" align="right" hspace="5" vspace="5">Dr. Amar G. Bose is Chairman of the Board and Technical Director of the Bose Corporation and Professor of Electrical Engineering at the Massachusetts Institute of Technology (MIT). He was born in Philadelphia in 1929, and received his bachelor, master and doctoral degrees from MIT in the mid-50s. In 1956, Dr. Bose began research into physical acoustics and psychoacoustics: the study of human perception of sound.</p>
<p>Bose’s studies at the Institute led to numerous patents in the fields of acoustics, electronics, nonlinear systems, and communication theory, as well as the founding of the Bose Corporation in 1964.</p>
<p>After initially questioning why loudspeakers with advanced technical specifications failed to reproduce the realism of a live performance, Dr. Bose began his 12-year study of speaker design and psychoacoustics. The Bose Corporation eventually introduced the Bose 901 Sound System, which set a new standard for sound quality and promptly received worldwide acclaim.</p>
<p>The Bose Corporation currently designs and manufactures some of the most sophisticated and highly regarded audio products in the world—including the Bose Wave® Radio. Needless to mention, the brand Bose is synonymous with quality sound and is known for its lifelike sound and dependability.</p>
<p>Dr. Amar G. Bose was inducted into the Radio Hall of Fame in 2000.</p>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
</div>
 
<?
echo_content("footer.txt");
?>