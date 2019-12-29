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
<!-- ##### Main Copy ##### -->

<div id="content">
<h1 id="toptext">CHIP India Gaming Zone</h1> 
<p><img src="http://gymkhana.iitb.ac.in/~techfest/newsite/sponsors/img/chip.gif" border="0" align="right" hspace="5" vspace="5">Think you are good with games? Then here is your chance to prove yourself. Continuing with the tradition of Techfest, <strong>IIT Bombay</strong> and <strong>CHIP</strong> present the <strong>CHIP India Gaming Zone</strong>. Gaming is not everyone’s cup of tea as it gets bigger and better this year. More than 2000 participants and 12,000-15,000 gaming enthusiasts are expected this year. Attractive prizes to be won.</p>

<br>
<br><br>
<h1>PC Gaming</h1>
<br>
<h3>Need For Speed : Most Wanted</h3>
<p><img src="./img/nfs1.gif" align="right" alt="" hspace="8" vspace="2" border="0">Wake up to the smell of burnt asphalt as the thrill of illicit street racing permeates the air. From the makers of the hit Need for Speed™ Underground series, Need for Speed™ Most Wanted challenges players to become the most notorious and elusive street racer.</p>
<p><a href="http://www.ea.com/official/nfs/mostwanted/us/home.jsp" target="_blank">http://www.ea.com/official/nfs/mostwanted/us/home.jsp</a></p>
<br><br>
<h3>Counter Strike</h3>
<p><img src="./img/cs1.gif" align="right" alt="" hspace="5" vspace="5" border="0">Counter-Strike is the #1 online action game in the world. Engage in a realistic brand of counter-terrorist warfare in this popular team-based game. Take out enemy sites. Rescue hostages. Your role affects your team's success. Your team's success affects your role.</p>
<p><a href="http://www.counter-strike.net/" target="_blank">http://www.counter-strike.net/</a></p>
<br><br>
<h1>Registration</h1>
<p>There will be on the spot registration for all the games. No accomodation shall be provided for this event.</p>



For queries contact:<br>
Siddharth Joshi<br>
Manager, Web<br>
Email: <a href="http://www.techfest.org/mail.php?email=igz@techfest.org" target="_blank">igz@techfest.org</a><br>
Ph. +91-98196 85375<br>
<br><br><br><br><br><br><br><br><br><br><br><br>

</div>

<?
echo_content("footer.txt");
?>