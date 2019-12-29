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
echo_content("side_acco.txt");
echo_content("side_update.txt");
?>
<div id="content">
<h1 id="toptext">Assistance and Hospitality</h1> 

<p>Over the years, Techfest has grown in stature, both in terms of its content, as well as its infrastructure and logistics. The dream which had humble beginnings has come to become a technical extravaganza, drawing crowds numbering in tens of thousands. When one talks of such magnitudes, hospitality of the guests becomes a primary concern. </p>
<p>Although being a college festival puts many constraints, but we at Techfest constantly strive towards the satisfaction of one and all. We hope that Techfest '06 will be successful in setting new standards in taking care of our visitors and ensuring that they have a comfortable stay here.</p>

<a href="rules.php"><strong>Rules and Regulations</strong></a><br><br>
<a href="checklist.php"><strong>Cheklist for availing accomodation at IIT Bombay for Techfest '06</strong></a><br><br>
<a href="reaching.php"><strong>Reaching IIT Bombay</strong></a><br><br>
<a href="alternative.php"><strong>Alternative Lodging places near IIT Bombay</strong></a><br><br>
<br><br>
For any queries or clarifications regarding accommodation at Techfest '06, please contact:<br><br>
Robin Daultani<br>
Manager, Assistance and Hospitality<br>
<a href="http://www.techfest.org/mail.php?email=robin@techfest.org" target="_blank">robin@techfest.org</a><br>
Ph. +91-98191-11153<br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>