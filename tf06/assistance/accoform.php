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
<h1 id="toptext">Accommodation Form </h1> 
<p>The accomodation for Techfest '06 has been closed and no requests pertaining to the same shall be entertained.</p>
<br><br><br><br><br><br><br>
</div>
<?
echo_content("footer.txt");
?>