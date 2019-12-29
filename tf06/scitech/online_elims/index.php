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
echo_content("side_scitech.txt");
echo_content("side_update.txt");

?>
	<div id="content">
	<h1>SciTech: College Quiz Challenge Online Elimination</h1>
	
	<p>The duration for filling the questionnaire is over.</p>
	<?
	

echo_content("footer.txt");
?>
