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
     <h1 id="toptext">Techfest 2004 in News</h1> 
	 <ul>
<li><a href="./2004/asianage2.jpg" target="_blank">Asian Age (14 January, 2004)</a></li>
<li><a href="http://www.telegraphindia.com/1040113/asp/nation/story_2780545.asp" target="_blank">The Telegraph (13th January, 2004)</a></li>
<li><a href="./2004/tech6.jpg" target="_blank">Navbharat Times (2 January, 2004)</a></li>
<li><a href="./2004/education.jpg" target="_blank">Education Times (29 December, 2003)</a></li>
<li><a href="http://economictimes.indiatimes.com/articleshow/373007.cms" target="_blank">The Economic Times (22 December, 2003)</a></li>
<li><a href="./2004/mulund.jpg" target="_blank">Mulund Plus (19 December, 2003) </a></li>
<li><a href="./2004/indianexpress.jpg" target="_blank">Indian Express (18 December, 2003) </a></li>
<li><a href="http://www.mid-day.com/news/city/2003/november/69025.htm" target="_blank">Mid Day (18 November, 2003)</a></li>
</ul>
	
</div>
    

  
<?
echo_content("footer.txt");
?>