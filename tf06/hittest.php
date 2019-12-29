<?php
function echo_content($str)
{
	$l=fopen($str,"r");
	$arr=file($str);
	$num=count($arr);
	for($i=1;$i<$num;$i++)
	{
		echo $arr[$i];
	}
	return;
}

echo_content("header2.txt");
echo_content("side_no.txt");
?>
<!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Techfest '06</h1> 

<p><img alt="" src="../img/index1.jpg" border="0" hspace="10" vspace="5" align="right">Life is the fuel that propagates our dreams of unfolding the
unknown. It is only this thirst for knowledge that brings mere mortals
like us amidst this enigmatic but dazzling cornerstone of human excellence
- Science and Technology.</p>

<p>TECHFEST, the annual international science and technology festival of <a href="http://www.iitb.ac.in" class="nou" target="_blank">IIT Bombay</a> and the biggest of its kind in Asia brings forth to you its latest
instalment - TECHFEST 2006. The dharma behind Techfest is to bridge the
gap between us and the unbelievable and incomprehensible from the latest
developments in science and technology.</p>

<p>We, at Techfest, are proud to share and propagate the euphoria of learning. From competitions to workshops, lectures to exhibitions,
Techfest 2006 has everything in store to conquer your imagination. Welcome
to the madness that is IIT Bombay. Welcome to Techfest 2006!</p>

<br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?
echo_content("footer.txt");
?>