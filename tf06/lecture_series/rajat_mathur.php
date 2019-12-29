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
<h1>Mr. Rajat Mathur </h1>
<p>&nbsp;</p>
<p> Rajat Mathur is a Solutions Architect with Patni Computer Systems Inc., based out of Patni's Silicon Valley office in US. He has 10+ years of experience in technology, spanning areas like compiler design, distributed systems, and storage networking products. Rajat received his undergraduate education majoring in Computer Science, Electrical Engineering and Biological Sciences from BITS Pilani and The University of Texas at Austin. He received his Masters degree in Computer Engineering from The University of California, Irvine and is on a leave of absence from the PhD program in Computer Science. </p>
<p> This talk intends to address budding computer scientists and practitioners in the broad field of computer systems and integrated product design. We start by examining computer science concepts and technologies that are key to building modern computing environments. This is followed by an overview of a few specialized fields that draw heavily upon exciting technologies like distributed systems, sensor networks, streaming data, and embedded product design. Next we look at challenges faced by commercial designers solving today's problems in the field of storage and networking, a confluence of these technologies. We end with a call to the educational, research and commercial community to step up to the challenge and build a solid foundation for the Indian computer industry in this area. </p>

<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


</div>
	 
<?
echo_content("footer.txt");
?>