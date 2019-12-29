<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<META NAME=DESCRIPTION CONTENT="Techfest '06: IIT bombay presents Asia's Largest Technology Festival">
	<META NAME=KEYWORDS CONTENT="techfest, techfest.org, survivor, yantriki,last straw, chemsplash, lecture series, iit bombay, technology, workshops, iit">
	<META NAME=AUTHOR CONTENT="Techfest 2006">
	<link rel="icon" href="http://www.techfest.org/archives/tf06/favicon.ico">

	<link href="http://www.techfest.org/archives/tf06/css/blah3.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="http://www.techfest.org/archives/tf06/javascript/ypSlideOutMenusC.js"></script>
	<script type="text/javascript" src="http://www.techfest.org/archives/tf06/javascript/contentmenu.js"></script>
	<title>Techfest '06 - Asia's Largest Technology Fest</title>
	<style type="text/css">

#marqueecontainer{
position: relative;
height:100px;
background-color:transparent;
overflow: hidden;
margin:0;
padding:0;
}
#marqueecontainer ul {
padding:0;
list-style-type:none;
background-color:#394142;
margin:0px 0px 0px 4px;
}

#marqueecontainer li {
display:block;
padding:0px 0px 0px 4px;
width:14em;
}
</style>

<script type="text/javascript">



var delayb4scroll=0 //Specify initial delay before marquee starts to scroll on page (2000=2 seconds)
var marqueespeed=1 //Specify marquee scroll speed (larger is faster 1-10)
var pauseit=1 //Pause marquee onMousever (0=no. 1=yes)?



var copyspeed=marqueespeed
var pausespeed=(pauseit==0)? copyspeed: 0
var actualheight=''

function scrollmarquee(){
if (parseInt(cross_marquee.style.top)>(actualheight*(-1)+8))
cross_marquee.style.top=parseInt(cross_marquee.style.top)-copyspeed+"px"
else
cross_marquee.style.top=parseInt(marqueeheight)+8+"px"
}

function initializemarquee(){
cross_marquee=document.getElementById("vmarquee")
cross_marquee.style.top=0
marqueeheight=document.getElementById("marqueecontainer").offsetHeight
actualheight=cross_marquee.offsetHeight
/*if (window.opera || navigator.userAgent.indexOf("Netscape/7")!=-1){ //if Opera or Netscape 7x, add scrollbars to scroll and exit
cross_marquee.style.height=marqueeheight+"px"
cross_marquee.style.overflow="scroll"
return
}*/
setTimeout('lefttime=setInterval("scrollmarquee()",50)', delayb4scroll)
}

if (window.addEventListener)
window.addEventListener("load", initializemarquee, false)
else if (window.attachEvent)
window.attachEvent("onload", initializemarquee)
else if (document.getElementById)
window.onload=initializemarquee


</script>
</head>

<body>

	<style type="text/css">
	#fader {
	text-align: center;
}
	#fader a {
	color:white;
	}
