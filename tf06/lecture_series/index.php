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
<h1>Lecture Series - Techfest '06</h1>
<p>Techfest has a history of having prominent memebers from varying fields and this year is no different but bigger. The speakers are all great achievers in their respective fields and however different the lectures may be, one thing for sure is that every speaker will leave behind a spell bound audience – one that is more informed than ever before about numerous aspects of the field. The speakers for this year include.....</p>
<h1>Mark Shuttleworth</h1>
<p>Mark Shuttleworth was born in the gold-mining town of Welkom in South Africa, and grew up in beautiful Cape Town. Mark studied finance and information technology at the University of Cape Town, and went on to found Thawte, a company specializing in digital certificates and internet privacy. He sold Thawte to US company VeriSign in 1999, and founded HBD Venture Capital, an investment company based in South Africa.<a href="./mark.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<h1>Dr. Rodney Brooks</h1>
<p><img src="./img/rodney_brooks.jpg" alt="" align="right" hspace="5" vspace="5">As Director of the Computer Science and Artificial Intelligence Laboratories (CSAIL) at MIT, he has contributed a great deal to the field of mobile robotics. He is also Chairman, and Chief Technical Officer of iRobot. Dr. Brooks has built some of the greatest robots around. With iRobot, he led the team that built ‘My Real Baby’.<a href="./rodney_brooks.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<br><br><br><br><br>
<h1>Mr. Sam Pitroda</h1>
<p><img src="./img/sam_pitroda.jpg" alt="" align="right" hspace="5" vspace="5">It was largely because of the efforts of this inventor, technocrat, and social thinker that the telecom revolution took place in India. Through his efforts, Mr. Pitroda has brought telephones to some of the world's most isolated regions.<a href="./sam_pitroda.php" style="text-decoration:none; font-size:10px;">.... read more</a> </p>
<br><br><br><br><br>
<h1>Dr. Amar G Bose</h1>
<p><img src="./img/amar_bose.jpg" alt="" align="left" hspace="5" vspace="5">After initially questioning why loudspeakers with advanced technical specifications failed to reproduce the realism of a live performance, Dr. Bose began his 12-year study of speaker design and psychoacoustics. The Bose Corporation eventually introduced the Bose 901 Sound System, which set a new standard for sound quality and promptly received worldwide acclaim.<a href="./amar_bose.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<br><br><br><br><br>
<h1>Dr. Anil Gupta</h1>
<p><img src="./img/anil_gupta.jpg" alt="" align="right" hspace="5" vspace="5">Dr. Gupta presently holds the Kasturbhai Lalbhai Chair in Entrepreneurship, IIM Ahmedabad. He is also the Chief Co-ordinator, Honey Bee Network and Executive-Vice Chair, National Innovation Foundation (NIF).<a href="./anil_gupta.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<p><br>
    </p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
</p>
<h1>Mr. Rajat Mathur</h1>
<p> Rajat Mathur is a Solutions Architect with Patni Computer Systems Inc., based out of Patni's Silicon Valley office in US. He has 10+ years of experience in technology, spanning areas like compiler design,<a href="./rajat_mathur.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>

<br><br>


</div>
	 
<?
echo_content("footer.txt");
?>