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
 
 
 <h1>Arena Details</h1>
 
 <table border="0" cellpadding="10" cellspacing="10" width="90%" style="border-collapse:collapse; margin:10px 0px 0px 0px; ">
 <tr><td align="center"><img border="0" src="./img/arena1.gif"></td></tr>
  
   <tr><td align="center"><img border="0" src="./img/arena2.gif"></td></tr>
   <tr><td align="center">Plan View</td></tr>
  <tr><td align="center"><img border="0" src="./img/arena3.gif"></td></tr>
  
  
  <tr><td align="center"><img border="0" src="./img/arena4.gif"></td></tr>
  
    <tr><td align="center">Front View</td></tr>
   <tr><td align="center"><img border="0" src="./img/arena5.gif"></td></tr>
    <tr><td align="center">Side View</td></tr>
   <tr><td align="center"><img border="0" src="./img/arena6.gif"></td></tr>
   <tr><td align="center"><img border="0" src="./img/pipe.gif"></td></tr>
   <tr><td align="center">Sample of how actual intersection will look like</td></tr>
 </table>
</div>
  
  
<?
echo_content("footer.txt");
?>