#fader a:hover,a:visited {
	color:white;
	}
	</style>
	<div id="header">
	<div id="rightimg"><a href="http://www.techfest.org/archives/tf06/index.php"><img alt="" src="http://www.techfest.org/archives/tf06/topbar/rightlogo.jpg" border="0"></a></div>

	<div id="leftimg">
	<img src="http://www.techfest.org/archives/tf06/topbar/left.jpg" alt="" border="0" usemap="#topbar">
    <map name="topbar" id="topbar">
      <area shape="rect" coords="5,0,48,39" href="http://www.iitb.ac.in" target="_blank">
      <area shape="rect" coords="58,6,118,39" href="http://www.sap.com" target="_blank">
      <area shape="rect" coords="365,60,491,75" href="http://www.hindustantimes.com" target="_blank">
      <area shape="rect" coords="129,25,340,49" href="http://www.techfest.org/archives/tf06">
    </map>
	</div>

	<div id="navtop"><a href="http://www.techfest.org/archives/tf06/sponsors/index.php">Sponsors</a> | <a href="http://www.techfest.org/archives/tf06/media/index.php">Media</a> | <a href="http://www.techfest.org/archives/tf06/lookback/index.php">Lookback</a></div>
	<div id="fader" style="position:absolute; right:100px; top:30px;">
		<script language="JavaScript1.2" type="text/javascript" src="http://www.techfest.org/archives/tf06/javascript/updates1.js">
		</script>
	</div>     
	</div>
	<div id="menus">
		<h2>Navigation</h2>
		<ul>

			<li><a href="http://www.techfest.org/archives/tf06/ai/index.php" onmouseover="ypSlideOutMenu.showMenu('menu1');" onmouseout="ypSlideOutMenu.hideMenu('menu1');" >
			<img alt="" src="http://www.techfest.org/archives/tf06/topbar/ai.gif" border="0" ></a></li>
			<li><a href="http://www.techfest.org/archives/tf06/concreate/index.php"  onmouseover="ypSlideOutMenu.showMenu('menu2');" onmouseout="ypSlideOutMenu.hideMenu('menu2');">
			<img alt="" src="http://www.techfest.org/archives/tf06/topbar/concreate.gif" border="0"></a></li>
			<li><a href="http://www.techfest.org/archives/tf06/cosmos/index.php"  onmouseover="ypSlideOutMenu.showMenu('menu3');" onmouseout="ypSlideOutMenu.hideMenu('menu3');">
			<img alt="" src="http://www.techfest.org/archives/tf06/topbar/cosmos.gif" border="0"></a></li>
			<li><a href="http://www.techfest.org/archives/tf06/erustique/index.php"  onmouseover="ypSlideOutMenu.showMenu('menu4');" onmouseout="ypSlideOutMenu.hideMenu('menu4');">
			<img alt="" src="http://www.techfest.org/archives/tf06/topbar/erustique.gif" border="0"></a></li>
			<li><a href="http://www.techfest.org/archives/tf06/sixth_gear/index.php"  onmouseover="ypSlideOutMenu.showMenu('menu5');" onmouseout="ypSlideOutMenu.hideMenu('menu5');">

			<img alt="" src="http://www.techfest.org/archives/tf06/topbar/sixth.gif" border="0"></a></li>
			<li><a href="http://www.techfest.org/archives/tf06/smart_tech/index.php"  onmouseover="ypSlideOutMenu.showMenu('menu6');" onmouseout="ypSlideOutMenu.hideMenu('menu6');">
			<img alt="" src="http://www.techfest.org/archives/tf06/topbar/smart.gif" border="0"></a></li>
			<li><a href="http://www.techfest.org/archives/tf06/scitech/index.php"  onmouseover="ypSlideOutMenu.showMenu('menu7');" onmouseout="ypSlideOutMenu.hideMenu('menu7');">
			<img alt="" src="http://www.techfest.org/archives/tf06/topbar/technoholix.gif" border="0"></a></li>
			
			
		</ul>
	</div>

<div id="sidebar">
    
		
		
		<div id="box3" >
			<ul>
				<li id="title">Go To</li>
				<li id="menuitem"><img src="http://www.techfest.org/archives/tf06/img/POSTS-blt.gif"><a href="http://www.techfest.org/archives/tf06/acknowledgement.php"> &nbsp;&nbsp;Acknowledgement</a></li>

				<li id="menuitem"><img src="http://www.techfest.org/archives/tf06/img/POSTS-blt.gif"><a href="http://www.techfest.org/archives/tf06/otse/index.php"> &nbsp;&nbsp;O-Zone</a></li>

				<li id="menuitem"><img src="http://www.techfest.org/archives/tf06/img/POSTS-blt.gif"><a href="http://www.techfest.org/archives/tf06/workshops/index.php"> &nbsp;&nbsp;Workshops</a></li>
				<li id="menuitem"><img src="http://www.techfest.org/archives/tf06/img/POSTS-blt.gif"><a href="http://www.techfest.org/archives/tf06/lecture_series/index.php"> &nbsp;&nbsp;Lecture Series</a></li>
				<li id="menuitem"><img src="http://www.techfest.org/archives/tf06/img/POSTS-blt.gif"><a href="http://www.techfest.org/archives/tf06/exhibition/index.php"> &nbsp;&nbsp;Exhibitions</a></li>

				<li id="menuitem"><img src="http://www.techfest.org/archives/tf06/img/POSTS-blt.gif"><a href="http://forum.techfest.org"> &nbsp;&nbsp;Forum - Questworld!</a></li>
				
			</ul>
		</div>		
		<!--Box2 -->

	
		<!--Box2 -->

		<div id="box2">
			<ul>
				<li id="title">Newsletter</li>
				<li id="newsletter">
					<form method="post" action="http://www.techfest.org/archives/tf06/newsletter.php">
					<table width="100%" border="0">
					<tr align="center"><td><input type="text" size="15" name="news_email" id="news_email" value="Email" onblur="if (this.value == '') this.value = 'Email';" onfocus="if (this.value == 'Email') this.value = '';" /></td>
					<td><input class="button" name="" type="image"  src="http://www.techfest.org/archives/tf06/img/SEND-btn.gif"id="submit"  /></td></tr></table>

					</form>
				</li>
			</ul>
		</div>
		<!-- End Box2-->








  	</div>
<!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Techfest '06</h1> 

<p><img alt="" src="../img/index1.jpg" border="0" hspace="10" vspace="5" align="right">Life is the fuel that propagates our dreams of unfolding the
unknown. It is only this thirst for knowledge that brings mere mortals
like us amidst this enigmatic but dazzling cornerstone of human excellence
- Science and Technology.</p>

