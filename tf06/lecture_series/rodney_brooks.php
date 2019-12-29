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
<h1>Dr. Rodney Brooks</h1>
<p><img src="./img/rodney_brooks.jpg" alt="" align="right" hspace="5" vspace="5">As Director of the Computer Science and Artificial Intelligence Laboratories (CSAIL) at MIT, he has contributed a great deal to the field of mobile robotics. He is also a Fujitsu Professor of Computer Science. He is also Chairman, and Chief Technical Officer of iRobot. </p>
<p>Dr. Brooks has built some of the greatest robots around with his Subsumption Architecture. Some of his more famous robot projects are Kismet, Cog and Ghengis. With iRobot, he led the team that built ‘My Real Baby’.</p>
<p>Dr. Brooks had won the Computers and Thought Award at the 1991 IJCAI and is also a Founding Fellow of the AAAI. He is also a Fellow of the AAAS. He is also the founder of the humanoid robotics group at CSAIL.</p>

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>



</div>
	 
<?
echo_content("footer.txt");
?>