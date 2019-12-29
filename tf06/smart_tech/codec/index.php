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
echo_content("side_codec.txt");
echo_content("side_update.txt");
?>
 
<div id="content">
<a name="intro"></a>
<h1 id="toptext">Codec</h1> 
<p><strong> UPDATE:</strong> The Questionnaire was sent to all registered participants on 25 th Dec. 2005. The shortlisting is done on the basis of score in the questionnaire and SOP. The shortlist can be viewed <a href="http://www.techfest.org/smart_tech/codec/results.php"> here</a>. </strong>Click <a href="index.php#schedule">here</a> to view the schedule of the workshop. </p>
<p><img src="./img/codec.gif" align="right" alt="" hspace="5" vspace="5">"Science can amuse and fascinate us all, but it is engineering that changes the world."</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Isaac Asimov</p>
<p>Science and Technology multiply around us. To an increasing extent they dictate the languages in which we speak and think. Either we use those languages, or we remain mute. There are not only limits to growth but also to Technology and of course we cannot allow Technology to go on without public consent.</p>
<p>What is crucial is what lies behind the Technology? We aim to expose you to the ever changing face of this world and to the technologies which are responsible for it. With the underlying idea of workshops "do while you learn", Techfest '06 presents 'Codec': A one day workshop that aims to give you a gist of what Video Coding is all about.</p>

<a name="codec"></a>
<h1>What is Video Coding?</h1>
<p>Video coding is the field that deals with finding efficient compression formats for digital video (DV).</p>
<p>It finds various smart applications, e.g. in Videoconferencing and Videotelephony, (VOIP), telemedicine, wireless/mobile applications, distance education etc.</p>
<a name="work"></a>
<h1>About the Workshop</h1>
<p>We promise to bring you face to face with the most eminent personalities in this field, bringing forth the latest developments in Video Coding. </p>
<p>The workshop will start from the basics of Video Coding and get into the details of video encoder and decoder structure. We will cover various existing compression standards in Video Coding. Image Processing is the basic building block of Video Compression and so the workshop will also talk about image processing and image compression standards.
This will be followed by the hands-on session in which our experts will provide you an opportunity to apply the concepts learnt during the workshop. The hands-on will essentially be a gradual walkthrough of video compression algorithms implementation.</p>
<a name="schedule"></a>
<h1>Schedule</h1><p>
<strong>21st January ‘06</strong><br>
<strong>9:00 AM – 12 noon:</strong> Lecture Session<br>
<strong>1 PM- 4 PM:</strong> Demo & Hands-On Session<br>
<strong>Fees:</strong> Rs. 200 per participant<br>
</p>


	 
<br>
For queries contact:<br><br>
Ayush Agrawal<br>
Manager, Smart Tech<br>
<a href="http://www.techfest.org/mail.php?email=ayush@techfest.org">ayush@techfest.org</a><br>
Ph. +91-98699 22308<br>
<br><br>
<br>
<br>
<br>
<br>
</div>


  
<?
echo_content("footer.txt");
?>