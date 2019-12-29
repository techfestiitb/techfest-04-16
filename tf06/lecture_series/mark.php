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
<h1>Mark Shuttleworth</h1>
<p>Mark Shuttleworth was born in the gold-mining town of Welkom in South Africa, and grew up in beautiful Cape Town. Mark studied finance and information technology at the University of Cape Town, and went on to found Thawte, a company specializing in digital certificates and internet privacy. He sold Thawte to US company VeriSign in 1999, and founded HBD Venture Capital, an investment company based in South Africa.</p>
<p>Mark has also created a non-profit organization the “Shuttleworth Foundation” that supports social innovation in education in Africa. The Foundation funds projects that have the potential to bring about dramatic improvements to some aspect of the education system and hopes to improve both the quality and the reach of education in Africa. The Foundation is also an advocate of the role of Open Source software in education and in developing countries.</p>
<p>In April 2002, Mark realized a lifelong dream to fly in space. He spent a year working on the project, including seven months of formal training at Star City in Russia, and almost as much time in medical testing, science program development and negotiations. Mark was a member of the crew of Soyuz TM-34, launched from Baikonur in Kazakhstan and docked with the International Space Station two days later. Mark was privileged to spend 8 days working on the International Space Station, conducting a program of South African science experiments and enjoying the extraordinary environment of weightlessness before coming back to earth. Since then, he has worked on a roadshow to share that experience as well as his excitement about science, mathematics and technology with pupils across South Africa.</p>
<p>Mark is currently based in London, where he spends as much time as possible reading about new innovations and technology.</p>



<br><br><br><br>
<br><br><br><br>
<br><br><br><br>


</div>
	 
<?
echo_content("footer.txt");
?>