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
echo_content("side_media.txt");
echo_content("side_update.txt");
?>
 
 <!-- ##### Main Copy ##### -->

    <div id="content">
     <h1>Techfest 2005 in News</h1>
<ul>

<li><a href="./2005/iexp2.gif" target="_blank">The Indian Express (16 January, 2005)</a></li>
<li><a href="./2005/iexp5.gif" target="_blank">The Indian Express (17 January, 2005)</a></li>
<li><a href="./2005/iexp1.gif" target="_blank">The Indian Express (18 January, 2005)</a></li>
<li><a href="./2005/iexp3.gif" target="_blank">The Indian Express (21 January, 2005)</a></li>
<li><a href="./2005/iexp5.gif" target="_blank">The Indian Express (30 January, 2005)</a></li>
<li><a href="./2005/iexp3.gif" target="_blank">The Indian Express </a></li>
<li><a href="./2005/toi3.gif" target="_blank">The Times of India  (31 January, 2005)</a></li>
<li><a href="./2005/toi4.gif" target="_blank">The Times of India  (5 February, 2005)</a></li>
<li><a href="./2005/toi1.gif" target="_blank">The Times of India</a></li>
<li><a href="./2005/toi2.gif" target="_blank">The Times of India</a></li>
<li><a href="./2005/midday.gif" target="_blank">Mid-day (30 October, 2004)</a></li>
<li><a href="./2005/et.gif" target="_blank">Economic Times</a></li>
<li><a href="./2005/edt.gif" target="_blank">Education Times (3 February, 2005)</a></li>
<li><a href="./2005/mulundp" target="_blank">Mulund Plus (22 January, 2005)</a></li>
<li><a href="./2005/mulundp2.gif" target="_blank">Mulund Plus (6 November, 2004)</a></li>
<li><a href="./2005/camp.gif" target="_blank">Campus Buzz (29 January, 2005)</a></li>
<li><a href="./2005/lokmat2.gif" target="_blank">Lokmat (21 May, 2004)</a></li>
<li><a href="./2005/lokmat.gif" target="_blank">Lokmat </a></li>
<li><a href="./2005/nt.gif" target="_blank">Navbharat Times </a></li>
<li><a href="./2005/ma.gif" target="_blank">Mumbai Age (11 December, 2004)</a></li>


</ul>


<br>      


	 
	
</div>
    
  
<?
echo_content("footer.txt");
?>