<p>TECHFEST, the annual international science and technology festival of <a href="http://www.iitb.ac.in" class="nou" target="_blank">IIT Bombay</a> and the biggest of its kind in Asia brings forth to you its latest
instalment - TECHFEST 2006. The dharma behind Techfest is to bridge the
gap between us and the unbelievable and incomprehensible from the latest
developments in science and technology.</p>

<p>We, at Techfest, are proud to share and propagate the euphoria of learning. From competitions to workshops, lectures to exhibitions,
Techfest 2006 has everything in store to conquer your imagination. Welcome
to the madness that is IIT Bombay. Welcome to Techfest 2006!</p>
<p> Join the Techfest online forum and post your
questions/doubts/suggestions and expect replies from us in a jiffy! It
has been created to simplify the procedure of queries and their answers.
It can be found at <a href="http://forum.techfest.org/" target="_blank">QuestWorld!</a>. </p>

<br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<div id="footer">
	<div class="center">
		<div class="right">
			Web Hosting By<br>&nbsp;&nbsp;&nbsp;
			<a href="http://www.indialinks.com" target="_blank">Indialinks</a>
		</div>	<div class="left"><a href="http://www.techfest.org/archives/tf06/faq/faq.php">FAQ</a> | <a href="http://www.techfest.org/archives/tf06/sitemap/sitemap.php">Sitemap</a> | <a href="http://www.techfest.org/archives/tf06/contactus/contactus.php">Contact Us</a> 
</div>
    Copyright &copy; 2006 Techfest Team<br>
	
</div>
<!-- start 1st menu -->
<div id="menu1Container">
 <div class="menu" id="menu1Content">
    <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/ai/crux/index.php">Crux</a></div>
  <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/ai/micromouse/index.php">Micromouse</a></div>
  <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/ai/core_war/index.php">Core War</a></div>
  <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/ai/char_recog/index.php">Character Recognition</a></div>
  <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/ai/grey_circuits/index.php">Workshop - Grey Circuits</a></div>


 
 </div>
</div>

<!-- start 2rd menu -->
<div id="menu2Container">
 <div class="menu" id="menu2Content">
  <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/concreate/h/index.php"><img src="http://www.techfest.org/archives/tf06/concreate/h/img/hwtext.gif" border=0></a></div>
  <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/concreate/bridged/index.php">Bridged</a></div>
  <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/concreate/createcad/index.php">CreateCAD</a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/concreate/connecting/index.php">Connecting...</a></div>
  
 </div>
</div>

<!-- start 3nd menu -->
<div id="menu3Container">
 <div class="menu" id="menu3Content">
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/cosmos/grip/index.php">G.R.I.P.</a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/cosmos/black_box/index.php">Black Box</a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/cosmos/mission_moon/index.php">Mission Moon 2030</a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/exhibition/asu/index.php">ASU's Exhibition: Welcome to Mars</a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/exhibition/isro/index.php">ISRO's Exhibition: India in Space</a></div>
  
  </div>
</div>

<!-- start 4th menu -->
<div id="menu4Container">
 <div class="menu" id="menu4Content">
  <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/erustique/agrobot/index.php">AgroBot</a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/erustique/innovision/index.php">Innovision</a></div>
  <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/erustique/simple_life/index.php">The Simple Life v1.1</a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/exhibition/nif/index.php">NIF Exhibition</a></div>
  
 </div>
</div>

<!-- start 5th menu -->
<div id="menu5Container">
 <div class="menu" id="menu5Content">
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/sixth_gear/flyhigh/index.php">FlyHigh</a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/sixth_gear/hover_junior/index.php">Hover Junior</a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/sixth_gear/fullthrottle/index.php">Full Throttle </a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/sixth_gear/future_flight/index.php">Future Flight </a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/sixth_gear/iterations/index.php">Workshop - Iterations</a></div>
<div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/sixth_gear/robotrix/index.php">Workshop - roboTRIx</a></div>





  
 </div>
</div>

<!-- start 6th menu -->
<div id="menu6Container">
 <div class="menu" id="menu6Content">
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/smart_tech/iclean/index.php">iClean </a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/smart_tech/prayaas/index.php">Prayaas </a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/smart_tech/home_alive/index.php">Home Alive </a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/smart_tech/idp/index.php">GE's Industry Defined Problem </a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/smart_tech/codec/index.php">Workshop - Codec </a></div>


 </div>
</div>

<!-- start 7th menu -->
<div id="menu7Container">
 <div class="menu" id="menu7Content">
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/scitech/index.php">SciTech</a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/scitech/scitech_intra.php">SciTech - INTRA</a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/technovision/index.php">Technovision Awards</a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/technoholix/igz/index.php">CHIP India Gaming Zone</a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/technoholix/ballooning/index.php">AAW Ballooning Display</a></div>
 <div class="islide"><strong>&raquo;</strong> <a href="http://www.techfest.org/archives/tf06/exhibition/iaf/index.php">Indian Air Force Exhibition</a></div>


 </div>
</div>




</body>
</html>