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

<h1>Rules and Regulations</h1>
<p><ul>
<li>The registration for the accommodation at Techfest ’06 has been closed and no requests pertaining to the same shall be entertained.</li>
<li>Accommodation at Techfest’06 is divided into three categories, namely, participants, visitors and professionals.</li>
<li>Participants refer to those who have a confirmation to participate in any of the competitions or workshops. Note that for the competitions/workshops where there is a pre-elimination, mere registration does not make you a participant at Techfest '06. All other students who are not participants are referred to as visitors. Professionals refer to the people working in various institutes/establishments.</li>
<li>There will be three separate application forms for the above mentioned three categories. You will be required to take the printout of the application form and obtain the signature (with stamp) of the Dean/Head of your Institute.</li>
<li>One copy of the completed application form should be sent to us by post or by fax to the address/fax number mentioned at the end of the page.</li>
<li>The last date for receiving the completed application forms is December 30, 2005. Incomplete applications and the ones not received in due time will not be entertained.</li>
<li>The final Confirmation of Accommodation shall be sent to you by January 5, 2006. It will contain all the necessary details regarding your accommodation at Techfest '06. Please note that the confirmation mails sent by us might sometimes go into the junk/spam folder of your mail account. So we request you to check all the folders of your mail account to avoid any confusion at a later stage. </li></li>
<li>The final Confirmation of Accommodation shall be sent only to the contingent leader and he/she will be responsible for conveying the same to the rest of the team. The term &quot;contingent&quot; herein refers to a team and not to all the teams/visitors of a college.</li>

</ul></p>
<h1>Check Points</h1>
<p><ul>
<li>Accommodation to visitors and professionals will be provided on a second preference after participants as per availability.</li>
<li>No accommmodation shall be provided to people belonging to Mumbai.</li>
<li>Accommodation will be provided only when the printout of the final Confirmation of Accommodation is produced at the time of availing accommodation at Techfest '06, along with the college identity cards. Please note that no other document /letter will be accepted.</li>
<li>There should be one and only one application form per team. For teams taking part in more than one competition/workshop, only one form is sufficient.</li>
<li>You are requested to carry minimum necessary baggage to avoid inconvenience.</li>
<li>No on-the-spot requests for accommodation shall be entertained.</li>
</ul></p>
<a name="acco"></a>
<h1>Availing Accommodation at Techfest '06</h1>
<p><ul>
<li>Accommodation will be provided from 6:00 AM onwards on January 19, 2006. The occupants of the rooms will be strictly required to vacate the rooms by 10:00 AM on January 23, 2006.</li>
<li>Transport facility will be made available from Dadar railway  station to IIT Bombay,  the details of which will be enclosed in the final Confirmation of Accommodation.</li>
<li>Accommodation will be provided on a sharing basis and no arguments corresponding to the allotment of rooms will be entertained. The Assistance and Hospitality team reserves the full right regarding the accommodation allotment.</li>
<li>A refundable security deposit of Rs.100 and accommodation fees of Rs.200 will be charged per person. The accommodation charges are fixed, irrespective of the number of days of stay.</li>
<li>The fees do not include messing and the arrangements for the food will have to be taken care of by the occupants themselves. However, a canteen will be functional throughout the day providing food at reasonable prices.</li>
<li>Consumption of alcohol inside the Institute’s premises and smoking inside the rooms allotted is strictly prohibited and any person found indulging in such activities shall be severely dealt with. </li>
<li>The individuals will be fully responsible for their acts in the Institute’s premises and are advised to refrain from any activities that might harm or cause inconvenience to anyone, failing which strict actions shall be taken.</li>
</ul></p>
<br>
<h3>Completed application forms may be mailed or faxed to:</h3>
<p>Techfest '06<br>
Students’ Gymkhana<br>
IIT Bombay, Powai<br>
Mumbai – 400076<br>
Tel: +91-22-25764045<br>
Fax: +91-22-25723480
</p>

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