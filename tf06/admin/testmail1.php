<?php
if ($_POST['submit']=="")
{
?>
<form method="post" action="">
<p>Enter email id<input type="text" name="id" size="25"></p>
<input type="submit" value="submit" name="submit">
</form>
<?
}
else if ($_POST['submit']=="submit")
{
$id=$_POST['id'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= "From: Techfest 2006<info@techfest.org>\r\n";
$headers .= "Reply-To: info@techfest.org\r\n";
$sub = "Techfest 2006 - Newsletter ";
$mes= '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Techfest \'06 Newsletter</title>

</head>

<body style="font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; PADDING: 0px;	MARGIN: 0px;COLOR: #58595B;BACKGROUND-COLOR: #fff;font-size: 11px; ">
<div id="content" style="background-color: #F2F2F2;	MARGIN: 20px 20px 0px 20px;	line-height: 1.4em; ">
<div class="padding" style="padding: 5px; "> 
<div class="border" style="border: 1px solid #DFDEDE;	background-color: #FFF; "> 
       	<div class="sektionsubhead" style="background-color: #FAFAFA;color: #58595B;text-decoration: none;BORDER-BOTTOM: 1px solid #DFDEDE;MARGIN: 0px;	padding: 4px 5px 4px 10px;	display: block;BORDER-top: 1px solid #DFDEDE;BORDER-left: none;padding-left: 11px;"> 
        	<h2 style="PADDING: 0px;margin:0;font-family: Georgia, Times, serif;font-size: 10px;	font-weight: bold;	letter-spacing: 1px;	text-align:center;color: #6F6F6F;
	text-decoration:none;
	text-transform:none;"> Techfest \'06 Newsletter</h2> 
      	</div> 
      	<div class="paddingcontent" style="PADDING: 7px 10px 7px 10px;	MARGIN: 0px;	border-top: 1px solid #F7F7F7;border-left: 1px solid #F7F7F7;LIST-STYLE-TYPE: none;	background-color: #FFF;border-bottom: none;PADDING: 10px 20px 3px 23px;"> 
	  		<p style="MARGIN: 0px 0px 1.4em 0px;">Hello there,</p>
	  		<p style="MARGIN: 0px 0px 1.4em 0px;">Techfest, Asia’s largest science and technology festival, is back with its ninth edition, Techfest ’06, to be held from the 20th – 22nd January, 2006. Change has always been a part of Techfest and this edition will prove to be no different. Techfest ‘06 has taken a giant step by departing from its previously established events and competitions to come up with six “themes” which focus on today’s hot and happening technologies. </p>
	  		<p style="MARGIN: 0px 0px 1.4em 0px;">There are lots of happening events and competitions lined up for you at Techfest ’06 including Hover Junior, under Sixth Gear, which is a competition just for school kids! </p>
	  		<p style="MARGIN: 0px 0px 1.4em 0px;">Below is an informative list of events lined up at Techfest ’06, under each of the respective themes.</p>
		</div>
	  	<div class="sektionsubhead" style="background-color: #FAFAFA;color: #58595B;text-decoration: none;BORDER-BOTTOM: 1px solid #DFDEDE;MARGIN: 0px;	padding: 4px 5px 4px 10px;	display: block;BORDER-top: 1px solid #DFDEDE;BORDER-left: none;padding-left: 11px;"> 
        	<h2 style="PADDING: 0px;margin:0; font-family: Georgia, Times, serif;font-size: 10px;	font-weight: bold;	letter-spacing: 1px;	text-align:center;color: #6F6F6F;
	text-decoration:none;
	text-transform:none;"> A.I.</h2> 
      	</div> 
		<div class="paddingcontent" style="PADDING: 7px 10px 7px 10px;	MARGIN: 0px;	border-top: 1px solid #F7F7F7;border-left: 1px solid #F7F7F7;LIST-STYLE-TYPE: none;	background-color: #FFF;border-bottom: none;PADDING: 10px 20px 3px 23px;">
			<p style="MARGIN: 0px 0px 1.4em 0px;">The name says it all. Artificial Intelligence - The buzzword of the future. We present you with the opportunity to create and code machines of tomorrow that obey orders, learn through experience and try to emulate humans as closely as possible. Through a series of lectures, workshops and competitions, we shall give you a glimpse of things to come, things that are at the heart of Artificial Intelligence!</p>
			<a href="http://www.techfest.org/ai/index.php" target="_blank" style="color:#00A2FF; ">http://www.techfest.org/ai/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Micromouse - Masters of the Maze</h3>
			<p style="MARGIN: 0px 0px 1.4em 0px;">In this prestigious event, teams must build an autonomous machine that can navigate a maze and reach the destination in the fastest time possible. The mouse must be entirely self-contained and autonomous. Use of computers for controlling the machine is not allowed. Also no information regarding the maze can be fed to the mouse once the maze is revealed. Last date for registration of entries is 10th December 2005. Last year, the fastest mouse conquered the maze in a blistering 17 seconds. Do you have it in you to challenge the Masters of the Maze??? </p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/ai/micromouse/" target="_blank">http://www.techfest.org/ai/micromouse/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Character Recognition</h3>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Participants must code a program which can identify mouse-drawn/stylus-written on-screen characters. The input characters will be in the Devanagari script and the output must be displayed on screen in a console in UNICODE format. The use of MATLAB/MATHEMATICA/SCILAB or any environment similar to these is strictly prohibited but teams can use programming languages like C/C++/VB/Fortran etc. As a screening procedure, all teams have to submit an abstract regarding the algorithm and flowchart of the code. Selected entries will be called to IIT Bombay where the competition will be held in two stages. In the first stage, teams must identify the characters and in the second stage, they have to make a presentation to the judges about their code, algorithm etc.</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Last date for registration as well as abstract submission is 10th December, 2005. </p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/ai/char_recog/" target="_blank">http://www.techfest.org/ai/char_recog/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Crux</h3>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The technical paper presentation competition. A participant can choose any topic related to the field of artificial intelligence and its branches like neural networks, natural language processing etc. and write a paper on the same. The entries that pass the elimination round will be called to make a technical presentation during Techfest ’06.</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Last date for registrations and submission of paper is 10th December, 2005.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/ai/crux/" target="_blank">http://www.techfest.org/ai/crux/</a><br><br>
      	</div>
		<div class="sektionsubhead" style="background-color: #FAFAFA;color: #58595B;text-decoration: none;BORDER-BOTTOM: 1px solid #DFDEDE;MARGIN: 0px;	padding: 4px 5px 4px 10px;	display: block;BORDER-top: 1px solid #DFDEDE;BORDER-left: none;padding-left: 11px;"> 
        	<h2 style="PADDING: 0px;	margin:0;font-family: Georgia, Times, serif;font-size: 10px;	font-weight: bold;	letter-spacing: 1px;	text-align:center;color: #6F6F6F;
	text-decoration:none;
	text-transform:none;"> CONCREaTE</h2> 
      	</div> 
      	<div class="paddingcontent" style="PADDING: 7px 10px 7px 10px;	MARGIN: 0px;	border-top: 1px solid #F7F7F7;border-left: 1px solid #F7F7F7;LIST-STYLE-TYPE: none;	background-color: #FFF;border-bottom: none;PADDING: 10px 20px 3px 23px;"> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">Architecture and construction have always been synonymous with progress and advancement. From the Pyramids of Egypt to the Petronas Towers in Malaysia, man has come a long way. The future holds more potential than we can possibly imagine - be it in terms of materials or design. At CONCREaTE, we give you a platform to display your skills in building futuristic structures with commonplace materials.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/concreate/" target="_blank">http://www.techfest.org/concreate/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">H</h3> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">This competition involves designing and building a helipad using only Popsicle (ice cream) sticks, threads and standard adhesives. Teams must build a flat, horizontal and continuous surface, with provision for clamping onto 4 columns below this surface. The lightest platform that can stand the maximum load of 30 kg on the flat deck (helipad) for a minimum of 30 seconds will be declared the winner.</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Last date for registration of entries is 31st December, 2005. </p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/concreate/h/" target="_blank">http://www.techfest.org/concreate/h/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Bridged</h3>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Bridged involves designing and building a bridge satisfying certain criteria. The bridge must be plane truss in nature and designed for a load capacity 800 N/m with a safety factor of 1.5. The deck of the bridge must 60 x 250 cm in dimension. Entries are to be made in the form of sealed tenders which will include the detailed hand drawn drawings of the various sections of the bridges, the material as well as labor cost of construction (refer site for more details), time for construction and the deflection that the bridge will undergo. These tenders have to be submitted to the organizers and short listed teams will be given a chance during Techfest ’06 to make a PowerPoint presentation detailing their design. Entries selected from the presentation will then be given a chance to actually build the structure with the specified materials in their specified time.</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Last date for registration is 15th December 2005 and that for submitting tenders is 31st December 2005. </p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/concreate/bridged/" target="_blank">http://www.techfest.org/concreate/bridged/</a><br><br>
        </div>
		<div class="sektionsubhead" style="background-color: #FAFAFA;color: #58595B;text-decoration: none;BORDER-BOTTOM: 1px solid #DFDEDE;MARGIN: 0px;	padding: 4px 5px 4px 10px;	display: block;BORDER-top: 1px solid #DFDEDE;BORDER-left: none;padding-left: 11px;"> 
        	<h2 style="PADDING: 0px;margin:0;font-family: Georgia, Times, serif;font-size: 10px;	font-weight: bold;	letter-spacing: 1px;	text-align:center;color: #6F6F6F;
	text-decoration:none;
	text-transform:none;"> Cosmos</h2> 
      	</div> 
      	<div class="paddingcontent" style="PADDING: 7px 10px 7px 10px;	MARGIN: 0px;	border-top: 1px solid #F7F7F7;border-left: 1px solid #F7F7F7;LIST-STYLE-TYPE: none;	background-color: #FFF;border-bottom: none;PADDING: 10px 20px 3px 23px;"> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">Humans, for generations, have been intrigued by the eternity we call our Universe, yet we seem to know very little about what conspires beyond the horizons of our Solar System. Cosmos is the theme of space exploration at Techfest ‘06. Through a series of competitions, lectures, workshops and mind boggling displays, we aim to showcase some of the most breathtaking expeditions to space, their impact on mankind and bring you up to date on the story so far. </p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/cosmos/" target="_blank">http://www.techfest.org/cosmos/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">G.R.I.P.</h3> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">The International Space Station’s fuel cell from its power chamber has been dislodged due to a meteor collision and the ISS is on the verge of collapsing unless something is done fast…</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Can you save the day?</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Participants must devise a Galactic Recovery Instrumental Probe (G.R.I.P.) – a wired/wireless remote controlled machine that can traverse a grid, recover a cylindrical object (fuel cell) from a specific point below the grid and place it in a given slot.</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The competition has a video elimination round and the teams must mail a parcel with an abstract of the machine and a CD/DVD showing their machine in action (refer website for details). Selected entries will then be notified and the finals will be held at IIT Bombay. </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Last date for registration is 20th December, 2005 and the last date for receipt of parcels is 20th December, 2005.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/cosmos/grip/" target="_blank">http://www.techfest.org/cosmos/grip/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Black Box</h3>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Solar energy is the most easily accessible form of energy in space and solar sails are used to harness this energy. A solar sail is a large, flat surface that can be used to harness the energy of the sun to propel a spacecraft around the solar system. Teams must build a solar sail that will initially fit into a box of given dimensions. On receiving a single electronic/mechanical impulse it should be able to expand to have the maximum projected area in the given direction. The sail can have any shape and must not be made of any shiny or reflecting material.</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The last date for registration is 20th December, 2005.</p>			
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/cosmos/black_box/ " target="_blank">http://www.techfest.org/cosmos/black_box/ </a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">ASU’s Mars Rover Exhibition</h3>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The Arizona State University (ASU), USA has been working in collaboration with NASA on the Mars Rover Project. In May 2005, ASU was invited to the China Science & Technology Week to display the technologies in use. Needless to mention, it was a big hit and over a million people attended the ASU exhibition!</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">A similar exhibition will be held at Techfest this year. India is only the second country outside the US where this exhibition is being held!!! ASU will be sending a team of 4-5 NASA researchers to guide us through the exhibition. Some highlights of what can be expected: </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">i)  Display of scaled-down models of the space-craft, the rovers and probes on Mars, and full-sized models of the instruments fitted onto the probes and space-craft. Also on display will be fist-sized meteorites collected by ASU over the years.</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">ii) Latest videos, fresh from the rovers on Mars, to be beamed down at this exhibition!!!</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">iii) Video-clippings of the highlights of the mission, right from launch of the space-craft to touchdown on Mars, from panoramic views captured by the rovers on Mars to flight-views of the canyons of Mars!!! And lots more!!</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/exhibition/asu/" target="_blank">http://www.techfest.org/exhibition/asu/</a><br><br>
		</div>
		<div class="sektionsubhead" style="background-color: #FAFAFA;color: #58595B;text-decoration: none;BORDER-BOTTOM: 1px solid #DFDEDE;MARGIN: 0px;	padding: 4px 5px 4px 10px;	display: block;BORDER-top: 1px solid #DFDEDE;BORDER-left: none;padding-left: 11px;"> 
        	<h2 style="PADDING: 0px;margin:0;font-family: Georgia, Times, serif;font-size: 10px;	font-weight: bold;	letter-spacing: 1px;	text-align:center;color: #6F6F6F;
	text-decoration:none;
	text-transform:none;">e – Rustique</h2> 
      	</div> 
      	<div class="paddingcontent" style="PADDING: 7px 10px 7px 10px;	MARGIN: 0px;	border-top: 1px solid #F7F7F7;border-left: 1px solid #F7F7F7;LIST-STYLE-TYPE: none;	background-color: #FFF;border-bottom: none;PADDING: 10px 20px 3px 23px;"> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">e–Rustique is an attempt by Techfest to take a step in the right direction by concentrating on some of the core issues faced in villages like communications, infrastructure, health and education and show with the help of technology, how these problems can be reckoned with. We intend to engage the student community in this noble endeavor and believe that Techfest would indeed be an ideal platform for the youth to come up with novel solutions to existing problems.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/erustique/" target="_blank">http://www.techfest.org/erustique/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">The Simple Life v1.1</h3> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">The idea is to develop software that can be used in the village kiosk (after analyzing the situation – inherent advantages, handicaps, abilities, weaknesses, etc. - of the village and the villagers) and take appropriate action. Certain data like the population, occupations, physical conditions etc will be provided, based on which the analysis has to be made. </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The \'project\' will undergo development to completion by interaction with the industry and will comprise of two main stages. The first stage is the calling for ideas, wherein a shortlist will be made, and the second will be the actual development period with assistance provided by industry. </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The last date for submission of abstracts detailing the ideas is 12th November, 2005. The short listing and project commencement will be from the 25th November 2005. So hurry!</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/erustique/simple_life/" target="_blank">http://www.techfest.org/erustique/simple_life/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Agrobot</h3>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Build a wired remote controlled machine which can dig holes in mud and plant saplings. The machine(s) must have the capacity to carry 15 saplings that will be pre loaded on it. It must then plant ten of these saplings in ten pits on the arena in a maximum time of 10 minutes. The extra element of fun is provided by pitting two teams against each other and the team which finishes the task fastest with minimum penalties is declared the winner. </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The last date for registration is 20th December, 2005.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/erustique/agrobot/">http://www.techfest.org/erustique/agrobot/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Innovision</h3>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Rural India is faced by a number of problems that can be solved by incorporating simple cost-effective technology. At Innovision, participants must come up with solutions to problems relevant to the scenario of rural India today. The solution may be innovative or an improvised version of an already existing solution. Teams must submit an abstract of their ideas detailing the relevance of the problem, the extent of implementation possible and cost effectiveness. A list of some relevant problems is provided on our website. Selected teams will then be called to IIT Bombay during Techfest ’06 to display a working solution/prototype/model. </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The last date for registration as well as submission of abstracts is 10th December 2005.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/erustique/innovision/" target="_blank">http://www.techfest.org/erustique/innovision/</a><br><br>
      	</div>
      	<div class="sektionsubhead" style="background-color: #FAFAFA;color: #58595B;text-decoration: none;BORDER-BOTTOM: 1px solid #DFDEDE;MARGIN: 0px;	padding: 4px 5px 4px 10px;	display: block;BORDER-top: 1px solid #DFDEDE;BORDER-left: none;padding-left: 11px;"> 
        	<h2 style="PADDING: 0px;	margin:0;font-family: Georgia, Times, serif;font-size: 10px;	font-weight: bold;	letter-spacing: 1px;	text-align:center;color: #6F6F6F;
	text-decoration:none;
	text-transform:none;">Sixth Gear</h2> 
      	</div> 
      	<div class="paddingcontent" style="PADDING: 7px 10px 7px 10px;	MARGIN: 0px;	border-top: 1px solid #F7F7F7;border-left: 1px solid #F7F7F7;LIST-STYLE-TYPE: none;	background-color: #FFF;border-bottom: none;PADDING: 10px 20px 3px 23px;"> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">The wheel is probably one of the greatest inventions of mankind. Cars and planes have dramatically changed our lives, giving a whole new meaning to travel. Man has been obsessed with speed for many years now and even today, keeps striving for that extra bit of speed, that extra percent of efficiency. Every day heralds the start of something new in the automobile and aviation sector.</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">At Sixth Gear we give you the opportunity to get back behind the wheels and drive through the latest and best in auto-tech and aviation technology and try a hands-on approach while learning the nuances of some of the most complicated machines around.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/sixth_gear/" target="_blank">http://www.techfest.org/sixth_gear/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Full Throttle</h3> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">Make a remote controlled car that can cover a given stretch of a flat and straight track in the shortest possible time. The machine can be powered by up to 3.2 cc IC engines. The participants must also devise their own starting mechanisms like a launching pad as well a stopping mechanism for the engine to stop running after the finish line. The machine must have a remote control mechanism to drive the car. </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The last date for registration is 10th December, 2005.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/sixth_gear/fullthrottle" target="_blank">http://www.techfest.org/sixth_gear/fullthrottle</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Hover - Junior</h3> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">Junior is the competition at Techfest for students up to 10+2. Participants must build a hovercraft that travels along a given path and accomplish given tasks. The hovercraft has to descend along a 5-degree incline, cross a pit and then cross a water-body and finally knock down three loosely fixed flags before turning back and coming to starting point. All this will be in competition with a rival hovercraft and must be done of-course with an air-cushion at all times between the craft and the surface below.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/sixth_gear/hover_junior/" target="_blank">http://www.techfest.org/sixth_gear/hover_junior/</a><br><br>
      	</div> 
      	<div class="sektionsubhead" style="background-color: #FAFAFA;color: #58595B;text-decoration: none;BORDER-BOTTOM: 1px solid #DFDEDE;MARGIN: 0px;	padding: 4px 5px 4px 10px;	display: block;BORDER-top: 1px solid #DFDEDE;BORDER-left: none;padding-left: 11px;"> 
        	<h2 style="PADDING: 0px;	margin:0;font-family: Georgia, Times, serif;font-size: 10px;	font-weight: bold;	letter-spacing: 1px;	text-align:center;color: #6F6F6F;
	text-decoration:none;
	text-transform:none;">Smart Tech</h2> 
      	</div> 
		<div class="paddingcontent" style="PADDING: 7px 10px 7px 10px;	MARGIN: 0px;	border-top: 1px solid #F7F7F7;border-left: 1px solid #F7F7F7;LIST-STYLE-TYPE: none;	background-color: #FFF;border-bottom: none;PADDING: 10px 20px 3px 23px;"> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">Technology today is an integral part of our lives with a wide variety of gadgets and gizmos lying at our disposal. In modern times, it has made life seem like a cakewalk, what with the lavish comforts and luxuries it gives us, and dispensing of our necessities with further efficiency. However this is just the beginning and the future lies in wait promising much, much more! </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Smart Tech gets you up-close to gadgets and systems which were a distant dream in the recent past and are still unknown to many. Bringing the latest in this vibrant, new dimension to technology, we make sure you see what might be prevalent in our lives in the decades to come.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/smart_tech/" target="_blank">http://www.techfest.org/smart_tech/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">iClean</h3> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">Teams must build an autonomous machine that can collect a specific amount of material-puffed rice (murmure) from the board and dump it into a specified zone of the arena. The machine must have an onboard mechanism to measure the weight of the contents collected. The machine is required to collect the puffed rice randomly scattered in its zone and then move to another zone through the gate and dump the contents in its pit. The machine may transit multiple times to dump the required load.</p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Last date for registration is 10th December, 2005.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/smart_tech/iclean/" target="_blank">http://www.techfest.org/smart_tech/iclean/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Prayaas</h3> 
			<p style="MARGIN: 0px 0px 1.4em 0px;">At Techfest ’05 Drishti, a competition to make aids for the visually impaired was launched. Taking off from where we left, Techfest ’06, in association with the National Association for the Blind (NAB) and the Happy Hours Centre (HHC), presents Prayaas. Prayaas is an attempt to make the lives of the physically disabled simpler and more comfortable. Participants can choose problem statements from the website or one of their own and develop smart workable solutions. The teams must submit an abstract for the screening round outlining their solution. The solution may be supported by diagrams and graphs. Select teams will be called to Techfest ’06 to showcase their idea for the finals. </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">Last date for registration and submission of abstracts is 20th December 2005.</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/smart_tech/prayaas/" target="_blank">http://www.techfest.org/smart_tech/prayaas/</a><br>
			<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Home Alive</h3>
			<p style="MARGIN: 0px 0px 1.4em 0px;">How would we define an ideal home? One in which all our requirements are met and all our work is simplified to the maximum possible extent. Home Alive takes a look at the concept of smart homes. The teams have to design a Smart Home on a given layout, incorporating the systems mentioned and give a presentation highlighting its salient features. The competition will be held in two stages. The first stage, an elimination round, requires teams to write an abstract on smart security solutions for the given layout. The write up must showcase the use of only existent technologies and the solution must be easily adaptable. The teams that qualify will then have to make a presentation, in IIT Bombay at Techfest ‘06 outlining other smart systems that can be incorporated for the same layout. </p>
			<p style="MARGIN: 0px 0px 1.4em 0px;">The last date for registration and submission of abstracts is 10th December, 2005</p>
			<a style="COLOR: #00A2FF;" href="http://www.techfest.org/smart_tech/home_alive/" target="_blank">http://www.techfest.org/smart_tech/home_alive/</a><br><br>
		</div> 
		<div class="sektionsubhead" style="background-color: #FAFAFA;color: #58595B;text-decoration: none;BORDER-BOTTOM: 1px solid #DFDEDE;MARGIN: 0px;	padding: 4px 5px 4px 10px;	display: block;BORDER-top: 1px solid #DFDEDE;BORDER-left: none;padding-left: 11px;"> 
        	<h2 style="PADDING: 0px;	margin:0;font-family: Georgia, Times, serif;font-size: 10px;	font-weight: bold;	letter-spacing: 1px;	text-align:center;color: #6F6F6F;
	text-decoration:none;
	text-transform:none;">Lecture Series</h2> 
		</div> 
		<div class="paddingcontent" style="PADDING: 7px 10px 7px 10px;	MARGIN: 0px;	border-top: 1px solid #F7F7F7;border-left: 1px solid #F7F7F7;LIST-STYLE-TYPE: none;	background-color: #FFF;border-bottom: none;PADDING: 10px 20px 3px 23px;"> 
		<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Dr. Amar Bose, Founder-CEO of Bose Corporation (USA) </h3>
		<p style="MARGIN: 0px 0px 1.4em 0px;">(known for its state-of-the-art speakers that give a high power output and are yet very compact in size) will be coming to Techfest ‘06. Dr. Amar Bose was also the inventor of the first of these speakers and will relate his experiences as an inventor, and share his knowledge as well.</p>
		<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Dr. Sam Pitroda, (Chairman, WorldTel Limited, UK; and Chairperson National Knowledge Commission, India)</h3>
		<p style="MARGIN: 0px 0px 1.4em 0px;"> will be talking about the Internet and Communication Technology revolution sweeping across India. Listen to the man taking India towards the dream of a Developed Nation with upliftment through connectivity. </p>
		<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Also Prof Rodney Brooks, Director of MIT’s Computer Science and Artificial Intelligence Labs(CSAIL)  and Fujitsu Professor of Computer Science</h3>
		<p style="MARGIN: 0px 0px 1.4em 0px;"> will be coming to IIT Bombay for a lecture on Artificial Intelligence. He is Chief Technical Officer and sits on the Board of iRobot Corp. His research interests are: </p>
		<p style="MARGIN: 0px 0px 1.4em 0px;">*engineering intelligent robots to operate in unstructured environments</p>
		<p style="MARGIN: 0px 0px 1.4em 0px;">*understanding human intelligence through building humanoid robots</p>
		<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Prof Anil K Gupta, (exec- Vice Chairman National Innovation Foundation, also holding the Kasturbhai Lalbhai Chair in Entrepreneurship, IIM Ahmedabad)</h3>
		<p style="MARGIN: 0px 0px 1.4em 0px;"> is another of our distinguished speakers. Responsible for establishing NIF, winner of the Padma Shri National Award, and adjudged as one of the Fifty Most Influential people in the field of Intellectual Property Rights around the world in 2003, Prof Gupta’s lecture will be one of the biggest events at Techfest over the years!</p>
		<h3 style="font-family: Georgia, Times, serif;	font-weight: bold;	font-size: 11px;	MARGIN: 0px;PADDING: 1.2em 0px 1em 0px;">Dr. Eric Mathews – The man who has designed the PKD Android</h3>
		<p style="MARGIN: 0px 0px 1.4em 0px;"> and is Associate Director of both FedEx Institute of Technology, USA and Institute of Intelligent Systems, University of Memphis, will be coming to talk about the technology behind the Android using visual aids (for e.g. videos of the Android in action, etc.). The Android is a human-skinned robot.</p>
		<br>
		<p style="MARGIN: 0px 0px 1.4em 0px;">Techfest ‘06 has a lot more events coming up in the next two months. Through our newsletters, we shall keep you abreast of all new developments and updates. Expect a lot of interesting information awaiting you in your inbox. We hope to see you in January at Techfest ’06!</p>
		For more information regarding Techfest ‘06 - events, rules, registrations and any clarifications at all, please visit our website <a style="COLOR: #00A2FF;" href="http://www.techfest.org" target="_blank">www.techfest.org</a><br> or mail us at <strong style="COLOR: #00A2FF;">info@techfest.org</strong> .
		</div>
		
</div>
</div> 
</div>
<br>
</body>
</html>';


$h = mail($id, $sub, $mes, $headers);




}



?>