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
     <h1 id="toptext">Schedule for Day 2 - 21st January</h1>
     <p><center><img alt="" src="../img/day2.jpg" border="0" hspace="20" vspace="60"></center></p>
	 <p>&nbsp;</p>
     <p>&nbsp; </p>
</div>

<?
echo_content("footer.txt");
?>