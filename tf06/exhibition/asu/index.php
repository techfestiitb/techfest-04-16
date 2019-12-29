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

<a name="asu"></a>

<h1 id="toptext">ASU Exhibition: "Welcome To Mars"</h1> 
<p><img src="./img/asu1.jpg" align="right" alt="" hspace="5" vspace="3" border="0">Mars – the red planet has enthralled the human race like no other object in the night sky. It has amazed us and beckoned to us for ages. This Techfest takes you closer to this planet than you had ever imagined.</p>
<p>The Arizona State University (ASU) has been working with NASA on the Mars Rover Project. In May 2005, ASU was invited to the China Science & Technology Week to display an exhibition on technologies used in the mission. Needless to say, it was a big hit and over a million people attended the ASU exhibition in China, during the Govt. of China’s Science and Technology week.</p>
<p>A similar exhibition will be held on each day at Techfest, and of-course, India is only the second country outside the USA where the exhibition is being held! ASU will be sending a team of 5 senior researchers to guide us through the exhibition. </p>

<table border="0" width="90%">
<tr><td align="center"><img src="./img/asu.jpg"  border="0"></td><td align="center"><img src="./img/asu2.jpg" border="0"></td></tr>
</table>
<h3>Highlights of what can be expected</h3>

<p><ol type="1" >
<li>On display will be some scaled-down models of the NASA spacecraft that was launched to Mars, some of the complex instruments designed specifically for the mission and models of the different types of probes currently roving Mars.</li>
<li>Next to where the exhibition will be put up, we plan to put up a large screen that will beam latest pictures from cameras on Mars!</li>
<li>There will be huge "story-boards" that will contain write-ups of various aspects of the mission that will give you a blow-by-blow account of the mission as you walk through the exhibition! Among other things, meteorites collected by ASU (fist-sized, on average) will also be put on display. </li>
<li>Technical lectures from the chief engineers that worked on this project, on the special instruments, computer programs and systems that had to be developed for smooth functioning in an environment like Mars. </li>
<li>Q & A sessions every few hours at the site of the exhibition, to be addressed to and answered by the team from ASU. </li>
<li>And....lastly, we will be having a show of the best videos collected by NASA while on Mars, to be displayed at night in our Open Air Theatre, on a Giant screen and viewed by an audience of over 5000! </li>
</ol></p>
<p><h3>The videos include:</h3>  </p>
<p><ol type="a">
<li>Panoramic views of Martian terrain captured by their land rovers, </li>
<li>Flythrough views over the canyons of Mars, and </li>
<li>Highlights of the journey of the spacecraft starting from its Terrestrial launch to touchdown on Mars!</li>
</ol></p>
<h1>About the Speakers</h1>
<h3>Dr. Steve Ruff</h3>
<p><img src="./img/steve.jpg" align="right" alt="" hspace="5" vspace="3" border="0">As a faculty research associate in geological sciences department in Arizona State University he is working on university’s Mars Thermal Emission Spectrometer Project.</p>
<br><br><br><br>
<h3>Shawn P. Wright</h3>
<p>He is teaching assistant in geological sciences in Arizona State University. His research concerns the remote sensing applications of impact craters and focuses on using remote, field, and laboratory thermal infrared data of impact crater materials to better understand the surface composition of the terrestrial planets. He is member of Impact Field Studies Group and Mars Crater Consortium.</p>
<br><br><br><br>
<h3>Joe Michalski</h3>
<p><img src="./img/joe.jpg" align="right" alt="" hspace="5" vspace="3" border="0">He is working as post doctorate for Phil Christensen at Arizona State University. He is working on studies of weathering rinds and rocks coatings, hydrothermal mineralogy and spectroscopic studies of alteration minerals.</p>
<br><br><br><br>
<h3>Greg L. Mehall</h3>
<p><img src="./img/greg.jpg" align="right" alt="" hspace="5" vspace="3" border="0">He is instrument and mission manager of Mars Space Flight Facility at Arizona State University. He is currently working with three NASA projects Mars global Surveyor, Mars Odyssey and Mars Exploration Rover.</p>
<br><br><br><br>
<h3>Dale Noss</h3>
<p><img src="./img/dale.jpg" align="right" alt="" hspace="5" vspace="3" border="0">He is computer system manager of Mars Space Flight Facility in Arizona State University.</p>

<br><br><br><br><br><br><br><br><br>

</div>

<?

echo_content("footer.txt");

?>