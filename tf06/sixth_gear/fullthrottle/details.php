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
echo_content("side_full.txt");
echo_content("side_update.txt");
?>
 
 <div id="content">
<h1 id="toptext">Full Throttle - IC Engine Specifications</h1>
<br><br>
<strong>Diesel Engine</strong> (Shaft Valve Plain Bearing, Without throttle control)<br>
<table width="90%" border="0" cellpadding="5" cellspacing="0">
<tr><td align="center"><strong>SR NO.</strong></td><td align="center"><strong>CC</strong></td><td align="center"><strong>RPM</strong></td><td align="center"><strong>COST</strong></td><td align="center"><strong>FUEL</strong></td></tr>
<tr><td align="center">DE1 </td><td align="center">1.5</td><td align="center">16000	</td><td align="center">Rs 2400</td><td align="center">Castor oil, Kerosene, Ether </td></tr>
<tr><td align="center">DE2 </td><td align="center">2.5</td><td align="center">15000</td><td align="center">Rs 2600</td><td align="center">Castor oil, Kerosene, Ether </td></tr>
<tr><td align="center">DE3 </td><td align="center">3.2</td><td align="center">15000</td><td align="center">Rs 2700</td><td align="center">Castor oil, Kerosene, Ether </td></tr>
</table>
<h3>SP Glow plug</h3>
<table width="90%" border="0" cellpadding="5" cellspacing="0">
<tr><td align="center"><strong>SR NO.</strong></td><td align="center"><strong>CC</strong></td><td align="center"><strong>RPM</strong></td><td align="center"><strong>COST</strong></td><td align="center"><strong>FUEL</strong></td></tr>
<tr><td align="center">SP11 </td><td align="center">0.5</td><td align="center">2500/18000</td><td align="center">Rs 3800</td><td align="center">Castor oil, Nitro methane, Methanol</td></tr>
<tr><td align="center">SP12 </td><td align="center">1.6</td><td align="center">2500/18000</td><td align="center">Rs 3500</td><td align="center">Castor oil, Nitro methane, Methanol</td></tr>
<tr><td align="center">SP13 </td><td align="center">2.5</td><td align="center">2500/18000</td><td align="center">Rs 3800</td><td align="center">Castor oil, Nitro methane, Methanol</td></tr>
</table>
<br>
<h1>Engine availability</h1>
<p>The above engines can also be purchased directly from:-</p>
(1) <a href="http://www.a2zhobby.com">http://www.a2zhobby.com</a>
<br>
(2) <a href="http://www.sharmamodelaero.com/" target="_blank">http://www.sharmamodelaero.com/</a><br>
<h3>MUMBAI</h3>
M/s India Hobby Centre<br>
 337, "Mayur", Shop No. 3, Ground Floor, Near Congress House,<br>
V.P   Road,<br>
Mumbai -4<br>
Ph: +91-22-2382 3125<br>
Ph: +91-22-5581 0131<br>
<h3>BANGALORE</h3>
M/s Enr Model<br>
Aircrafts<br>
35, Lady Curzon Road<br>
Bangalore, India<br>
<h3>AHMEDABAD</h3>
Shivlo Hobby Center<br>
303,Umaiya Shopping Center<br>
Satellite Road<br>
Ahmedabad, India<br>
<h3>JABALPUR</h3>
Mr.G.R.K.Nair <br>
'Manglam' Denning Road<br>
Civil Lines<br>
Jabalpur, India<br>
<h3>U.S.A</h3>
M/s Carlson Engine Imports<br>
 814, East Marconi Avenue, Phoenix, Arizona - 85022<br>
E-mail: carlsonengines@juno.com <br>
Phone/Fax: 602-863-1684<br>
<h3>U.K </h3>
JUST ENGINES LTD<br>
Newby Cross Farm<br>
Newby Cross<br>
Carlisle<br>
Cumbria CA5 6JP England<br>
TEL FAX (0)1228 712800<br>
Email : justengines@enterprise.net <br>
Website: <a href="http://www.justengines.co.uk">www.justengines.co.uk </a>
<br>
<p>Some Pics of Engines</p>
<table width="100%" border="0">
<tr><td align="center" width="50%"><img src="./img/eng1.gif" border="0" alt=""></td><td align="center" width="50%"><img src="./img/eng2.gif" border="0" alt=""></td></tr>
</table>

<br><br>For queries contact:<br>
<table border="0" align="left" id="manag"  style="border-collapse:collapse; " width="100%">
<tr><td width="20%">Amardeep<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=amar@techfest.org" target="_blank">amar@techfest.org</a><br>
Ph. +91-93233 95608<br></td>
<td>Aditya Chaoji<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=aditya@techfest.org" target="_blank">aditya@techfest.org</a><br>
Ph. +91-98693 57291<br></td>
</tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
  
<?

echo_content("footer.txt");
?>