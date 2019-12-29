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

echo_content("side_techno.txt");
echo_content("side_update.txt");

?>

<div id="content">

<a name="intro"></a>
<h1>Shekhar Jitkar</h1>
<p><img src="./img/shekhar.jpg" align="right" hspace="5" vspace="5" border="0" alt="">Shekhar Jitkar is currently the Editor of a host of business-to-business magazines in India. He represents the magazines – SEARCH, MODERN MACHINE TOOLS, ELECTRICAL & ELECTRONICS, CHEMICAL WORLD, MODERN PLASTICS & POLYMERS, MODERN PACKAGING & DESIGN, and MODERN FOOD PROCESING. Each of these magazines enjoys the leadership position in its segment. </p>
<p>Shekhar Jitkar is a qualified engineer himself and has many years of experience in the field of business-to-business publishing and in the industry. He has a lot of articles to his credit on topics ranging from technology and economy to international trends. He has travelled all over the world to attend international trade shows and conferences and visit manufacturing plants of a few engineering multinationals. </p>
<p>Just recently, he had been invited by TAMI (Taiwan Association of Machinery Industry) to present a paper on `India – the business potential and market trends’, during TIMTOS 2005 trade show on machine tools, held in Taipei, Taiwan.</p>
<h1>Marco Angelo D'Souza</h1>
<p><img src="./img/marco.jpg" align="right" hspace="5" vspace="5" border="0" alt="">Marco Angelo D'Souza is the Editor of CHIP magazine. He has been involved in technology media since the past seven years and has led teams that evaluate and review a wide spectrum of consumer, desktop and networking technologies and products. He was born and brought up in Mumbai and is an electronics engineer by education. His hobbies include listening to music, home theatre, driving and reading.</p>
<br>
<h1 id="toptext">Prof. N.L. Sarda</h1> 
<p><img src="./img/sarda.jpg" align="right" hspace="5" vspace="5" border="0" alt="">Interested in Database Systems, Software Engineering and Information Systems, he is a  professor in computer science department and also Professor-in-Charge of Innovation and Entrepreneurship at IIT Bombay. Also as a consultant in IT section , offering advice in planning, selection, implementation and evaluation of IT solutions, he has taken software to new heights.</p>
<br>
<h1>Prof. Dulal Panda</h1>
<p><img src="./img/dulal.jpg" align="right" hspace="5" vspace="5" border="0" alt="">As a Research Biologist,    he is dedicated to Molecular, Cellular and Developmental Biology .Currently as a professor in Bioscience Department, his works on anti fungal drugs, proteins in human body, advanced cell researches and many more provide a pathway that leads to modern biotechnology.</p>
<br><br><br>
<h1>Prof.  C. Amarnath</h1>
<p><img src="./img/amarnath.jpg" align="right" hspace="5" vspace="5" border="0" alt="">Master of robotics,  Prof. Amarnath  deals with  synthesis and analysis of mechanisms and computer aided designing. Presently a professor in mechanical eng. Dept. IIT Bombay and a convener of TePP( technopreneur Promotion Program) ,his works provide a strong background and future for robotics .  Also he was the guide of the only team from India for Robocon 2005</p>
<br><br><br>
<h1>Dr. Dipan Kumar Ghosh</h1>
<p><img src="./img/dipan.jpg" align="right" hspace="5" vspace="5" border="0" alt="">With his extreme interest in magnetics, he has given  models and some very useful results which  now serve as a back bone in modern magnetism and its applications.
<br>
Holding posts like HOD physics Dept. &  Dean, student affairs (IIT Bombay) and as a member of many high research boards in India and abroad, his research works can be seen in almost all modern magnetic devices around.
</p><br>
<br><br><br><br><br><br><br>

</div>

<?

echo_content("footer.txt");

?>