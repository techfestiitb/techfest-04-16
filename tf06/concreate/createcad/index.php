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
echo_content("side_cad.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="intro"></a>
<h1 id="toptext">CreateCAD</h1> 
<p>Computer Aided Design has not only transformed the way civil engineering drawing is done nowadays but has revolutionized the whole concept of design. CAD has made it possible to develop exact 3-D model of any kind of structure. And these 3-D models can be simulated for their behavior under various kind of forces.  Techfest ’06 presents <strong>CreateCAD</strong>: A workshop that aims at introducing the vast scope of CAD.</p>
<a name="details"></a>
<h1>Details of the Workshop</h1>
<p><ol type="1">
<li>This is a <strong>Three Day Three Session Workshop</strong>.</li>

<li>No Prerequisites are required for the workshop.</li>

<li>Schedule:<br>
   <strong>Session 1:</strong> “Basics of AutoCAD”- Lecture from 3 PM on 20th January, 06<br>
   <strong>Session 2:</strong> “Hands-on Session”- batches running all day long on 21st January, 06<br>
   <strong>Session 3:</strong> “Advanced applications of AutoCAD”- presentation from 2:30 PM on 22nd January, 06.</li></ol></p>

<h1>About the Workshop</h1>
<p>CreateCAD is an attempt to make you familiar with AutoCad. The first session will cover the basics of AutoCAD. In the following hands-on session, participants will gain a practical experience of the working on AutoCAD for an hour. This will be followed by the third session, which will highlight the advancements and future prospects of AutoCAD revealing its real power.</p>
<a name="reg"></a>
<h1>Registrations</h1>
<p>Registration for the workshop will be on the spot and will open from 9:00 Hrs to 12:00 Hrs on 20th of Jan.</p>
For queries contact:<br><br>
Aditya Vikram Singh<br>
Manager, Concreate<br>
<a href="http://www.techfest.org/mail.php?email=adityavikram@techfest.org" target="_blank">adityavikram@techfest.org</a><br>
Ph. +91-98207 54704<br>
<br><br><br><br><br><br><br>
</div>
  
<?
echo_content("footer.txt");
?>