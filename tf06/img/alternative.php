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
<h1 id="toptext">Some places to get accomodation</h1> 

<p>Tariffs to be included shortly</p>
<h3>Hotel Highway Inn</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle>Vishal Hall, Vishal Shopping <br>Centre, Andheri Kurla Road<br>(Sir M.V. Road) Andheri(E), <br>Mumbai-69<br><b>Tel:</b> 26807071/72/73/74<br><b>Fax:</b> (91-22) 26838290<br><b> E-mail: </b><a href=../tell/mailto.php?to=bcc2@vsnl.com>bcc2@vsnl.com</a>
</td><td class=mystyle ></td></tr></table>
<h3>Hotel Metro International</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle>Near International Airport, <br>Sakinaka Junction, Andheri <br>Kurla Road <br>Mumbai-72<br><b>Tel:</b> 56941010/11/12/13/14<br><b>Fax:</b> (91-22) 56941015<br><b> E-mail:</b> <a href=../tell/mailto.php?to=metrointernational1@rediffmail.com>metrointernational1@rediffmail.com</a>
</td><td class=mystyle></td></tr></table>

<h3>Hotel Imperial Palace</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle>45, Telly Park Road, <br>Andheri(East), <br>Mumbai-69<br><b>Tel:</b> 26841739/62<br>
</td><td class=mystyle></td></tr></table>
<h3>Hotel Sahar International</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle>Sahar Cross Road, Opp. <br>Andheri Railway Stn.,<br>Andheri(E), <br>Mumbai-69<br><b>Tel:</b> 26837012/13<br><b>Fax:</b> (91-22) 26842661<br><b> E-mail: </b><a href=../tell/mailto.php?to=saharintl@vsnl.net>saharintl@vsnl.net</a>
</td><td class=mystyle></td></tr></table>
<h3>Hotel Raj Jog</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle>Sardar Pratap Singh <br>Industrial Estate, No. 3,<br>2<sup>nd</sup> floor,L.B.S. Marg<br>Bhandup(W), <br>Mumbai-78<br><b>Tel:</b> 25688047
</td><td class=mystyle></td></tr></table>
<h3>Neo Lodge</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle valign=top>Opposite Ghatkopar<br>Railway Staion,<br>Ghatkopar(West), <br>Mumbai-86<br><b>Tel:</b> 25094420/21/22/23</td><td class=mystyle></td></tr></table>
<h3>Ganesh Palace Pvt. Ltd.</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle>Opp. Railway Station, <br>Ghatkopar(West), <br>Mumbai-86<br><b>Tel:</b> 25133484/55<br><b>Fax:</b> (91-22) 25125403
</td><td class=mystyle></td></tr></table>
<h3>Hotel Nityanand</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle>Gadekar colony, Mohili <br>village, Near Maharshtra<br>Weigh Bridge, A.G.<br>Link Road, Sakinaka <br>Mumbai-72<br><b>Tel:</b> 28560056
</td><td class=mystyle></td></tr></table>

<h3>New Ram Niwas Lodging House</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle>11, Gandhi Sadan, New<br>Nagardas Road, Near<br>Pinky Talkies, Andheri(E) <br>Mumbai-69<br><b>Tel:</b> 28372422
</td><td class=mystyle></td></tr></table>
<h3>Ghatkopar Guest House</h3>
<table>
<tr>
<td valign=top class=mystyle
width=180><b>Address:-</b>
</td>
 <td width=30 class=mystyle valign=top></td>
</tr>
<tr><td class=mystyle>Purbai Building, Opp.<br>Ghatkopar Railway Station,<br>Ghatkopar(West), <br>Mumbai-86<br><b>Tel:</b> 25152242/25151844
</td><td class=mystyle></td></tr></table>


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