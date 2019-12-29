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
<h1 id="toptext">Reaching IIT Bombay </h1> 
<p><ul><li>Important railway stations where you can get down are:
<p>
1.	Chattrapati Shivaji Terminal (CST) {also known as Victoria Terminal (VT)}.<br>
2.	Churchgate.<br>
3.	Mumbai Central.<br>
4.	Dadar.<br>
5.	Lokmanya Tilak Terminal (LTT), also known as Kurla.<br>
6.	Thane.<br>
7.	Borivoli.<br>
8.	Andheri.<br>
9.	Bandra.<br>
10. Kalyan</p></li>

<li>IIT Bombay buses will ply from Dadar Station only. We strongly recommend that you reach Dadar station and board the IIT Bombay buses.

<li>From the stations in the above list, Thane is the nearest station to IIT Bombay. Next one is LTT and Dadar is third in this regard.

<li>Autorickshaws / taxis run from every station and should be preferred if you have some heavy luggage, which may otherwise cause you much trouble while traveling by local trains and buses.

<li>Local trains plying from CST, Dadar and Kurla towards Kanjur Marg generally run less populated in the mornings and medium amount of baggage may be carried. Similar is the case with trains plying from Churchgate and Mumbai Central to Dadar.

<li>Local trains plying from Kalyan and Thane towards Kanjur Marg are very populated and should be avoided with any kind of baggage. Similar is the case with trains plying from Bandra, Andheri and Borivoli towards Dadar.

<li>For local trains, the nearest local station is Kanjur Marg, located on Central Line. An autorickshaw from Kanjur Marg station to IITB Main Gate costs Rs.20 approx.

<li>For buses / autorickshaws, the destination should be stated as “IIT Main Gate, Powai”.


<li>A brief information on how to reach IIT Bombay is given below:
<ul><li>
<strong>Chattrapati Shivaji Terminal (CST)</strong><br>

Take a slow local train to Kanjur Marg station; approximate fare will be Rs.10 per head. Take an autorickshaw from Kanjur Marg station to IITB Main Gate; approximate fare will be Rs.20.</li>

<li><strong>Dadar</strong><br>

Take a slow local train to Kanjur Marg station, approximate fare will be Rs.6 per head. Take an autorickshaw from Kanjur Marg station to IITB Main Gate; approximate fare will be Rs.20.</li>

<li><strong>Churchgate</strong><br>

Take a taxi from Churchgate station to CST / VT local side railway station; approximate fare will be Rs.20-30. Follow the rest of the instructions as given above under “CST”.
<br>
OR<br>
Take a slow local train to Dadar station; approximate fare will be Rs.6 per head. Follow the rest of the instructions as given above under “Dadar”. Note that a train change at Dadar is required.</li>

<li><strong>Mumbai Central</strong><br>

Take a slow local train to Dadar; approximate fare: Rs.5 per head and look under “Dadar” for further instructions. A train change is required.</li>

<li><strong>LTT </strong><br>

Take an autorickshaw from LTT to Kurla station; approximate fare is Rs.10 per head. Take a slow local train from Kurla station to Kanjur Marg station; approximate fare: Rs.5 per head. Take an autorickshaw from Kanjur Marg station to IITB Main Gate; approximate fare will be Rs.20.</li>

<li><strong>Thane, Kalyan</strong><br>

Take a slow local to Kanjur Marg station; approximate fare: Rs.5 per head for Thane and Rs.10 per head for Kalyan. Take an autorickshaw from Kanjur Marg station to IITB Main Gate; approximate fare will be Rs.20.</li>

<li><strong>Borivoli, Bandra, Andheri</strong><br>

Take a slow local train to Dadar station; approximate fare will be Rs.6 per head for Bandra / Andheri and Rs. 10 per head for Borivoli. Follow the rest of the instructions as given above under “Dadar”. Note that a train change at Dadar is required
<br>
OR<br>
Take buses from the above stated stations to IITB Main Gate, Powai. However, this is not advisable for Bandra, from where the frequency is very low.</li></ul>
</li></ul>
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