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
echo_content("side_hover.txt");
echo_content("side_update.txt");
?>
 
 <div id="content">
 
 <h1 id="toptext">Hover Junior - Arena </h1> 
 <br>
  <table border=0 align="center" width="90%" cellspacing="5">

<tr><td align="center"><img src="./img/topview.gif" border=0 align="center"></td></tr><tr><td align="center">Top View</td></tr>
<br>
<tr><td align="center"><img src="./img/view1.gif" border=0 align="center"></td></tr><tr><td align="center">Isometric View 1</td></tr>
<tr><td align="center"><img src="./img/view2.gif" border=0 align="center"></td></tr><tr><td align="center">Isometric View 2</td></tr>
<tr><td align="center"><img src="./img/view3.gif" border=0 align="center"></td></tr><tr><td align="center">Island</td></tr>
<tr><td align="center"><img src="./img/side.gif" border=0 align="center"></td></tr><tr><td align="center">Side View</td></tr>

</table>

 
 

<br>
<br>
<br>
<br>


</div>
  
<?

echo_content("footer.txt");
?>