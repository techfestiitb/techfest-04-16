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
     <h1 id="toptext">Cosmos</h1> 

<p>All that is, was or ever will be.</p>

<p><img src="../themeimg/cosmos.jpg" border="0" hspace="10" vspace="5" align="right">Cosmos is the universe regarded as an orderly, harmonious whole. The size
and age of the cosmos are beyond human understanding. Lost somewhere
between immensity and eternity is our tiny planetary home. In the last few
centuries we have made some of the most astonishing and unexpected
discoveries about the cosmos and our place within it - explorations that
are exhilarating to consider. They remind us that humans have evolved to
wonder, that understanding is joy, that knowledge is a pre-requisite to
survival.</p>

<p>The surface of the Earth is the shore of the cosmic ocean. From it we
have learned most of what we know. Recently, we have waded a little out
to sea, enough to dampen our toes or, at most, wet our ankles. The water
seems inviting. The ocean beckons...</p>

<p>Cosmos at Techfest '06, through a series of competitions, lectures,
workshops and exhibitions aims to showcase some of the most breathtaking
expeditions to space, their impact on mankind and provide an inspiration to
know more.</p>


<p>Come to COSMOS – Techfest '06. Join man’s quest to explore the distant
corners of the vastness beyond this tiny Earth we call home.</p>
For queries contact:<br>
<table border="0" width="100%" style="border-collapse:collapse; ">
<tr><td width="20%">Nitish Garg<br>
Manager, Cosmos<br>
<a href="http://www.techfest.org/mail.php?email=nitish@techfest.org" target="_blank">nitish@techfest.org</a><br>
Ph. +91-98695 30638<br></td>
<td>Akshay Mehra<br>
Manager, Cosmos<br>
<a href="http://www.techfest.org/mail.php?email=akshay@techfest.org" target="_blank">akshay@techfest.org</a><br>
Ph. +91-98696 18239<br></td>
</tr>
</table>
<br><br><br><br><br><br><br>
</div>
  
  
<?
echo_content("footer.txt");
?>