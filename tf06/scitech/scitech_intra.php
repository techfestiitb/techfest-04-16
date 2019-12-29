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
echo_content("side_scitech.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="intro"></a>
<p>Click <a href="scitech_intra.pdf">here</a> for answers of SciTEch INTRA.</p>
<h1 id="toptext">SciTech INTRA: One step to the Grand Fianlé (Only for participants from IIT Bombay)</h1> 
<p>Date: 6th January, 2006<br>
Time: 6:30 pm onwards<br>
Venue: P.C Saxena Auditorium (LT)</p>
<h3>Eligiblity</h3>
<p>Teams of two consisting of IIT Bombay students with valid identity cards.</p>
<h1>Rules and Regulations</h1>
<p><ol type="1">
<li>There will be one hour Elims followed by Mains.</li>
<li>Top six teams in Elims will take part in the Main Quiz.</li>
<li>The team winning the Main Quiz enters the SciTech Grand Finalé
directly. This winning team will be the "Official Team" of IIT
Bombay.</li>
<li>Teams of two consisting of only IIT Bombay students are allowed.
The students can be from different hostels.</li>
<li>There is no restriction on the number of teams participating in
the Elims.</li>
<li>The questions will be pertiaining to Logic, Math, Science and Tech.</li>
<li>This INTRA is modeled on SciTech: College Quiz Challenge to held during Techfest '06.</li>
</ol>
</p>
<br>
For queries see the <a href="./faq.php">FAQ</a> page or contact:<br>
Vamsi Krishna Peri<br>
Email: <a href="http://www.techfest.org/mail.php?email=scitech@techfest.org" target="_blank">scitech@techfest.org</a><br>
Ph. +91-98191 88890<br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>