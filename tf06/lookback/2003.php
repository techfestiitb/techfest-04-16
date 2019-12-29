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
     <h1 id="toptext">Lookback Techfest 2003</h1> 
	 <p><img src="./img/tf2k3.jpg" hspace=10 vspace=10 align="left"> Man's never ending quest for knowledge has always urged him to look for newer avenues in the field of science and technology. And with each successful journey comes a reason to celebrate. <br><br>

Techfest, over the years has gained the status of not only India's but Asia's largest science and technology collegiate festival. In its 6th avatar,Techfest was held from 31st Jan - 2nd Feb, 2003. It not only enjoyed the participation of youth from all over India, but Techfest 2003 also extended its horizons into the international arena. 15000 students and over 1500 faculty, corporate became part of the Techfest experience.</p>
 
 

 

 





<br><br><br>



<h3>Competitions</h3>

<p>Competitions have been the core philosophy of Techfest. Aimed at providing a platform where the students are pitted against the best and toughest challenge in the country, techfest 2003 presented a whole array of competitions. As many as 6 competitions were introduced. Some of them are as follows: 
<b>Chem-e-car</b>
The objective of this was to design and construct a car that is powered only with a chemical energy source without any off-board power supply.  
<b>Sim City</b>
The Problem was to plan a city in a complete manner with given population and geographical area with proper electricity and water supply and also proper income distribution. 
<b>Water Rockets</b>
The objective of this was to make students design a rocket which was propelled by water pressure.Height attainable was decided no less than 40 m. 
The existing competitions like Yantriki, Chemsplash and Laststraw were also a great hit. The emphasis was not only top develop spirit of competitiveness and camaraderie, but also to give them an insight into some of the problems faced in the industry.</p>

<h3>Lecture Series</h3>

<p>The Distinguished Lecture Series is the star event at Techfest. It provides students with an opportunity to meet their idols from the various arenas of science and technology as well as the business world. Techfest 2003 was proud to have such eminent personalities as Dr. Richard M. Stallman (Founder and President of GNU and the FSF), Dr. Bernhard Schoelkopf (Director, Max Plank Institute of Biological Cybernetics), Mr. Ajit Balakrishnan(CEO, Rediff.com) and Ankit Fadia (17 year old whiz kid and author of "The Unoffical Guide to Ethical Hacking"). The Panel Discussions featured Dr. R. Chidambaram (Principal Scientific Advisor to Govt. of India), Dr. M. G. K. Menon and Mr.Sandipan Deb (editor ,Outlook magazine). </p>




<h3>Workshops</h3>

<p>With "Do while you learn" as the motto, packed fun in the learning experience. The main workshops held were: </p>


<img src="./img/work2k3.jpg" hspace=10 vspace=5 align="right">
<p>
<b>Astronomy Workshop</b><br>
Astronomy workshop explored some of the outstanding problems, recent developments and future prospects in a variety of astronomical topics . The talks covered theory, observation, analysis and instruments. The emphasis throughout was on exciting new developments in theory and observation, and the technological progress in ground and satellite based instruments which has made that possible.  </p>
 

<p><b>Archaeology</b></br>
There was a lecture on Museology - the discipline of museum design, organization, and management. A lecture on temple architecture and design was also there. There were exhibits from the various excavations that have been carried out in the country, and you get a chance to infer things yourself. Also, there was a visit to an excavation site at a near by place. </p>

<p><b>Wireless Networking</b><br>
It covered the following topics:<br>

Recent advances in Third Generation Wireless. <br>
Wireless Local Area Networks and 802.11. <br>
Security in wireless networks. <br>
Commercial application and Business opportunities in Wireless Networks. <br>
Wireless Internet Protocols and Internet access. <br>

</p>


<h3>Hub</h3>

<p><img src="./img/hub2k3.jpg" hspace=10 vspace=5 align="left">Hub is the gamut of all on-the-spot activities in Techfest.It encompasses a wide spectrum of activities like Theme Quizzes, On -the- spot contests, Distinguished Documentaries, How things work and various events on Designing and Innovations. The place is always buzzing with fun and excitement because of the span and creativity of the events and therefore attracted huge audiences. </p>
  

<br><br>


<h3>Techfest at Dark</h3>

<p>After a full day of competitions and provoking events Techfest at Dark aimed at giving you some tantalizing atmosphere by:</p>

<p><b>3D Laser show</b><br>
This Laser show left the audience enthralled.Laser dancing at Music in 3 dimensions left the Open Air Theater packed with capacity of 6000 in trance. </p>

<p><b>Aibo League Robocop</b><br>
Aibo League Robocup, where Robots played the game of soccer and performed to the same mantle as the humans do (well almost!).Teams from Dortmund university of Germany brought there robots to India. </p>

<p><b>Scitech Olympiad</b><br>
Scitech Olympiad, where Six teams battled it out in the OAT for supremacy in front of a capacity crowd and the last of the links in the Run Up to the inaugural Techfest Trophy</p>













<br>      
<br><br><br><br><br>
    

</div>
  
<?
echo_content("footer.txt");
?>