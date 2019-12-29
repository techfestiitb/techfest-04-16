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
echo_content("side_core.txt");
echo_content("side_update.txt");
?>
<div id="content">
<h1 id="toptext">Core War - Screenshots</h1> 
<p>Following are the sreenshots of configuration required for the hill specifations done in options menu.</p>
<table border="0" cellspacing="10" cellpadding="10" width="90%">
<tr><td align="center"><img src="./img/1.gif" border="0"></td></tr>
<tr><td align="center"><img src="./img/2.gif" border="0"></td></tr>
<tr><td align="center"><img src="./img/3.gif" border="0"></td></tr>

</table>

</div>
<?
echo_content("footer.txt");
?>