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
<!-- ##### Main Copy ##### -->
<div id="content">
     <h1 id="toptext">Schedule for Techfest '06</h1> 
	 
	
<p><a href="http://www.techfest.org/day1.htm"><strong>Day 1 - 20th January 2006 - HTML link</strong></a></p>
<p><a href="http://www.techfest.org/day2.htm"><strong>Day 2 - 21st January 2006 - HTML link</strong></a></p>
<p><a href="http://www.techfest.org/day3.htm"><strong>Day 3 - 22nd January 2006 - HTML link</strong></a></p><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>
