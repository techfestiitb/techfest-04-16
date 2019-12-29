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
<h1 id="toptext">Checklist for availing accommodation at Techfest ’06 </h1> 
<p><ul>
<li>Accommodation will be provided to only <strong>two people per team</strong> for <strong>“Full Throttle”</strong>, <strong>“Micromouse”</strong>, <strong>“The Simple Life v1.1”</strong> and <strong>“Fly High”</strong>. For rest of the competitions, accommodation will be provided to all members of the team. No accommodation is being provided to visitors.</li>
<li>Accommodation will be provided from 6:00 A.M. on 19th Jan 2006 onwards and you will be required to vacate the room by 10.00 A.M. of 23rd Jan 2006. Please report at the Accommodation Desk as soon as you reach IIT Bombay campus to avail accommodation.</li>
<li>The accommodation will be provided only when the team leader produces a printed copy of <strong>Final Confirmation of Accommodation</strong> form, duly filled and authorized. In addition, all the participants are required to carry their <strong>Identity Cards</strong>, which will be verified at the Accommodation Desk, for whom the accommodation is desired. Please note that no other document (a letter or otherwise) will be accepted. Accommodation will not be provided if the team fails to produce the above mentioned.</li>
<li>All the participants will have to first report at the <strong>Registration Desk</strong>, which will be located just beside the Accommodation Desk, wherein your candidature and machines / structures will be checked. You will be provided accommodation only after you get a receipt from the Registration Desk.</li>
<li>The accommodation fee is <strong>Rs.200</strong> <strong>per person</strong>. An additional amount of <strong>Rs.100</strong> <strong>per person</strong> will be charged towards <strong>security deposit</strong>. The security deposit will be returned on deposition of necessities provided to the occupants.</li>
<li>Accommodation will be provided on s<strong>haring basis</strong>.</li>
<li>The fee should be paid in <strong>cash</strong> at the Accommodation Desk while availing accommodation.</li>
<li>We shall provide you with mattresses and buckets. However, you are encouraged to carry your own blankets since it might be a little cold at night.</li>
<li>IIT buses will ply from <strong>Dadar Station</strong> to IIT to escort the contingents at regular intervals on 19th and 20th January 2006. For details on how to get to IIT Bombay from various stations, please check the section “Reaching IITB”.</li>
<li>Those carrying their <strong>CPU, laptop or similar electronic gadgets</strong> will have to get their <strong>'Gate Pass'</strong> from the IIT Bombay Main Gate at the time of check-in.</li>
<li><strong>Techfest Identity Cards</strong> will be provided to all participants availing accommodation. You are required to carry these with you at all times while in IIT Bombay during Techfest. Random checks will be made to check unauthorized persons staying in IIT Bombay during Techfest.</li>
<li><strong>No separate accommodatio</strong>n will be provided to <strong>accompanying faculty</strong>.</li>
</ul>
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