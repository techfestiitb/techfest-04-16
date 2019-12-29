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
echo_content("side_no.txt");
echo_content("side_update.txt");
?>
<div id="content">
     <h1 id="toptext">e-Rustique</h1> 
<p><img src="../themeimg/rustique.jpg" border="0" hspace="10" vspace="5" align="right">"A vision is a dream until it is seen with the eyes, rather than with the mind..."</p>

<p> Huge investments by the industry, massive patronization by the government, enormous need of the hour...</p>

  <p>The urban world has had its share of time in the limelight, and it is the age where the masses are coming to the fore. It is time for the vision to become a reality of a developed nation replete with all its splendour and luxuries. Technology, which used to be far ahead of the rural community till now, finally has been caught.</p>

<p>Hon'ble President APJ Abdul Kalam's PURA (Providing Urban amenities to Rural Areas) mission for India to become developed by 2020 has made us feel the need to give Rural India a suitable platform to the minds which will make it materialize.</p>

<p>Our country at this juncture needs the dedicated involvement of the student fraternity, to realise this dream. Along these lines, this time we tackle the Modern needs of Ruralized areas, in a synonymous rather than an oxymoronic sense.</p>

<p>Changing the very perception of Rural India, Techfest tackles issues like communication, infrastructure, health, education, commerce, transportation of Rural India in a new light, making them appealing and having pertinent applicability. Being a part of something this relevant and challenging will bring with it a sense of satisfaction hardly felt otherwise.</p>

<p>Bring home the revolution, we say... Give ourselves what we truly deserve...</p>
For queries contact:<br><br>
Avinav Nigam<br>
Manager, e-Rustique<br>

<a href="http://www.techfest.org/mail.php?email=avinavnigam@techfest.org" target="_blank">avinavnigam@techfest.org</a><br>
Ph. +91-98673 86626<br>
<br><br><br><br><br><br><br><br><br>
 </div>
<?
echo_content("footer.txt");
?>
	 
	 
	 
	 
	