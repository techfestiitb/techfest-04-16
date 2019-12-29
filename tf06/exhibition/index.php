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

<h1 id="toptext">Exhibitions</h1> 
<p>Talk of technology and what better place to witness it with your own eyes than Techfest itself. Techfest '06 brings to you exhibits and displays pertaining to the wide spectrum of modern technology</p>
<p>Exhibitions this year at Techfest, will walk you through to the latest in the field of space exploration, rural development and that of technology used by Indian Air Force.</p>
<h1>ASU Exhibition: "Welcome To Mars"</h1>
<p><img src="./asu/img/asu2.jpg" align="right" border="0" hspace="5" vspace="5">The Arizona State University (ASU) has been working with NASA on the Mars Rover Project. In May 2005, ASU was invited to the China Science & Technology Week to display an exhibition on technologies used in the mission. Needless to say, it was a big hit and over a million people attended the ASU exhibition in China, during the Govt. of China’s Science and Technology week.</p>
<p>A similar exhibition will be held on each day at Techfest, and of-course, India is only the second country outside the USA where the exhibition is being held! ASU will be sending a team of 5 senior researchers to guide us through the exhibition<a href="./asu/index.php" style="text-decoration:none; font-size:10px;">.... read more</a> </p>
<h1>ISRO Exhibition: “India in Space”</h1>
<p><img src="./isro/img/chandrayaan.jpg" align="right" border="0" hspace="5" vspace="5" width="220px">The Govt. of India has announced that it plans to explore the Moon and will send an unmanned lunar probe by 2008. The Indian Space Research Organisation (ISRO) calls this project ‘Chandrayaan Pratham’, which has literally means ‘First Journey to the Moon’ or Moon shot one<a href="./isro/index.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<br><br><br><br><br>
<h1>Indian Air Force Exhibition</h1>
<p><img src="./iaf/img/img_01.jpg" align="right" border="0" hspace="5" vspace="5">On display will be the latest in the Air Defenses scenario, technology which is employed on a daily basis by the IAF. You will get to see the Indira radars and Pichora missile systems, which are the newest and most sophisticated systems in use by the IAF. On hand will be IAF personnel, who will take you to the next level, actually explaining the working of the various subsystems and performing mock acquisition exercises to give you an experience of how it feels to actually put the theories to practice<a href="./iaf/index.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<br><br><br>
<h1>NIF and R&D exhibition</h1>
<p><img src="./nif/img/img3.jpg" align="right" border="0" hspace="5" vspace="5" width="230px">R&D exhibits churned out from IIT Bombay's very own research labs of wide acclaim will be demonstrated for our dear visitors! See pathbreaking technologies in front of your eyes before they even are known to the general public!</p>
<p>Also, coming from the propogators of innovative developments by the masses of the country, we have exhibitions by the National Innovation Foundation (NIF), Grassroots Innovation Augmentation Network (GIAN) and SRISTI<a href="./nif/index.php" style="text-decoration:none; font-size:10px;">.... read more</a></p>
<br><br><br><br><br><br><br><br><br>

</div>

<?

echo_content("footer.txt");

?>