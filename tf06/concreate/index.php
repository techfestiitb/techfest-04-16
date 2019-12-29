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
     <h1 id="toptext">CONCREaTE</h1> 

<p><img src="../themeimg/concreate.jpg" border="0" hspace="10" vspace="5" align="right">3200 BC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pyramids of Egypt<br>
1792 BC &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Hanging Gardens of Babylon<br>
1173 AD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Leaning Tower of Pisa<br>
1889 AD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Eiffel Tower, Paris...</p>

<p>These magnificent structures represent the glorious history of human
civilization. It was the development of construction technology that transformed our
world into cities and towns, connecting them and providing the
infrastructure which has become an imperative part of our lives.</p>

<p>The future holds immense potential in the area of construction technology
with buildings and structures far exceeding the ones in your wildest dreams. Ever
wondered what you might see rising hundreds of feet above you just around
the corner?
</p>

<p>Techfest ’06 proudly presents  "CONCREaTE" the world of construction
technology, which brings you the opportunity to create your dream future,
the structural innovation that will represent our age. Revisit where we come from and explore where we're headed.</p>
For queries contact:<br><br>
Aditya Vikram Singh<br>
Manager, Concreate<br>
<a href="http://www.techfest.org/mail.php?email=adityavikram@techfest.org" target="_blank">adityavikram@techfest.org</a><br>
Ph. +91-98207 54704<br>
<br><br><br><br><br><br><br>
</div>
  
<?
echo_content("footer.txt");
?>