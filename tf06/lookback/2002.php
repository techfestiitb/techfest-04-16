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
echo_content("side_lookback.txt");
echo_content("side_update.txt");
?>
 
<!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Lookback Techfest 2002</h1> 
	 <p>This year, with the merging of all smaller fests of IIT Bombay (Yantriki, LastStraw and ChemSplash), TechFest 2002 has set new standards for the scale of science and technology fest in Asia. Over the years, TechFest has become the foremost event of its kind, enjoying the participation of over 10000 students, faculty and corporates from all over the nation. TechFest is a unique forum where the youth of today get the opportunity to experience and interact with the science and technology in all its myriad forms. Aimed at providing a platform for the confluence of youth, the academia and the industry, TechFest has had the pleasure of being associated with industry leaders including...... among others. </p>




<h3>Competitions</h3>







<p><img src="./img/comp2k2.jpg" hspace=10 vspace=5 align="left" height="80">Competitions have been the most interesting event at TechFest. These competitions gave the participants a chance to showcase the most innovative and creative ideas and at the same time provided with the best opposition expected at national-level competitions. The competitions included Open Hardware, Open Software, Blue Planet, Contraption contest, IDP. The Industry Defined Problem (IDP) from Financial Express was to build a Newspaper dispensing Machine suitable for installing at public places. </p>



 <img src="./img/yantriki2k2.gif" hspace=10 vspace=5 align="right" height="80"><br><br>
<p><b>Yantriki</b><br>

Yantriki the robosports competition. The primary aim was to provide amateur talent a national level competition stage in the field of robotics. 'Yantriki' was held at 3 levels and saw huge participation with innovative and challenging entries. </p>

<p><b>Chemsplash</b><br>
Chemsplash offered fascinating competitions like Chemisoft (open software competition), Technum Opus (paper presentation contest) and other contests like essay writing, debate, and quiz. </p>

<p><b>Last Straw</b><br>
The task was to build a boat out of straws! The idea of the competition was to keep it simple for the layman to participate and at the same time be stimulating enough.</p>


<p><b>The Lecture Series Tech-a-tete</b><br>

<img src="./img/kalam2k2.jpg" hspace=10 vspace=10 align="left" height=150>
Lecture Series Tech-a-Tete brings participants face to face with some of the greatest achievers of our times. Envisaged as the platform to enable the participants to interact with their role models, this lecture series has been the star event at TechFest and has been honoured to have the likes of:<br>
<b>Dr. A.P.J.Abdul Kalam</b><br>
Honourable President of India<br>
<b>Mr. Rajat Gupta</b><br>
MD, McKinsey & Co.<br>
<b>Dr. P.G.Poonacha</b><br>
Vice-president (R&D) Sasken<br>
<b>Dr. Ehud Shapiro.</b></p>


<p>Futureal to the latest and the best of technological disruptions going around the world. Out of the various pathbreaking developments taking place the most revolutionary of them seems to be the emergence of such fields of science like Bioinformatics, Nanotechnology and DNA Computing....and Futureal presented all these. </p>


<h3>Workshops</h3>


<p>Workshops have been a prime attraction at TechFest. TechFest 2002 featured a number of workshops, offering the participants a hands-on experience with technology. </p>



<p><b>Robotics</b><br>
<p>A workshop on the basics of all you one wanted to know about robotics. From mechanisms to intricate designs to complex arrangements of gadgetry, this workshop provided a grounding in the fundamentals. </p>

<p><b>AI</b><br>
The workshop aimed at introducing the students to the fascinating field of Artificial Intelligence or AI for short. Starting from the very basics of intelligence and learning, this workshop helped the participants better understand the philosophy, rationale and techniques to create AI, its uses and the future. </p>
<p><b>Ham</b><br>
The workshop aimed at introducing the students to the fascinating field of HAM Radio. This workshop showed why HAM has still not lost its unique charm. </p>
<p><b>Forensics</b><br>
The workshop aimed at introducing the students to the vast and multi-faceted field of Forensics. It tried to bring forth the some of the basic aspects of Forensic Engineering, DNA Forensics, Medicinal Forensics and Criminology, Forensic Psychology, Computer Forensics etc. Apart from these, a Genomics workshop was also conducted. This gave exposure to the prospects of Genome Sequencing and the importance of Human Genome Project (HGP) in bio-technology. </p>



<h3>Hub</h3>

<p>The HUB was a central arena for a whole gamut of on-the-spot activities. There were a range of events such as theme quizzes, on the spot competitions, demos, documentaries, treasure hunt, graffiti board, hourly releases etc. </p>



<h3>Exhibition</h3>

<p>The Panorama was an endeavour of TechFest to highlight the research and development wok that is in progress at IIT Bombay. The Air Force Show displayed some of the advance technologies used by our country's Air Force. The star attractions of the show were the automatic seat ejection system, turbo engines etc. </p>


<h3>Technoholix</h3>
<img src="./img/techx2k2.jpg" hspace=10 vspace=15 align="right">
<p>Technoholix - TechFest after dark. After the busy day packed with competitions, workshops and lectures that get your mind racing, TechFest 2002 brings you an event that will leave you in a trance. Technoholix is pure enthrallment, alive with state-of-the-art technology. The prime attraction of Technoholix was the Mercedes Benz SL 500 that was on display for the first time in India after its official launch at Auto Expo earlier this January. The 'Crystal Maze' game zone packed thrill with technology, featuring some exciting games like the 'Laser Entrapment', 'Pathfinder', 'Hard Target'. Apart from these, the SFX show at Technoholix demonstrated the astounding special effects that went into the making of movies such as 'Gladiator' and 'Pearl Harbour'. The finals of Scitech Olympiad also concluded in Technoholix. </p>






<br>      
<br><br><br><br><br>

</div>
  
<?
echo_content("footer.txt");
?>