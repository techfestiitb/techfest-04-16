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
     <h1 id="toptext">Lookback Techfest 2001</h1> 
	 <p><b>I would not sit here waiting for some vague tomorrow nor for something to happen. I would start here I would make something happen</b><br><br>
This spirit has driven Techfest to greater and greater heights, to present to its participants the entire spectrum of science and technology at its very best. And further, to instill this spirit of constantly striving to better the best in the minds. To motivate them towards the pinnacle of excellence. Techfest 2001 saw participation from more than 6000 students from all over the country, executives from over 50 top companies and renowned faculty and researchers from every corner of India. The festival also enjoyed support from WebTek Software who was the title sponsor. </p>


<h3>Tech-a-Tete</h3>

<p>The premier event at Techfest over the years, Tech-a-Tete was showcased in three modules.</p>


<p><b>The Lecture Series</b><br>
<img src="./img/ls2k1.jpg" hspace=10 vspace=5 align="right">
 Envisaged as a platform to enable participants interact with their role models, the Lecture Series has had the distinction of featuring eminent personalities including Sir Roger Penrose, Mr. Sam Pitroda, Mr. Narayanamurthy and Dr. Jayant Narlikar among others. The 2001 edition saw Prof. Mohanbir Sawhney of the Kellogg Graduate School of Management exchange his thoughts on The future of B2B exchanges with a curious and interested audience. The event also featured media and ad guru Alyque Padamsee. </p>



<p><b>Crossfire </b><br>

<img src="./img/cross2k1.jpg" hspace=10 vspace=5 align="left">
<br><br>
This panel debate on the consequences and future of the Human Genome Project saw Dr. Vijay Raghavan (NCBS) and Prof. A. Surolia (IISc) exchange their views. The event was very informative and was very well received by the audience.</p>

<br>




<img src="./img/spectrum2k1.jpg" hspace=10 vspace=5 align="right">
<br>
<p><b>Spectrum </b><br>
Exotic topics like cosmology and Human Computer Interaction were the highlight of Spectrum. Prof. Anirudha Joshi (IDC,IIT Bombay) introduced the audience to the basics of Human Computer Interaction while Prof. U.A. Yajnik spoke on Beauties and Blemishes dealing with the story of the universe.</p>


<h3>Workshops</h3>

<p>Techfest 2001 featured three workshops Wired, Hacked and Stocker s Stop </p>

<p><b>Wired The Networking Workshop </b><br>
This workshop aimed at introducing the participants to the world of computer networks. Starting from scratch, the workshop moved from introduction and principles to the implementation and concluded with a hands-on session which gave the participants an opportunity to try their hand at setting up a network.</p> 

<p><b>Hacked The Internet Security Workshop </b><br>
With networked computers becoming commonplace, there is a distinct threat of data theft and increased chance of malicious attacks. Hacked started with an introduction to the principles of data protection and went on to describe the methods used by crackers to penetrate systems. The sessions were conducted by Prof. Sridhar Iyer (SIT, IIT Bombay), Mr. Sharad Popli (Quantum Link Communications) and Mr. Prakash Advani (FreeOS.com) who gave the participants a complete overview of the state of computer security in today s networked world. </p>

<p><b>Stocker's Stop The Stocks Workshop </b><br>
Make your millions and retire at 30!! The stocks workshops was a blessing for all the greenhorns who could not make head or tail of the stock markets. With Mr. C.B. Bhave (MD, NSDL), Mr. Ravi Narain (MD, NSE), Mr. Ajay Shah (IGIDR), Ms. Susan Thomas (IGIDR) and Ms. Kshama Fernandes on the panel, each session provided sufficient information and knowledge to enable the participants make informed buying decisions in the market.</p>

<h3>PSIence</h3>

<p><img src="./img/psi2k1.jpg" hspace=10 vspace=8 align="left">
ESP. Telepathy. Mind Matter Interaction. Impossible? Humbug? Think again. Although we tend to shrug off these phenomena as paranormal and beyond belief, there just might be something interesting going on. Do we really know the boundaries of the human mind? Is our knowledge complete? PSIence aimed at putting the field of paranormal research in perspective. With the involvement PSI scientists of the like of Dr. Edwin May, Dr. Robert Morris, Dr. K.R. Rao and Dr. M. Srinivasan, the event attracted huge audiences. And they were not let down. From the basics of ESP experiments to detecting fraud, the event introduced the principles that PSI researchers apply in quest of that elusive something that may change the way we perceive the world around us.</p>


<br>
<h3>HUB On the spot mania</h3>

<p>The HUB was the center of all on the spot competitions at Techfest. Apart from model building contests, science and trivia quizzes the HUB also featured a variety of demos. Dr. Iyer presented a demonstration of Kirlian photography which is widely used in alternative healing. In addition there were demos of student projects and models which were widely appreciated. Informative and educative video capsules were also screened. The HUB also played host to the Treasure Hunt which is one event participants over the years look forward to eagerly. </p>

<img src="./img/hub12k1.jpg" hspace=110 vspace=5 align="left">
<img src="./img/hub22k1.jpg" hspace=110 vspace=5 align="right">

<br>
<br><br><br><br><br><br><br><br>
<h3>Technoholix</h3>
<img src="./img/techx2k1.jpg" hspace=10 vspace=5 align="right">

<p>So you thought Techfest was all about incomprehensible lectures and heavy competitions? Enter Technoholix and free your mind. The smart gadget exhibition featured products from leading companies and vendors a 3D mouse, holographic display panels and more cutting edge products. The gaming zone featured the latest and hottest line of gaming peripherals for an unparalleled gaming experience. Technoholix also featured a setup of a Smart Home which offered a sneak preview of what the home of the future is likely to look like. The highlight of Technoholix was a laser show in 3D.</p>



<h3>Angst Angst </h3>

 
<p><img src="./img/play2k1.jpg" hspace=10 vspace=5 align="left">
Techfest 2001 was the venue for the premiere of Angst Angst, Kuntah Kuntah, Boom Bam Dhandal Dhamaal Kaput. This play, conceived and directed by Ramu Ramanathan depicted the situation faced by the youth of today where does an individual rooted in centuries of culture go when confronted with technology? What does it mean to be on the threshold of an uncertain future? With its vivid potrayal of the theme, the play was hugely popular and enjoyed a wonderful response. </p>
 




<br>      
<br><br><br><br><br>
    


</div>

  
<?
echo_content("footer.txt");
?>