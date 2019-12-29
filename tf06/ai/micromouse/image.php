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
     <h1 id="toptext">Maze pecifications</h1> 