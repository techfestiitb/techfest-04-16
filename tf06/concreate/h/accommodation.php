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
echo_content("side_h.txt");
echo_content("side_update.txt");
?>
<div id="content">
<a name="prob"></a>

<h1 id="toptext">Accommodation Details</h1>
<p>Due to limited accommodation that can be allotted to the participants at IIT Bombay during Techfest, we will be providing accommodation to the participants on the basis of a shortlist.<strong>The procedure for forming such a list will be as under:</strong></p>
<p> 1] All participants are required to urgently submit any one of the following:</p>
<p><li>a] Basic design of their structure, supplemented with neat diagrams or</li></p>
<p><li>b] An image of the structure if you have already completed its construction, along with the approximate weight of the structure. (preferred)</li></p>
<p> 2] This submission is to be made latest by the 12th of January, 06. Designs submitted after the deadline will not be considered for allotment of accommodation.</p>
<p> 3] Teams will be shortlisted on the basis of the designs submitted by them . The list of all such teams will be put on the website latest by the 13th of January, 06.</p>
<p><strong>Please take note, however, that the selection process has not been formulated to act as an elimination round.All teams with eligible entries are welcomed to participate in the event</strong>, provided they can arrange for alternative accommodation. A list of alternative accommodations near the IIT campus in Powai will be put up on the webpage soon, but the availability of such accommodations will not be arranged by or guaranteed by the Techfest’06 team.</p>
<p>Please kindly get yourself a travel reservation as it may not be available on a short  notice.</p>

<br><br>
<br>

For queries see <a href="http://www.techfest.org/concreate/h/faq.php">FAQ's</a> or contact:<br><br>
Aditya Vikram Singh<br>
Manager, CONCREaTE<br>
<a href="http://www.techfest.org/mail.php?email=adityavikram@techfest.org" target="_blank">adityavikram@techfest.org</a><br>
Ph. +91-98207 54704<br>
<br><br><br><br><br><br><br>
</div>
  
<?
echo_content("footer.txt");
?>
