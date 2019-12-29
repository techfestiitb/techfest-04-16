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
echo_content("side_ai.txt");
echo_content("side_update.txt");
?>
 <div id="content">
     <h1 id="toptext">Artificial Intelligence</h1> 

<p><img src="../themeimg/ai.jpg" border="0" hspace="10" vspace="5" align="right" >"Throughout human history, we have been dependent on machines to survive. Fate, it seems, is not without a sense of irony."<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
--Morpheus, The Matrix, 1999.</p>
 
<p>TECHFEST '06 gives you an opportunity to CREATE the future. In the future world of machines, only those with brains, will survive. So apply yours to make some. Make codes, machines, softwares that learn, respond and try to mimic humans - right from the simplest aspects of human life, like solving riddles, to the most complex of things like identifying handwriting. Learn how to make machines understand your language to give orders, and they will set an example of obedience.</p> 
 
<p>Welcome to the Realm of A.I., Artificial Intelligence, as we humans call it. Through a series of lectures, workshops and competitions, we shall give you a glimpse of things to come, things that are at the heart of Artificial Intelligence. Afterall, all we can do, is to show you the door... it's you who has to walk through it!</p> 

For queries contact:<br><br>
Sumedh Risbud<br>
Manager, A.I.<br>
<a href="http://www.techfest.org/mail.php?email=srrisbud@techfest.org" target="_blank">srrisbud@techfest.org</a><br>
Ph. +91-98193 51759<br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>