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
<h1>Dr. Anil Gupta</h1>
<p><img src="./img/anil_gupta.jpg" alt="" align="right" hspace="5" vspace="5">Dr. Gupta presently holds the Kasturbhai Lalbhai Chair in Entrepreneurship, IIM Ahmedabad. He is also the Chief Co-ordinator, Honey Bee Network and Executive-Vice Chair, National Innovation Foundation (NIF).</p>
<p>Dr. Gupta earned his Ph.D. degree in Management from Kurukshetra University (India) in 1986 after his masters in Biochemical Genetics in 1974 from Haryana Agricultural University, Haryana.  He is currently a professor in the Centre for Management in Agriculture. His unique work analyzing indigenous knowledge of farmers and pastoralists and building bridges to science-based knowledge has led to the honour of being elected at a young age to India’s National Academy of Agricultural Sciences and recognition through the Pew Conservation Scholar Award of US$ 150,000, from University Of Michigan. Biodiversity conservation through documentation, value addition and dissemination of local peoples’ innovative resource conservation practices is the thrust in future work. His desire to develop a platform to recognize, respect and reward local innovators was the stimulus behind the creation of the Honey Bee Network.</p>
<p>Among major awards and honours received by Dr Anil Gupta are:</p>
<p>Padma Shri National Award, January 2004, for distinguished achievements in the field of management education.</p>
<p>Joint recipient of Science-in-Society Award instituted by The Indian Science Congress Association. </p>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
</div>
 
<?
echo_content("footer.txt");
?>