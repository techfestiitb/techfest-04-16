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
echo_content("side_iclean.txt");
echo_content("side_update.txt");
?>
 
<div id="content">

<h1 id="toptext">iClean</h1> 
<table border=0 align="center" width="90%">
<tr><td align="center"><img src="./img/topview.gif" border=0 align="center"></td></tr><tr><td align="center">Top View</td></tr>
</table>
<table border=0 align="center" width="90%">
<tr><td align="center"><img src="./img/iso2.gif" border=0 align="center"></td></tr><tr><td align="center">Isometric View</td></tr>
</table>
<br><br>
</div>
  
<?
echo_content("footer.txt");
?>