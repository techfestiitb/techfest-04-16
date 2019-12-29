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
echo_content("side_grip.txt");
echo_content("side_update.txt");
?>
 <div id="content">
<a name="arena"></a>
<h1 id="toptext">The Game Arena</h1>
<p>There is a metal frame at a height of 1250 mm from the ground. The frame is made of standard GI pipes of  nominal diameter 0.75 inch and external diameter 26.5 ± 1 mm,  coated with oil paint. Below a specific location on the frame (Zone A) there will be a cylindrical object placed on a platform. The size of the platform is 300 mm x 300 mm x 300 mm. The cylinder on the platform has to be carried to the other end of the frame (Zone B) and placed in a hollow cylindrical container. There will be two such similar arenas for the competition.(All dimensions in the figures shown are in mm)</p>
<table border=0 align="center" width="90%" style="border-collapse:collapse; margin:0; ">
<tr><td align="center"><a href="http://www.techfest.org/cosmos/grip/arenapics1.php" target="_blank"><img src="./img/arena.gif" border="0" align="center"></a></td></tr>
<tr><td align="center" width="90%">Click on the image to see details of the arena</td></tr>
</table>



<h3>STARTING ZONE, INTERSECTION 1(INT 1)</h3>
<p>The Starting Zone and Intersection 1(INT 1) are as shown below. The starting zone is 405 mm long.</p>
<table border=0 align="center" width="90%">
<tr><td align="center"><img src="./img/start.gif" border=0 align="center"></td></tr>

</table>
<h3>ZONE A</h3>

<p>The yellow area marked in the figure is the Zone A. The paint stretches to 600 mm on both the pipes (equally on each side of the intersection).The cylinder is placed exactly below Zone A on a platform (300 mm x 30 mm) and 300 mm high.</p>
<table border=0 align="center" width="100%">
<tr><td align="center" width=50%><img src="./img/zonea1.gif" border=0 align="center"></td>
<td align="center" width=50%><img src="./img/zonea2.gif" border=0 align="center"></td></tr>
<tr><td align="center" width=50%></td><td align="center" width=50%>Plan View - Zone A</td></tr>

</table>
<h3>INTERSECTION 2 (INT 2) , ZONE B</h3>
<p>The intersection immediately following the Zone A is the Intersection 2 ( INT 2 ) while the red area next to INT 2 ,as marked in the figure is the Zone B.. The paint stretches to 600 mm on both the pipes (equally on each side of the intersection).</p>
<table border=0 align="center" width="100%">
<tr><td align="center" width=50%><img src="./img/zoneb1.gif" border=0 align="center"></td>
<td align="center" width=50%><img src="./img/zoneb2.gif" border=0 align="center"></td></tr>
<tr><td align="center" width=50%></td><td align="center" width=50%>Plan View - Zone B</td></tr>

</table>
<h3>CYLINDER and SLOT</h3>
<p>The cylinder has a diameter of 70 mm and a height of 70 mm. The cylinder is made of wooden material and weighs around 300 - 350 gms. The semicircular ring on the top of the cylinder has a diameter of 70 mm and is made of iron. </p>
<p>The hollow cylinder also is made of wood and has an inner diameter of 100 mm and height of 70 mm. It is closed from the bottom.</p>
<table border=0 align="center" width="100%">
<tr><td align="center" width=35%><img src="./img/cylinder.gif" border=0 align="center"></td>
<td align="center" width=65%><img src="./img/cylinderd1.gif" border=0 align="center"><img src="./img/cylinderd2.gif" border=0 align="center"></td></tr>

</table>
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