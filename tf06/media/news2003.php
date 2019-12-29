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
     <h1>Techfest 2003 in News</h1>
<ul>
<li><a href="./2003/et.jpg" target="_blank">The Economic Times (31 January, 2003)</a></li>
<li><a href="./2003/times.jpg" target="_blank">The Times of India (21 January, 2003)</a></li>

<li><a href="./2003/ie.jpg" target="_blank">The Indian Express (9 January, 2003)</a></li>
<li><a href="./2003/nav.jpg" target="_blank">Navbharat Times (13 January, 2003)</a></li>
<li><a href="./2003/bomjournal.jpg" target="_blank">The Bombay Journal (29 January, 2003)</a></li>
<li><a href="./2003/bomtimes.jpg" target="_blank">Bombay Times (1 Feburary, 2003)</a></li>
<li><a href="./2003/nav1.jpg" target="_blank">Navbharat Times (15 January, 2003)</a></li>
<li><a href="./2003/Maharashtra.jpg" target="_blank">Maharashtra Times (9 Feburary, 2003)</a></li>
<li><a href="./2003/midday.jpg" target="_blank">Mid Day (27 January, 2003)</a></li>
<li><a href="./2003/education.jpg" target="_blank">Education Times (23 December, 2002)</a></li>
<li><a href="./2003/chem.jpg" target="_blank">Chemical Weekly (21 January, 2003)</a></li>

</ul>

      <h1 id="introduction">Techfest 2003 in Magazines</h1>
<ul>
<li><a href="./2003/digitm2003.jpg" target="_blank">Digit Magazine, March 2003</a></li>
<li><a href="./2003/digitj2003.jpg" target="_blank">Digit Magazine, January 2003</a></li>
<li><a href="./2003/weekf2003.jpg" target="_blank">The Week, Feburary 2003</a></li>

<li><a href="./2003/weekj2003.jpg" target="_blank">The Week, January 2003</a></li>
<li><a href="./2003/crn.jpg" target="_blank">CRN</a></li>
<li><a href="./2003/network.jpg" target="_blank">Network Computing</a></li>

</ul>
<br>      


	 
	
</div>
    
  
<?
echo_content("footer.txt");
?>