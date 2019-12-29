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
echo_content("side_no.txt");
echo_content("side_update.txt");
?>
 
 <div id="content">
     <h1 id="toptext">Sixth Gear</h1> 
	 
	<p><img align="right" hspace=10 vspace=5 src="../themeimg/sixthgear.jpg">It all started with a simple rolling diskette which later came to be known as a wheel. No one would have ever imagined what this small wheel would drive us into. Welcome to the world of charismatic concept
cars, breakneck supersonic jets, super-colossal floating machines and
poof...who knows what else lies behind the curtains !!!</p>
<p>Chasing the ever speeding dreams has always
been a favourite pastime. We  truly have taken off high, exploring
every bit of technology to satisfy our desire and passion. Making
everything around us smart, elegant and ofcourse eco-friendly is another
recent addition to the already vast scope of the fields of automotive
and aviation technology.</p>

<p>  Come January 2006 and get to know it all, from
the basics of automobiles to the future of transportation, AGVs
and GPSs, simple steam engines to turbo jet engines.</p>

<p>  TECHFEST '06 gives you the opportunity to get
back behind the wheels and drive through the latest and best in autotech
and aviation technology and try a hands-on approach while learning the nuances of some of the most complicated machines. So get up and get GEARED to travel upon the roads you have never seen...</p>
<br><br>For queries contact:<br><br>
<table border="0" align="left" id="manag"  style="border-collapse:collapse; " width="100%">
<tr><td width="20%">Amardeep<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=amar@techfest.org" target="_blank">amar@techfest.org</a><br>
Ph. +91-98201 91213<br></td>
<td>Aditya Chaoji<br>
Manager, Sixth Gear<br>
<a href="http://www.techfest.org/mail.php?email=aditya@techfest.org" target="_blank">aditya@techfest.org</a><br>
Ph. +91-98693 57291<br></td>
</tr>
</table>

<br><br>
<br>
<br>
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