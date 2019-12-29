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
<h1 id="toptext">G.R.I.P. - FAQs</h1> 
<br>
<p><strong>1)</strong>&nbsp;&nbsp;&nbsp; Does my machine have to be always  above the pipes(grid)?</p>
<p><strong>Ans :</strong>  No your machine can be partly or completely above or below the grid.</p>
<br>
<p><strong>2)</strong>&nbsp;&nbsp;&nbsp; What is the diameter of the semi-circular ring on top of the cylinder?</p>
<p><strong>Ans :</strong> The diameter of the semi-circular ring is 2-3 mm.</p>
<br>
<p><strong>3)</strong>&nbsp;&nbsp;&nbsp; Is the ring on top of the  cylinder rigidly fixed to it or is it hinged like in a   
         bucket?</p>
<p><strong>Ans :</strong> The ring is rigidly fixed to the cylinder and cant move.</p>
<br>
<p><strong>4)</strong>&nbsp;&nbsp;&nbsp; Does the machine have to return to its starting point after placing the cylinder in the slot?</p>
<strong>Ans :</strong> No the machine does not have to return to its original position.</p>
<br>
<p><strong>5)</strong>&nbsp;&nbsp;&nbsp; What do you mean by the initial size restriction?</p>
<p><strong>Ans :</strong> Before the match begins, the machine will be checked for dimensions. Having done this the machine can extend to any size thereafter and can be then clamped to the grid.Modification is allowed but this does not mean that you attach new attachments to the machine during the game.For example it is not allowed that you keep some part in the box(while checking dimensions) which is initially not attached to the machine and attach it later. However all portions of the machine touching the grid must lie within the starting zone.</p><br>

<p><strong>6)</strong>&nbsp;&nbsp;&nbsp; Can I use a hydraulic mechanism?</p>
<p><strong>Ans :</strong> Yes you can but again it should be contained within those size restrictions.  
         From outside only electrical power can be supplied. </p>

<p><strong>7)</strong>&nbsp;&nbsp;&nbsp; Are the pipes magnetic?</p>
<p><strong>Ans :</strong> Yes the pipes are magnetic to a good extent.</p>
<br>
<p><strong>8)</strong>&nbsp;&nbsp;&nbsp; Can I use the side bars adjacent to the center rod while traversing the grid?</p>
<p><strong>Ans :</strong> You may use the side bars. But you will need to see that the your machine can 
         touch the arena only at the area specified in the starting zone and the other 
         zones(A,B)..</p><br>
  
<p><strong>9)</strong>&nbsp;&nbsp;&nbsp; Is the machine required to take any 90 degree turn during the game?</p>
<p><strong>Ans :</strong> There is no need of any 90 degree turn during the game.</p>
<br>
<p><strong>10)</strong>&nbsp;&nbsp;&nbsp; Can I use a rope wound to machine to fit in the box of dimensions in  
         300x400x300mm in G.R.I.P, later which would hang down?</p>
<p><strong>Ans :</strong> Yes you can do that.</p>
<br>
<p><strong>11)</strong>&nbsp;&nbsp;&nbsp; Do I need to show the picking mechanism in the qualifying video?</p>
<p><strong>Ans :</strong> There is no need to show the picking mechanism in the qualifying video.</p>
<br>
<p><strong>12)</strong>&nbsp;&nbsp;&nbsp; Should all team members belong to the same college?</p>
<p><strong>Ans :</strong> Team members can belong to different colleges.</p>

<br>

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