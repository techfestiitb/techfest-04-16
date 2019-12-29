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
     <h1 id="toptext">Smart Technology</h1> 
	 
	<p><img src="../themeimg/smart.jpg" border="0" hspace="10" vspace="5" align="right">Technology has penetrated deep into our lives today, and we might as well
be handicapped without it. As much as we have progressed in various other
fields, the effect of technology on day-to-day living has been most
strongly felt. Aptly titled Smart Technology and including intelligent
products that you can now afford, this theme will get you up-close to
gadgets and systems which were a distant dream in the recent past and are still
unknown to many. Bringing the latest in this vibrant, new dimension to
technology, we make sure you see what might be prevalent in our lives in
the decades to come.</p>

<p>Welcome to Techfest '06 and a world of "Smart Technology". A glimpse of
modern day devices and smart homes and an opportunity to create the
future.</p><br>
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